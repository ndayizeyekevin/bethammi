const adminThemeStorageKey = "bethammi-admin-theme";
const adminThemeRoot = document.documentElement;

try {
  const savedTheme = window.localStorage.getItem(adminThemeStorageKey);
  if (savedTheme === "dark" || savedTheme === "light") {
    adminThemeRoot.dataset.adminTheme = savedTheme;
  }
} catch (error) {
  console.warn("Admin theme preference could not be loaded.", error);
}

function updateAdminThemeToggle(button, theme) {
  const isDark = theme === "dark";
  button.setAttribute("aria-pressed", String(isDark));
  button.setAttribute("aria-label", isDark ? "Switch to light theme" : "Switch to dark theme");
  const icon = button.querySelector("i");
  if (icon) {
    icon.classList.toggle("fa-moon", !isDark);
    icon.classList.toggle("fa-sun", isDark);
  }
  const label = button.querySelector("span");
  if (label) label.textContent = isDark ? "Light mode" : "Dark mode";
}

function initializeAdminThemeToggle() {
  document.querySelectorAll("[data-admin-theme-toggle]").forEach((button) => {
    if (!(button instanceof HTMLButtonElement)) return;
    updateAdminThemeToggle(button, adminThemeRoot.dataset.adminTheme ?? "light");
    button.addEventListener("click", () => {
      const theme = adminThemeRoot.dataset.adminTheme === "dark" ? "light" : "dark";
      adminThemeRoot.dataset.adminTheme = theme;
      updateAdminThemeToggle(button, theme);
      try {
        window.localStorage.setItem(adminThemeStorageKey, theme);
      } catch (error) {
        console.warn("Admin theme preference could not be saved.", error);
      }
    });
  });
}

if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", initializeAdminThemeToggle, { once: true });
} else {
  initializeAdminThemeToggle();
}
