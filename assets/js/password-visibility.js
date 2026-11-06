document.addEventListener("click", (event) => {
  const button = event.target instanceof Element
    ? event.target.closest(".password-toggle")
    : null;
  if (!(button instanceof HTMLButtonElement)) return;

  const field = button.closest(".password-field");
  const input = field?.querySelector('input[type="password"], input[type="text"]');
  if (!(input instanceof HTMLInputElement)) return;

  const isVisible = input.type === "password";
  input.type = isVisible ? "text" : "password";
  button.setAttribute("aria-label", isVisible ? "Hide password" : "Show password");
  button.setAttribute("aria-pressed", String(isVisible));
  const icon = button.querySelector("i");
  if (icon) {
    icon.classList.toggle("fa-eye", !isVisible);
    icon.classList.toggle("fa-eye-slash", isVisible);
  }
});
