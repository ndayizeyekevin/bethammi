const postsSearch = document.querySelector("#posts-search");
const postCards = Array.from(document.querySelectorAll("#posts-archive .archive-card"));
const postCount = document.querySelector("#posts-count");
const emptyMessage = document.querySelector("#posts-empty");

postsSearch?.addEventListener("input", () => {
  const term = postsSearch.value.trim().toLocaleLowerCase();
  let visible = 0;

  postCards.forEach((card) => {
    const matches = card.dataset.search.includes(term);
    card.hidden = !matches;
    if (matches) visible += 1;
  });

  postCount.textContent = `${visible} ${visible === 1 ? "story" : "stories"}`;
  emptyMessage.hidden = visible > 0;
});
