<?php

require_once __DIR__ . '/../includes/static-pages.php';
$staticPages = bethammi_static_pages();
$staticPageSlug = 'daily-bible-verses';
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
      <nav class="breadcrumbs" aria-label="Breadcrumb"><a href="../index.php">Home</a><span aria-hidden="true">/</span><span id="breadcrumb-label"><?= bethammi_escape($staticPageTitle) ?></span></nav>
      <p class="eyebrow eyebrow--light"><span></span><span id="page-kicker">Beth Ammi Christian Fellowship Church</span></p>
      <h1 id="page-title"><?= bethammi_escape($staticPageTitle) ?></h1>
      <p class="page-banner__summary" id="page-summary" hidden></p>
    </div>
  </section>
  <section class="container page-layout" id="page-layout">
    <article class="page-article">
      <div class="remote-content" id="page-content">
        <template id="static-page-content">
              <div data-elementor-type="wp-post" data-elementor-id="482" class="elementor elementor-482">
                      <section class="elementor-section elementor-top-section elementor-element elementor-element-8aae1ef elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="8aae1ef" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3c0f55d" data-id="3c0f55d" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-bc12541 elementor-widget elementor-widget-heading" data-id="bc12541" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h2 class="elementor-heading-title elementor-size-default">DAILY BIBLE VERSES</h2>        </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-4919be1 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="4919be1" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5db89e3" data-id="5db89e3" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <section class="elementor-section elementor-inner-section elementor-element elementor-element-5d6ec3c elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="5d6ec3c" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-133169a" data-id="133169a" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-35462fd elementor-widget elementor-widget-image" data-id="35462fd" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                                        <img loading="lazy" decoding="async" width="960" height="640" src="https://www.bethammicfc.org/wp-content/uploads/2019/08/P8880323-1024x683.jpg" class="attachment-large size-large wp-image-474" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2019/08/P8880323-1024x683.jpg 1024w, https://www.bethammicfc.org/wp-content/uploads/2019/08/P8880323-300x200.jpg 300w, https://www.bethammicfc.org/wp-content/uploads/2019/08/P8880323-768x512.jpg 768w, https://www.bethammicfc.org/wp-content/uploads/2019/08/P8880323-1620x1080.jpg 1620w, https://www.bethammicfc.org/wp-content/uploads/2019/08/P8880323-600x400.jpg 600w" sizes="(max-width: 960px) 100vw, 960px" />                              </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-c873f50" data-id="c873f50" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-ef29442 elementor-widget elementor-widget-wp-widget-dailyverseswidget" data-id="ef29442" data-element_type="widget" data-e-type="widget" data-widget_type="wp-widget-dailyverseswidget.default">
                  <div class="elementor-widget-container">
                    <h5> </h5><div class="dailyVerses bibleText">The LORD will be king over the whole earth. On that day there will be one LORD&#44; and his name the only name.</div><div class="dailyVerses bibleVerse"><a href="https://dailyverses.net/2026/10/11" rel="noopener" target="_blank">Zechariah 14:9</a></div>        </div>
                  </div>
                  <div class="elementor-element elementor-element-a103b8e elementor-widget elementor-widget-wp-widget-randombibleversewidget" data-id="a103b8e" data-element_type="widget" data-e-type="widget" data-widget_type="wp-widget-randombibleversewidget.default">
                  <div class="elementor-widget-container">
                    <h5> </h5><div class="dailyVerses bibleText">God is spirit&#44; and his worshipers must worship in the Spirit and in truth.</div><div class="dailyVerses bibleVerse"><a href="https://dailyverses.net/john/4/24" rel="noopener" target="_blank">John 4:24</a></div>        </div>
                  </div>
                  <div class="elementor-element elementor-element-5a357c2 elementor-widget elementor-widget-wp-widget-randombibleversewidget" data-id="5a357c2" data-element_type="widget" data-e-type="widget" data-widget_type="wp-widget-randombibleversewidget.default">
                  <div class="elementor-widget-container">
                    <h5> </h5><div class="dailyVerses bibleText">But he was pierced for our transgressions&#44; he was crushed for our iniquities; the punishment that brought us peace was on him&#44; and by his wounds we are healed.</div><div class="dailyVerses bibleVerse"><a href="https://dailyverses.net/isaiah/53/5" rel="noopener" target="_blank">Isaiah 53:5</a></div>        </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                    </div>
              </div>
                    </div>
              </section>
                  </div>

        </template>
      </div>
    </article>
    <aside class="page-sidebar" id="page-sidebar">
            <div class="sidebar-card sidebar-card--visit">
              <p class="eyebrow"><span></span> You are welcome</p>
              <h2>Come worship<br>with us.</h2>
              <p>Join the Beth Ammi community for worship, prayer, fellowship, and the Word of God.</p>
              <a class="btn button button--navy" href="<?= bethammi_escape($siteRoot ?? '') ?>index.php#gather">Service times <span aria-hidden="true">↗</span></a>
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
