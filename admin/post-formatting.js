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

  const headingLevel = document.querySelector("[data-heading-level]");
  const headingButton = document.querySelector("[data-format-heading]");
  if (headingLevel instanceof HTMLSelectElement && headingButton instanceof HTMLButtonElement) {
    headingButton.addEventListener("click", () => {
      const level = Number(headingLevel.value);
      if (!Number.isInteger(level) || level < 1 || level > 6) return;

      const selectedText = textarea.value
        .slice(textarea.selectionStart, textarea.selectionEnd)
        .trim()
        .replace(/\s+/g, " ") || "Heading";
      const before = textarea.value.slice(0, textarea.selectionStart).trimEnd();
      const after = textarea.value.slice(textarea.selectionEnd).trimStart();
      const marker = `${"#".repeat(level)} `;
      const heading = `${marker}${selectedText}`;
      textarea.value = `${before}${before ? "\n\n" : ""}${heading}${after ? "\n\n" : ""}${after}`;
      const headingStart = before.length + (before ? 2 : 0);
      textarea.setSelectionRange(headingStart + marker.length, headingStart + heading.length);
      textarea.focus();
      textarea.dispatchEvent(new Event("input", { bubbles: true }));
    });
  }

  const imageComposer = document.querySelector(".post-image-insert");
  if (!(imageComposer instanceof HTMLElement)) return;

  const sourceSelect = imageComposer.querySelector("[data-image-source]");
  const urlField = imageComposer.querySelector("[data-image-url-field]");
  const urlInput = imageComposer.querySelector("[data-image-url]");
  const fileField = imageComposer.querySelector("[data-image-file-field]");
  const fileInput = imageComposer.querySelector("[data-image-file]");
  const textType = imageComposer.querySelector("[data-image-text-type]");
  const imageLayout = imageComposer.querySelector("[data-image-layout]");
  const belowTextInput = imageComposer.querySelector("[data-image-below-text]");
  const belowTextLabel = imageComposer.querySelector("[data-image-below-label]");
  const altInput = imageComposer.querySelector("[data-image-alt]");
  const addButton = imageComposer.querySelector("[data-add-post-image]");
  const imageStatus = imageComposer.querySelector(".post-image-insert__status");
  const imageList = imageComposer.querySelector("[data-post-image-list]");
  const editorForm = textarea.closest("form");
  const csrfInput = editorForm?.querySelector('input[name="csrf_token"]');
  const featuredImageSource = document.querySelector("[data-featured-image-source]");
  const featuredImageUrlField = document.querySelector("[data-featured-image-url-field]");
  const featuredImageUrl = document.querySelector("[data-featured-image-url]");
  const featuredImageUpload = document.querySelector("[data-featured-image-upload]");
  const featuredImageFile = document.querySelector("[data-featured-image-file]");
  const featuredImageUploadButton = document.querySelector("[data-upload-featured-image]");
  const featuredImageStatus = document.querySelector("[data-featured-image-status]");

  if (
    !(sourceSelect instanceof HTMLSelectElement)
    || !(urlField instanceof HTMLElement)
    || !(urlInput instanceof HTMLInputElement)
    || !(fileField instanceof HTMLElement)
    || !(fileInput instanceof HTMLInputElement)
    || !(textType instanceof HTMLSelectElement)
    || !(imageLayout instanceof HTMLSelectElement)
    || !(belowTextInput instanceof HTMLTextAreaElement)
    || !(belowTextLabel instanceof HTMLElement)
    || !(altInput instanceof HTMLInputElement)
    || !(addButton instanceof HTMLButtonElement)
    || !(imageStatus instanceof HTMLElement)
    || !(imageList instanceof HTMLElement)
    || !(csrfInput instanceof HTMLInputElement)
    || !(featuredImageSource instanceof HTMLSelectElement)
    || !(featuredImageUrlField instanceof HTMLElement)
    || !(featuredImageUrl instanceof HTMLInputElement)
    || !(featuredImageUpload instanceof HTMLElement)
    || !(featuredImageFile instanceof HTMLInputElement)
    || !(featuredImageUploadButton instanceof HTMLButtonElement)
    || !(featuredImageStatus instanceof HTMLElement)
    || !editorForm
  ) return;

  const setImageStatus = (message, state = "") => {
    imageStatus.hidden = !message;
    imageStatus.textContent = message;
    imageStatus.dataset.state = state;
  };
  const media = [];
  const allowedLayouts = ["left", "center", "right", "gallery"];
  let featuredUploadComplete = featuredImageSource.value !== "upload";

  const updateBelowTextLabel = () => {
    belowTextLabel.textContent = imageLayout.value === "gallery"
      ? "Description shown below each gallery image"
      : textType.value === "caption"
        ? "Caption shown below the image"
        : "Paragraph shown below the image";
    belowTextInput.placeholder = imageLayout.value === "gallery" || textType.value === "caption"
      ? "Write a short description"
      : "Write the paragraph to display below the image";
  };

  const normalizeImageUrl = (value) => {
    const imageUrl = value.trim();
    if (/^https?:\/\//i.test(imageUrl)) {
      const externalUrl = new URL(imageUrl);
      if (!["http:", "https:"].includes(externalUrl.protocol)) throw new Error("Use a full http(s) image URL or a safe site-root path.");
      return imageUrl;
    }
    const siteRootPath = new URL("../", window.location.href).pathname;
    if (imageUrl.includes("\\") || /(^|\/)\.\.(\/|$)/.test(imageUrl)) {
      throw new Error("Use a site-root path without parent-directory segments.");
    }
    const relativePath = imageUrl.replace(/^\/+/, "");
    const parsedUrl = imageUrl.startsWith(siteRootPath)
      ? new URL(imageUrl, window.location.origin)
      : new URL(relativePath, new URL("../", window.location.href));
    if (!parsedUrl.pathname.startsWith(siteRootPath)) {
      throw new Error("Use a safe path inside the website.");
    }
    return parsedUrl.pathname + parsedUrl.search + parsedUrl.hash;
  };

  const uploadImageFile = async (file) => {
    const uploadEndpoint = imageComposer.dataset.uploadEndpoint;
    if (!uploadEndpoint) throw new Error("The image upload endpoint is missing.");
    const uploadData = new FormData();
    uploadData.set("csrf_token", csrfInput.value);
    uploadData.set("image", file);
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
    return normalizeImageUrl(result.url);
  };

  const setFeaturedImageStatus = (message, isError = false) => {
    featuredImageStatus.hidden = !message;
    featuredImageStatus.textContent = message;
    featuredImageStatus.dataset.state = isError ? "error" : "";
  };

  const updateFeaturedImageSource = () => {
    const isUpload = featuredImageSource.value === "upload";
    featuredImageUrlField.hidden = isUpload;
    featuredImageUpload.hidden = !isUpload;
    featuredUploadComplete = !isUpload;
    setFeaturedImageStatus(isUpload
      ? "Choose a JPEG, PNG, or WebP image, then click Upload highlight image."
      : "");
  };

  featuredImageSource.addEventListener("change", updateFeaturedImageSource);
  featuredImageFile.addEventListener("change", () => {
    const file = featuredImageFile.files?.[0];
    if (file) {
      featuredUploadComplete = false;
      setFeaturedImageStatus(`${file.name} selected. Click Upload highlight image to save it to the server.`);
    } else {
      setFeaturedImageStatus("");
    }
  });
  featuredImageUploadButton.addEventListener("click", async () => {
    const file = featuredImageFile.files?.[0];
    if (!file) {
      setFeaturedImageStatus("Choose a highlight image to upload.", true);
      featuredImageFile.focus();
      return;
    }
    featuredImageUploadButton.disabled = true;
    setFeaturedImageStatus("Uploading highlight image…");
    try {
      const imagePath = await uploadImageFile(file);
      featuredImageUrl.value = imagePath;
      featuredUploadComplete = true;
      featuredImageFile.value = "";
      const siteRootPath = new URL("../", window.location.href).pathname;
      const storedPath = imagePath.startsWith(siteRootPath)
        ? imagePath.slice(siteRootPath.length)
        : imagePath;
      setFeaturedImageStatus(`Upload complete. Saved as ${storedPath}. Save the post to store this highlight image.`);
    } catch (error) {
      setFeaturedImageStatus(error instanceof Error ? error.message : "The highlight image could not be uploaded.", true);
    } finally {
      featuredImageUploadButton.disabled = false;
    }
  });

  const addHiddenField = (container, name, value) => {
    const input = document.createElement("input");
    input.type = "hidden";
    input.name = name;
    input.value = value;
    container.append(input);
  };

  const renderMedia = () => {
    imageList.replaceChildren();
    media.forEach((item, index) => {
      const card = document.createElement("article");
      card.className = "post-image-item";

      const preview = document.createElement("img");
      preview.className = "post-image-item__preview";
      preview.src = item.image_path;
      preview.alt = "";
      preview.loading = "lazy";
      card.append(preview);

      const details = document.createElement("div");
      details.className = "post-image-item__details";
      const title = document.createElement("strong");
      title.textContent = item.below_text
        ? (item.below_text_type === "caption" ? "Caption" : "Paragraph")
        : "Image";
      const metadata = document.createElement("span");
      metadata.textContent = `${item.layout} · ${item.image_path}`;
      details.append(title);
      if (item.below_text) {
        const description = document.createElement("p");
        description.textContent = item.below_text;
        details.append(description);
      }
      details.append(metadata);
      card.append(details);

      const actions = document.createElement("div");
      actions.className = "post-image-item__actions";
      [
        { label: "Move image up", text: "↑", offset: -1 },
        { label: "Move image down", text: "↓", offset: 1 },
      ].forEach(({ label, text, offset }) => {
        const button = document.createElement("button");
        button.type = "button";
        button.textContent = text;
        button.setAttribute("aria-label", label);
        button.disabled = index + offset < 0 || index + offset >= media.length;
        button.addEventListener("click", () => {
          const target = index + offset;
          [media[index], media[target]] = [media[target], media[index]];
          renderMedia();
        });
        actions.append(button);
      });
      const removeButton = document.createElement("button");
      removeButton.type = "button";
      removeButton.textContent = "Remove";
      removeButton.addEventListener("click", () => {
        media.splice(index, 1);
        renderMedia();
        setImageStatus("Image removed from this post. Save changes to store the update.");
      });
      actions.append(removeButton);
      card.append(actions);

      addHiddenField(card, `post_images[${index}][image_path]`, item.image_path);
      addHiddenField(card, `post_images[${index}][alt_text]`, item.alt_text);
      addHiddenField(card, `post_images[${index}][below_text]`, item.below_text);
      addHiddenField(card, `post_images[${index}][below_text_type]`, item.below_text_type);
      addHiddenField(card, `post_images[${index}][layout]`, item.layout);
      imageList.append(card);
    });
  };

  try {
    const initialMedia = JSON.parse(imageList.dataset.existingImages || "[]");
    if (!Array.isArray(initialMedia)) throw new Error("Saved post images could not be loaded.");
    initialMedia.forEach((image) => {
      if (
        image && typeof image.image_path === "string"
        && typeof image.alt_text === "string"
        && typeof image.below_text === "string"
        && ["caption", "paragraph"].includes(image.below_text_type)
        && allowedLayouts.includes(image.layout)
      ) media.push(image);
    });
  } catch (error) {
    setImageStatus(error instanceof Error ? error.message : "Saved post images could not be loaded.", "error");
  }

  sourceSelect.addEventListener("change", () => {
    const isUpload = sourceSelect.value === "upload";
    urlField.hidden = isUpload;
    fileField.hidden = !isUpload;
    if (isUpload) {
      setImageStatus("Choose a file, add its accessibility description and caption or paragraph, then click Add image to post to upload it.");
    } else {
      setImageStatus("");
    }
  });
  fileInput.addEventListener("change", () => {
    const file = fileInput.files?.[0];
    if (file) {
      setImageStatus(`${file.name} selected. It is not uploaded yet. Add its accessibility description and caption or paragraph, then click Add image to post.`);
    } else {
      setImageStatus("");
    }
  });
  textType.addEventListener("change", updateBelowTextLabel);
  imageLayout.addEventListener("change", updateBelowTextLabel);
  updateBelowTextLabel();
  renderMedia();

  addButton.addEventListener("click", async () => {
    setImageStatus("");
    const altText = altInput.value.trim();
    const belowText = belowTextInput.value.trim();
    if (altText.length > 200) {
      setImageStatus("Image accessibility descriptions must be 200 characters or fewer.", "error");
      altInput.focus();
      return;
    }
    if (belowText.length > 5000) {
      setImageStatus("Image captions and paragraphs must be 5,000 characters or fewer.", "error");
      belowTextInput.focus();
      return;
    }
    if (!allowedLayouts.includes(imageLayout.value)) {
      setImageStatus("Choose a valid image layout.", "error");
      imageLayout.focus();
      return;
    }
    if (!["caption", "paragraph"].includes(textType.value)) {
      setImageStatus("Choose whether the text below the image is a caption or paragraph.", "error");
      textType.focus();
      return;
    }
    if (media.length >= 30) {
      setImageStatus("A post can contain up to 30 images.", "error");
      return;
    }

    let imagePath;
    if (sourceSelect.value === "upload") {
      const file = fileInput.files?.[0];
      if (!file) {
        setImageStatus("Choose an image file to upload.", "error");
        fileInput.focus();
        return;
      }

      addButton.disabled = true;
      setImageStatus("Uploading image…");
      try {
        imagePath = await uploadImageFile(file);
      } catch (error) {
        setImageStatus(error instanceof Error ? error.message : "The image could not be uploaded.", "error");
        return;
      } finally {
        addButton.disabled = false;
      }
    } else {
      if (!urlInput.value.trim()) {
        setImageStatus("Enter an image URL or site path.", "error");
        urlInput.focus();
        return;
      }
      try {
        imagePath = normalizeImageUrl(urlInput.value);
      } catch (error) {
        setImageStatus(error instanceof Error ? error.message : "Enter a valid image URL or site path.", "error");
        urlInput.focus();
        return;
      }
    }

    media.push({
      image_path: imagePath,
      alt_text: altText,
      below_text: belowText,
      below_text_type: textType.value,
      layout: imageLayout.value,
    });
    renderMedia();
    const siteRootPath = new URL("../", window.location.href).pathname;
    const storedPath = imagePath.startsWith(siteRootPath)
      ? imagePath.slice(siteRootPath.length)
      : imagePath;
    urlInput.value = "";
    fileInput.value = "";
    belowTextInput.value = "";
    altInput.value = "";
    setImageStatus(sourceSelect.value === "upload"
      ? `Upload complete. The file is saved as ${storedPath}. Save the post to store its caption and link in the database.`
      : "Image added to the post. Save the post to store its reference and caption in the database.");
  });

  editorForm.addEventListener("submit", (event) => {
    if (featuredImageSource.value === "upload" && !featuredUploadComplete) {
      event.preventDefault();
      setFeaturedImageStatus("Upload the selected highlight image before saving the post.", true);
      featuredImageFile.focus();
      return;
    }
    if (textarea.value.trim() === "" && media.length === 0) {
      event.preventDefault();
      setImageStatus("Enter post text or add at least one image before saving.", "error");
      textarea.focus();
    }
  });
})();
