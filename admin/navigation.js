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

document.querySelectorAll("[data-record-photo-upload]").forEach((photoUpload) => {
  if (!(photoUpload instanceof HTMLElement)) return;
  const uploadForm = photoUpload.closest("form");
  const endpoint = photoUpload.dataset.uploadEndpoint;
  const uploadType = photoUpload.dataset.uploadType;
  const recordType = uploadType === "parishes" ? "parish" : "team member";
  const csrfInput = uploadForm?.querySelector('input[name="csrf_token"]');
  const photoUrl = photoUpload.querySelector("[data-record-photo-url]");
  const photoFile = photoUpload.querySelector("[data-record-photo-file]");
  const uploadButton = photoUpload.querySelector("[data-record-photo-upload-button]");
  const preview = photoUpload.querySelector("[data-record-photo-preview]");
  const placeholder = photoUpload.querySelector("[data-record-photo-placeholder]");
  const status = photoUpload.querySelector("[data-record-photo-status]");
  let pendingUpload = false;
  let previewObjectUrl = "";

  if (
    endpoint &&
    ["team", "parishes"].includes(uploadType) &&
    csrfInput instanceof HTMLInputElement &&
    photoUrl instanceof HTMLInputElement &&
    photoFile instanceof HTMLInputElement &&
    uploadButton instanceof HTMLButtonElement &&
    preview instanceof HTMLImageElement &&
    placeholder instanceof HTMLElement &&
    status instanceof HTMLElement &&
    uploadForm instanceof HTMLFormElement
  ) {
    const setStatus = (message, isError = false) => {
      status.hidden = !message;
      status.textContent = message;
      status.dataset.state = isError ? "error" : "";
    };
    const setPreview = (source) => {
      preview.src = source;
      preview.hidden = !source;
      placeholder.hidden = !!source;
    };

    photoFile.addEventListener("change", () => {
      const file = photoFile.files?.[0];
      pendingUpload = !!file;
      setStatus(file ? `${file.name} selected. Upload it before saving.` : "");
      if (previewObjectUrl) {
        URL.revokeObjectURL(previewObjectUrl);
        previewObjectUrl = "";
      }
      if (file) {
        previewObjectUrl = URL.createObjectURL(file);
        setPreview(previewObjectUrl);
      } else {
        setPreview(photoUrl.value);
      }
    });

    uploadButton.addEventListener("click", async () => {
      const file = photoFile.files?.[0];
      if (!file) {
        setStatus(`Choose a ${recordType} photo to upload.`, true);
        photoFile.focus();
        return;
      }
      uploadButton.disabled = true;
      setStatus("Uploading photo…");
      const uploadData = new FormData();
      uploadData.set("csrf_token", csrfInput.value);
      uploadData.set("upload_type", uploadType);
      uploadData.set("image", file);
      try {
        const response = await fetch(endpoint, {
          method: "POST",
          body: uploadData,
          headers: { Accept: "application/json" },
        });
        const responseText = await response.text();
        let result;
        try {
          result = JSON.parse(responseText);
        } catch {
          throw new Error("The photo upload returned an invalid response.");
        }
        if (!result || typeof result !== "object" || Array.isArray(result)) {
          throw new Error("The photo upload returned an invalid response.");
        }
        if (!response.ok) {
          throw new Error(typeof result.error === "string" ? result.error : "The photo could not be uploaded.");
        }
        if (typeof result.url !== "string" || !result.url) {
          throw new Error("The photo upload returned an invalid response.");
        }
        const siteRoot = new URL("../", window.location.href);
        const uploadedUrl = new URL(result.url, window.location.origin);
        if (uploadedUrl.origin !== siteRoot.origin || !uploadedUrl.pathname.startsWith(siteRoot.pathname)) {
          throw new Error("The uploaded photo returned an unsafe path.");
        }
        photoUrl.value = uploadedUrl.pathname;
        pendingUpload = false;
        photoFile.value = "";
        if (previewObjectUrl) {
          URL.revokeObjectURL(previewObjectUrl);
          previewObjectUrl = "";
        }
        setPreview(photoUrl.value);
        setStatus(`Photo uploaded. Save the ${recordType} to apply it.`);
      } catch (error) {
        setStatus(error instanceof Error ? error.message : "The photo could not be uploaded.", true);
      } finally {
        uploadButton.disabled = false;
      }
    });

    uploadForm.addEventListener("submit", (event) => {
      if (pendingUpload) {
        event.preventDefault();
        setStatus(`Upload the selected photo before saving the ${recordType}.`, true);
        photoFile.focus();
      }
    });
  }
});
