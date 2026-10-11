const menuButton = document.querySelector(".menu-toggle");
const navigation = document.querySelector("#site-nav");

function closeDropdowns(except) {
  document.querySelectorAll(".nav-dropdown.is-open").forEach((dropdown) => {
    if (dropdown !== except) {
      dropdown.classList.remove("is-open");
      dropdown.querySelector(".nav-dropdown__toggle")?.setAttribute("aria-expanded", "false");
    }
  });
}

if (menuButton && navigation) {
  menuButton.addEventListener("click", () => {
    const isOpen = menuButton.getAttribute("aria-expanded") === "true";
    menuButton.setAttribute("aria-expanded", String(!isOpen));
    menuButton.setAttribute("aria-label", isOpen ? "Open navigation" : "Close navigation");
    navigation.classList.toggle("is-open", !isOpen);
    if (isOpen) closeDropdowns();
  });

  navigation.querySelectorAll(".nav-dropdown__toggle").forEach((button) => {
    button.addEventListener("click", () => {
      const dropdown = button.closest(".nav-dropdown");
      const isOpen = button.getAttribute("aria-expanded") === "true";
      closeDropdowns(dropdown);
      dropdown?.classList.toggle("is-open", !isOpen);
      button.setAttribute("aria-expanded", String(!isOpen));
    });
  });

  navigation.addEventListener("click", (event) => {
    const link = event.target instanceof Element ? event.target.closest("a") : null;
    if (link && window.matchMedia("(max-width: 680px)").matches) {
      menuButton.setAttribute("aria-expanded", "false");
      menuButton.setAttribute("aria-label", "Open navigation");
      navigation.classList.remove("is-open");
      closeDropdowns();
    }
  });

  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
      closeDropdowns();
      navigation.classList.remove("is-open");
      menuButton.setAttribute("aria-expanded", "false");
      menuButton.setAttribute("aria-label", "Open navigation");
    }
  });

  document.addEventListener("click", (event) => {
    if (event.target instanceof Node && !navigation.contains(event.target)) closeDropdowns();
  });
}

const year = document.querySelector("#year");
if (year) year.textContent = String(new Date().getFullYear());

const message = document.querySelector("#page-message");
const article = document.querySelector("#page-content");
const bannerTitle = document.querySelector("#page-title");
const summary = document.querySelector("#page-summary");
const archive = document.querySelector("#archive");
const archiveGrid = document.querySelector("#archive-grid");
const archiveSearch = document.querySelector("#archive-search");
const archiveCount = document.querySelector("#archive-count");
const archiveEmpty = document.querySelector("#archive-empty");
const siteRoot = document.body.dataset.siteRoot || "";

function decodeEntities(value) {
  const textarea = document.createElement("textarea");
  textarea.innerHTML = String(value ?? "");
  return textarea.value;
}

function plainText(value) {
  const parsed = new DOMParser().parseFromString(String(value ?? ""), "text/html");
  return decodeEntities(parsed.body.textContent).replace(/\s+/g, " ").trim();
}

function safeLink(rawValue, pagePaths) {
  if (!rawValue || rawValue.startsWith("#")) return rawValue || "#";
  if (/^(mailto:|tel:)/i.test(rawValue)) return rawValue;

  try {
    const url = new URL(rawValue, "https://www.bethammicfc.org/");
    if (url.protocol !== "http:" && url.protocol !== "https:") return "#";
    if (url.hostname === "www.bethammicfc.org" || url.hostname === "bethammicfc.org") {
      if (url.pathname === "/" || url.pathname === "/home/") return `${siteRoot}${document.body.dataset.routeMode === "static" ? "index.html" : "index.php"}`;
      const target = pagePaths.get(url.pathname.replace(/\/?$/, "/"));
      return target || `https://www.bethammicfc.org${url.pathname}${url.search}${url.hash}`;
    }
    return url.href;
  } catch {
    return "#";
  }
}

