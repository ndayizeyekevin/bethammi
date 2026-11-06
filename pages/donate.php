<?php

require_once __DIR__ . '/../includes/static-pages.php';
$staticPages = bethammi_static_pages();
$staticPageSlug = 'donate';
if (!isset($staticPages[$staticPageSlug])) {
    http_response_code(404);
    exit('Page not found.');
}
$isStaticPage = true;
$contentKind = 'page';
$contentSlug = $staticPageSlug;
$staticPageTitle = $staticPages[$staticPageSlug];
$pageTitle = $staticPageTitle . ' | Beth Ammi Christian Fellowship Church';
$pageDescription = 'Learn about ' . $staticPageTitle . ' at Beth Ammi Christian Fellowship Church.';
$pageScripts = ['page.js'];
require __DIR__ . '/../includes/site-head.php';
require __DIR__ . '/../includes/site-header.php';
?>
<main id="main">
  <section class="page-banner" aria-labelledby="page-title">
    <div class="container">
      <nav class="breadcrumbs" aria-label="Breadcrumb"><a href="../index">Home</a><span aria-hidden="true">/</span><span id="breadcrumb-label"><?= bethammi_escape($staticPageTitle) ?></span></nav>
      <p class="eyebrow eyebrow--light"><span></span><span id="page-kicker">Beth Ammi Christian Fellowship Church</span></p>
      <h1 id="page-title"><?= bethammi_escape($staticPageTitle) ?></h1>
      <p class="page-banner__summary" id="page-summary" hidden></p>
    </div>
  </section>
  <section class="container page-layout page-layout--donate" id="page-layout">
    <article class="page-article">
      <div class="remote-content" id="page-content">
        <template id="static-page-content">
          <div class="donation-content">
            <header class="donation-heading">
              <p class="eyebrow">WAYS TO GIVE</p>
              <h2>Support the work of Beth Ammi.</h2>
              <p>Choose the giving method that works best for you. Your generosity supports our church and its ministries.</p>
            </header>
            <div class="donation-methods">
              <details class="donation-method">
                <summary><span class="donation-method__title">By check</span><span class="donation-method__subtitle">Mail your gift to the church</span></summary>
                <div class="donation-method__content">
                  <p>Make checks payable to <strong>Bethammi Christian Fellowship Church</strong>.</p>
                  <p><strong>Mail to:</strong><br>Bethammi Christian Fellowship Church<br>Rusororo Sector, New KBS garage</p>
                </div>
              </details>
              <details class="donation-method">
                <summary><span class="donation-method__title">Wire transfer</span><span class="donation-method__subtitle">Request bank transfer details</span></summary>
                <div class="donation-method__content">
                  <p>Contact Alfred Gatabazi for wire transfer information.</p>
                  <p><a href="tel:+250788451308">Call +250 788 451 308</a></p>
                </div>
              </details>
              <details class="donation-method">
                <summary><span class="donation-method__title">Mobile money</span><span class="donation-method__subtitle">Give with MTN or from abroad</span></summary>
                <div class="donation-method__content">
                  <p>On MTN Mobile Money, dial <strong>*182*8*1*007002#</strong> and follow the instructions.</p>
                  <p>Outside Rwanda? Send your gift with <a href="https://www.worldremit.com/" target="_blank" rel="noopener noreferrer">WorldRemit</a> to Alfred Gatabazi at <a href="tel:+250788482324">+250 788 482 324</a>.</p>
                </div>
              </details>
            </div>
            <p class="donation-thanks">Thank you for supporting our church community.</p>
          </div>
        </template>
      </div>
    </article>
    <aside class="page-sidebar" id="page-sidebar">
            <div class="sidebar-card sidebar-card--visit">
              <p class="eyebrow"><span></span> You are welcome</p>
              <h2>Come worship<br>with us.</h2>
              <p>Join the Beth Ammi community for worship, prayer, fellowship, and the Word of God.</p>
              <a class="btn button button--navy" href="<?= bethammi_escape($siteRoot ?? '') ?>index#gather">Service times <span aria-hidden="true">↗</span></a>
            </div>
            <div class="sidebar-card sidebar-card--contact">
              <span class="sidebar-card__label">NEED TO GET IN TOUCH?</span>
              <a href="tel:+250788482324">+250 788 482 324</a>
              <a href="https://wa.me/250788482324">WhatsApp us ↗</a>
            </div>
          </aside>
  </section>
</main>
<?php require __DIR__ . '/../includes/site-footer.php'; ?>
