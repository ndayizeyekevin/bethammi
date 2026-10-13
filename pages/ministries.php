<?php

require_once __DIR__ . '/../includes/static-pages.php';
$staticPages = bethammi_static_pages();
$staticPageSlug = 'ministries';
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
              <div data-elementor-type="wp-page" data-elementor-id="357" class="elementor elementor-357">
                      <section class="elementor-section elementor-top-section elementor-element elementor-element-58456ed elementor-section-content-middle elementor-section-full_width elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="58456ed" data-element_type="section" data-e-type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-16f65cd" data-id="16f65cd" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <section class="elementor-section elementor-inner-section elementor-element elementor-element-6a4e939 elementor-section-full_width elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="6a4e939" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-ac6a222" data-id="ac6a222" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-3c4de5f elementor-widget elementor-widget-image" data-id="3c4de5f" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                                        <img loading="lazy" decoding="async" width="1080" height="810" src="https://www.bethammicfc.org/wp-content/uploads/2019/08/IMG-20190822-WA0050.jpg" class="attachment-full size-full wp-image-195" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2019/08/IMG-20190822-WA0050.jpg 1080w, https://www.bethammicfc.org/wp-content/uploads/2019/08/IMG-20190822-WA0050-300x225.jpg 300w, https://www.bethammicfc.org/wp-content/uploads/2019/08/IMG-20190822-WA0050-768x576.jpg 768w, https://www.bethammicfc.org/wp-content/uploads/2019/08/IMG-20190822-WA0050-1024x768.jpg 1024w, https://www.bethammicfc.org/wp-content/uploads/2019/08/IMG-20190822-WA0050-600x450.jpg 600w" sizes="(max-width: 1080px) 100vw, 1080px" />                              </div>
                  </div>
                  <div class="elementor-element elementor-element-e99ce4f elementor-widget elementor-widget-heading" data-id="e99ce4f" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h6 class="elementor-heading-title elementor-size-default"><a href="https://www.bethammicfc.org/children-ministries/"><b>Children Ministries</b></a></h6>        </div>
                  </div>
                  <div class="elementor-element elementor-element-fcab9e5 elementor-widget elementor-widget-text-editor" data-id="fcab9e5" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                            <p>Children ministry is done at Beth Ammi Christian fellowship church through the program whose main goal&nbsp;is to improve standards of living of children and their families to fully exploit the available resources and reach their God given potentials for sustainable development<br></p>                </div>
                  </div>
                  <div class="elementor-element elementor-element-08039c3 elementor-align-center elementor-widget elementor-widget-button" data-id="08039c3" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
                  <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                    <a class="elementor-button elementor-button-link elementor-size-sm" href="https://www.bethammicfc.org/children-ministries/">
                      <span class="elementor-button-content-wrapper">
                            <span class="elementor-button-text">Click here</span>
                    </span>
                    </a>
                  </div>
                          </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-203a1da" data-id="203a1da" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-143bbe7 elementor-widget elementor-widget-image" data-id="143bbe7" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                                        <img loading="lazy" decoding="async" width="1081" height="1080" src="https://www.bethammicfc.org/wp-content/uploads/2019/08/cropped-P1590311.jpg" class="attachment-full size-full wp-image-509" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2019/08/cropped-P1590311.jpg 1081w, https://www.bethammicfc.org/wp-content/uploads/2019/08/cropped-P1590311-150x150.jpg 150w, https://www.bethammicfc.org/wp-content/uploads/2019/08/cropped-P1590311-300x300.jpg 300w, https://www.bethammicfc.org/wp-content/uploads/2019/08/cropped-P1590311-768x767.jpg 768w, https://www.bethammicfc.org/wp-content/uploads/2019/08/cropped-P1590311-1024x1023.jpg 1024w, https://www.bethammicfc.org/wp-content/uploads/2019/08/cropped-P1590311-600x599.jpg 600w, https://www.bethammicfc.org/wp-content/uploads/2019/08/cropped-P1590311-100x100.jpg 100w" sizes="(max-width: 1081px) 100vw, 1081px" />                              </div>
                  </div>
                  <div class="elementor-element elementor-element-93af354 elementor-widget elementor-widget-heading" data-id="93af354" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h6 class="elementor-heading-title elementor-size-default"><a href="https://www.bethammicfc.org/women-ministries/"><b>Women Ministries</b></a></h6>        </div>
                  </div>
                  <div class="elementor-element elementor-element-3746ff6 elementor-widget elementor-widget-text-editor" data-id="3746ff6" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                            <p>Women Ministries at Bethammi (WMB) is a ministry working in Bethammi Christian Fellowship Church that is made of Women around Bethammi Parishes.<br />Each Parish organizes its activities that are mainly related with Humanitarian Activities, Spiritual and Economic development.</p>                </div>
                  </div>
                  <div class="elementor-element elementor-element-1473696 elementor-align-center elementor-widget elementor-widget-button" data-id="1473696" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
                  <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                    <a class="elementor-button elementor-button-link elementor-size-sm" href="https://www.bethammicfc.org/women-ministries/">
                      <span class="elementor-button-content-wrapper">
                            <span class="elementor-button-text">Click here</span>
                    </span>
                    </a>
                  </div>
                          </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-d36e762" data-id="d36e762" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-681e1ad elementor-widget elementor-widget-image" data-id="681e1ad" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                                        <img loading="lazy" decoding="async" width="2736" height="1824" src="https://www.bethammicfc.org/wp-content/uploads/2019/09/P8880395.jpg" class="attachment-full size-full wp-image-689" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2019/09/P8880395.jpg 2736w, https://www.bethammicfc.org/wp-content/uploads/2019/09/P8880395-300x200.jpg 300w, https://www.bethammicfc.org/wp-content/uploads/2019/09/P8880395-768x512.jpg 768w, https://www.bethammicfc.org/wp-content/uploads/2019/09/P8880395-1024x683.jpg 1024w, https://www.bethammicfc.org/wp-content/uploads/2019/09/P8880395-1620x1080.jpg 1620w, https://www.bethammicfc.org/wp-content/uploads/2019/09/P8880395-600x400.jpg 600w" sizes="(max-width: 2736px) 100vw, 2736px" />                              </div>
                  </div>
                  <div class="elementor-element elementor-element-fb06f48 elementor-widget elementor-widget-heading" data-id="fb06f48" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h6 class="elementor-heading-title elementor-size-default"><a href="https://www.bethammicfc.org/outreach-evangelism"><b>Outreach Evangelism</b></a></h6>        </div>
                  </div>
                  <div class="elementor-element elementor-element-1906631 elementor-widget elementor-widget-text-editor" data-id="1906631" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                            <p><span style="white-space: pre-wrap;">One of our main mission as a church is to prepare the bride of Jesus Christ. We want to transform more and Convert more to Jesus Christ who is the Only way, Truth and Life. We do these in term of both small gatherings and Crusades to reach as many as Possible</span></p>                </div>
                  </div>
                  <div class="elementor-element elementor-element-572e4f6 elementor-align-center elementor-widget elementor-widget-button" data-id="572e4f6" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
                  <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                    <a class="elementor-button elementor-button-link elementor-size-sm" href="https://www.bethammicfc.org/outreach-evangelism">
                      <span class="elementor-button-content-wrapper">
                            <span class="elementor-button-text">Click here</span>
                    </span>
                    </a>
                  </div>
                          </div>
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
