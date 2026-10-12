<?php

require_once __DIR__ . '/../includes/static-pages.php';
$staticPages = bethammi_static_pages();
$staticPageSlug = 'outreach-evangelism';
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
              <div data-elementor-type="wp-page" data-elementor-id="2110" class="elementor elementor-2110">
                      <section class="elementor-section elementor-top-section elementor-element elementor-element-q0g21ys elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="q0g21ys" data-element_type="section" data-e-type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6ed6cac" data-id="6ed6cac" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-285c924 elementor-widget elementor-widget-heading" data-id="285c924" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h1 class="elementor-heading-title elementor-size-default">Outreach Evangelism</h1>        </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-fx0y08u elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="fx0y08u" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-827726c" data-id="827726c" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-173faf5 elementor-widget elementor-widget-image-box" data-id="173faf5" data-element_type="widget" data-e-type="widget" data-widget_type="image-box.default">
                  <div class="elementor-widget-container">
                    <div class="elementor-image-box-wrapper"><div class="elementor-image-box-content"><h4 class="elementor-image-box-title">About Our Outreach evangelism</h4><p class="elementor-image-box-description">Since its foundation, Beth Ammi Christian Fellowship Church wants to expand the word of God and to transform a lot of people and convert them to Christianity.  </p></div></div>        </div>
                  </div>
                  <div class="elementor-element elementor-element-6a30081 elementor-widget elementor-widget-text-editor" data-id="6a30081" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                            <p><span style="white-space: pre-wrap;">To reach a lot of people of people, With the Help of different ministries: (Currently we are working with <a href="./josh">God&#8217;s Beloved Ministries</a> and </span><a href="./joan" target="_blank" rel="noopener">Joan Hunter Ministries</a><span style="white-space: pre-wrap;">) </span></p><p><span style="white-space: pre-wrap;">Bethammi CFC is working with these ministries to organize open air crusades and Conferences.</span></p>                </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ce44ef3" data-id="ce44ef3" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-e235669 elementor-widget elementor-widget-image" data-id="e235669" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                                        <img loading="lazy" decoding="async" width="960" height="720" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.56.17-4.jpeg" class="attachment-large size-large wp-image-1783" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.56.17-4.jpeg 1024w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.56.17-4-300x225.jpeg 300w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.56.17-4-768x576.jpeg 768w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.56.17-4-600x450.jpeg 600w" sizes="(max-width: 960px) 100vw, 960px" />                              </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-ptmngds elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="ptmngds" data-element_type="section" data-e-type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-7d27ca3" data-id="7d27ca3" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-2efe9a1 elementor-widget elementor-widget-heading" data-id="2efe9a1" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h4 class="elementor-heading-title elementor-size-default">Outreach in Numbers</h4>        </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-6987376" data-id="6987376" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-c515849 elementor-widget elementor-widget-counter" data-id="c515849" data-element_type="widget" data-e-type="widget" data-widget_type="counter.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-counter">
                <div class="elementor-counter-title">Open air Crusades organized</div>      <div class="elementor-counter-number-wrapper">
                  <span class="elementor-counter-number-prefix"></span>
                  <span class="elementor-counter-number" data-duration="2000" data-to-value="30" data-from-value="1" data-delimiter=",">1</span>
                  <span class="elementor-counter-number-suffix">+</span>
                </div>
              </div>
                      </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-df902d3" data-id="df902d3" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-8129cec elementor-widget elementor-widget-counter" data-id="8129cec" data-element_type="widget" data-e-type="widget" data-widget_type="counter.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-counter">
                <div class="elementor-counter-title">Attendance so far</div>      <div class="elementor-counter-number-wrapper">
                  <span class="elementor-counter-number-prefix"></span>
                  <span class="elementor-counter-number" data-duration="2000" data-to-value="2000000" data-from-value="1" data-delimiter=",">1</span>
                  <span class="elementor-counter-number-suffix"></span>
                </div>
              </div>
                      </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-074ae51" data-id="074ae51" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-ca90815 elementor-widget elementor-widget-counter" data-id="ca90815" data-element_type="widget" data-e-type="widget" data-widget_type="counter.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-counter">
                <div class="elementor-counter-title">Conferences Organized</div>      <div class="elementor-counter-number-wrapper">
                  <span class="elementor-counter-number-prefix"></span>
                  <span class="elementor-counter-number" data-duration="2000" data-to-value="40" data-from-value="" data-delimiter=","></span>
                  <span class="elementor-counter-number-suffix">+</span>
                </div>
              </div>
                      </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-bda7a3f elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="bda7a3f" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-be87318" data-id="be87318" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-ab66c48 elementor-widget elementor-widget-spacer" data-id="ab66c48" data-element_type="widget" data-e-type="widget" data-widget_type="spacer.default">
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
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-9c477d7 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="9c477d7" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4116862" data-id="4116862" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-c0bec37 elementor-widget elementor-widget-heading" data-id="c0bec37" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h4 class="elementor-heading-title elementor-size-default">Pictures of our Open Air Crusades</h4>        </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-b9bedb0 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="b9bedb0" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f1549bc" data-id="f1549bc" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-0412a3d elementor-widget elementor-widget-spacer" data-id="0412a3d" data-element_type="widget" data-e-type="widget" data-widget_type="spacer.default">
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
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-raifkhq elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="raifkhq" data-element_type="section" data-e-type="section">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-11c13def" data-id="11c13def" data-element_type="column" data-e-type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-110e7cf elementor-widget elementor-widget-image-carousel" data-id="110e7cf" data-element_type="widget" data-e-type="widget" data-settings="{&quot;slides_to_show&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;none&quot;,&quot;autoplay_speed&quot;:3000,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;effect&quot;:&quot;slide&quot;,&quot;speed&quot;:500}" data-widget_type="image-carousel.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-image-carousel-wrapper swiper" role="region" aria-roledescription="carousel" aria-label="Image Carousel" dir="ltr">
                <div class="elementor-image-carousel swiper-wrapper" aria-live="off">
                          <div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="1 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-12-at-16.29.33-5-q0kexxfrub6uf7ir9h9omtm1glumxld8d9fx34y3uw.jpeg" alt="WhatsApp Image 2023-01-12 at 16.29.33 (5)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="2 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-12-at-16.29.32-q0keyfapg5vajsstd6zlg73sqxelzuc4rpu57e7mko.jpeg" alt="WhatsApp Image 2023-01-12 at 16.29.32" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="3 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-12-at-16.29.32-1-q0keych6vnrfkywwtnrpqpteyrsicr0xrbvorkbt3c.jpeg" alt="WhatsApp Image 2023-01-12 at 16.29.32 (1)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="4 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-12-at-16.29.33-q0key9nob5nkm510a4ju18j16m6epnpqqxx8bqfzm0.jpeg" alt="WhatsApp Image 2023-01-12 at 16.29.33" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="5 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-12-at-16.29.33-1-q0key7rzxhkzyx3ql3qkw903zufoa9ia2om9d6iryg.jpeg" alt="WhatsApp Image 2023-01-12 at 16.29.33 (1)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="6 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-12-at-16.29.33-2-q0key4yhczh5037u1kip6rpq7otkn6732ansxcmyh4.jpeg" alt="WhatsApp Image 2023-01-12 at 16.29.33 (2)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="7 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-12-at-16.29.33-3-q0key24yshda19bxi1athafcfj7h02vw1wpchir4zs.jpeg" alt="WhatsApp Image 2023-01-12 at 16.29.33 (3)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="8 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-12-at-16.29.33-4-q0kexzbg7z9f2fg0yi2xrt4yndldczkp1iqw1ovbig.jpeg" alt="WhatsApp Image 2023-01-12 at 16.29.33 (4)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="9 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-12-at-16.29.33-6-q0kexum99t2zgdmupy1sxcbnog8jai21cvhgnb2adk.jpeg" alt="WhatsApp Image 2023-01-12 at 16.29.33 (6)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="10 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-12-at-16.29.33-7-q0kexrsqpaz4hjqy6etx7v19wamfnequchj07h6gw8.jpeg" alt="WhatsApp Image 2023-01-12 at 16.29.33 (7)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="11 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-12-at-16.29.33-8-q0kexoz84sv9ipv1mvm1idqw450c0bfnc3kjrnanew.jpeg" alt="WhatsApp Image 2023-01-12 at 16.29.33 (8)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="12 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-12-at-16.29.33-9-q0kexn3jr4sovhxrxussde7yxd9lkx86nu9kt3dfrc.jpeg" alt="WhatsApp Image 2023-01-12 at 16.29.33 (9)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="13 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-12-at-16.29.33-10-q0kexl7vdgq48a0i8tzj8ep1qliv5j0pzkylujg83s.jpeg" alt="WhatsApp Image 2023-01-12 at 16.29.33 (10)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="14 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-12-at-16.29.33-11-q0kexjc6zsnjl238jt6a3f64jts4q4t9bbnmvzj0g8.jpeg" alt="WhatsApp Image 2023-01-12 at 16.29.33 (11)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="15 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-12-at-16.29.33-12-q0kexiecsym99g4lparnixenyfwrifpiz705epkemg.jpeg" alt="WhatsApp Image 2023-01-12 at 16.29.33 (12)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="16 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-12-at-16.29.33-13-q0kexgiofajom87c09yedxvqro6131i2axp6g5n6yw.jpeg" alt="WhatsApp Image 2023-01-12 at 16.29.33 (13)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="17 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-12-at-16.29.33-14-q0kexbthh4d906e5rpx9jh2fsqt70jzemafr1ru5u0.jpeg" alt="WhatsApp Image 2023-01-12 at 16.29.33 (14)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="18 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-12-at-16.29.33-15-q0kex8zywm9e1ci986pdtzs20l73dgo7lwhalxycco.jpeg" alt="WhatsApp Image 2023-01-12 at 16.29.33 (15)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="19 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-12-at-16.29.34-q0kex66gc45j2imconhi4iho8fkzqdd0liiu642ivc.jpeg" alt="WhatsApp Image 2023-01-12 at 16.29.34" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="20 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-12-at-16.29.34-1-q0kex3cxrm1o3oqg549mf17ag9yw3a1tl4kdqa6pe0.jpeg" alt="WhatsApp Image 2023-01-12 at 16.29.34 (1)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="21 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.56.17-q0i9m4n784dly358p60b4ayyh6uggbviaqd87oijns.jpeg" alt="WhatsApp Image 2023-01-11 at 14.56.17" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="22 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.56.17-5-q0i9m1tonm9qz99c5msfetokp18ct8kbacerrumq6g.jpeg" alt="WhatsApp Image 2023-01-11 at 14.56.17 (5)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="23 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.51.50-2-q0i9ljyr1rlaunza1x2ilg6tepodqzlevw0jnld7go.jpeg" alt="WhatsApp Image 2023-01-11 at 14.51.50 (2)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="24 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.51.50-q0i9lnq3t3qg53ttfyp0vf8ns95uls0c8emhkp7mrs.jpeg" alt="WhatsApp Image 2023-01-11 at 14.51.50" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="25 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.56.17-1-q0i9lqjmdlub3xppzhwwkwj1kery8vbj8sky0j3g94.jpeg" alt="WhatsApp Image 2023-01-11 at 14.56.17 (1)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="26 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.56.17-2-q0i9ltd4y3y62rlmj14sadtfcke1vymq96jegcz9qg.jpeg" alt="WhatsApp Image 2023-01-11 at 14.56.17 (2)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="27 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.56.17-3-q0i9lw6nim211lhj2kcnzv3t4q05j1xx9khuw6v37s.jpeg" alt="WhatsApp Image 2023-01-11 at 14.56.17 (3)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="28 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.56.17-4-q0i9lz06345w0fdfm3kjpce6wvm965949ygbc0qwp4.jpeg" alt="WhatsApp Image 2023-01-11 at 14.56.17 (4)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="29 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.51.32-23-q0i9l3zhtkzfdamhn85ux27zb5v544tz5oxahw0weg.jpeg" alt="WhatsApp Image 2023-01-11 at 14.51.32 (23)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="30 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.51.32-24-q0i9l5v679200ijrc8z421qwhxlvjj1fty89gfy420.jpeg" alt="WhatsApp Image 2023-01-11 at 14.51.32 (24)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="31 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.51.32-25-q0i9l9miyl75ayeaqalmc0sqvh3cebgd6gu7djsjd4.jpeg" alt="WhatsApp Image 2023-01-11 at 14.51.32 (25)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="32 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.51.32-q0i9lddvpxcale8u4c84lzul90kt93vaizg5anmyo8.jpeg" alt="WhatsApp Image 2023-01-11 at 14.51.32" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="33 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.51.50-1-q0i9lf9k3lev8m63td1dqzdifsbjoi2r78r497k6bs.jpeg" alt="WhatsApp Image 2023-01-11 at 14.51.50 (1)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="34 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.51.32-16-q0i9khfd9k4jmnj9ayet97wx1wybzecf2l9mz8ycjs.jpeg" alt="WhatsApp Image 2023-01-11 at 14.51.32 (16)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="35 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.51.32-17-q0i9kk8vu28elhf5uhmoyp7au2kfmhnm2z83f2u614.jpeg" alt="WhatsApp Image 2023-01-11 at 14.51.32 (17)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="36 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.51.32-18-q0i9kn2eekc9kbb2e0uko6hom86j9kyt3d6juwpzig.jpeg" alt="WhatsApp Image 2023-01-11 at 14.51.32 (18)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="37 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.51.32-19-q0i9kpvwz2g4j56yxk2gdns2edsmwoa03r50aqlszs.jpeg" alt="WhatsApp Image 2023-01-11 at 14.51.32 (19)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="38 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.51.32-20-q0i9ktn9qel9tl1ibloynmtwrxa3rgoxg9qy7ug8aw.jpeg" alt="WhatsApp Image 2023-01-11 at 14.51.32 (20)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="39 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.51.32-21-q0i9kxemhqqf40w1pnbgxlvr5grkm93usscw4yanm0.jpeg" alt="WhatsApp Image 2023-01-11 at 14.51.32 (21)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="40 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.51.32-15-q0i9kelup20ontncrf6xjqmj9rc8cb1827b6jf2j2g.jpeg" alt="WhatsApp Image 2023-01-11 at 14.51.32 (15)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="41 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.51.32-14-q0i9kauhxpvjddstddkf9rkow7urhimapop8mb83rc.jpeg" alt="WhatsApp Image 2023-01-11 at 14.51.32 (14)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="42 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.51.32-13-q0i9k80zd7roejwwtucjkaab428nufb3paqs6hcaa0.jpeg" alt="WhatsApp Image 2023-01-11 at 14.51.32 (13)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="43 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.51.32-12-q0i9k2dy87jygw53qrws5bpjjr0gk8opoitvatknbc.jpeg" alt="WhatsApp Image 2023-01-11 at 14.51.32 (12)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="44 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.51.32-11-q0i9jzkfnpg3i29778owfuf5rlecx5dio4veuzotu0.jpeg" alt="WhatsApp Image 2023-01-11 at 14.51.32 (11)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="45 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.51.32-10-q0i9jxora1diuubxi7vnauw8ktnmhr61zvkfwfrm6g.jpeg" alt="WhatsApp Image 2023-01-11 at 14.51.32 (10)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="46 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.51.32-9-q0i9jtxeip8dkehe46950vue7a65myr4ncyhzbx6vc.jpeg" alt="WhatsApp Image 2023-01-11 at 14.51.32 (9)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="47 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.51.32-8-q0i9jr3vy74ilklhkn19bek0f4k1zvfxmz01ji1de0.jpeg" alt="WhatsApp Image 2023-01-11 at 14.51.32 (8)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="48 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.51.32-7-q0i9joaddp0nmqpl13tdlx9mmyxycs4qml1l3o5jwo.jpeg" alt="WhatsApp Image 2023-01-11 at 14.51.32 (7)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="49 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.51.32-6-q0i9jmep00y2zisbc304gxqpg777xdx9ybqm548c94.jpeg" alt="WhatsApp Image 2023-01-11 at 14.51.32 (6)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="50 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.51.32-5-q0i9jjl6fiu80owesjs8rggbo1l4aam2xxs5pacirs.jpeg" alt="WhatsApp Image 2023-01-11 at 14.51.32 (5)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="51 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.51.32-4-q0i9jftto6p2q91vei5qhhehai3nfi75lf67s6i3go.jpeg" alt="WhatsApp Image 2023-01-11 at 14.51.32 (4)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="52 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.51.31-1-q0i9iw37ony1yfujlrmkj4dstesxxv0siph0pdbd3c.jpeg" alt="WhatsApp Image 2023-01-11 at 14.51.31 (1)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="53 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.51.31-2-q0i9iywq961wx9qg5aug8lo6lkf1kybzj3fh5776ko.jpeg" alt="WhatsApp Image 2023-01-11 at 14.51.31 (2)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="54 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.51.31-q0i9j2o30i727pkzjcgyikq0z3wifqqwvm1f2b1lvs.jpeg" alt="WhatsApp Image 2023-01-11 at 14.51.31" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="55 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.51.32-1-q0i9j6ffruc7i5fixe3gsjrvcndzaj5u84nczew16w.jpeg" alt="WhatsApp Image 2023-01-11 at 14.51.32 (1)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="56 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.51.32-2-q0i9j98yccg2gzbfgxbci1294t02xmh18iltf8ruo8.jpeg" alt="WhatsApp Image 2023-01-11 at 14.51.32 (2)" /></figure></div><div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="57 of 57"><figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="https://www.bethammicfc.org/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-01-11-at-14.51.32-3-q0i9jd0b3ol7rf5yuyxus043ichjsevyl17rccm9zc.jpeg" alt="WhatsApp Image 2023-01-11 at 14.51.32 (3)" /></figure></div>      </div>

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
