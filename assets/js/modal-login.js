document.addEventListener("submit", async (event) => {
  const form = event.target;
  if (!(form instanceof HTMLFormElement) || !form.matches(".admin-login-modal__form")) return;
  event.preventDefault();

  if (form.dataset.submitting === "true") return;
  const errorMessage = form.querySelector(".admin-login-modal__error");
  const submitButton = form.querySelector('button[type="submit"]');
  if (!(errorMessage instanceof HTMLElement) || !(submitButton instanceof HTMLButtonElement)) return;

  form.dataset.submitting = "true";
  form.setAttribute("aria-busy", "true");
  errorMessage.hidden = true;
  errorMessage.textContent = "";
  submitButton.disabled = true;

  try {
    const response = await fetch(form.action, {
      method: "POST",
      body: new FormData(form),
      credentials: "same-origin",
      headers: { Accept: "application/json" },
    });
    const result = await response.json();

    if (!response.ok || result.success !== true || typeof result.redirect !== "string") {
      errorMessage.textContent = typeof result.message === "string"
        ? result.message
        : "Sign-in could not be completed. Please try again.";
      errorMessage.hidden = false;
      return;
    }

    window.location.assign(new URL(result.redirect, form.action).href);
  } catch {
    errorMessage.textContent = "Unable to sign in right now. Check your connection and try again.";
    errorMessage.hidden = false;
  } finally {
    delete form.dataset.submitting;
    form.removeAttribute("aria-busy");
    submitButton.disabled = false;
  }
});