function cleanContent(rawHtml, pagePaths) {
  const template = document.createElement("template");
  template.innerHTML = String(rawHtml ?? "");
  const allowedTags = new Set([
    "A", "ARTICLE", "B", "BLOCKQUOTE", "BR", "CAPTION", "DD", "DETAILS", "DIV",
    "DL", "DT", "EM", "FIGCAPTION", "FIGURE", "H1", "H2", "H3", "H4", "H5",
    "H6", "HR", "I", "IFRAME", "IMG", "LI", "OL", "P", "PICTURE", "PRE",
    "SECTION", "SOURCE", "SPAN", "STRONG", "SUB", "SUMMARY", "SUP", "TABLE",
    "TBODY", "TD", "TFOOT", "TH", "THEAD", "TR", "U", "UL", "VIDEO"
  ]);
  const safeAttributes = new Set([
    "alt", "allow", "allowfullscreen", "class", "controls", "height", "href", "id",
    "loading", "loop", "muted", "poster", "preload", "role", "rowspan", "scope",
    "src", "colspan", "title", "width"
  ]);
  const blockedTags = new Set([
    "BUTTON", "EMBED", "FORM", "INPUT", "LINK", "META", "NOSCRIPT", "OBJECT",
    "SCRIPT", "SELECT", "STYLE", "SVG", "TEXTAREA"
  ]);

  template.content.querySelectorAll("*").forEach((element) => {
    if (blockedTags.has(element.tagName)) {
      element.remove();
      return;
    }
    if (!allowedTags.has(element.tagName)) {
      element.replaceWith(...element.childNodes);
      return;
    }

    const rawSource = element.getAttribute("src") || element.getAttribute("data-src") || element.getAttribute("data-lazy-src");
    Array.from(element.attributes).forEach((attribute) => {
      if (!safeAttributes.has(attribute.name.toLowerCase()) || attribute.name.toLowerCase().startsWith("on")) {
        element.removeAttribute(attribute.name);
      }
    });

    if (element.tagName === "A") {
      const href = element.getAttribute("href");
      element.setAttribute("href", safeLink(href, pagePaths));
      const target = element.getAttribute("target");
      if (target === "_blank") element.setAttribute("rel", "noopener noreferrer");
      else element.removeAttribute("target");
    }

    if (element.tagName === "IMG" || element.tagName === "SOURCE" || element.tagName === "VIDEO" || element.tagName === "IFRAME") {
      const src = safeLink(rawSource, pagePaths);
      if (src === "#" || !src) {
        element.remove();
        return;
      }
      if (element.tagName === "IFRAME") {
        const host = new URL(src).hostname;
        if (!["www.youtube.com", "youtube.com", "www.youtube-nocookie.com", "youtube-nocookie.com", "player.vimeo.com", "www.facebook.com", "maps.google.com"].includes(host)) {
          element.remove();
          return;
        }
      }
      element.setAttribute("src", src);
      element.removeAttribute("data-src");
      element.removeAttribute("data-lazy-src");
      if (element.tagName === "IFRAME") {
        element.setAttribute("loading", "lazy");
        element.setAttribute("referrerpolicy", "strict-origin-when-cross-origin");
      }
    }
  });

  template.content.querySelectorAll("h1").forEach((heading) => {
    const replacement = document.createElement("h2");
    replacement.innerHTML = heading.innerHTML;
    heading.replaceWith(replacement);
  });

  return template.innerHTML;
}

function localPageLink(item, kind = "page") {
  const slug = encodeURIComponent(item.slug);
  if (document.body.dataset.routeMode === "static") {
    const directory = kind === "post" ? "stories" : "pages";
    return `${siteRoot}${directory}/${slug}.html`;
  }
  return kind === "post"
    ? `${siteRoot}post.php?slug=${slug}`
    : `${siteRoot}page.php?type=page&slug=${slug}`;
}

function addFeaturedImage(card, item) {
  const image = item.featuredImage;
  if (!image?.url) return;
  const figure = document.createElement("div");
  figure.className = "archive-card__image";
  const element = document.createElement("img");
  element.src = image.url;
  element.alt = decodeEntities(image.alt || "");
  element.loading = "lazy";
  figure.append(element);
  card.append(figure);
}

