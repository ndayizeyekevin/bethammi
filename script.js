(() => {
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
    const dropdown = button.closest(".nav-dropdown");
    const setDropdownOpen = (isOpen) => {
      dropdown?.classList.toggle("is-open", isOpen);
      button.setAttribute("aria-expanded", String(isOpen));
    };
    const supportsHover = () => window.matchMedia("(min-width: 1051px) and (hover: hover)").matches;

    dropdown?.addEventListener("pointerenter", (event) => {
      if (!supportsHover() || event.pointerType === "touch") return;

      closeDropdowns(dropdown);
      setDropdownOpen(true);
    });
    dropdown?.addEventListener("pointerleave", (event) => {
      if (!supportsHover() || event.pointerType === "touch") return;

      setDropdownOpen(false);
    });

    button.addEventListener("click", () => {
      const isOpen = button.getAttribute("aria-expanded") === "true";

      if (supportsHover()) {
        closeDropdowns(dropdown);
        setDropdownOpen(true);
        return;
      }

      closeDropdowns(dropdown);
      setDropdownOpen(!isOpen);
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

const scrollTopButton = document.querySelector(".floating-action--top");
const toggleScrollTopButton = () => {
  if (!scrollTopButton) return;

  const scrollPosition = window.scrollY || window.pageYOffset;
  const triggerOffset = Math.min(window.innerHeight * 0.35, 320);
  const shouldShow = scrollPosition >= triggerOffset;

  scrollTopButton.classList.toggle("is-visible", shouldShow);
  scrollTopButton.toggleAttribute("hidden", !shouldShow);
};

if (scrollTopButton) {
  toggleScrollTopButton();
  window.addEventListener("scroll", toggleScrollTopButton, { passive: true });
  window.addEventListener("resize", toggleScrollTopButton, { passive: true });
  scrollTopButton.addEventListener("click", (event) => {
    event.preventDefault();
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
}

const year = document.querySelector("#year");
if (year) year.textContent = String(new Date().getFullYear());

const newsletterForm = document.querySelector(".newsletter-form");
if (newsletterForm instanceof HTMLFormElement) {
  const newsletterStatus = newsletterForm.querySelector(".newsletter-form__status");
  const newsletterSubmitButtons = newsletterForm.querySelectorAll('button[type="submit"]');

  newsletterForm.addEventListener("submit", async (event) => {
    event.preventDefault();
    if (!(newsletterStatus instanceof HTMLElement)) return;

    newsletterSubmitButtons.forEach((button) => {
      button.disabled = true;
    });
    newsletterStatus.hidden = false;
    newsletterStatus.classList.remove("is-success", "is-error");
    newsletterStatus.classList.add("is-pending");
    const submitter = event.submitter;
    const action = submitter instanceof HTMLButtonElement ? submitter.value : "subscribe";
    newsletterStatus.textContent = action === "unsubscribe"
      ? "Updating your subscription…"
      : "Submitting your subscription…";

    try {
      const formData = new FormData(newsletterForm);
      formData.set("action", action);
      const endpoint = newsletterForm.getAttribute("action");
      if (!endpoint) throw new Error("The subscription form is missing its endpoint.");
      const response = await fetch(endpoint, {
        method: "POST",
        body: formData,
        headers: {
          Accept: "application/json",
          "X-Requested-With": "XMLHttpRequest",
        },
      });
      const responseBody = await response.text();
      let result;
      try {
        result = JSON.parse(responseBody);
      } catch {
        throw new Error("The subscription service returned an invalid response. Please try again later.");
      }
      if (!response.ok) throw new Error(result.error || "Your subscription could not be completed.");

      newsletterStatus.classList.remove("is-pending", "is-error");
      newsletterStatus.classList.add("is-success");
      newsletterStatus.textContent = result.message;
      if (action === "subscribe" && result.message === "Subscribed successfully.") {
        newsletterForm.reset();
      }
    } catch (error) {
      newsletterStatus.classList.remove("is-pending");
      newsletterStatus.classList.add("is-error");
      newsletterStatus.textContent = error instanceof Error
        ? error.message
        : "Your subscription could not be completed. Please try again.";
    } finally {
      newsletterSubmitButtons.forEach((button) => {
        button.disabled = false;
      });
    }
  });
}

const heroSlides = document.querySelectorAll(".hero__slide");
if (heroSlides.length > 1) {
  const previousHeroButton = document.querySelector(".hero__control--previous");
  const nextHeroButton = document.querySelector(".hero__control--next");
  const prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)");
  let activeHeroSlide = Array.from(heroSlides).findIndex((slide) => slide.classList.contains("is-active"));
  let heroSlideInterval;

  if (activeHeroSlide === -1) activeHeroSlide = 0;

  const showHeroSlide = (index) => {
    heroSlides[activeHeroSlide].classList.remove("is-active");
    activeHeroSlide = (index + heroSlides.length) % heroSlides.length;
    heroSlides[activeHeroSlide].classList.add("is-active");
  };
  const startHeroAutoplay = () => {
    window.clearInterval(heroSlideInterval);
    if (prefersReducedMotion.matches) return;

    heroSlideInterval = window.setInterval(() => {
      showHeroSlide(activeHeroSlide + 1);
    }, 3000);
  };

  previousHeroButton?.addEventListener("click", () => {
    showHeroSlide(activeHeroSlide - 1);
    startHeroAutoplay();
  });
  nextHeroButton?.addEventListener("click", () => {
    showHeroSlide(activeHeroSlide + 1);
    startHeroAutoplay();
  });
  startHeroAutoplay();
}
})();
