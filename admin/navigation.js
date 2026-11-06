const adminNavigation = document.querySelector("#admin-navigation");
const adminNavigationToggle = document.querySelector(".sidebar-toggle");
const accountMenu = document.querySelector("#account-menu");
const accountMenuToggle = document.querySelector(".account-menu-toggle");
const mobileNavigationQuery = window.matchMedia("(max-width: 700px)");

function setAdminNavigationOpen(isOpen) {
  if (!adminNavigation || !adminNavigationToggle) return;
  adminNavigation.classList.toggle("is-open", isOpen);
  adminNavigationToggle.setAttribute("aria-expanded", String(isOpen));
  adminNavigationToggle.setAttribute(
    "aria-label",
    isOpen ? "Close admin navigation" : "Open admin navigation"
  );
  const icon = adminNavigationToggle.querySelector("i");
  if (icon) {
    icon.classList.toggle("fa-bars", !isOpen);
    icon.classList.toggle("fa-xmark", isOpen);
  }
}

if (adminNavigation && adminNavigationToggle) {
  adminNavigationToggle.addEventListener("click", () => {
    setAdminNavigationOpen(adminNavigationToggle.getAttribute("aria-expanded") !== "true");
  });
  adminNavigation.addEventListener("click", (event) => {
    if (event.target instanceof Element && event.target.closest("a")) {
      setAdminNavigationOpen(false);
    }
  });
  document.addEventListener("click", (event) => {
    if (
      mobileNavigationQuery.matches &&
      event.target instanceof Node &&
      !adminNavigation.contains(event.target) &&
      !adminNavigationToggle.contains(event.target)
    ) {
      setAdminNavigationOpen(false);
    }
  });
  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") setAdminNavigationOpen(false);
  });
  mobileNavigationQuery.addEventListener("change", (event) => {
    if (!event.matches) setAdminNavigationOpen(false);
  });
}

function setAccountMenuOpen(isOpen) {
  if (!accountMenu || !accountMenuToggle) return;
  accountMenu.hidden = !isOpen;
  accountMenuToggle.setAttribute("aria-expanded", String(isOpen));
  accountMenuToggle.setAttribute(
    "aria-label",
    isOpen ? "Close account menu" : "Open account menu"
  );
}

if (accountMenu && accountMenuToggle) {
  accountMenuToggle.addEventListener("click", () => {
    setAccountMenuOpen(accountMenuToggle.getAttribute("aria-expanded") !== "true");
  });
  document.addEventListener("click", (event) => {
    if (
      event.target instanceof Node &&
      !accountMenu.contains(event.target) &&
      !accountMenuToggle.contains(event.target)
    ) {
      setAccountMenuOpen(false);
    }
  });
  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape" && accountMenuToggle.getAttribute("aria-expanded") === "true") {
      setAccountMenuOpen(false);
      accountMenuToggle.focus();
    }
  });
  accountMenu.addEventListener("click", (event) => {
    if (event.target instanceof Element && event.target.closest("a, button")) {
      setAccountMenuOpen(false);
    }
  });
}
