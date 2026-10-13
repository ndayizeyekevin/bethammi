const menuButton = document.querySelector(".menu-toggle");
const navigation = document.querySelector("#site-nav");

function markActiveNavigationLink() {
  if (!navigation) return;

  const normalizePath = (pathname) => {
    const path = pathname
      .replace(/\/index(?:\.php|\.html)?$/i, "/")
      .replace(/\.php$/i, "")
      .replace(/\/+$/, "");
    return path || "/";
  };
  const routeKey = (url) => {
    const slug = url.searchParams.get("slug");
    if (url.searchParams.get("type") === "page" && slug) return `page:${slug}`;
    return `path:${normalizePath(url.pathname)}`;
  };
  const currentUrl = new URL(window.location.href);
  const currentRoute = routeKey(currentUrl);

  navigation.querySelectorAll("a").forEach((link) => {
    const linkUrl = new URL(link.href, window.location.href);
    if (linkUrl.origin !== currentUrl.origin || routeKey(linkUrl) !== currentRoute) return;

    link.setAttribute("aria-current", "page");
    link.closest(".nav-dropdown")?.classList.add("is-active");
    link.closest(".nav-dropdown")?.querySelector(".nav-dropdown__toggle")
      ?.setAttribute("aria-current", "true");
  });
}

markActiveNavigationLink();

if (document.body.dataset.routeMode !== "static" && /\/index\.html$/.test(window.location.pathname)) {
  const destination = new URL(window.location.href);
  destination.pathname = destination.pathname.replace(/index\.html$/, "index.php");
  window.location.replace(destination.href);
}

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
    const target = event.target instanceof Element ? event.target : null;
    const link = target?.closest("a");
    const navLogin = target?.closest(".nav-login");
    if ((link || navLogin) && window.matchMedia("(max-width: 1050px)").matches) {
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
