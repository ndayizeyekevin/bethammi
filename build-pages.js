import { cp, mkdir, readFile, rm, stat, writeFile } from "node:fs/promises";
import path from "node:path";
import { fileURLToPath } from "node:url";

const root = path.dirname(fileURLToPath(import.meta.url));
const output = path.join(root, "dist");
const pageDirectory = path.join(output, "pages");
const storyDirectory = path.join(output, "stories");
const content = JSON.parse(await readFile(path.join(root, "site-content.json"), "utf8"));

function list(value, label) {
  const items = Array.isArray(value) ? value : value?.value;
  if (!Array.isArray(items)) throw new Error(`Expected ${label} to be an array.`);
  return items;
}

const pages = list(content.pages, "pages");
const stories = list(content.posts, "posts");
const staticPageTitles = new Map([
  ["about-us", "About Us"],
  ["who-we-are", "Who we are"],
  ["ministries", "Ministries"],
  ["outreach-evangelism", "Outreach evangelism"],
  ["children-ministries", "Children Ministries"],
  ["women-ministries", "Women Ministries"],
  ["ltu", "LTU"],
  ["partners", "Partners"],
  ["josh", "Josh"],
  ["joan", "Joan"],
  ["ep-kiramutse", "New City Fellowship Church"],
  ["donate", "Donate"],
  ["daily-bible-verses", "Daily Bible verses"],
]);
const pageSlugs = new Set();
const storySlugs = new Set();

function addSlugs(items, slugs, label) {
  for (const item of items) {
    if (!/^[a-z0-9]+(?:-[a-z0-9]+)*$/.test(item.slug ?? "")) {
      throw new Error(`Invalid ${label} slug: ${item.slug ?? "(missing)"}`);
    }
    if (slugs.has(item.slug)) throw new Error(`Duplicate ${label} slug: ${item.slug}`);
    slugs.add(item.slug);
  }
}

addSlugs(pages, pageSlugs, "page");
addSlugs(stories, storySlugs, "story");

function rewritePageLinks(html, rootPrefix) {
  return html.replace(/href="page\.html\?type=page&amp;slug=([^"&]+)"/g, (match, slug) => {
    if (!pageSlugs.has(slug)) throw new Error(`Template links to missing page slug "${slug}".`);
    return `href="${rootPrefix}pages/${slug}.html"`;
  });
}

function removeAdminLoginLink(html) {
  return html.replace(/\s*<a class="btn header-login" data-admin-login href="admin\/">Login<\/a>/g, "");
}

const template = await readFile(path.join(root, "page.html"), "utf8");
if (!template.includes("<body>")) throw new Error("The page template must contain an opening <body> tag.");

function createStandalonePage(kind, slug) {
  let html = template.replace(
    "<body>",
    `<body data-content-kind="${kind}" data-content-slug="${slug}" data-site-root="../" data-route-mode="static">`
  );

  html = html
    .replace('href="styles.css"', 'href="../styles.css"')
    .replace('src="page.js"', 'src="../page.js"')
    .replace(/href="index\.html(?=[#"])/g, 'href="../index.html');

  return rewritePageLinks(removeAdminLoginLink(html), "../");
}

await rm(pageDirectory, { recursive: true, force: true });
await rm(storyDirectory, { recursive: true, force: true });
await mkdir(pageDirectory, { recursive: true });
await mkdir(storyDirectory, { recursive: true });

for (const file of ["page.html", "page.js", "posts.js", "script.js", "site-content.json", "styles.css"]) {
  await cp(path.join(root, file), path.join(output, file));
}
const assetDirectory = path.join(root, "assets");
try {
  if ((await stat(assetDirectory)).isDirectory()) {
    await cp(assetDirectory, path.join(output, "assets"), { recursive: true });
  }
} catch (error) {
  if (error.code !== "ENOENT") throw error;
}
const home = await readFile(path.join(root, "index.html"), "utf8");
await writeFile(
  path.join(output, "index.html"),
  rewritePageLinks(removeAdminLoginLink(home.replace("<body>", '<body data-route-mode="static">')), "")
);
const staticPage = await readFile(path.join(root, "page.html"), "utf8");
await writeFile(
  path.join(output, "page.html"),
  removeAdminLoginLink(staticPage.replace("<body>", '<body data-route-mode="static">'))
);

for (const page of pages) {
  if (page.slug === "home") continue;
  let html = createStandalonePage("page", page.slug);
  if (staticPageTitles.has(page.slug)) {
    const pageSource = await readFile(path.join(root, "pages", `${page.slug}.php`), "utf8");
    const pageContentMatch = pageSource.match(/<template id="static-page-content">([\s\S]*?)<\/template>/);
    if (!pageContentMatch) throw new Error(`Could not find inline content for static page "${page.slug}".`);
    const pageContent = pageContentMatch[1].trim();
    html = html
      .replace(
        `<body data-content-kind="page" data-content-slug="${page.slug}" data-site-root="../" data-route-mode="static">`,
        `<body data-content-kind="page" data-content-slug="${page.slug}" data-site-root="../" data-route-mode="static" data-static-page="true" data-page-title="${staticPageTitles.get(page.slug)}">`
      )
      .replace(
        '<div class="remote-content" id="page-content"></div>',
        `<div class="remote-content" id="page-content"><template id="static-page-content">${pageContent}</template></div>`
      );
  }
  await writeFile(path.join(pageDirectory, `${page.slug}.html`), html);
}

for (const story of stories) {
  await writeFile(path.join(storyDirectory, `${story.slug}.html`), createStandalonePage("post", story.slug));
}

console.log(`Built ${pageSlugs.size - Number(pageSlugs.has("home"))} pages and ${storySlugs.size} stories in dist/.`);