function createStoryCard(item) {
  const card = document.createElement("article");
  card.className = "archive-card";
  addFeaturedImage(card, item);

  const body = document.createElement("div");
  body.className = "archive-card__body";
  const date = new Date(item.date);
  const dateLabel = Number.isNaN(date.getTime())
    ? ""
    : new Intl.DateTimeFormat("en", { day: "numeric", month: "long", year: "numeric" }).format(date);
  const meta = document.createElement("p");
  meta.className = "story-card__meta";
  meta.textContent = `BETH AMMI${dateLabel ? ` · ${dateLabel}` : ""}`;
  const title = document.createElement("h3");
  title.textContent = decodeEntities(item.title.rendered);
  const excerpt = document.createElement("p");
  const summary = plainText(item.excerpt.rendered);
  excerpt.textContent = summary.length > 180 ? `${summary.slice(0, 177).trimEnd()}…` : summary;
  const link = document.createElement("a");
  link.className = "story-card__link";
  link.href = localPageLink(item, "post");
  link.append(document.createTextNode("Read the story "));
  const arrow = document.createElement("span");
  arrow.setAttribute("aria-hidden", "true");
  arrow.textContent = "↗";
  link.append(arrow);
  body.append(meta, title, excerpt, link);
  card.append(body);
  return card;
}

function renderArchive(posts) {
  const term = archiveSearch.value.trim().toLocaleLowerCase();
  const matches = posts.filter((post) => {
    const title = decodeEntities(post.title.rendered).toLocaleLowerCase();
    const excerpt = plainText(post.excerpt.rendered).toLocaleLowerCase();
    const date = String(post.date).slice(0, 10);
    return `${title} ${excerpt} ${date}`.includes(term);
  });
  archiveGrid.replaceChildren(...matches.map(createStoryCard));
  archiveCount.textContent = `${matches.length} ${matches.length === 1 ? "story" : "stories"}`;
  archiveEmpty.hidden = matches.length > 0;
}

function createContactOptions() {
  const section = document.createElement("section");
  section.className = "contact-options";
  const phone = document.createElement("a");
  phone.href = "tel:+250788482324";
  phone.innerHTML = "<span>CALL OR TEXT</span><strong>+250 788 482 324</strong>";
  const directions = document.createElement("a");
  directions.href = "https://www.google.com/maps/dir//%27%27/data=!4m7!4m6!1m1!4e2!1m2!1m1!1s0x19db583c864189c9:0xf7f437395770b483!3e0?g_mp=CiVnb29nbGUubWFwcy5wbGFjZXMudjEuUGxhY2VzLkdldFBsYWNlEAMYASAF";
  directions.target = "_blank";
  directions.rel = "noopener noreferrer";
  directions.innerHTML = "<span>FIND US</span><strong>Get directions ↗</strong>";
  const map = document.createElement("iframe");
  map.className = "contact-map";
  map.src = "https://www.google.com/maps?q=place_id%3A0x19db583c864189c9%3A0xf7f437395770b483&output=embed";
  map.title = "Map to Beth Ammi Christian Fellowship Church";
  map.loading = "lazy";
  map.referrerPolicy = "strict-origin-when-cross-origin";
  section.append(phone, directions, map);
  article.prepend(section);

  const template = document.querySelector("#contact-form-template");
  if (template instanceof HTMLTemplateElement) {
    const form = template.content.cloneNode(true);
    article.append(form);
    const contactForm = article.querySelector("#contact-form");
    const status = article.querySelector("#contact-form-status");
    contactForm?.addEventListener("submit", (event) => {
      event.preventDefault();
      if (!(contactForm instanceof HTMLFormElement) || !contactForm.reportValidity()) return;

      const values = new FormData(contactForm);
      const name = `${values.get("first")} ${values.get("last")}`.trim();
      const lines = [
        "Hello Beth Ammi Christian Fellowship Church,",
        `My name is ${name}.`,
        `Email: ${values.get("email")}`,
        values.get("message") ? `Message: ${values.get("message")}` : ""
      ].filter(Boolean);
      const url = new URL("https://wa.me/250788482324");
      url.searchParams.set("text", lines.join("\n"));
      const popup = window.open(url.href, "_blank");
      if (popup) {
        popup.opener = null;
        return;
      }

      if (status) {
        const link = document.createElement("a");
        link.href = url.href;
        link.textContent = "Open your prepared WhatsApp message";
        link.target = "_blank";
        link.rel = "noopener noreferrer";
        status.replaceChildren(document.createTextNode("Your browser blocked the new tab. "), link);
        status.hidden = false;
      }
    });
  }
}

