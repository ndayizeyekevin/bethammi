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
const parishSearch = document.querySelector("#parish-search");
const parishCount = document.querySelector("#parish-directory-count");
const parishEmpty = document.querySelector("#parish-directory-empty");
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

function initializePartnersPage(partnersArticle) {
  const sections = [...partnersArticle.querySelectorAll(":scope > .elementor > .elementor-section")];
  const progressWrappers = [...partnersArticle.querySelectorAll(".elementor-progress-wrapper")];
  if (!sections.length && !progressWrappers.length) return;

  partnersArticle.classList.add("partners-content");
  const accentCount = 7;
  let partnerIndex = 0;
  sections.forEach((section, index) => {
    const heading = section.querySelector(".elementor-widget-heading");
    if (!section.querySelector(".elementor-widget-text-editor, .elementor-widget-progress")) return;
    section.classList.add("partners-reveal");
    section.style.setProperty("--partners-reveal-delay", `${Math.min(index * 70, 280)}ms`);
    if (heading?.textContent.includes("Partnership With")) {
      section.classList.add("partners-partner");
      section.classList.add(partnerIndex % 2 ? "partners-partner--soft" : "partners-partner--plain");
      section.classList.add(`partners-partner--accent-${(partnerIndex % accentCount) + 1}`);
      partnerIndex += 1;
    }
  });

  const progressAnimations = progressWrappers.map((wrapper) => {
    const number = wrapper.querySelector(".elementor-progress-text");
    const bar = wrapper.querySelector(".elementor-progress-bar");
    if (!(number instanceof HTMLElement) || !(bar instanceof HTMLElement)) return null;

    const finalText = number.textContent ?? "";
    const match = finalText.match(/\d[\d,]*(?:\.\d+)?/);
    if (!match) return null;
    const target = Number(match[0].replaceAll(",", ""));
    const targetWidth = Math.min(100, Math.max(0, Number(bar.dataset.max)));
    if (!Number.isFinite(target) || !Number.isFinite(targetWidth)) return null;

    const prefix = finalText.slice(0, match.index);
    const suffix = finalText.slice((match.index ?? 0) + match[0].length);
    const renderNumber = (value) => {
      const formatted = new Intl.NumberFormat(undefined, {
        maximumFractionDigits: match[0].includes(".") ? 2 : 0
      }).format(value);
      number.textContent = `${prefix}${formatted}${suffix}`;
    };

    return (instant = false) => {
      if (instant) {
        bar.style.width = `${targetWidth}%`;
        bar.style.clipPath = "inset(0)";
        renderNumber(target);
        return;
      }
      const startTime = performance.now();
      bar.style.width = `${targetWidth}%`;
      bar.style.clipPath = "inset(0 100% 0 0)";
      renderNumber(0);
      requestAnimationFrame(() => {
        bar.style.clipPath = "inset(0)";
      });
      const animate = (now) => {
        const progress = Math.min(1, (now - startTime) / 1400);
        const eased = 1 - ((1 - progress) ** 3);
        renderNumber(Math.round(target * eased));
        if (progress < 1) requestAnimationFrame(animate);
      };
      requestAnimationFrame(animate);
    };
  });

  const revealTargets = sections.filter((section) => section.classList.contains("partners-reveal"));
  const prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  if (prefersReducedMotion || !("IntersectionObserver" in window)) {
    revealTargets.forEach((section) => section.classList.add("is-visible"));
    progressAnimations.forEach((animate) => animate?.(prefersReducedMotion));
    return;
  }

  const animations = new Map();
  progressWrappers.forEach((wrapper, index) => {
    const animate = progressAnimations[index];
    if (animate) animations.set(wrapper, animate);
  });
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;
      const target = entry.target;
      if (target instanceof HTMLElement && target.classList.contains("partners-reveal")) {
        target.classList.add("is-visible");
      }
      animations.get(target)?.();
      animations.delete(target);
      observer.unobserve(target);
    });
  }, { threshold: 0.18, rootMargin: "0px 0px -30px 0px" });

  revealTargets.forEach((section) => observer.observe(section));
  animations.forEach((_animate, wrapper) => observer.observe(wrapper));
}

