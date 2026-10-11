<?php

require_once __DIR__ . '/../includes/static-pages.php';
$staticPages = bethammi_static_pages();
$staticPageSlug = 'who-we-are';
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
              <div data-elementor-type="wp-page" data-elementor-id="353" class="elementor elementor-353">
                      <section class="elementor-section elementor-top-section elementor-element elementor-element-1ef2fe8 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="1ef2fe8" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-e044251" data-id="e044251" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-ccc1131 elementor-widget elementor-widget-button" data-id="ccc1131" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
                  <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                    <a class="elementor-button elementor-button-link elementor-size-sm" href="https://www.bethammicfc.org/about-us/">
                      <span class="elementor-button-content-wrapper">
                            <span class="elementor-button-text">About Us</span>
                    </span>
                    </a>
                  </div>
                          </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-967b6f4" data-id="967b6f4" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-e311e0e elementor-widget elementor-widget-button" data-id="e311e0e" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
                  <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                    <a class="elementor-button elementor-button-link elementor-size-sm" href="https://www.bethammicfc.org/our-staff/">
                      <span class="elementor-button-content-wrapper">
                            <span class="elementor-button-text">our staff</span>
                    </span>
                    </a>
                  </div>
                          </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-71c6e20" data-id="71c6e20" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-9b1e76e elementor-widget elementor-widget-button" data-id="9b1e76e" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
                  <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                    <a class="elementor-button elementor-button-link elementor-size-sm" href="https://www.bethammicfc.org/our-parishes/">
                      <span class="elementor-button-content-wrapper">
                            <span class="elementor-button-text">Parishes</span>
                    </span>
                    </a>
                  </div>
                          </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-48dc2af" data-id="48dc2af" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-178b25f elementor-widget elementor-widget-button" data-id="178b25f" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
                  <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                    <a class="elementor-button elementor-button-link elementor-size-sm" href="https://www.bethammicfc.org/ministries/">
                      <span class="elementor-button-content-wrapper">
                            <span class="elementor-button-text">Ministries</span>
                    </span>
                    </a>
                  </div>
                          </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-129b983" data-id="129b983" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-32907ff elementor-widget elementor-widget-button" data-id="32907ff" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
                  <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                    <a class="elementor-button elementor-button-link elementor-size-sm" href="https://www.bethammicfc.org/partners">
                      <span class="elementor-button-content-wrapper">
                            <span class="elementor-button-text">Partners</span>
                    </span>
                    </a>
                  </div>
                          </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-ca7969f" data-id="ca7969f" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-ab272bc elementor-widget elementor-widget-button" data-id="ab272bc" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
                  <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                    <a class="elementor-button elementor-button-link elementor-size-sm" href="https://www.bethammicfc.org/media/">
                      <span class="elementor-button-content-wrapper">
                            <span class="elementor-button-text">Media</span>
                    </span>
                    </a>
                  </div>
                          </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-2anqgc6 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="2anqgc6" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-d87ceee" data-id="d87ceee" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-ff98009 elementor-widget elementor-widget-image" data-id="ff98009" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                                        <img decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/cropped-P8880243-1-ocycq05tl84rnofu1fme2nb2webrgsyhzpu7m443uw.jpg" title="cropped-P8880243-1.jpg" alt="cropped-P8880243-1.jpg" loading="lazy" />                              </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-d04299c" data-id="d04299c" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-6d73cf3 elementor-widget elementor-widget-heading" data-id="6d73cf3" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h5 class="elementor-heading-title elementor-size-default">Brief History of Bethammi</h5>        </div>
                  </div>
                  <div class="elementor-element elementor-element-bcc296c elementor-widget elementor-widget-text-editor" data-id="bcc296c" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                            <p style="font-size: 16px; font-style: normal; font-weight: 400;">Beth Ammi means house of my people. It has founded by Rev.Pastor Gatabazi Alfred where the first parish was established in 2007 and installed in Kigali City, Gasabo District, Rusororo Sector in Nyagahinga Cell; with a clear vision and mission which direct the Church to achieve its dream and impact of positive transformation for Rwandan community.</p><p style="font-size: 16px; font-style: normal; font-weight: 400;">Bethammi currrently have 6 parishes in Rwanda and 3 parishes in Democratic Republic of Congo (DRC).</p><p style="font-size: 16px; font-style: normal; font-weight: 400;">Beth Ammi is legally working in Rwanda under the ministerial order <span style="font-weight: bold;">nº 07/08.11 of 08/02/2010</span></p>                </div>
                  </div>
                  <div class="elementor-element elementor-element-ea2fd50 elementor-widget elementor-widget-button" data-id="ea2fd50" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
                  <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                    <a class="elementor-button elementor-button-link elementor-size-sm" href="https://www.bethammicfc.org/about-us/">
                      <span class="elementor-button-content-wrapper">
                      <span class="elementor-button-icon">
                  <i aria-hidden="true" class="fas fa-arrow-right"></i>      </span>
                            <span class="elementor-button-text">Know More About Us</span>
                    </span>
                    </a>
                  </div>
                          </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-b550aad elementor-section-content-middle elementor-section-full_width elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="b550aad" data-element_type="section" data-e-type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-690ffef" data-id="690ffef" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-5c88e70 elementor-widget elementor-widget-heading" data-id="5c88e70" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h5 class="elementor-heading-title elementor-size-default"><b>Ministries in Bethammi</b></h5>        </div>
                  </div>
                  <div class="elementor-element elementor-element-dfedbbd elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="dfedbbd" data-element_type="widget" data-e-type="widget" data-widget_type="divider.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-divider">
                <span class="elementor-divider-separator">
                      </span>
              </div>
                      </div>
                  </div>
                  <section class="elementor-section elementor-inner-section elementor-element elementor-element-653a9bc elementor-section-full_width elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="653a9bc" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-d207cad" data-id="d207cad" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-3136af0 elementor-widget elementor-widget-image" data-id="3136af0" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                                        <img loading="lazy" decoding="async" width="1080" height="810" src="https://www.bethammicfc.org/wp-content/uploads/2019/08/IMG-20190822-WA0050.jpg" class="attachment-full size-full wp-image-195" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2019/08/IMG-20190822-WA0050.jpg 1080w, https://www.bethammicfc.org/wp-content/uploads/2019/08/IMG-20190822-WA0050-300x225.jpg 300w, https://www.bethammicfc.org/wp-content/uploads/2019/08/IMG-20190822-WA0050-768x576.jpg 768w, https://www.bethammicfc.org/wp-content/uploads/2019/08/IMG-20190822-WA0050-1024x768.jpg 1024w, https://www.bethammicfc.org/wp-content/uploads/2019/08/IMG-20190822-WA0050-600x450.jpg 600w" sizes="(max-width: 1080px) 100vw, 1080px" />                              </div>
                  </div>
                  <div class="elementor-element elementor-element-196681f elementor-widget elementor-widget-heading" data-id="196681f" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h6 class="elementor-heading-title elementor-size-default"><a href="https://www.bethammicfc.org/children-ministries/"><b>Children Ministries</b></a></h6>        </div>
                  </div>
                  <div class="elementor-element elementor-element-80986f5 elementor-widget elementor-widget-text-editor" data-id="80986f5" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                            <p>Children ministry is done at Beth Ammi Christian fellowship church through the program whose main goal is to improve standards of living of children and their families to fully exploit the available resources and reach their God given potentials for sustainable development&#8230;</p>                </div>
                  </div>
                  <div class="elementor-element elementor-element-058e713 elementor-align-center elementor-widget elementor-widget-button" data-id="058e713" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
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
                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-e278acc" data-id="e278acc" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-38eb15b elementor-widget elementor-widget-image" data-id="38eb15b" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                                        <img loading="lazy" decoding="async" width="1081" height="1080" src="https://www.bethammicfc.org/wp-content/uploads/2019/08/cropped-P1590311.jpg" class="attachment-full size-full wp-image-509" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2019/08/cropped-P1590311.jpg 1081w, https://www.bethammicfc.org/wp-content/uploads/2019/08/cropped-P1590311-150x150.jpg 150w, https://www.bethammicfc.org/wp-content/uploads/2019/08/cropped-P1590311-300x300.jpg 300w, https://www.bethammicfc.org/wp-content/uploads/2019/08/cropped-P1590311-768x767.jpg 768w, https://www.bethammicfc.org/wp-content/uploads/2019/08/cropped-P1590311-1024x1023.jpg 1024w, https://www.bethammicfc.org/wp-content/uploads/2019/08/cropped-P1590311-600x599.jpg 600w, https://www.bethammicfc.org/wp-content/uploads/2019/08/cropped-P1590311-100x100.jpg 100w" sizes="(max-width: 1081px) 100vw, 1081px" />                              </div>
                  </div>
                  <div class="elementor-element elementor-element-af35f0e elementor-widget elementor-widget-heading" data-id="af35f0e" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h6 class="elementor-heading-title elementor-size-default"><a href="https://www.bethammicfc.org/women-ministries/"><b>Women Ministries</b></a></h6>        </div>
                  </div>
                  <div class="elementor-element elementor-element-47e7aba elementor-widget elementor-widget-text-editor" data-id="47e7aba" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                            <p>Women Ministries at Bethammi (WMB) is a ministry working in Bethammi Christian Fellowship Church that is made of Women around Bethammi Parishes.<br />Each Parish organizes its activities that are mainly related with Humanitarian Activities, Spiritual&#8230;.</p>                </div>
                  </div>
                  <div class="elementor-element elementor-element-47c9b75 elementor-align-center elementor-widget elementor-widget-button" data-id="47c9b75" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
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
                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3dfd759" data-id="3dfd759" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-19b4212 elementor-widget elementor-widget-image" data-id="19b4212" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                                        <img loading="lazy" decoding="async" width="2736" height="1824" src="https://www.bethammicfc.org/wp-content/uploads/2019/09/P8880395.jpg" class="attachment-full size-full wp-image-689" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2019/09/P8880395.jpg 2736w, https://www.bethammicfc.org/wp-content/uploads/2019/09/P8880395-300x200.jpg 300w, https://www.bethammicfc.org/wp-content/uploads/2019/09/P8880395-768x512.jpg 768w, https://www.bethammicfc.org/wp-content/uploads/2019/09/P8880395-1024x683.jpg 1024w, https://www.bethammicfc.org/wp-content/uploads/2019/09/P8880395-1620x1080.jpg 1620w, https://www.bethammicfc.org/wp-content/uploads/2019/09/P8880395-600x400.jpg 600w" sizes="(max-width: 2736px) 100vw, 2736px" />                              </div>
                  </div>
                  <div class="elementor-element elementor-element-18228e7 elementor-widget elementor-widget-heading" data-id="18228e7" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h6 class="elementor-heading-title elementor-size-default"><a href="https://www.bethammicfc.org/outreach-evangelism"><b>Outreach Evangelism</b></a></h6>        </div>
                  </div>
                  <div class="elementor-element elementor-element-6e1c0ad elementor-widget elementor-widget-text-editor" data-id="6e1c0ad" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                            <p><span style="white-space: pre-wrap;">One of our main mission as a church is to prepare the bride of Jesus Christ. We want to transform more and Convert more to Jesus Christ who is the Only way, Truth and Life. We do these in term of both small gatherings and Crusades to reach as many as Possible&#8230;&#8230;</span></p>                </div>
                  </div>
                  <div class="elementor-element elementor-element-bbfdfb9 elementor-align-center elementor-widget elementor-widget-button" data-id="bbfdfb9" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
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
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-bd6c862 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="bd6c862" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-85fba5f" data-id="85fba5f" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-0cf2ebf elementor-widget elementor-widget-heading" data-id="0cf2ebf" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h3 class="elementor-heading-title elementor-size-default">OUR PARISHES</h3>        </div>
                  </div>
                  <div class="elementor-element elementor-element-f44fd96 elementor-align-center elementor-mobile-align-center elementor-tablet-align-left elementor-widget elementor-widget-button" data-id="f44fd96" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
                  <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                    <a class="elementor-button elementor-button-link elementor-size-md" href="http://bethammicfc.org/our-parishes">
                      <span class="elementor-button-content-wrapper">
                      <span class="elementor-button-icon">
                  <i aria-hidden="true" class="fas fa-church"></i>      </span>
                            <span class="elementor-button-text">More</span>
                    </span>
                    </a>
                  </div>
                          </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-1467dfd elementor-section-content-middle elementor-reverse-mobile elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="1467dfd" data-element_type="section" data-e-type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-bf72eb9" data-id="bf72eb9" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-a276fa1 elementor-widget elementor-widget-image" data-id="a276fa1" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                                        <img loading="lazy" decoding="async" width="2287" height="942" src="https://www.bethammicfc.org/wp-content/uploads/2019/08/cropped-P8880240-e1566663659779.jpg" class="attachment-full size-full wp-image-523" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2019/08/cropped-P8880240-e1566663659779.jpg 2287w, https://www.bethammicfc.org/wp-content/uploads/2019/08/cropped-P8880240-e1566663659779-300x124.jpg 300w, https://www.bethammicfc.org/wp-content/uploads/2019/08/cropped-P8880240-e1566663659779-768x316.jpg 768w, https://www.bethammicfc.org/wp-content/uploads/2019/08/cropped-P8880240-e1566663659779-1024x422.jpg 1024w, https://www.bethammicfc.org/wp-content/uploads/2019/08/cropped-P8880240-e1566663659779-1920x791.jpg 1920w, https://www.bethammicfc.org/wp-content/uploads/2019/08/cropped-P8880240-e1566663659779-600x247.jpg 600w" sizes="(max-width: 2287px) 100vw, 2287px" />                              </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-f8a1065" data-id="f8a1065" data-element_type="column" data-e-type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-background-overlay"></div>
                      <div class="elementor-element elementor-element-75c0b76 elementor-position-inline-start elementor-view-default elementor-mobile-position-block-start elementor-widget elementor-widget-icon-box" data-id="75c0b76" data-element_type="widget" data-e-type="widget" data-widget_type="icon-box.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-icon-box-wrapper">

                      <div class="elementor-icon-box-icon">
                  <a href="https://www.bethammicfc.org/our-parishes/" class="elementor-icon" tabindex="-1" aria-label="Kabuga Parish">
                  <i aria-hidden="true" class="fas fa-church"></i>        </a>
                </div>

                      <div class="elementor-icon-box-content">

                            <h6 class="elementor-icon-box-title">
                      <a href="https://www.bethammicfc.org/our-parishes/" >
                        Kabuga Parish            </a>
                    </h6>


                </div>

              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-bd75466 elementor-position-inline-start elementor-view-default elementor-mobile-position-block-start elementor-widget elementor-widget-icon-box" data-id="bd75466" data-element_type="widget" data-e-type="widget" data-widget_type="icon-box.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-icon-box-wrapper">

                      <div class="elementor-icon-box-icon">
                  <a href="https://www.bethammicfc.org/our-parishes/" class="elementor-icon" tabindex="-1" aria-label="Gahanga Parish">
                  <i aria-hidden="true" class="fas fa-church"></i>        </a>
                </div>

                      <div class="elementor-icon-box-content">

                            <h6 class="elementor-icon-box-title">
                      <a href="https://www.bethammicfc.org/our-parishes/" >
                        Gahanga Parish            </a>
                    </h6>


                </div>

              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-bcdfd8e elementor-position-inline-start elementor-view-default elementor-mobile-position-block-start elementor-widget elementor-widget-icon-box" data-id="bcdfd8e" data-element_type="widget" data-e-type="widget" data-widget_type="icon-box.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-icon-box-wrapper">

                      <div class="elementor-icon-box-icon">
                  <a href="https://www.bethammicfc.org/our-parishes/" class="elementor-icon" tabindex="-1" aria-label="Muyumbu Parish">
                  <i aria-hidden="true" class="fas fa-church"></i>        </a>
                </div>

                      <div class="elementor-icon-box-content">

                            <h6 class="elementor-icon-box-title">
                      <a href="https://www.bethammicfc.org/our-parishes/" >
                        Muyumbu Parish            </a>
                    </h6>


                </div>

              </div>
                      </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-2ec4eb7" data-id="2ec4eb7" data-element_type="column" data-e-type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-background-overlay"></div>
                      <div class="elementor-element elementor-element-d9612e5 elementor-position-inline-start elementor-view-default elementor-mobile-position-block-start elementor-widget elementor-widget-icon-box" data-id="d9612e5" data-element_type="widget" data-e-type="widget" data-widget_type="icon-box.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-icon-box-wrapper">

                      <div class="elementor-icon-box-icon">
                  <a href="https://www.bethammicfc.org/our-parishes/" class="elementor-icon" tabindex="-1" aria-label="Runingu Parish">
                  <i aria-hidden="true" class="fas fa-church"></i>        </a>
                </div>

                      <div class="elementor-icon-box-content">

                            <h6 class="elementor-icon-box-title">
                      <a href="https://www.bethammicfc.org/our-parishes/" >
                        Runingu Parish            </a>
                    </h6>


                </div>

              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-6197372 elementor-position-inline-start elementor-view-default elementor-mobile-position-block-start elementor-widget elementor-widget-icon-box" data-id="6197372" data-element_type="widget" data-e-type="widget" data-widget_type="icon-box.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-icon-box-wrapper">

                      <div class="elementor-icon-box-icon">
                  <a href="https://www.bethammicfc.org/our-parishes/" class="elementor-icon" tabindex="-1" aria-label="Luvungi Parish">
                  <i aria-hidden="true" class="fas fa-church"></i>        </a>
                </div>

                      <div class="elementor-icon-box-content">

                            <h6 class="elementor-icon-box-title">
                      <a href="https://www.bethammicfc.org/our-parishes/" >
                        Luvungi Parish            </a>
                    </h6>


                </div>

              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-8a54ac6 elementor-position-inline-start elementor-view-default elementor-mobile-position-block-start elementor-widget elementor-widget-icon-box" data-id="8a54ac6" data-element_type="widget" data-e-type="widget" data-widget_type="icon-box.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-icon-box-wrapper">

                      <div class="elementor-icon-box-icon">
                  <a href="https://www.bethammicfc.org/our-parishes/" class="elementor-icon" tabindex="-1" aria-label="Mutarule Parish">
                  <i aria-hidden="true" class="fas fa-church"></i>        </a>
                </div>

                      <div class="elementor-icon-box-content">

                            <h6 class="elementor-icon-box-title">
                      <a href="https://www.bethammicfc.org/our-parishes/" >
                        Mutarule Parish            </a>
                    </h6>


                </div>

              </div>
                      </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-177f365" data-id="177f365" data-element_type="column" data-e-type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-background-overlay"></div>
                      <div class="elementor-element elementor-element-81b8b56 elementor-position-inline-start elementor-view-default elementor-mobile-position-block-start elementor-widget elementor-widget-icon-box" data-id="81b8b56" data-element_type="widget" data-e-type="widget" data-widget_type="icon-box.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-icon-box-wrapper">

                      <div class="elementor-icon-box-icon">
                  <a href="https://www.bethammicfc.org/our-parishes/" class="elementor-icon" tabindex="-1" aria-label="Burera Parish">
                  <i aria-hidden="true" class="fas fa-church"></i>        </a>
                </div>

                      <div class="elementor-icon-box-content">

                            <h6 class="elementor-icon-box-title">
                      <a href="https://www.bethammicfc.org/our-parishes/" >
                        Burera Parish            </a>
                    </h6>


                </div>

              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-1d409b1 elementor-position-inline-start elementor-view-default elementor-mobile-position-block-start elementor-widget elementor-widget-icon-box" data-id="1d409b1" data-element_type="widget" data-e-type="widget" data-widget_type="icon-box.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-icon-box-wrapper">

                      <div class="elementor-icon-box-icon">
                  <a href="https://www.bethammicfc.org/our-parishes/" class="elementor-icon" tabindex="-1" aria-label="Nyamasheke Parish">
                  <i aria-hidden="true" class="fas fa-church"></i>        </a>
                </div>

                      <div class="elementor-icon-box-content">

                            <h6 class="elementor-icon-box-title">
                      <a href="https://www.bethammicfc.org/our-parishes/" >
                        Nyamasheke Parish            </a>
                    </h6>


                </div>

              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-e15a2ef elementor-position-inline-start elementor-view-default elementor-mobile-position-block-start elementor-widget elementor-widget-icon-box" data-id="e15a2ef" data-element_type="widget" data-e-type="widget" data-widget_type="icon-box.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-icon-box-wrapper">

                      <div class="elementor-icon-box-icon">
                  <a href="https://www.bethammicfc.org/our-parishes/" class="elementor-icon" tabindex="-1" aria-label="Nyaruguru Parish">
                  <i aria-hidden="true" class="fas fa-church"></i>        </a>
                </div>

                      <div class="elementor-icon-box-content">

                            <h6 class="elementor-icon-box-title">
                      <a href="https://www.bethammicfc.org/our-parishes/" >
                        Nyaruguru Parish            </a>
                    </h6>


                </div>

              </div>
                      </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-b0506q3 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="b0506q3" data-element_type="section" data-e-type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                      <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d908984" data-id="d908984" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <section class="elementor-section elementor-inner-section elementor-element elementor-element-3a0a173 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="3a0a173" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-6e1a6b1" data-id="6e1a6b1" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-96f1f18 elementor-widget elementor-widget-heading" data-id="96f1f18" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h2 class="elementor-heading-title elementor-size-default">OUR STAFF</h2>        </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-inner-section elementor-element elementor-element-cfc2260 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="cfc2260" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-877fd22" data-id="877fd22" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-4d1df20 elementor-position-top elementor-widget elementor-widget-image-box" data-id="4d1df20" data-element_type="widget" data-e-type="widget" data-widget_type="image-box.default">
                  <div class="elementor-widget-container">
                    <div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img loading="lazy" decoding="async" width="919" height="1024" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/Alfred-Pastor-e1673475223303.png" class="attachment-full size-full wp-image-1852" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2023/01/Alfred-Pastor-e1673475223303.png 919w, https://www.bethammicfc.org/wp-content/uploads/2023/01/Alfred-Pastor-e1673475223303-269x300.png 269w, https://www.bethammicfc.org/wp-content/uploads/2023/01/Alfred-Pastor-e1673475223303-768x856.png 768w, https://www.bethammicfc.org/wp-content/uploads/2023/01/Alfred-Pastor-e1673475223303-600x669.png 600w" sizes="(max-width: 919px) 100vw, 919px" /></figure><div class="elementor-image-box-content"><h6 class="elementor-image-box-title">Rev. Alfred Gatabazi</h6><p class="elementor-image-box-description">founder/Legal Representative</p></div></div>        </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b7c8a25" data-id="b7c8a25" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-41c7c8f elementor-position-top elementor-widget elementor-widget-image-box" data-id="41c7c8f" data-element_type="widget" data-e-type="widget" data-widget_type="image-box.default">
                  <div class="elementor-widget-container">
                    <div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img loading="lazy" decoding="async" width="648" height="865" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/Pastor-Kanziga.png" class="attachment-full size-full wp-image-1859" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2023/01/Pastor-Kanziga.png 648w, https://www.bethammicfc.org/wp-content/uploads/2023/01/Pastor-Kanziga-225x300.png 225w, https://www.bethammicfc.org/wp-content/uploads/2023/01/Pastor-Kanziga-600x801.png 600w" sizes="(max-width: 648px) 100vw, 648px" /></figure><div class="elementor-image-box-content"><h6 class="elementor-image-box-title">Pastor Kanziga Beatrice</h6><p class="elementor-image-box-description">Co-founder/rev of Kabuga parish</p></div></div>        </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-inner-section elementor-element elementor-element-3312bfa elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="3312bfa" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-feb67c5" data-id="feb67c5" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-e89b744 elementor-widget__width-auto elementor-position-top elementor-widget elementor-widget-image-box" data-id="e89b744" data-element_type="widget" data-e-type="widget" data-widget_type="image-box.default">
                  <div class="elementor-widget-container">
                    <div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img loading="lazy" decoding="async" width="960" height="974" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/ndamiye-1.png" class="attachment-full size-full wp-image-1971" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2023/01/ndamiye-1.png 960w, https://www.bethammicfc.org/wp-content/uploads/2023/01/ndamiye-1-296x300.png 296w, https://www.bethammicfc.org/wp-content/uploads/2023/01/ndamiye-1-768x779.png 768w, https://www.bethammicfc.org/wp-content/uploads/2023/01/ndamiye-1-600x609.png 600w, https://www.bethammicfc.org/wp-content/uploads/2023/01/ndamiye-1-100x100.png 100w" sizes="(max-width: 960px) 100vw, 960px" /></figure><div class="elementor-image-box-content"><h6 class="elementor-image-box-title">Rev. Allan Ndamiye</h6><p class="elementor-image-box-description">Vice- Legal Representative</p></div></div>        </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-335ee1c" data-id="335ee1c" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-bc71955 elementor-position-top elementor-widget elementor-widget-image-box" data-id="bc71955" data-element_type="widget" data-e-type="widget" data-widget_type="image-box.default">
                  <div class="elementor-widget-container">
                    <div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img loading="lazy" decoding="async" width="810" height="951" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/Pastor-David.png" class="attachment-full size-full wp-image-1865" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2023/01/Pastor-David.png 810w, https://www.bethammicfc.org/wp-content/uploads/2023/01/Pastor-David-256x300.png 256w, https://www.bethammicfc.org/wp-content/uploads/2023/01/Pastor-David-768x902.png 768w, https://www.bethammicfc.org/wp-content/uploads/2023/01/Pastor-David-600x704.png 600w" sizes="(max-width: 810px) 100vw, 810px" /></figure><div class="elementor-image-box-content"><h6 class="elementor-image-box-title">Rev. Hakizimana David</h6><p class="elementor-image-box-description">GENERAL SECRETARY</p></div></div>        </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3e61285" data-id="3e61285" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-f3d4324 elementor-position-top elementor-widget elementor-widget-image-box" data-id="f3d4324" data-element_type="widget" data-e-type="widget" data-widget_type="image-box.default">
                  <div class="elementor-widget-container">
                    <div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img loading="lazy" decoding="async" width="600" height="600" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/Mwungura.png" class="attachment-full size-full wp-image-1866" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2023/01/Mwungura.png 600w, https://www.bethammicfc.org/wp-content/uploads/2023/01/Mwungura-300x300.png 300w, https://www.bethammicfc.org/wp-content/uploads/2023/01/Mwungura-150x150.png 150w, https://www.bethammicfc.org/wp-content/uploads/2023/01/Mwungura-100x100.png 100w" sizes="(max-width: 600px) 100vw, 600px" /></figure><div class="elementor-image-box-content"><h6 class="elementor-image-box-title">Mwungura Janvier</h6><p class="elementor-image-box-description">Tresurer</p></div></div>        </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-9fd81ba elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="9fd81ba" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2317b45" data-id="2317b45" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-9e8b0ba elementor-align-center elementor-widget elementor-widget-button" data-id="9e8b0ba" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
                  <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                    <a class="elementor-button elementor-button-link elementor-size-sm" href="https://www.bethammicfc.org/our-staff/">
                      <span class="elementor-button-content-wrapper">
                            <span class="elementor-button-text">READ MORE  ABOUT OUR STAFF</span>
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
