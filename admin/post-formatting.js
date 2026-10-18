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
})();
