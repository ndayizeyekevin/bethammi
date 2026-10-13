<?php

require_once __DIR__ . '/../includes/static-pages.php';
$staticPages = bethammi_static_pages();
$staticPageSlug = 'about-us';
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
  <section class="container page-layout" id="page-layout">
    <article class="page-article">
      <div class="remote-content" id="page-content">
        <template id="static-page-content">
          <section class="about-intro" aria-labelledby="about-intro-title">
            <div class="about-intro__copy">
              <p class="eyebrow"><span></span> Our story</p>
              <h2 id="about-intro-title">A home for <em>our people.</em></h2>
              <p class="about-intro__lead">Beth Ammi means “house of my people”—a name that reflects our calling to be a welcoming church family rooted in faith and community.</p>
              <p>Rev. Pastor Gatabazi Alfred established the first parish in 2007 in Nyagahinga Cell, Rusororo Sector, Gasabo District, Kigali. From that beginning, Beth Ammi has grown into a church community serving people in Rwanda and the Democratic Republic of Congo.</p>
              <p>Beth Ammi is legally registered to operate in Rwanda under Ministerial Order No. 07/08.11 of 8 February 2010.</p>
            </div>
            <figure class="about-intro__image">
              <img src="https://www.bethammicfc.org/wp-content/uploads/2019/08/cropped-P8880240-e1566663659779-1024x422.jpg" alt="Beth Ammi church building" loading="lazy">
              <figcaption>Rooted in community. Growing in faith.</figcaption>
            </figure>
          </section>
          <section class="about-belief" aria-labelledby="about-belief-title">
            <p class="eyebrow"><span></span> What guides us</p>
            <h2 id="about-belief-title">Faith that shapes<br><em>how we serve.</em></h2>
            <p>We believe in one true God—the eternal King, Creator, and Redeemer—who is holy, just, loving, and truthful, revealed as Father, Son, and Holy Spirit.</p>
          </section>
          <section class="about-purpose" aria-label="Our mission and vision">
            <article class="about-purpose__card">
              <span class="about-purpose__number">01</span>
              <p class="eyebrow"><span></span> Our mission</p>
              <h2>Share the gospel.<br><em>Show God’s love.</em></h2>
              <p>We proclaim the salvation offered by God through Jesus Christ and demonstrate God’s love through practical service and human and social development.</p>
            </article>
            <article class="about-purpose__card about-purpose__card--vision">
              <span class="about-purpose__number">02</span>
              <p class="eyebrow"><span></span> Our vision</p>
              <h2>Build a strong<br><em>church family.</em></h2>
              <p>We seek to build a spiritually strong church whose members bear witness to the Kingdom of God in the world.</p>
            </article>
          </section>
          <p class="about-note">We welcome you to worship, grow, and serve with the Beth Ammi family.</p>

        </template>
      </div>
    </article>
    <aside class="page-sidebar" id="page-sidebar">
            <div class="sidebar-card sidebar-card--visit">
              <p class="eyebrow"><span></span> You are welcome</p>
              <h2>Come worship<br>with us.</h2>
              <p>Join the Beth Ammi community for worship, prayer, fellowship, and the Word of God.</p>
              <a class="btn button button--navy" href="<?= bethammi_escape($siteRoot ?? '') ?>#gather">Service times <span aria-hidden="true">↗</span></a>
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
