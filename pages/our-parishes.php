<?php

$contentKind = 'page';
$contentSlug = 'our-parishes';
$siteRoot = '../';
$staticPageTitle = 'Our Parishes';
$pageTitle = $staticPageTitle . ' | Beth Ammi Christian Fellowship Church';
$pageDescription = 'Discover the Beth Ammi Christian Fellowship Church parishes and communities we serve.';
$pageScripts = ['page.js'];

require __DIR__ . '/../includes/site-head.php';
require __DIR__ . '/../includes/site-header.php';
?>
<main id="main">
  <section class="page-banner" aria-labelledby="page-title">
    <div class="container">
      <nav class="breadcrumbs" aria-label="Breadcrumb"><a href="../index.php">Home</a><span aria-hidden="true">/</span><span id="breadcrumb-label"><?= bethammi_escape($staticPageTitle) ?></span></nav>
      <p class="eyebrow eyebrow--light"><span></span><span id="page-kicker">Beth Ammi Christian Fellowship Church</span></p>
      <h1 id="page-title"><?= bethammi_escape($staticPageTitle) ?></h1>
      <p class="page-banner__summary" id="page-summary"><?= bethammi_escape($pageDescription) ?></p>
    </div>
  </section>
  <div id="page-message" class="container page-message" role="status" hidden></div>
  <section class="container page-layout page-layout--parishes" id="page-layout">
    <article class="page-article">
      <header class="parish-directory-heading">
        <div>
          <p class="eyebrow"><span></span> Find your community</p>
          <h2>Churches rooted<br><em>in community.</em></h2>
          <p>Explore our parishes and find a welcoming place to worship, grow, and belong.</p>
        </div>
        <div class="parish-directory-heading__tools">
          <span class="parish-directory-count" id="parish-directory-count" aria-live="polite">Loading parishes…</span>
          <label class="parish-directory-search">
            <span>Search parishes</span>
            <input id="parish-search" type="search" placeholder="Name, town, or region" autocomplete="off">
          </label>
        </div>
      </header>
      <div class="remote-content" id="page-content" aria-live="polite">
        <p>Loading parish directory…</p>
      </div>
      <p class="parish-directory-empty" id="parish-directory-empty" role="status" hidden>No parishes match your search. Try another name or location.</p>
    </article>
    <aside class="page-sidebar" id="page-sidebar">
      <div class="sidebar-card sidebar-card--visit">
        <p class="eyebrow"><span></span> You are welcome</p>
        <h2>Come worship<br>with us.</h2>
        <p>Join the Beth Ammi community for worship, prayer, fellowship, and the Word of God.</p>
        <a class="btn button button--navy" href="../index.php#gather">Service times <span aria-hidden="true">↗</span></a>
      </div>
      <div class="sidebar-card sidebar-card--contact">
        <span class="sidebar-card__label">NEED TO GET IN TOUCH?</span>
        <a href="tel:+250788482324">+250 788 482 324</a>
        <a href="https://wa.me/250788482324">WhatsApp us ↗</a>
      </div>
    </aside>
  </section>
  <section class="container page-related" id="page-related" hidden>
    <p class="eyebrow"><span></span> Keep exploring</p><h2>More from <em>Beth Ammi.</em></h2>
    <div id="related-links"></div>
  </section>
</main>
<div class="modal fade" id="parishDetailsModal" tabindex="-1" aria-labelledby="parish-modal-title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
    <div class="modal-content parish-details-modal">
      <div class="modal-header">
        <h2 class="modal-title" id="parish-modal-title"></h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img class="parish-details-modal__image" id="parish-modal-image" alt="" hidden>
        <p class="directory-card__subtitle" id="parish-modal-location" hidden></p>
        <div class="parish-details-modal__field" id="parish-modal-short-info" hidden>
          <strong>Short info</strong>
          <p data-parish-field-value></p>
        </div>
        <div class="parish-details-modal__field" id="parish-modal-description" hidden>
          <strong>Additional information</strong>
          <p data-parish-field-value></p>
        </div>
        <p class="directory-card__subtitle" id="parish-modal-members" hidden></p>
      </div>
    </div>
  </div>
</div>
<?php require __DIR__ . '/../includes/site-footer.php'; ?>
