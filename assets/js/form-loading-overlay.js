document.addEventListener("submit", (event) => {
  const form = event.target;
  if (!(form instanceof HTMLFormElement) || !form.matches("[data-loading-overlay-form]")) return;
  if (form.dataset.submitting === "true") {
    event.preventDefault();
    return;
  }

  const overlay = document.querySelector("[data-loading-overlay]");
  if (!(overlay instanceof HTMLElement)) return;

  form.dataset.submitting = "true";
  form.setAttribute("aria-busy", "true");
  const submitButton = form.querySelector('button[type="submit"]');
  if (submitButton instanceof HTMLButtonElement) submitButton.disabled = true;
  document.body.style.overflow = "hidden";
  overlay.hidden = false;
  const main = document.querySelector("main");
  if (main instanceof HTMLElement) main.inert = true;
  overlay.querySelector(".loading-overlay__card")?.focus();
});
