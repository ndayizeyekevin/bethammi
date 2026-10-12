<?php

require_once __DIR__ . '/../includes/static-pages.php';
$staticPages = bethammi_static_pages();
$staticPageSlug = 'ep-kiramutse';
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
              <div data-elementor-type="wp-page" data-elementor-id="2938" class="elementor elementor-2938">
                      <section class="elementor-section elementor-top-section elementor-element elementor-element-54eaf26d0 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="54eaf26d0" data-element_type="section" data-e-type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2a0eb5b3" data-id="2a0eb5b3" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-44316213 elementor-widget elementor-widget-heading" data-id="44316213" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h2 class="elementor-heading-title elementor-size-default">Welcome To  EP Kiramutse</h2>        </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-30306198 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="30306198" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-wide">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4354c61c" data-id="4354c61c" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-3a2f3f5b elementor-widget elementor-widget-image" data-id="3a2f3f5b" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                                        <img fetchpriority="high" decoding="async" width="1024" height="768" src="https://www.bethammicfc.org/wp-content/uploads/2023/10/IMG-20231012-WA0041.jpg" class="attachment-full size-full wp-image-2918" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2023/10/IMG-20231012-WA0041.jpg 1024w, https://www.bethammicfc.org/wp-content/uploads/2023/10/IMG-20231012-WA0041-300x225.jpg 300w, https://www.bethammicfc.org/wp-content/uploads/2023/10/IMG-20231012-WA0041-768x576.jpg 768w" sizes="(max-width: 1024px) 100vw, 1024px" />                              </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1076e09" data-id="1076e09" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-128fd6b6 elementor-widget elementor-widget-heading" data-id="128fd6b6" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h2 class="elementor-heading-title elementor-size-default">New City Fellowship Church</h2>        </div>
                  </div>
                  <div class="elementor-element elementor-element-7440438b elementor-widget elementor-widget-text-editor" data-id="7440438b" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                            <p>EP Kiramutse is a primary school that is made of 6 rooms so far. it is built on Bethammi CFC&#8217;s Land at Nyaruguru Parish. </p>                </div>
                  </div>
                  <div class="elementor-element elementor-element-25ce29e1 elementor-widget elementor-widget-text-editor" data-id="25ce29e1" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                            <p>This school was donated by the New City Fellowship Church led by Pastor Barry. The school is fully operational and is a source of Knowledge and skills for a lot of Kids in the neighbouring villages.</p>                </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-618bcf98 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="618bcf98" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-wide">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2a4f7a68" data-id="2a4f7a68" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-377b703d elementor-widget elementor-widget-heading" data-id="377b703d" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h2 class="elementor-heading-title elementor-size-default">The school was in Need</h2>        </div>
                  </div>
                  <div class="elementor-element elementor-element-7e3d3069 elementor-widget elementor-widget-text-editor" data-id="7e3d3069" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                            <p>This school was built while it was in need for Kids who used to travel miles and miles to reach a near by school.</p><p>Kids are now learning from a very short distance which is good for both their body and mind.</p>                </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-581b0599" data-id="581b0599" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-36115671 elementor-widget elementor-widget-image" data-id="36115671" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                                        <img decoding="async" width="1024" height="768" src="https://www.bethammicfc.org/wp-content/uploads/2023/10/IMG-20231012-WA0037.jpg" class="attachment-full size-full wp-image-2914" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2023/10/IMG-20231012-WA0037.jpg 1024w, https://www.bethammicfc.org/wp-content/uploads/2023/10/IMG-20231012-WA0037-300x225.jpg 300w, https://www.bethammicfc.org/wp-content/uploads/2023/10/IMG-20231012-WA0037-768x576.jpg 768w" sizes="(max-width: 1024px) 100vw, 1024px" />                              </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-ee967ce elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="ee967ce" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-wide">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4d1b644" data-id="4d1b644" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-18e547fc elementor-widget elementor-widget-image" data-id="18e547fc" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                                        <img decoding="async" width="1024" height="768" src="https://www.bethammicfc.org/wp-content/uploads/2023/10/IMG-20231012-WA0038.jpg" class="attachment-full size-full wp-image-2915" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2023/10/IMG-20231012-WA0038.jpg 1024w, https://www.bethammicfc.org/wp-content/uploads/2023/10/IMG-20231012-WA0038-300x225.jpg 300w, https://www.bethammicfc.org/wp-content/uploads/2023/10/IMG-20231012-WA0038-768x576.jpg 768w" sizes="(max-width: 1024px) 100vw, 1024px" />                              </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-327c5eee" data-id="327c5eee" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-40ad86de elementor-widget elementor-widget-heading" data-id="40ad86de" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h2 class="elementor-heading-title elementor-size-default">Home for Kids</h2>        </div>
                  </div>
                  <div class="elementor-element elementor-element-13b93d7a elementor-widget elementor-widget-text-editor" data-id="13b93d7a" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                            <p>EP Kiramutse is full fonctional and has basic materials to help kids learn and study. we have a team of teachers who are helping kids.</p>                </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-49769dff elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="49769dff" data-element_type="section" data-e-type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5d475d4d" data-id="5d475d4d" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-50bcedbd elementor-widget elementor-widget-heading" data-id="50bcedbd" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h2 class="elementor-heading-title elementor-size-default">DONATE TO SUPPORT THIS SCHOOL</h2>        </div>
                  </div>
                  <div class="elementor-element elementor-element-58d1dc elementor-widget elementor-widget-text-editor" data-id="58d1dc" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                            <p>We are still relying on Donations to help this school run smoothly. Donate today to support this school and the little ones</p>
                            <a class="btn btn-primary text-white mb-4 px-3" href="./donate.php"> Donate</a>
                  </div>
                  </div>
                  <div class="elementor-element elementor-element-b6b2d5f wpr-button-icon-style-inline wpr-button-icon-position-right elementor-widget elementor-widget-wpr-button" data-id="b6b2d5f" data-element_type="widget" data-e-type="widget" data-widget_type="wpr-button.default">
                  <div class="elementor-widget-container">

              <div class="wpr-button-wrap elementor-clearfix">

                  </div>


                    </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-5236e7b elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="5236e7b" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-b891443" data-id="b891443" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-45eda47 elementor-widget elementor-widget-image" data-id="45eda47" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                                        <img loading="lazy" decoding="async" width="960" height="720" src="https://www.bethammicfc.org/wp-content/uploads/2023/10/IMG-20231012-WA0046.jpg" class="attachment-large size-large wp-image-2923" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2023/10/IMG-20231012-WA0046.jpg 1024w, https://www.bethammicfc.org/wp-content/uploads/2023/10/IMG-20231012-WA0046-300x225.jpg 300w, https://www.bethammicfc.org/wp-content/uploads/2023/10/IMG-20231012-WA0046-768x576.jpg 768w" sizes="(max-width: 960px) 100vw, 960px" />                              </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-c08d63b" data-id="c08d63b" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-fea8dba elementor-widget elementor-widget-image" data-id="fea8dba" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                                        <img loading="lazy" decoding="async" width="960" height="720" src="https://www.bethammicfc.org/wp-content/uploads/2023/10/IMG-20231012-WA0044.jpg" class="attachment-large size-large wp-image-2921" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2023/10/IMG-20231012-WA0044.jpg 1024w, https://www.bethammicfc.org/wp-content/uploads/2023/10/IMG-20231012-WA0044-300x225.jpg 300w, https://www.bethammicfc.org/wp-content/uploads/2023/10/IMG-20231012-WA0044-768x576.jpg 768w" sizes="(max-width: 960px) 100vw, 960px" />                              </div>
                  </div>
                  <div class="elementor-element elementor-element-41800c3 elementor-widget elementor-widget-image" data-id="41800c3" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                                        <img loading="lazy" decoding="async" width="960" height="720" src="https://www.bethammicfc.org/wp-content/uploads/2023/10/IMG-20231012-WA0042.jpg" class="attachment-large size-large wp-image-2919" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2023/10/IMG-20231012-WA0042.jpg 1024w, https://www.bethammicfc.org/wp-content/uploads/2023/10/IMG-20231012-WA0042-300x225.jpg 300w, https://www.bethammicfc.org/wp-content/uploads/2023/10/IMG-20231012-WA0042-768x576.jpg 768w" sizes="(max-width: 960px) 100vw, 960px" />                              </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-661e5e2" data-id="661e5e2" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-ef31675 elementor-widget elementor-widget-video" data-id="ef31675" data-element_type="widget" data-e-type="widget" data-settings="{&quot;video_type&quot;:&quot;hosted&quot;,&quot;controls&quot;:&quot;yes&quot;}" data-widget_type="video.default">
                  <div class="elementor-widget-container">
                        <div class="e-hosted-video elementor-wrapper elementor-open-inline">
                    <!-- <video class="elementor-video" src="https://www.bethammicfc.org/wp-content/uploads/2023/10/VID-20231012-WA0010.mp4" controls="" preload="metadata" controlsList="nodownload"></video> -->
                  </div>
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
