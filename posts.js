const storyGrid = document.querySelector("#story-grid");
const storiesStatus = document.querySelector("#stories-status");

function decodePostText(value) {
  const textarea = document.createElement("textarea");
  textarea.innerHTML = String(value ?? "");
  return textarea.value;
}

function plainPostText(value) {
  const template = document.createElement("template");
  template.innerHTML = String(value ?? "");
  return decodePostText(template.content.textContent).replace(/\s+/g, " ").trim();
}

function postLink(post) {
  if (!/^[a-z0-9]+(?:-[a-z0-9]+)*$/.test(post.slug ?? "")) {
    throw new Error("A post has an invalid URL slug.");
  }
  return `post?slug=${encodeURIComponent(post.slug)}`;
}

function createPostCard(post, index) {
  const card = document.createElement("article");
  card.className = index === 0 ? "story-card story-card--feature" : "story-card";

  const photo = document.createElement("div");
  photo.className = "story-card__photo";
  const imageUrl = post.featuredImage?.url;
  if (imageUrl) {
    const image = new URL(imageUrl, window.location.href);
    if (image.protocol !== "https:" && image.protocol !== "http:") {
      throw new Error(`Post "${post.slug}" has an invalid featured image URL.`);
    }
    const imageElement = document.createElement("img");
    imageElement.src = image.href;
    imageElement.alt = decodePostText(post.featuredImage.alt || "");
    imageElement.loading = "lazy";
    photo.append(imageElement);
  }

  const body = document.createElement("div");
  body.className = "story-card__body";

  const date = new Date(post.date);
  const dateLabel = Number.isNaN(date.getTime())
    ? ""
    : new Intl.DateTimeFormat("en", { month: "long", year: "numeric" }).format(date).toUpperCase();
  const meta = document.createElement("p");
  meta.className = "story-card__meta";
  meta.textContent = `FROM OUR CHURCH${dateLabel ? ` · ${dateLabel}` : ""}`;

  const title = document.createElement("h3");
  title.textContent = decodePostText(post.title?.rendered);

  const excerpt = document.createElement("p");
  const summary = plainPostText(post.excerpt?.rendered);
  excerpt.textContent = summary.length > 180 ? `${summary.slice(0, 177).trimEnd()}…` : summary;

  const link = document.createElement("a");
  link.className = "story-card__link";
  link.href = postLink(post);
  link.append(document.createTextNode("Read the story "));
  const arrow = document.createElement("span");
  arrow.setAttribute("aria-hidden", "true");
  arrow.textContent = "↗";
  link.append(arrow);

  body.append(meta, title, excerpt, link);
  card.append(photo, body);
  return card;
}

async function loadFeaturedPosts() {
  if (!storyGrid || storyGrid.dataset.postsLoaded === "true" || document.body.dataset.routeMode === "static") return;

  storiesStatus.textContent = "Loading the latest stories…";
  storiesStatus.hidden = false;

  try {
    const response = await fetch("posts?limit=6");
    if (!response.ok) throw new Error(`Posts request failed (${response.status}).`);
    const payload = await response.json();
    if (!Array.isArray(payload.posts)) throw new Error("Posts response has an invalid format.");

    const cards = payload.posts.map(createPostCard);
    storyGrid.replaceChildren(...cards);
    if (!cards.length) {
      storiesStatus.textContent = "There are no stories to show right now.";
    } else {
      storiesStatus.hidden = true;
    }
  } catch (error) {
    console.error("Featured posts could not be loaded.", error);
    storiesStatus.textContent = "We couldn't load the latest stories right now. Please try again later.";
  }
}

loadFeaturedPosts();
