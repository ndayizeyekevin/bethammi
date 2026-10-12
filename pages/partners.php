<?php

require_once __DIR__ . '/../includes/static-pages.php';
$staticPages = bethammi_static_pages();
$staticPageSlug = 'partners';
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
  <section class="container page-layout page-layout--partners" id="page-layout">
    <article class="page-article">
      <div class="remote-content" id="page-content">
        <template id="static-page-content">
              <div data-elementor-type="wp-page" data-elementor-id="361" class="elementor elementor-361">
                      <section class="elementor-section elementor-top-section elementor-element elementor-element-pzw1i4t elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="pzw1i4t" data-element_type="section" data-e-type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                      <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-1a4e914" data-id="1a4e914" data-element_type="column" data-e-type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-b3d6d32 elementor-widget elementor-widget-image" data-id="b3d6d32" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                                        <img loading="lazy" decoding="async" width="837" height="1024" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-21.jpeg" class="attachment-full size-full wp-image-1771" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-21.jpeg 837w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-21-245x300.jpeg 245w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-21-768x940.jpeg 768w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-21-600x734.jpeg 600w" sizes="(max-width: 837px) 100vw, 837px" />                              </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-572841d" data-id="572841d" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-de89e1a elementor-widget elementor-widget-heading" data-id="de89e1a" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h5 class="elementor-heading-title elementor-size-default">Partnership With <b>God's Beloved Ministries</b></h5>        </div>
                  </div>
                  <div class="elementor-element elementor-element-81bd81a elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="81bd81a" data-element_type="widget" data-e-type="widget" data-widget_type="divider.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-divider">
                <span class="elementor-divider-separator">
                      </span>
              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-1aa2a02 elementor-widget elementor-widget-text-editor" data-id="1aa2a02" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                            <p>Bethammi has been in partnership with God&#8217;s beloved Ministries Led by Rev. Pastor Josh since 2007. Since then we have organized open air crusades twice in every year. We have organized crusades in Rwanda, Uganda, Burundi, Togo, Ivory Cost.</p>                </div>
                  </div>
                  <div class="elementor-element elementor-element-c1e3dd2 elementor-align-center elementor-widget elementor-widget-button" data-id="c1e3dd2" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
                  <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                    <a class="elementor-button elementor-button-link elementor-size-sm" href="./josh.php">
                      <span class="elementor-button-content-wrapper">
                            <span class="elementor-button-text">Activity in Pictures</span>
                    </span>
                    </a>
                  </div>
                          </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-04080f3" data-id="04080f3" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-8e07fc0 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="8e07fc0" data-element_type="widget" data-e-type="widget" data-widget_type="divider.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-divider">
                <span class="elementor-divider-separator">
                      </span>
              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-5df1af9 elementor-widget elementor-widget-progress" data-id="5df1af9" data-element_type="widget" data-e-type="widget" data-widget_type="progress.default">
                  <div class="elementor-widget-container">
                          <span class="elementor-title" id="elementor-progress-bar-5df1af9">
                  <b>Countries</b>      </span>

              <div aria-labelledby="elementor-progress-bar-5df1af9" class="elementor-progress-wrapper" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="50" aria-valuetext="50% (5)">
                <div class="elementor-progress-bar" data-max="50">
                  <span class="elementor-progress-text">5</span>
                        </div>
              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-1527649 elementor-widget elementor-widget-progress" data-id="1527649" data-element_type="widget" data-e-type="widget" data-widget_type="progress.default">
                  <div class="elementor-widget-container">
                          <span class="elementor-title" id="elementor-progress-bar-1527649">
                  <b>Open Air Crusades</b>      </span>

              <div aria-labelledby="elementor-progress-bar-1527649" class="elementor-progress-wrapper" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="77" aria-valuetext="77% (28 Crusades)">
                <div class="elementor-progress-bar" data-max="77">
                  <span class="elementor-progress-text">28 Crusades</span>
                        </div>
              </div>
                      </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-c1c7355 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="c1c7355" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cc20d7d" data-id="cc20d7d" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-77cb370 elementor-widget elementor-widget-spacer" data-id="77cb370" data-element_type="widget" data-e-type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                <div class="elementor-spacer-inner"></div>
              </div>
                      </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-52d75ad elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="52d75ad" data-element_type="section" data-e-type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                      <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-05779ac" data-id="05779ac" data-element_type="column" data-e-type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-dfaa0d1 elementor-widget elementor-widget-image" data-id="dfaa0d1" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                                        <img loading="lazy" decoding="async" width="800" height="450" src="https://www.bethammicfc.org/wp-content/uploads/2019/08/logo-03-1.png" class="attachment-full size-full wp-image-172" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2019/08/logo-03-1.png 800w, https://www.bethammicfc.org/wp-content/uploads/2019/08/logo-03-1-300x169.png 300w, https://www.bethammicfc.org/wp-content/uploads/2019/08/logo-03-1-768x432.png 768w, https://www.bethammicfc.org/wp-content/uploads/2019/08/logo-03-1-600x338.png 600w" sizes="(max-width: 800px) 100vw, 800px" />                              </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-341057d" data-id="341057d" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-6f56690 elementor-widget elementor-widget-heading" data-id="6f56690" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h5 class="elementor-heading-title elementor-size-default">Partnership With <b>LIFT THEM UP</b></h5>        </div>
                  </div>
                  <div class="elementor-element elementor-element-4d40ee2 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="4d40ee2" data-element_type="widget" data-e-type="widget" data-widget_type="divider.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-divider">
                <span class="elementor-divider-separator">
                      </span>
              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-cd90ffd elementor-widget elementor-widget-text-editor" data-id="cd90ffd" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                            <p>Bethammi has been in partnership with Lift them up led by Kendra Willard(AKA Nyiramugisha)  since 2017. LTU is contributing in Children ministries. Where Vulnerable kids are sponsored. LTU is also contributing in Nutrition Program. LTU is helping us in both countries of Operations.</p>                </div>
                  </div>
                  <div class="elementor-element elementor-element-21b701d elementor-align-center elementor-widget elementor-widget-button" data-id="21b701d" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
                  <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                    <a class="elementor-button elementor-button-link elementor-size-sm" href="./ltu.php">
                      <span class="elementor-button-content-wrapper">
                            <span class="elementor-button-text">Activity in Pictures</span>
                    </span>
                    </a>
                  </div>
                          </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-f19670e" data-id="f19670e" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-6ea4d43 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="6ea4d43" data-element_type="widget" data-e-type="widget" data-widget_type="divider.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-divider">
                <span class="elementor-divider-separator">
                      </span>
              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-6c147b7 elementor-widget elementor-widget-progress" data-id="6c147b7" data-element_type="widget" data-e-type="widget" data-widget_type="progress.default">
                  <div class="elementor-widget-container">
                          <span class="elementor-title" id="elementor-progress-bar-6c147b7">
                  <b>Sponsored Kids</b>      </span>

              <div aria-labelledby="elementor-progress-bar-6c147b7" class="elementor-progress-wrapper" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="59" aria-valuetext="59% (75)">
                <div class="elementor-progress-bar" data-max="59">
                  <span class="elementor-progress-text">75</span>
                        </div>
              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-aa58f3b elementor-widget elementor-widget-progress" data-id="aa58f3b" data-element_type="widget" data-e-type="widget" data-widget_type="progress.default">
                  <div class="elementor-widget-container">
                          <span class="elementor-title" id="elementor-progress-bar-aa58f3b">
                  <b>Goats Provided</b>      </span>

              <div aria-labelledby="elementor-progress-bar-aa58f3b" class="elementor-progress-wrapper" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="49" aria-valuetext="49% (120)">
                <div class="elementor-progress-bar" data-max="49">
                  <span class="elementor-progress-text">120</span>
                        </div>
              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-18cd623 elementor-widget elementor-widget-progress" data-id="18cd623" data-element_type="widget" data-e-type="widget" data-widget_type="progress.default">
                  <div class="elementor-widget-container">
                          <span class="elementor-title" id="elementor-progress-bar-18cd623">
                  <b>Plates Served to Kids</b>      </span>

              <div aria-labelledby="elementor-progress-bar-18cd623" class="elementor-progress-wrapper" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="77" aria-valuetext="77% (5000+ plates)">
                <div class="elementor-progress-bar" data-max="77">
                  <span class="elementor-progress-text">5000+ plates</span>
                        </div>
              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-009047e elementor-widget elementor-widget-progress" data-id="009047e" data-element_type="widget" data-e-type="widget" data-widget_type="progress.default">
                  <div class="elementor-widget-container">
                          <span class="elementor-title" id="elementor-progress-bar-009047e">
                  <b>Sowing Machines</b>      </span>

              <div aria-labelledby="elementor-progress-bar-009047e" class="elementor-progress-wrapper" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="28" aria-valuetext="28% (12)">
                <div class="elementor-progress-bar" data-max="28">
                  <span class="elementor-progress-text">12</span>
                        </div>
              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-7a9dc1f elementor-widget elementor-widget-progress" data-id="7a9dc1f" data-element_type="widget" data-e-type="widget" data-widget_type="progress.default">
                  <div class="elementor-widget-container">
                          <span class="elementor-title" id="elementor-progress-bar-7a9dc1f">
                  <b>Matelas+ Bedcovers</b>      </span>

              <div aria-labelledby="elementor-progress-bar-7a9dc1f" class="elementor-progress-wrapper" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="60" aria-valuetext="60% (140+)">
                <div class="elementor-progress-bar" data-max="60">
                  <span class="elementor-progress-text">140+</span>
                        </div>
              </div>
                      </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-6ba80a5 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="6ba80a5" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-596d177" data-id="596d177" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-e1e8983 elementor-widget elementor-widget-spacer" data-id="e1e8983" data-element_type="widget" data-e-type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                <div class="elementor-spacer-inner"></div>
              </div>
                      </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-bcbc62c elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="bcbc62c" data-element_type="section" data-e-type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                      <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-ba4a961" data-id="ba4a961" data-element_type="column" data-e-type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-01adb40 elementor-widget elementor-widget-image" data-id="01adb40" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                                        <img loading="lazy" decoding="async" width="348" height="120" src="https://www.bethammicfc.org/wp-content/uploads/2022/04/logo-main-initial.png" class="attachment-full size-full wp-image-813" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2022/04/logo-main-initial.png 348w, https://www.bethammicfc.org/wp-content/uploads/2022/04/logo-main-initial-300x103.png 300w" sizes="(max-width: 348px) 100vw, 348px" />                              </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-e8b22ca" data-id="e8b22ca" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-f2aefe3 elementor-widget elementor-widget-heading" data-id="f2aefe3" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h5 class="elementor-heading-title elementor-size-default">Partnership With <b>NEW CITY FELLOWSHIP SOUTH CITY CHURCH</b></h5>        </div>
                  </div>
                  <div class="elementor-element elementor-element-faa069c elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="faa069c" data-element_type="widget" data-e-type="widget" data-widget_type="divider.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-divider">
                <span class="elementor-divider-separator">
                      </span>
              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-a8da494 elementor-widget elementor-widget-text-editor" data-id="a8da494" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                            <p>Bethammi has been in partnership with New City Fellowship South City Church led by Pastor Barry since 2016. They have contributed in Trainings, Nutrition program, and they helped us build a school in Nyaruguru</p>                </div>
                  </div>
                    </div>
                    <a class="elementor-button elementor-button-link elementor-size-sm" href="./ltu.php">
                      <span class="elementor-button-content-wrapper">
                            <span class="elementor-button-text">Activity in Pictures</span>
                    </span>
                    </a>
              </div>
                  <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-87d289a" data-id="87d289a" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-6463688 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="6463688" data-element_type="widget" data-e-type="widget" data-widget_type="divider.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-divider">
                <span class="elementor-divider-separator">
                      </span>
              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-fcdb507 elementor-widget elementor-widget-progress" data-id="fcdb507" data-element_type="widget" data-e-type="widget" data-widget_type="progress.default">
                  <div class="elementor-widget-container">
                          <span class="elementor-title" id="elementor-progress-bar-fcdb507">
                  <b>School</b>      </span>

              <div aria-labelledby="elementor-progress-bar-fcdb507" class="elementor-progress-wrapper" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="50" aria-valuetext="50% (1 school with 6 classrooms)">
                <div class="elementor-progress-bar" data-max="50">
                  <span class="elementor-progress-text">1 school with 6 classrooms</span>
                        </div>
              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-68a993e elementor-widget elementor-widget-progress" data-id="68a993e" data-element_type="widget" data-e-type="widget" data-widget_type="progress.default">
                  <div class="elementor-widget-container">
                          <span class="elementor-title" id="elementor-progress-bar-68a993e">
                  <b>Plates Contributed</b>      </span>

              <div aria-labelledby="elementor-progress-bar-68a993e" class="elementor-progress-wrapper" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="70" aria-valuetext="70% (2000+)">
                <div class="elementor-progress-bar" data-max="70">
                  <span class="elementor-progress-text">2000+</span>
                        </div>
              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-6e07e5f elementor-widget elementor-widget-progress" data-id="6e07e5f" data-element_type="widget" data-e-type="widget" data-widget_type="progress.default">
                  <div class="elementor-widget-container">
                          <span class="elementor-title" id="elementor-progress-bar-6e07e5f">
                  <b>Trainings organized</b>      </span>

              <div aria-labelledby="elementor-progress-bar-6e07e5f" class="elementor-progress-wrapper" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="39" aria-valuetext="39% (12+ )">
                <div class="elementor-progress-bar" data-max="39">
                  <span class="elementor-progress-text">12+ </span>
                        </div>
              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-65ec54c elementor-widget elementor-widget-progress" data-id="65ec54c" data-element_type="widget" data-e-type="widget" data-widget_type="progress.default">
                  <div class="elementor-widget-container">
                          <span class="elementor-title" id="elementor-progress-bar-65ec54c">
                  <b>Upcoming New Project</b>      </span>

              <div aria-labelledby="elementor-progress-bar-65ec54c" class="elementor-progress-wrapper" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="28" aria-valuetext="28% (1)">
                <div class="elementor-progress-bar" data-max="28">
                  <span class="elementor-progress-text">1</span>
                        </div>
              </div>
                      </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-da6eea9 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="da6eea9" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ec7e469" data-id="ec7e469" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-8be0caf elementor-widget elementor-widget-spacer" data-id="8be0caf" data-element_type="widget" data-e-type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                <div class="elementor-spacer-inner"></div>
              </div>
                      </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-94392ca elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="94392ca" data-element_type="section" data-e-type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                      <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-196dec7" data-id="196dec7" data-element_type="column" data-e-type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-30586f7 elementor-widget elementor-widget-image" data-id="30586f7" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                                        <img loading="lazy" decoding="async" width="1654" height="953" src="https://www.bethammicfc.org/wp-content/uploads/2022/07/Joan-Hunter-2-e1672757610554.png" class="attachment-full size-full wp-image-859" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2022/07/Joan-Hunter-2-e1672757610554.png 1654w, https://www.bethammicfc.org/wp-content/uploads/2022/07/Joan-Hunter-2-e1672757610554-300x173.png 300w, https://www.bethammicfc.org/wp-content/uploads/2022/07/Joan-Hunter-2-e1672757610554-1024x590.png 1024w, https://www.bethammicfc.org/wp-content/uploads/2022/07/Joan-Hunter-2-e1672757610554-768x443.png 768w, https://www.bethammicfc.org/wp-content/uploads/2022/07/Joan-Hunter-2-e1672757610554-1536x885.png 1536w, https://www.bethammicfc.org/wp-content/uploads/2022/07/Joan-Hunter-2-e1672757610554-600x346.png 600w" sizes="(max-width: 1654px) 100vw, 1654px" />                              </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-9356eb7" data-id="9356eb7" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-9f86f67 elementor-widget elementor-widget-heading" data-id="9f86f67" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h5 class="elementor-heading-title elementor-size-default">Partnership With <b>JOAN HUNTER MINISTRIES</b></h5>        </div>
                  </div>
                  <div class="elementor-element elementor-element-17b90a3 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="17b90a3" data-element_type="widget" data-e-type="widget" data-widget_type="divider.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-divider">
                <span class="elementor-divider-separator">
                      </span>
              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-efe77ec elementor-widget elementor-widget-text-editor" data-id="efe77ec" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                            <p>Bethammi has been in partnership with Joan Hunter Ministries since 2021. we are partnering in organizing Open air Crusades under out reach evangelism to reach more people.</p>                </div>
                  </div>
                  <div class="elementor-element elementor-element-0164a98 elementor-align-center elementor-widget elementor-widget-button" data-id="0164a98" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
                  <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                    <a class="elementor-button elementor-button-link elementor-size-sm" href="./joan.php">
                      <span class="elementor-button-content-wrapper">
                            <span class="elementor-button-text">Activities in Pictures</span>
                    </span>
                    </a>
                  </div>
                          </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-26fe4bb" data-id="26fe4bb" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-cd71b4f elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="cd71b4f" data-element_type="widget" data-e-type="widget" data-widget_type="divider.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-divider">
                <span class="elementor-divider-separator">
                      </span>
              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-8b9f1da elementor-widget elementor-widget-progress" data-id="8b9f1da" data-element_type="widget" data-e-type="widget" data-widget_type="progress.default">
                  <div class="elementor-widget-container">
                          <span class="elementor-title" id="elementor-progress-bar-8b9f1da">
                  <b>Crusades</b>      </span>

              <div aria-labelledby="elementor-progress-bar-8b9f1da" class="elementor-progress-wrapper" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="41" aria-valuetext="41% (2)">
                <div class="elementor-progress-bar" data-max="41">
                  <span class="elementor-progress-text">2</span>
                        </div>
              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-9891e52 elementor-widget elementor-widget-progress" data-id="9891e52" data-element_type="widget" data-e-type="widget" data-widget_type="progress.default">
                  <div class="elementor-widget-container">
                          <span class="elementor-title" id="elementor-progress-bar-9891e52">
                  <b>Countries</b>      </span>

              <div aria-labelledby="elementor-progress-bar-9891e52" class="elementor-progress-wrapper" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="28" aria-valuetext="28% (1)">
                <div class="elementor-progress-bar" data-max="28">
                  <span class="elementor-progress-text">1</span>
                        </div>
              </div>
                      </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-ae25eca elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="ae25eca" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-74dfb95" data-id="74dfb95" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-a6592b2 elementor-widget elementor-widget-spacer" data-id="a6592b2" data-element_type="widget" data-e-type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                <div class="elementor-spacer-inner"></div>
              </div>
                      </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-9388cda elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="9388cda" data-element_type="section" data-e-type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                      <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-4958d6c" data-id="4958d6c" data-element_type="column" data-e-type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-11f2319 elementor-widget elementor-widget-image" data-id="11f2319" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                                        <img loading="lazy" decoding="async" width="5472" height="3648" src="https://www.bethammicfc.org/wp-content/uploads/2019/08/P8630259.jpg" class="attachment-full size-full wp-image-214" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2019/08/P8630259.jpg 5472w, https://www.bethammicfc.org/wp-content/uploads/2019/08/P8630259-300x200.jpg 300w, https://www.bethammicfc.org/wp-content/uploads/2019/08/P8630259-768x512.jpg 768w, https://www.bethammicfc.org/wp-content/uploads/2019/08/P8630259-1024x683.jpg 1024w, https://www.bethammicfc.org/wp-content/uploads/2019/08/P8630259-600x400.jpg 600w" sizes="(max-width: 5472px) 100vw, 5472px" />                              </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-60bda27" data-id="60bda27" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-b644678 elementor-widget elementor-widget-heading" data-id="b644678" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h5 class="elementor-heading-title elementor-size-default">Partnership With <b>Glenn Family</b></h5>        </div>
                  </div>
                  <div class="elementor-element elementor-element-c6baac2 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="c6baac2" data-element_type="widget" data-e-type="widget" data-widget_type="divider.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-divider">
                <span class="elementor-divider-separator">
                      </span>
              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-6632102 elementor-widget elementor-widget-text-editor" data-id="6632102" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                            <p>Bethammi has been in partnership with Glenn Shaeffer in organizing Trainings and Nutrition program</p>                </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-379d1b2" data-id="379d1b2" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-2e9178e elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="2e9178e" data-element_type="widget" data-e-type="widget" data-widget_type="divider.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-divider">
                <span class="elementor-divider-separator">
                      </span>
              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-fed9db7 elementor-widget elementor-widget-progress" data-id="fed9db7" data-element_type="widget" data-e-type="widget" data-widget_type="progress.default">
                  <div class="elementor-widget-container">
                          <span class="elementor-title" id="elementor-progress-bar-fed9db7">
                  <b>Training</b>      </span>

              <div aria-labelledby="elementor-progress-bar-fed9db7" class="elementor-progress-wrapper" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="41" aria-valuetext="41% (5+)">
                <div class="elementor-progress-bar" data-max="41">
                  <span class="elementor-progress-text">5+</span>
                        </div>
              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-ea8a5e7 elementor-widget elementor-widget-progress" data-id="ea8a5e7" data-element_type="widget" data-e-type="widget" data-widget_type="progress.default">
                  <div class="elementor-widget-container">
                          <span class="elementor-title" id="elementor-progress-bar-ea8a5e7">
                  <b>Plates in Nutrition</b>      </span>

              <div aria-labelledby="elementor-progress-bar-ea8a5e7" class="elementor-progress-wrapper" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="67" aria-valuetext="67% (3000+)">
                <div class="elementor-progress-bar" data-max="67">
                  <span class="elementor-progress-text">3000+</span>
                        </div>
              </div>
                      </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-398fb36 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="398fb36" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6dfe3b5" data-id="6dfe3b5" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-57fc340 elementor-widget elementor-widget-spacer" data-id="57fc340" data-element_type="widget" data-e-type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                <div class="elementor-spacer-inner"></div>
              </div>
                      </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-fd260e7 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="fd260e7" data-element_type="section" data-e-type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                      <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-95c5aaf" data-id="95c5aaf" data-element_type="column" data-e-type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-e808330 elementor-widget elementor-widget-image" data-id="e808330" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                                        <img loading="lazy" decoding="async" width="367" height="137" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/download.png" class="attachment-full size-full wp-image-1830" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2023/01/download.png 367w, https://www.bethammicfc.org/wp-content/uploads/2023/01/download-300x112.png 300w" sizes="(max-width: 367px) 100vw, 367px" />                              </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-165950d" data-id="165950d" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-e4739c3 elementor-widget elementor-widget-heading" data-id="e4739c3" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h5 class="elementor-heading-title elementor-size-default">Partnership With <b>Third Millenium Ministries</b></h5>        </div>
                  </div>
                  <div class="elementor-element elementor-element-a9c482b elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="a9c482b" data-element_type="widget" data-e-type="widget" data-widget_type="divider.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-divider">
                <span class="elementor-divider-separator">
                      </span>
              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-cad4830 elementor-widget elementor-widget-text-editor" data-id="cad4830" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                            <p>Third Millennium is in Partnership with Bethammi since 2018. They are Helping us in Bible studies, Training and provision of Bible to Christians who can&#8217;t afford to buy those Bibles.</p>                </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-26c2ac8" data-id="26c2ac8" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-3c5599f elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="3c5599f" data-element_type="widget" data-e-type="widget" data-widget_type="divider.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-divider">
                <span class="elementor-divider-separator">
                      </span>
              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-165dab9 elementor-widget elementor-widget-progress" data-id="165dab9" data-element_type="widget" data-e-type="widget" data-widget_type="progress.default">
                  <div class="elementor-widget-container">
                          <span class="elementor-title" id="elementor-progress-bar-165dab9">
                  <b>Training sessions and Bible studies</b>      </span>

              <div aria-labelledby="elementor-progress-bar-165dab9" class="elementor-progress-wrapper" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="27" aria-valuetext="27% (8)">
                <div class="elementor-progress-bar" data-max="27">
                  <span class="elementor-progress-text">8</span>
                        </div>
              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-0714005 elementor-widget elementor-widget-progress" data-id="0714005" data-element_type="widget" data-e-type="widget" data-widget_type="progress.default">
                  <div class="elementor-widget-container">
                          <span class="elementor-title" id="elementor-progress-bar-0714005">
                  <b>Bible Provided</b>      </span>

              <div aria-labelledby="elementor-progress-bar-0714005" class="elementor-progress-wrapper" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="54" aria-valuetext="54% (800+)">
                <div class="elementor-progress-bar" data-max="54">
                  <span class="elementor-progress-text">800+</span>
                        </div>
              </div>
                      </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-76af436 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="76af436" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9ae20fd" data-id="9ae20fd" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-c2a0ca5 elementor-widget elementor-widget-spacer" data-id="c2a0ca5" data-element_type="widget" data-e-type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                <div class="elementor-spacer-inner"></div>
              </div>
                      </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-c52b4ce elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="c52b4ce" data-element_type="section" data-e-type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                      <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-baeb544" data-id="baeb544" data-element_type="column" data-e-type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-29e862a elementor-widget elementor-widget-image" data-id="29e862a" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                                        <img loading="lazy" decoding="async" width="1600" height="912" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/logo-Hand-Feet-.jpg" class="attachment-full size-full wp-image-1742" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2023/01/logo-Hand-Feet-.jpg 1600w, https://www.bethammicfc.org/wp-content/uploads/2023/01/logo-Hand-Feet--300x171.jpg 300w, https://www.bethammicfc.org/wp-content/uploads/2023/01/logo-Hand-Feet--1024x584.jpg 1024w, https://www.bethammicfc.org/wp-content/uploads/2023/01/logo-Hand-Feet--768x438.jpg 768w, https://www.bethammicfc.org/wp-content/uploads/2023/01/logo-Hand-Feet--1536x876.jpg 1536w, https://www.bethammicfc.org/wp-content/uploads/2023/01/logo-Hand-Feet--600x342.jpg 600w" sizes="(max-width: 1600px) 100vw, 1600px" />                              </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-9d39281" data-id="9d39281" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-ea9d98b elementor-widget elementor-widget-heading" data-id="ea9d98b" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h5 class="elementor-heading-title elementor-size-default">Partnership With <b>Hands and Feet Global</b></h5>        </div>
                  </div>
                  <div class="elementor-element elementor-element-c46a356 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="c46a356" data-element_type="widget" data-e-type="widget" data-widget_type="divider.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-divider">
                <span class="elementor-divider-separator">
                      </span>
              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-3e6e2e2 elementor-widget elementor-widget-text-editor" data-id="3e6e2e2" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                            <p>Hands and Feet is in Partnership with Bethammi Christian Fellowship Church Since 2022. We are partnering in Democratic Republic of Congo. Hands and Feet is helping in sponsorship program but focusing on kids whose parents used to be prostitutes. They are helping those kids to have all basic needs including food, Shelter and Cover school related costs. Hands and feet Global is also contributing to nutrition program of malnourished kids and Spiritual activity of their Parents.</p>                </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-12fa1bd" data-id="12fa1bd" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-d8e871b elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="d8e871b" data-element_type="widget" data-e-type="widget" data-widget_type="divider.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-divider">
                <span class="elementor-divider-separator">
                      </span>
              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-58ba632 elementor-widget elementor-widget-progress" data-id="58ba632" data-element_type="widget" data-e-type="widget" data-widget_type="progress.default">
                  <div class="elementor-widget-container">
                          <span class="elementor-title" id="elementor-progress-bar-58ba632">
                  <b>Sponsored Kids</b>      </span>

              <div aria-labelledby="elementor-progress-bar-58ba632" class="elementor-progress-wrapper" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="41" aria-valuetext="41% (17)">
                <div class="elementor-progress-bar" data-max="41">
                  <span class="elementor-progress-text">17</span>
                        </div>
              </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-75f869e elementor-widget elementor-widget-progress" data-id="75f869e" data-element_type="widget" data-e-type="widget" data-widget_type="progress.default">
                  <div class="elementor-widget-container">
                          <span class="elementor-title" id="elementor-progress-bar-75f869e">
                  <b>Kids awaiting</b>      </span>

              <div aria-labelledby="elementor-progress-bar-75f869e" class="elementor-progress-wrapper" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="75" aria-valuetext="75% (133)">
                <div class="elementor-progress-bar" data-max="75">
                  <span class="elementor-progress-text">133</span>
                        </div>
              </div>
                      </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-53t0mu9 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="53t0mu9" data-element_type="section" data-e-type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                      <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8e70dfa" data-id="8e70dfa" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <section class="elementor-section elementor-inner-section elementor-element elementor-element-58be768 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="58be768" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-1742918" data-id="1742918" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-8c78398 elementor-widget elementor-widget-heading" data-id="8c78398" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h3 class="elementor-heading-title elementor-size-default">Do you want to be our Partner?</h3>        </div>
                  </div>
                  <div class="elementor-element elementor-element-c528a6b elementor-widget elementor-widget-text-editor" data-id="c528a6b" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                            <p>Use this form to contact us, if you want to be one of our partners and we will contact you shortly</p>                </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-inner-section elementor-element elementor-element-119528b elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="119528b" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-2249e77" data-id="2249e77" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-4303c73 elementor-widget elementor-widget-shortcode" data-id="4303c73" data-element_type="widget" data-e-type="widget" data-widget_type="shortcode.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-shortcode"><div class="wpforms-container " id="wpforms-1517"><form id="wpforms-form-1517" class="wpforms-validate wpforms-form wpforms-ajax-form" data-formid="1517" method="post" enctype="multipart/form-data" action="/wp-json/wp/v2/pages?per_page=100&#038;_fields=slug%2Cdate%2Ctitle%2Clink%2Ccontent%2Cexcerpt%2Cfeatured_media" data-token="8db62c2a8427f23a7f28aedd00cf872a" data-token-time="1791726723"><noscript class="wpforms-error-noscript">Please enable JavaScript in your browser to complete this form.</noscript><div class="wpforms-field-container"><div id="wpforms-1517-field_0-container" class="wpforms-field wpforms-field-name" data-field-id="0"><label class="wpforms-field-label">Name <span class="wpforms-required-label">*</span></label><div class="wpforms-field-row wpforms-field-medium"><div class="wpforms-field-row-block wpforms-first wpforms-one-half"><input type="text" id="wpforms-1517-field_0" class="wpforms-field-name-first wpforms-field-required" name="wpforms[fields][0][first]" required><label for="wpforms-1517-field_0" class="wpforms-field-sublabel after">First</label></div><div class="wpforms-field-row-block wpforms-one-half"><input type="text" id="wpforms-1517-field_0-last" class="wpforms-field-name-last wpforms-field-required" name="wpforms[fields][0][last]" required><label for="wpforms-1517-field_0-last" class="wpforms-field-sublabel after">Last</label></div></div></div><div id="wpforms-1517-field_1-container" class="wpforms-field wpforms-field-email" data-field-id="1"><label class="wpforms-field-label" for="wpforms-1517-field_1">Email <span class="wpforms-required-label">*</span></label><input type="email" id="wpforms-1517-field_1" class="wpforms-field-medium wpforms-field-required" name="wpforms[fields][1]" spellcheck="false" required></div><div id="wpforms-1517-field_2-container" class="wpforms-field wpforms-field-textarea" data-field-id="2"><label class="wpforms-field-label" for="wpforms-1517-field_2">Comment or Message</label><textarea id="wpforms-1517-field_2" class="wpforms-field-medium" name="wpforms[fields][2]" ></textarea></div></div><!-- .wpforms-field-container --><div class="wpforms-submit-container" ><input type="hidden" name="wpforms[id]" value="1517"><input type="hidden" name="wpforms[time_token]" value="1791726723.8ac08727b7ab10066a0b6c43959ae4944ec93ad587d3fdfa1825869392ecd8c3"><input type="hidden" name="page_title" value=""><input type="hidden" name="page_url" value="https://www.bethammicfc.org/wp-json/wp/v2/pages?per_page=100&#038;_fields=slug,date,title,link,content,excerpt,featured_media"><input type="hidden" name="url_referer" value=""><button type="submit" name="wpforms[submit]" id="wpforms-submit-1517" class="wpforms-submit" data-alt-text="Sending..." data-submit-text="Submit" aria-live="assertive" value="wpforms-submit">Submit</button><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/plugins/wpforms-lite/assets/images/submit-spin.svg" class="wpforms-submit-spinner" style="display: none;" width="26" height="26" alt="Loading"></div></form></div>  <!-- .wpforms-container --></div>
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
      <section class="partners-followup" aria-label="Visit or contact Beth Ammi">
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
      </section>
    </article>
  </section>
</main>
<?php require __DIR__ . '/../includes/site-footer.php'; ?>