function safeLink(rawValue, pagePaths) {
  if (!rawValue || rawValue.startsWith("#")) return rawValue || "#";
  if (/^(mailto:|tel:)/i.test(rawValue)) return rawValue;

  try {
    const url = new URL(rawValue, "https://www.bethammicfc.org/");
    if (url.protocol !== "http:" && url.protocol !== "https:") return "#";
    if (url.hostname === "www.bethammicfc.org" || url.hostname === "bethammicfc.org") {
      if (url.pathname === "/" || url.pathname === "/home/") return `${siteRoot}${document.body.dataset.routeMode === "static" ? "index.html" : "index.php"}`;
      const target = pagePaths.get(url.pathname)
        ?? pagePaths.get(url.pathname.replace(/\/?$/, "/"));
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
    "alt", "allow", "allowfullscreen", "aria-labelledby", "aria-valuemax", "aria-valuemin",
    "aria-valuenow", "aria-valuetext", "class", "controls", "data-max", "height", "href",
    "id", "loading", "loop", "muted", "poster", "preload", "role", "rowspan", "scope",
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
  if (kind === "page" && ["contact", "contact-us"].includes(item.slug)) {
    return `${siteRoot}pages/contact-us`;
  }
  if (kind === "page" && item.slug === "our-staff") {
    return `${siteRoot}pages/team`;
  }
  const slug = encodeURIComponent(item.slug);
  if (document.body.dataset.routeMode === "static") {
    const directory = kind === "post" ? "stories" : "pages";
    return `${siteRoot}${directory}/${slug}.html`;
  }
  if (kind === "post") return `${siteRoot}post?slug=${slug}`;
  return staticPageSlugs.has(item.slug)
    ? `${siteRoot}pages/${slug}`
    : `${siteRoot}page?type=page&slug=${slug}`;
}

const staticPageSlugs = new Set([
  "about-us", "who-we-are", "our-parishes", "ministries", "outreach-evangelism",
  "children-ministries", "women-ministries", "ltu", "partners",
  "josh", "joan", "ep-kiramutse", "donate", "daily-bible-verses", "team", "contact-us"
]);

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
  phone.innerHTML = "<span>CALL OR TEXT</span><strong><i class=\"bi bi-telephone-fill\" aria-hidden=\"true\"></i> +250 788 482 324</strong>";
  const directions = document.createElement("a");
  directions.href = "https://maps.google.com/?cid=17866966341105267843&g_mp=CiVnb29nbGUubWFwcy5wbGFjZXMudjEuUGxhY2VzLkdldFBsYWNlEAMYASAFKgSoqNcy";
  directions.target = "_blank";
  directions.rel = "noopener noreferrer";
  directions.innerHTML = "<span>FIND US</span><strong>Get directions ↗</strong>";
  const map = document.createElement("iframe");
  map.className = "contact-map";
  map.src = "https://maps.google.com/maps?cid=17866966341105267843&output=embed";
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

function renderDirectoryCard({
  title,
  subtitle,
  description,
  shortInfo,
  additionalInfo,
  imageUrl,
  imageAlt,
  variant = "default"
}) {
  const card = document.createElement("article");
  const isParishCard = variant === "parish";
  card.className = isParishCard
    ? "card directory-card directory-card--parish h-100 border-0 shadow-sm"
    : "directory-card";

  if (imageUrl) {
    const imageSource = new URL(imageUrl, window.location.href);
    if (imageSource.protocol !== "https:" && imageSource.protocol !== "http:") {
      throw new Error("A directory photo has an invalid image URL.");
    }
    const image = document.createElement("img");
    if (isParishCard) image.className = "card-img-top";
    image.src = imageSource.href;
    image.alt = imageAlt || "";
    image.loading = "lazy";
    card.append(image);
  }

  const copy = document.createElement("div");
  copy.className = isParishCard ? "card-body directory-card__copy" : "directory-card__copy";
  const heading = document.createElement("h2");
  if (isParishCard) heading.className = "card-title";
  heading.textContent = title;
  copy.append(heading);

  if (subtitle) {
    const label = document.createElement("p");
    label.className = isParishCard
      ? "card-text directory-card__subtitle"
      : "directory-card__subtitle";
    label.textContent = subtitle;
    copy.append(label);
  }

  if (isParishCard) {
    [
      ["Short info", shortInfo],
      ["Additional information", additionalInfo]
    ].forEach(([label, value]) => {
      if (!value) return;
      const detail = document.createElement("div");
      detail.className = "directory-card__detail";
      const detailLabel = document.createElement("strong");
      detailLabel.textContent = label;
      const text = document.createElement("p");
      text.className = "card-text directory-card__description";
      text.textContent = value;
      detail.append(detailLabel, text);
      copy.append(detail);
    });
  } else if (description) {
    const text = document.createElement("p");
    text.className = "directory-card__description";
    text.textContent = description;
    copy.append(text);
  }

  card.append(copy);
  return card;
}

async function renderTeamDirectory() {
  const response = await fetch(`${siteRoot}team`);
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

async function renderTeamProfiles() {
  const response = await fetch(`${siteRoot}team`);
  if (!response.ok) throw new Error(`Team request failed (${response.status}).`);
  const payload = await response.json();
  if (!Array.isArray(payload.team)) throw new Error("Team response has an invalid format.");

  const modalElement = document.querySelector("#teamProfileModal");
  const modalName = document.querySelector("#team-modal-name");
  const modalTitle = document.querySelector("#team-modal-title");
  const modalBio = document.querySelector("#team-modal-bio");
  const modalImage = document.querySelector("#team-modal-image");
  if (!(modalElement instanceof HTMLElement)
    || !(modalName instanceof HTMLElement)
    || !(modalTitle instanceof HTMLElement)
    || !(modalBio instanceof HTMLElement)
    || !(modalImage instanceof HTMLImageElement)
    || !window.bootstrap?.Modal) {
    throw new Error("The team profile dialog could not be initialized. Please refresh the page.");
  }

  const grid = document.createElement("div");
  grid.className = "directory-grid directory-grid--team";
  payload.team.forEach((member, index) => {
    const card = renderDirectoryCard({
      title: member.name,
      subtitle: member.title,
      description: member.bio,
      imageUrl: member.photo_url,
      imageAlt: member.name,
      variant: "team"
    });
    card.dataset.teamIndex = String(index);
    const button = document.createElement("button");
    button.className = "team-profile-card__button";
    button.type = "button";
    button.dataset.teamIndex = String(index);
    button.setAttribute("aria-haspopup", "dialog");
    button.textContent = "View profile";
    card.querySelector(".directory-card__copy")?.append(button);
    grid.append(card);
  });

  grid.addEventListener("click", (event) => {
    const button = event.target instanceof Element
      ? event.target.closest("button[data-team-index]")
      : null;
    if (!(button instanceof HTMLButtonElement)) return;

    const member = payload.team[Number(button.dataset.teamIndex)];
    if (!member) throw new Error("The selected team profile is unavailable.");
    modalName.textContent = member.name;
    modalTitle.textContent = String(member.title ?? "").trim();
    modalTitle.hidden = !modalTitle.textContent;
    modalBio.textContent = String(member.bio ?? "").trim();
    modalBio.hidden = !modalBio.textContent;
    const cardImage = button.closest(".directory-card")?.querySelector("img");
    modalImage.hidden = !(cardImage instanceof HTMLImageElement);
    modalImage.alt = member.name;
    if (cardImage instanceof HTMLImageElement) {
      modalImage.src = cardImage.src;
    } else {
      modalImage.removeAttribute("src");
    }
    window.bootstrap.Modal.getOrCreateInstance(modalElement).show();
  });

  if (payload.team.length) {
    article.replaceChildren(grid);
  } else {
    const empty = document.createElement("p");
    empty.className = "team-directory__empty";
    empty.textContent = "Team profiles will be added soon.";
    article.replaceChildren(empty);
  }
}

async function renderParishDirectory() {
  const response = await fetch(`${siteRoot}parishes`);
  if (!response.ok) throw new Error(`Parish request failed (${response.status}).`);
  const payload = await response.json();
  if (!Array.isArray(payload.parishes)) throw new Error("Parish response has an invalid format.");

  const modalElement = document.querySelector("#parishDetailsModal");
  const modalTitle = document.querySelector("#parish-modal-title");
  const modalImage = document.querySelector("#parish-modal-image");
  if (!(modalElement instanceof HTMLElement)
    || !(modalTitle instanceof HTMLElement)
    || !(modalImage instanceof HTMLImageElement)
    || !window.bootstrap?.Modal) {
    throw new Error("The parish details dialog could not be initialized. Please refresh the page.");
  }

  const grid = document.createElement("div");
  grid.className = "directory-grid directory-grid--parishes";
  payload.parishes.forEach((parish, index) => {
    const location = [parish.location, parish.region, parish.country].filter(Boolean).join(" · ");
    const shortInfo = String(parish.short_info ?? "").trim();
    const fullDescription = String(parish.description ?? "").trim();
    const shortPreview = fullDescription && shortInfo.length > 90
      ? `${Array.from(shortInfo).slice(0, 87).join("").trimEnd()}…`
      : shortInfo;
    const additionalPreview = shortInfo && fullDescription.length > 90
      ? `${Array.from(fullDescription).slice(0, 87).join("").trimEnd()}…`
      : fullDescription;
    const card = renderDirectoryCard({
      title: parish.name,
      subtitle: location,
      shortInfo: shortPreview,
      additionalInfo: additionalPreview,
      imageUrl: parish.photo_url,
      imageAlt: parish.name,
      variant: "parish"
    });

    const button = document.createElement("button");
    button.className = "btn btn-sm btn-outline-dark mt-2";
    button.type = "button";
    button.dataset.parishIndex = String(index);
    button.setAttribute("aria-haspopup", "dialog");
    button.textContent = "View all information";
    card.querySelector(".directory-card__copy")?.append(button);

    grid.append(card);
  });

  if (!(parishSearch instanceof HTMLInputElement)
    || !(parishCount instanceof HTMLElement)
    || !(parishEmpty instanceof HTMLElement)) {
    throw new Error("The parish directory controls could not be initialized. Please refresh the page.");
  }

  const updateParishResults = () => {
    const query = parishSearch.value.trim().toLocaleLowerCase();
    let visibleCount = 0;
    grid.querySelectorAll(".directory-card--parish").forEach((card, index) => {
      const parish = payload.parishes[index];
      const searchableText = [
        parish.name,
        parish.location,
        parish.region,
        parish.country,
        parish.short_info,
        parish.description
      ].filter(Boolean).join(" ").toLocaleLowerCase();
      const matches = searchableText.includes(query);
      card.hidden = !matches;
      if (matches) visibleCount += 1;
    });
    parishCount.textContent = query
      ? `Showing ${visibleCount} of ${payload.parishes.length} ${payload.parishes.length === 1 ? "parish" : "parishes"}`
      : `${payload.parishes.length} ${payload.parishes.length === 1 ? "parish" : "parishes"}`;
    parishEmpty.textContent = payload.parishes.length
      ? "No parishes match your search. Try another name or location."
      : "There are no parishes to display yet.";
    parishEmpty.hidden = visibleCount > 0;
  };
  parishSearch.addEventListener("input", updateParishResults);
  updateParishResults();

  grid.addEventListener("click", (event) => {
    const target = event.target instanceof Element
      ? event.target.closest("button[data-parish-index]")
      : null;
    if (!(target instanceof HTMLButtonElement)) return;

    const parish = payload.parishes[Number(target.dataset.parishIndex)];
    if (!parish) throw new Error("The selected parish information is unavailable.");

    modalTitle.textContent = parish.name;
    const cardImage = target.closest(".directory-card")?.querySelector("img");
    modalImage.alt = parish.name;
    modalImage.hidden = !(cardImage instanceof HTMLImageElement);
    if (cardImage instanceof HTMLImageElement) {
      modalImage.src = cardImage.src;
    } else {
      modalImage.removeAttribute("src");
    }

    const modalFields = [
      ["#parish-modal-location", [parish.location, parish.region, parish.country].filter(Boolean).join(" · ")],
      ["#parish-modal-short-info", parish.short_info],
      ["#parish-modal-description", parish.description],
      ["#parish-modal-members", parish.member_count ? `${parish.member_count} members` : ""]
    ];
    modalFields.forEach(([selector, value]) => {
      const field = document.querySelector(selector);
      if (!(field instanceof HTMLElement)) {
        throw new Error("The parish details dialog is missing required content.");
      }
      const text = field.querySelector("[data-parish-field-value]") ?? field;
      if (!(text instanceof HTMLElement)) {
        throw new Error("The parish details dialog is missing a content field.");
      }
      text.textContent = String(value ?? "").trim();
      field.hidden = text.textContent === "";
    });

    window.bootstrap.Modal.getOrCreateInstance(modalElement).show();
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

  if (document.body.dataset.staticPage === "true") {
    const title = document.body.dataset.pageTitle || "";
    const source = document.querySelector("#static-page-content");
    if (!title || !(source instanceof HTMLTemplateElement)) {
      throw new Error("This page is missing its title or content.");
    }
    document.title = `${title} | Beth Ammi Christian Fellowship Church`;
    bannerTitle.textContent = title;
    document.querySelector("#breadcrumb-label").textContent = title;
    document.querySelector("#page-kicker").textContent = "Beth Ammi Christian Fellowship Church";
    const pagePaths = new Map();
    [
      ...staticPageSlugs,
      "news-and-sermons", "media", "contact-us", "contact", "our-staff", "our-parishes"
    ].forEach((pageSlug) => {
      const teamAlias = pageSlug === "our-staff";
      const contactAlias = pageSlug === "contact";
      const route = teamAlias
        ? "pages/team"
        : contactAlias
          ? "pages/contact-us"
        : staticRoutes
          ? `pages/${pageSlug}.html`
          : staticPageSlugs.has(pageSlug)
            ? `pages/${pageSlug}`
            : `page.php?type=page&slug=${pageSlug}`;
      const localRoute = `${siteRoot}${route}`;
      pagePaths.set(`/${pageSlug}/`, localRoute);
      pagePaths.set(`/pages/${pageSlug}.php`, localRoute);
      pagePaths.set(`/pages/${pageSlug}.html`, localRoute);
      pagePaths.set(`/${pageSlug}.php`, localRoute);
    });
    article.innerHTML = cleanContent(source.innerHTML, pagePaths);
    source.remove();
    if (document.body.dataset.contentSlug === "partners") {
      initializePartnersPage(article);
    } else if (document.body.dataset.contentSlug === "team") {
      await renderTeamProfiles().catch((error) => {
        message.hidden = false;
        message.textContent = error instanceof Error
          ? error.message
          : "We couldn't load the team profiles.";
        article.replaceChildren();
      });
    } else if (document.body.dataset.contentSlug === "contact-us") {
      createContactOptions();
    }
    return;
  }

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
      const postsResponse = await fetch(`${siteRoot}posts`);
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
      const postResponse = await fetch(`${siteRoot}posts?slug=${encodeURIComponent(slug)}`);
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
