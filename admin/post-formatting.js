(() => {
  const textarea = document.querySelector("#post-description");
  if (!(textarea instanceof HTMLTextAreaElement)) return;

  document.querySelectorAll(".post-formatting-toolbar [data-format]").forEach((button) => {
    button.addEventListener("click", () => {
      const format = button.dataset.format;
      const markers = format === "bold" ? ["**", "**"] : format === "italic" ? ["*", "*"] : null;
      if (!markers) return;

      const start = textarea.selectionStart;
      const end = textarea.selectionEnd;
      const selectedText = textarea.value.slice(start, end);
      const before = textarea.value.slice(0, start);
      const after = textarea.value.slice(end);
      const alreadyFormatted = selectedText !== ""
        && before.endsWith(markers[0])
        && after.startsWith(markers[1]);

      if (alreadyFormatted) {
        const unformattedStart = start - markers[0].length;
        textarea.setRangeText(
          selectedText,
          unformattedStart,
          end + markers[1].length,
          "select"
        );
        textarea.setSelectionRange(unformattedStart, unformattedStart + selectedText.length);
      } else {
        const text = selectedText || (format === "bold" ? "bold text" : "italic text");
        textarea.setRangeText(`${markers[0]}${text}${markers[1]}`, start, end, "preserve");
        textarea.setSelectionRange(start + markers[0].length, start + markers[0].length + text.length);
      }

      textarea.focus();
      textarea.dispatchEvent(new Event("input", { bubbles: true }));
    });
  });

  const imageComposer = document.querySelector(".post-image-insert");
  if (!(imageComposer instanceof HTMLElement)) return;

  const sourceSelect = imageComposer.querySelector("[data-image-source]");
  const urlField = imageComposer.querySelector("[data-image-url-field]");
  const urlInput = imageComposer.querySelector("[data-image-url]");
  const fileField = imageComposer.querySelector("[data-image-file-field]");
  const fileInput = imageComposer.querySelector("[data-image-file]");
  const textType = imageComposer.querySelector("[data-image-text-type]");
  const imageLayout = imageComposer.querySelector("[data-image-layout]");
  const captionField = imageComposer.querySelector("[data-image-caption-field]");
  const captionInput = imageComposer.querySelector("[data-image-caption]");
  const altInput = imageComposer.querySelector("[data-image-alt]");
  const insertButton = imageComposer.querySelector("[data-insert-image]");
  const imageStatus = imageComposer.querySelector(".post-image-insert__status");
  const editorForm = textarea.closest("form");
  const csrfInput = editorForm?.querySelector('input[name="csrf_token"]');

  if (
    !(sourceSelect instanceof HTMLSelectElement)
    || !(urlField instanceof HTMLElement)
    || !(urlInput instanceof HTMLInputElement)
    || !(fileField instanceof HTMLElement)
    || !(fileInput instanceof HTMLInputElement)
    || !(textType instanceof HTMLSelectElement)
    || !(imageLayout instanceof HTMLSelectElement)
    || !(captionField instanceof HTMLElement)
    || !(captionInput instanceof HTMLInputElement)
    || !(altInput instanceof HTMLInputElement)
    || !(insertButton instanceof HTMLButtonElement)
    || !(imageStatus instanceof HTMLElement)
    || !(csrfInput instanceof HTMLInputElement)
  ) return;

  const setImageStatus = (message, state = "") => {
    imageStatus.hidden = !message;
    imageStatus.textContent = message;
    imageStatus.dataset.state = state;
  };

  const updateBelowImageLabel = () => {
    const label = captionField.querySelector("span");
    if (label) {
      label.textContent = imageLayout.value === "gallery"
        ? "Description shown below each gallery image"
        : textType.value === "caption"
          ? "Caption shown below the image"
          : "Paragraph shown below the image";
    }
    captionInput.placeholder = imageLayout.value === "gallery" || textType.value === "caption"
      ? "Write a short description"
      : "Write the paragraph to display below the image";
  };

  sourceSelect.addEventListener("change", () => {
    const isUpload = sourceSelect.value === "upload";
    urlField.hidden = isUpload;
    fileField.hidden = !isUpload;
  });

  textType.addEventListener("change", () => {
    updateBelowImageLabel();
  });
  imageLayout.addEventListener("change", updateBelowImageLabel);
  updateBelowImageLabel();

  const insertImage = (imageUrl) => {
    const alt = altInput.value.trim().replace(/[\]\r\n]/g, " ");
    const belowImageText = captionInput.value.trim().replace(/["\r\n]/g, " ");
    const caption = textType.value === "caption" || imageLayout.value === "gallery"
      ? belowImageText
      : "";
    const paragraph = textType.value === "paragraph" && imageLayout.value !== "gallery"
      ? belowImageText
      : "";
    const encodedUrl = imageUrl.trim().replace(/[()"\s]/g, (character) => encodeURIComponent(character));
    const captionMarker = caption ? ` "${caption}"` : "";
    const layout = imageLayout.value;
    const layoutMarker = `{layout=${layout}}`;
    const imageMarker = `![${alt}](${encodedUrl}${captionMarker})${layoutMarker}`;
    if (layout === "gallery") {
      const existingContent = textarea.value.replace(/\s+$/u, "");
      const galleryContent = `${existingContent ? `${existingContent}\n\n` : ""}${imageMarker}\n\n`;
      textarea.setRangeText(galleryContent, 0, textarea.value.length, "end");
    } else {
      const start = textarea.selectionStart;
      const end = textarea.selectionEnd;
      const before = textarea.value.slice(0, start);
      const after = textarea.value.slice(end);
      const prefix = before
        ? (before.endsWith("\n\n") ? "" : before.endsWith("\n") ? "\n" : "\n\n")
        : "";
      const suffix = after
        ? (after.startsWith("\n\n") ? "" : after.startsWith("\n") ? "\n" : "\n\n")
        : "\n\n";

      const belowImageParagraph = paragraph ? `\n\n${paragraph}` : "";
      textarea.setRangeText(`${prefix}${imageMarker}${belowImageParagraph}${suffix}`, start, end, "end");
    }
    textarea.focus();
    textarea.dispatchEvent(new Event("input", { bubbles: true }));
    setImageStatus(layout === "gallery"
      ? "Image and text added to the gallery after the post text. Add more gallery images to place them side by side, then save the post."
      : "Image and text added to the post at the cursor. Save the post to keep your changes.");
  };

  insertButton.addEventListener("click", async () => {
    setImageStatus("");
    let imageUrl = urlInput.value.trim();

    if (!altInput.value.trim()) {
      setImageStatus("Describe the image for visitors using screen readers.", "error");
      altInput.focus();
      return;
    }
    if (!captionInput.value.trim()) {
      setImageStatus(textType.value === "caption"
        ? "Enter a caption to display below the image."
        : "Enter the paragraph to display below the image.", "error");
      captionInput.focus();
      return;
    }

    if (sourceSelect.value === "upload") {
      const file = fileInput.files?.[0];
      if (!file) {
        setImageStatus("Choose an image file to upload.", "error");
        fileInput.focus();
        return;
      }

      insertButton.disabled = true;
      setImageStatus("Uploading image…");
      try {
        const uploadData = new FormData();
        uploadData.set("csrf_token", csrfInput.value);
        uploadData.set("image", file);
        const uploadEndpoint = imageComposer.dataset.uploadEndpoint;
        if (!uploadEndpoint) throw new Error("The image upload endpoint is missing.");

        const response = await fetch(uploadEndpoint, {
          method: "POST",
          body: uploadData,
          headers: { Accept: "application/json" },
        });
        const responseText = await response.text();
        let result;
        try {
          result = JSON.parse(responseText);
        } catch {
          throw new Error("The image upload returned an invalid response.");
        }
        if (!result || typeof result !== "object" || Array.isArray(result)) {
          throw new Error("The image upload returned an invalid response.");
        }
        if (!response.ok) {
          throw new Error(typeof result.error === "string" ? result.error : "The image could not be uploaded.");
        }
        if (typeof result.url !== "string" || !result.url) {
          throw new Error("The image upload returned an invalid response.");
        }
        imageUrl = result.url;
        fileInput.value = "";
      } catch (error) {
        setImageStatus(error instanceof Error ? error.message : "The image could not be uploaded.", "error");
        return;
      } finally {
        insertButton.disabled = false;
      }
    } else {
      if (!imageUrl) {
        setImageStatus("Enter an image URL or site path.", "error");
        urlInput.focus();
        return;
      }

      let parsedUrl;
      try {
        parsedUrl = new URL(imageUrl, new URL("../", window.location.href));
      } catch {
        parsedUrl = null;
      }
      if (!parsedUrl || !["http:", "https:"].includes(parsedUrl.protocol)) {
        setImageStatus("Use a full http(s) image URL or a safe site-root path.", "error");
        urlInput.focus();
        return;
      }

      const isExternalUrl = /^https?:\/\//i.test(imageUrl);
      if (!isExternalUrl) {
        const siteRootPath = new URL("../", window.location.href).pathname;
        if (imageUrl.includes("\\") || /(^|\/)\.\.(\/|$)/.test(imageUrl)) {
          setImageStatus("Use a site-root path without parent-directory segments.", "error");
          urlInput.focus();
          return;
        }
        const relativePath = imageUrl.replace(/^\/+/, "");
        parsedUrl = imageUrl.startsWith(siteRootPath)
          ? new URL(imageUrl, window.location.origin)
          : new URL(relativePath, new URL("../", window.location.href));
        if (!parsedUrl.pathname.startsWith(siteRootPath)) {
          setImageStatus("Use a safe path inside the website.", "error");
          urlInput.focus();
          return;
        }
        imageUrl = parsedUrl.pathname + parsedUrl.search + parsedUrl.hash;
      }
    }

    insertImage(imageUrl);
    urlInput.value = "";
    captionInput.value = "";
    altInput.value = "";
  });
})();
