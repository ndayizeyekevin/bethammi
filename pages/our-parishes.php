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
  <section class="container page-layout" id="page-layout">
    <article class="page-article">
      <div class="remote-content" id="page-content" aria-live="polite">
        <p>Loading parish directory…</p>
      </div>
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
<?php require __DIR__ . '/../includes/site-footer.php'; ?>