function renderRelated(pages, currentSlug) {
  const selected = ["our-staff", "our-parishes", "ministries", "outreach-evangelism", "children-ministries", "women-ministries", "partners", "media", "daily-bible-verses"]
    .filter((slug) => slug !== currentSlug)
    .map((slug) => pages.find((page) => page.slug === slug))
    .filter(Boolean)
    .slice(0, 6);
  if (!selected.length) return;
  const list = document.querySelector("#related-links");
  selected.forEach((page) => {
    const link = document.createElement("a");
    link.className = "related-link";
    link.href = localPageLink(page);
    link.textContent = decodeEntities(page.title.rendered);
    list.append(link);
  });
  document.querySelector("#page-related").hidden = false;
}

function renderDirectoryCard({ title, subtitle, description, imageUrl, imageAlt }) {
  const card = document.createElement("article");
  card.className = "directory-card";

  if (imageUrl) {
    const imageSource = new URL(imageUrl, window.location.href);
    if (imageSource.protocol !== "https:" && imageSource.protocol !== "http:") {
      throw new Error("A directory photo has an invalid image URL.");
    }
    const image = document.createElement("img");
    image.src = imageSource.href;
    image.alt = imageAlt || "";
    image.loading = "lazy";
    card.append(image);
  }

  const copy = document.createElement("div");
  copy.className = "directory-card__copy";
  const heading = document.createElement("h2");
  heading.textContent = title;
  copy.append(heading);

  if (subtitle) {
    const label = document.createElement("p");
    label.className = "directory-card__subtitle";
    label.textContent = subtitle;
    copy.append(label);
  }

  if (description) {
    const text = document.createElement("p");
    text.className = "directory-card__description";
    text.textContent = description;
    copy.append(text);
  }

  card.append(copy);
  return card;
}

async function renderTeamDirectory() {
  const response = await fetch(`${siteRoot}team.php`);
  if (!response.ok) throw new Error(`Team request failed (${response.status}).`);
  const payload = await response.json();
  if (!Array.isArray(payload.team)) throw new Error("Team response has an invalid format.");

  const grid = document.createElement("div");
  grid.className = "directory-grid";
  payload.team.forEach((member) => {
    grid.append(renderDirectoryCard({
      title: member.name,
      subtitle: member.title,
      description: member.bio,
      imageUrl: member.photo_url,
      imageAlt: member.name
    }));
  });
  article.replaceChildren(grid);
  if (!payload.team.length) {
    article.textContent = "Team profiles will be added soon.";
    article.className = "remote-content remote-content--empty";
  }
}

async function renderParishDirectory() {
  const response = await fetch(`${siteRoot}parishes.php`);
  if (!response.ok) throw new Error(`Parish request failed (${response.status}).`);
  const payload = await response.json();
  if (!Array.isArray(payload.parishes)) throw new Error("Parish response has an invalid format.");

  const grid = document.createElement("div");
  grid.className = "directory-grid";
  payload.parishes.forEach((parish) => {
    const location = [parish.location, parish.region, parish.country].filter(Boolean).join(" · ");
    const details = [
      parish.short_info,
      parish.description,
      parish.member_count ? `${parish.member_count} members` : ""
    ].filter(Boolean).join("\n\n");
    grid.append(renderDirectoryCard({
      title: parish.name,
      subtitle: location,
      description: details,
      imageUrl: parish.photo_url,
      imageAlt: parish.name
    }));
  });
  article.replaceChildren(grid);
  if (!payload.parishes.length) {
    article.textContent = "Parish information will be added soon.";
    article.className = "remote-content remote-content--empty";
  }
}

async function start() {
  const params = new URLSearchParams(window.location.search);
  const kind = document.body.dataset.contentKind || (params.get("type") === "post" ? "post" : "page");
  const slug = document.body.dataset.contentSlug || params.get("slug");
  const staticRoutes = document.body.dataset.routeMode === "static";

  if (!staticRoutes && /\/page\.html$/.test(window.location.pathname)) {
    const destination = new URL(window.location.href);
    destination.pathname = destination.pathname.replace(/page\.html$/, "page.php");
    window.location.replace(destination.href);
    return;
  }

  try {
    const response = await fetch(`${siteRoot}site-content.json`);
    if (!response.ok) throw new Error(`Content request failed (${response.status}).`);
    const data = await response.json();
    const asList = (items) => Array.isArray(items) ? items : Array.isArray(items?.value) ? items.value : [];
    const pages = asList(data.pages);
    let posts = asList(data.posts);
    if (!staticRoutes && kind === "page" && slug === "news-and-sermons") {
      const postsResponse = await fetch(`${siteRoot}posts.php`);
      if (!postsResponse.ok) throw new Error(`Posts request failed (${postsResponse.status}).`);
      const postsData = await postsResponse.json();
      posts = asList(postsData.posts);
    }
    if (!pages.length) throw new Error("The page content snapshot is incomplete.");
    const pagePaths = new Map();
    [...pages, ...posts].forEach((item) => {
      try {
        const path = new URL(item.link).pathname.replace(/\/?$/, "/");
        pagePaths.set(path, localPageLink(item, pages.includes(item) ? "page" : "post"));
      } catch {
        return;
      }
    });

    if (!slug || (slug === "home" && kind === "page")) {
      window.location.replace(`${siteRoot}${staticRoutes ? "index.html" : "index.php"}`);
      return;
    }

    let item;
    if (kind === "post" && !staticRoutes) {
      const postResponse = await fetch(`${siteRoot}posts.php?slug=${encodeURIComponent(slug)}`);
      if (!postResponse.ok) throw new Error(`Post request failed (${postResponse.status}).`);
      item = await postResponse.json();
    } else {
      const items = kind === "post" ? posts : pages;
      item = items.find((entry) => entry.slug === slug);
    }
    if (!item) throw new Error("We couldn't find that page. Use the navigation to explore the site.");

    const title = decodeEntities(item.title.rendered);
    document.title = `${title} | Beth Ammi Christian Fellowship Church`;
    bannerTitle.textContent = title;
    document.querySelector("#breadcrumb-label").textContent = title;
    document.querySelector("#page-kicker").textContent = kind === "post" ? "News & sermons" : "Beth Ammi Christian Fellowship Church";

    const description = plainText(item.excerpt?.rendered);
    if (description && description.length < 360) {
      summary.textContent = description;
    } else {
      summary.hidden = true;
    }

    const descriptionMeta = document.querySelector('meta[name="description"]');
    if (descriptionMeta && description) descriptionMeta.content = description.slice(0, 155);

    if (kind === "post") {
      const published = new Date(item.date);
      const formatted = Number.isNaN(published.getTime())
        ? ""
        : new Intl.DateTimeFormat("en", { day: "numeric", month: "long", year: "numeric" }).format(published);
      const meta = document.querySelector("#page-meta");
      meta.textContent = formatted ? `Published ${formatted}` : "";
      meta.hidden = !formatted;
    }

    article.innerHTML = cleanContent(item.content.rendered, pagePaths);

    if (kind === "page" && slug === "news-and-sermons") {
      document.querySelector("#page-layout").hidden = true;
      archive.hidden = false;
      archiveSearch.addEventListener("input", () => renderArchive(posts));
      renderArchive(posts);
    } else if (kind === "page" && slug === "media") {
      document.querySelector("#feature-media").hidden = false;
    } else if (kind === "page" && (slug === "contact-us" || slug === "contact")) {
      createContactOptions();
    } else if (kind === "page" && slug === "our-staff" && !staticRoutes) {
      await renderTeamDirectory();
    } else if (kind === "page" && slug === "our-parishes" && !staticRoutes) {
      await renderParishDirectory();
    }

    if (kind === "page" && slug !== "news-and-sermons") renderRelated(pages, slug);
  } catch (error) {
    bannerTitle.textContent = "Page unavailable";
    summary.hidden = true;
    message.hidden = false;
    message.textContent = error instanceof Error ? error.message : "We couldn't load this page.";
    document.querySelector("#page-layout").hidden = true;
  }
}

start();
