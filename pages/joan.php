<?php

require_once __DIR__ . '/../includes/static-pages.php';
$staticPages = bethammi_static_pages();
$staticPageSlug = 'joan';
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
              <div data-elementor-type="wp-page" data-elementor-id="2021" class="elementor elementor-2021">
                <section class="elementor-section elementor-top-section elementor-element elementor-element-60692e5 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="60692e5" data-element_type="section" data-e-type="section">
                <div class="elementor-container elementor-column-gap-default">
                  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f1e044d" data-id="f1e044d" data-element_type="column" data-e-type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                      <section class="elementor-section elementor-inner-section elementor-element elementor-element-8e853a9 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="8e853a9" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-28ee43d" data-id="28ee43d" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-d0ca8e2 elementor-widget elementor-widget-video" data-id="d0ca8e2" data-element_type="widget" data-e-type="widget" data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/youtu.be\/FKnZGT4f49g&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;}" data-widget_type="video.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-wrapper elementor-open-inline">
                <div class="elementor-video"></div>    </div>
                      </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-aefcb9f" data-id="aefcb9f" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-0d1f732 elementor-widget elementor-widget-video" data-id="0d1f732" data-element_type="widget" data-e-type="widget" data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/www.youtube.com\/watch?v=v6nJyKe-j2U&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;}" data-widget_type="video.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-wrapper elementor-open-inline">
                <div class="elementor-video"></div>    </div>
                      </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-30897be" data-id="30897be" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-7ce1ac7 elementor-widget elementor-widget-text-editor" data-id="7ce1ac7" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                            <p>Miracles happened in Togo, in an Open Air Crusade organized by Bethammi CFC in Partnership with Joan Hunter Ministries. This is a short video of what happened on 17 January 2023 in Togo.</p>                </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-c6bc37b elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="c6bc37b" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a658a92" data-id="a658a92" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-7626409 elementor-widget elementor-widget-heading" data-id="7626409" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h5 class="elementor-heading-title elementor-size-default">Pictures</h5>        </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-83c2e1f elementor-section-height-full elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-items-middle wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="83c2e1f" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-wide">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-bde2dad" data-id="bde2dad" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-6a102c9 elementor-widget elementor-widget-heading" data-id="6a102c9" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h5 class="elementor-heading-title elementor-size-default">Togo 16 Jan 2023</h5>        </div>
                  </div>
                  <div class="elementor-element elementor-element-42de285 elementor-widget elementor-widget-image-gallery" data-id="42de285" data-element_type="widget" data-e-type="widget" data-widget_type="image-gallery.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-image-gallery">
                  <div id='gallery-1' class='gallery galleryid-2021 gallery-columns-4 gallery-size-medium_large'><figure class='gallery-item'>
                  <div class='gallery-icon landscape'>
                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="42de285" data-elementor-lightbox-title="WhatsApp Image 2023-01-15 at 22.06.29" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjEzNSwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTE1LWF0LTIyLjA2LjI5LmpwZWciLCJzbGlkZXNob3ciOiI0MmRlMjg1In0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.29.jpeg'><img loading="lazy" decoding="async" width="768" height="576" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.29-768x576.jpeg" class="attachment-medium_large size-medium_large" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.29-768x576.jpeg 768w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.29-300x225.jpeg 300w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.29-600x450.jpeg 600w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.29.jpeg 1024w" sizes="(max-width: 768px) 100vw, 768px" /></a>
                  </div></figure><figure class='gallery-item'>
                  <div class='gallery-icon landscape'>
                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="42de285" data-elementor-lightbox-title="WhatsApp Image 2023-01-15 at 22.06.28" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjEzNiwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTE1LWF0LTIyLjA2LjI4LmpwZWciLCJzbGlkZXNob3ciOiI0MmRlMjg1In0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.28.jpeg'><img loading="lazy" decoding="async" width="768" height="576" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.28-768x576.jpeg" class="attachment-medium_large size-medium_large" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.28-768x576.jpeg 768w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.28-300x225.jpeg 300w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.28-600x450.jpeg 600w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.28.jpeg 1024w" sizes="(max-width: 768px) 100vw, 768px" /></a>
                  </div></figure><figure class='gallery-item'>
                  <div class='gallery-icon landscape'>
                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="42de285" data-elementor-lightbox-title="WhatsApp Image 2023-01-15 at 22.06.26 (1)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjEzNywidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTE1LWF0LTIyLjA2LjI2LTEuanBlZyIsInNsaWRlc2hvdyI6IjQyZGUyODUifQ%3D%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.26-1.jpeg'><img loading="lazy" decoding="async" width="768" height="576" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.26-1-768x576.jpeg" class="attachment-medium_large size-medium_large" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.26-1-768x576.jpeg 768w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.26-1-300x225.jpeg 300w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.26-1-600x450.jpeg 600w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.26-1.jpeg 1024w" sizes="(max-width: 768px) 100vw, 768px" /></a>
                  </div></figure><figure class='gallery-item'>
                  <div class='gallery-icon landscape'>
                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="42de285" data-elementor-lightbox-title="WhatsApp Image 2023-01-15 at 22.06.26" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjEzOCwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTE1LWF0LTIyLjA2LjI2LmpwZWciLCJzbGlkZXNob3ciOiI0MmRlMjg1In0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.26.jpeg'><img loading="lazy" decoding="async" width="768" height="576" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.26-768x576.jpeg" class="attachment-medium_large size-medium_large" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.26-768x576.jpeg 768w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.26-300x225.jpeg 300w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.26-600x450.jpeg 600w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.26.jpeg 1024w" sizes="(max-width: 768px) 100vw, 768px" /></a>
                  </div></figure><figure class='gallery-item'>
                  <div class='gallery-icon landscape'>
                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="42de285" data-elementor-lightbox-title="WhatsApp Image 2023-01-15 at 22.06.25" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjEzOSwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTE1LWF0LTIyLjA2LjI1LmpwZWciLCJzbGlkZXNob3ciOiI0MmRlMjg1In0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.25.jpeg'><img loading="lazy" decoding="async" width="768" height="576" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.25-768x576.jpeg" class="attachment-medium_large size-medium_large" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.25-768x576.jpeg 768w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.25-300x225.jpeg 300w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.25-600x450.jpeg 600w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.25.jpeg 1024w" sizes="(max-width: 768px) 100vw, 768px" /></a>
                  </div></figure><figure class='gallery-item'>
                  <div class='gallery-icon landscape'>
                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="42de285" data-elementor-lightbox-title="WhatsApp Image 2023-01-15 at 22.06.24" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjE0MCwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTE1LWF0LTIyLjA2LjI0LmpwZWciLCJzbGlkZXNob3ciOiI0MmRlMjg1In0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.24.jpeg'><img loading="lazy" decoding="async" width="768" height="576" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.24-768x576.jpeg" class="attachment-medium_large size-medium_large" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.24-768x576.jpeg 768w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.24-300x225.jpeg 300w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.24-600x450.jpeg 600w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.24.jpeg 1024w" sizes="(max-width: 768px) 100vw, 768px" /></a>
                  </div></figure><figure class='gallery-item'>
                  <div class='gallery-icon landscape'>
                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="42de285" data-elementor-lightbox-title="WhatsApp Image 2023-01-15 at 22.06.23 (1)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjE0MSwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTE1LWF0LTIyLjA2LjIzLTEuanBlZyIsInNsaWRlc2hvdyI6IjQyZGUyODUifQ%3D%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.23-1.jpeg'><img loading="lazy" decoding="async" width="768" height="576" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.23-1-768x576.jpeg" class="attachment-medium_large size-medium_large" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.23-1-768x576.jpeg 768w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.23-1-300x225.jpeg 300w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.23-1-600x450.jpeg 600w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.23-1.jpeg 1024w" sizes="(max-width: 768px) 100vw, 768px" /></a>
                  </div></figure><figure class='gallery-item'>
                  <div class='gallery-icon landscape'>
                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="42de285" data-elementor-lightbox-title="WhatsApp Image 2023-01-15 at 22.06.23" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjE0MiwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTE1LWF0LTIyLjA2LjIzLmpwZWciLCJzbGlkZXNob3ciOiI0MmRlMjg1In0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.23.jpeg'><img loading="lazy" decoding="async" width="768" height="576" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.23-768x576.jpeg" class="attachment-medium_large size-medium_large" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.23-768x576.jpeg 768w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.23-300x225.jpeg 300w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.23-600x450.jpeg 600w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.23.jpeg 1024w" sizes="(max-width: 768px) 100vw, 768px" /></a>
                  </div></figure><figure class='gallery-item'>
                  <div class='gallery-icon landscape'>
                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="42de285" data-elementor-lightbox-title="WhatsApp Image 2023-01-15 at 22.06.22" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjE0MywidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTE1LWF0LTIyLjA2LjIyLmpwZWciLCJzbGlkZXNob3ciOiI0MmRlMjg1In0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.22.jpeg'><img loading="lazy" decoding="async" width="768" height="576" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.22-768x576.jpeg" class="attachment-medium_large size-medium_large" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.22-768x576.jpeg 768w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.22-300x225.jpeg 300w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.22-600x450.jpeg 600w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.22.jpeg 1024w" sizes="(max-width: 768px) 100vw, 768px" /></a>
                  </div></figure><figure class='gallery-item'>
                  <div class='gallery-icon landscape'>
                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="42de285" data-elementor-lightbox-title="WhatsApp Image 2023-01-15 at 22.06.21 (1)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjE0NCwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTE1LWF0LTIyLjA2LjIxLTEuanBlZyIsInNsaWRlc2hvdyI6IjQyZGUyODUifQ%3D%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.21-1.jpeg'><img loading="lazy" decoding="async" width="768" height="576" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.21-1-768x576.jpeg" class="attachment-medium_large size-medium_large" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.21-1-768x576.jpeg 768w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.21-1-300x225.jpeg 300w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.21-1-600x450.jpeg 600w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.21-1.jpeg 1024w" sizes="(max-width: 768px) 100vw, 768px" /></a>
                  </div></figure><figure class='gallery-item'>
                  <div class='gallery-icon landscape'>
                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="42de285" data-elementor-lightbox-title="WhatsApp Image 2023-01-15 at 22.06.21" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjE0NiwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTE1LWF0LTIyLjA2LjIxLmpwZWciLCJzbGlkZXNob3ciOiI0MmRlMjg1In0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.21.jpeg'><img loading="lazy" decoding="async" width="768" height="576" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.21-768x576.jpeg" class="attachment-medium_large size-medium_large" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.21-768x576.jpeg 768w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.21-300x225.jpeg 300w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.21-600x450.jpeg 600w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.21.jpeg 1024w" sizes="(max-width: 768px) 100vw, 768px" /></a>
                  </div></figure><figure class='gallery-item'>
                  <div class='gallery-icon landscape'>
                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="42de285" data-elementor-lightbox-title="WhatsApp Image 2023-01-15 at 22.06.20 (1)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjE0NywidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTE1LWF0LTIyLjA2LjIwLTEuanBlZyIsInNsaWRlc2hvdyI6IjQyZGUyODUifQ%3D%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.20-1.jpeg'><img loading="lazy" decoding="async" width="768" height="576" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.20-1-768x576.jpeg" class="attachment-medium_large size-medium_large" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.20-1-768x576.jpeg 768w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.20-1-300x225.jpeg 300w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.20-1-600x450.jpeg 600w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.20-1.jpeg 1024w" sizes="(max-width: 768px) 100vw, 768px" /></a>
                  </div></figure><figure class='gallery-item'>
                  <div class='gallery-icon landscape'>
                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="42de285" data-elementor-lightbox-title="WhatsApp Image 2023-01-15 at 22.06.20" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjE0OCwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTE1LWF0LTIyLjA2LjIwLmpwZWciLCJzbGlkZXNob3ciOiI0MmRlMjg1In0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.20.jpeg'><img loading="lazy" decoding="async" width="768" height="576" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.20-768x576.jpeg" class="attachment-medium_large size-medium_large" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.20-768x576.jpeg 768w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.20-300x225.jpeg 300w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.20-600x450.jpeg 600w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-22.06.20.jpeg 1024w" sizes="(max-width: 768px) 100vw, 768px" /></a>
                  </div></figure>
                </div>
                </div>
                        </div>
                    </div>
                      </div>
                </div>
                  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e916ec2" data-id="e916ec2" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-e49d990 elementor-widget elementor-widget-heading" data-id="e49d990" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h5 class="elementor-heading-title elementor-size-default">Togo Jan 17, 2023</h5>
                  </div>
                  <div class="elementor-element elementor-element-f109bd6 elementor-widget elementor-widget-image-gallery" data-id="f109bd6" data-element_type="widget" data-e-type="widget" data-widget_type="image-gallery.default">
                  <div class="elementor-widget-container">
                  <div class="elementor-image-gallery">
                <div id='gallery-2' class='gallery galleryid-2021 gallery-columns-4 gallery-size-medium_large'><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="f109bd6" data-elementor-lightbox-title="WhatsApp Image 2023-01-18 at 12.59.39" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjE4NiwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTE4LWF0LTEyLjU5LjM5LmpwZWciLCJzbGlkZXNob3ciOiJmMTA5YmQ2In0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-18-at-12.59.39.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-18-at-12.59.39.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="f109bd6" data-elementor-lightbox-title="WhatsApp Image 2023-01-18 at 12.59.41" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjE4NSwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTE4LWF0LTEyLjU5LjQxLmpwZWciLCJzbGlkZXNob3ciOiJmMTA5YmQ2In0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-18-at-12.59.41.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-18-at-12.59.41.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="f109bd6" data-elementor-lightbox-title="WhatsApp Image 2023-01-18 at 12.59.42" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjE4NCwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTE4LWF0LTEyLjU5LjQyLmpwZWciLCJzbGlkZXNob3ciOiJmMTA5YmQ2In0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-18-at-12.59.42.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-18-at-12.59.42.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="f109bd6" data-elementor-lightbox-title="WhatsApp Image 2023-01-18 at 12.59.44" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjE4MywidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTE4LWF0LTEyLjU5LjQ0LmpwZWciLCJzbGlkZXNob3ciOiJmMTA5YmQ2In0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-18-at-12.59.44.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-18-at-12.59.44.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="f109bd6" data-elementor-lightbox-title="WhatsApp Image 2023-01-18 at 12.59.46" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjE4MiwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTE4LWF0LTEyLjU5LjQ2LmpwZWciLCJzbGlkZXNob3ciOiJmMTA5YmQ2In0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-18-at-12.59.46.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-18-at-12.59.46.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="f109bd6" data-elementor-lightbox-title="WhatsApp Image 2023-01-18 at 12.59.46 (1)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjE4MSwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTE4LWF0LTEyLjU5LjQ2LTEuanBlZyIsInNsaWRlc2hvdyI6ImYxMDliZDYifQ%3D%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-18-at-12.59.46-1.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-18-at-12.59.46-1.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="f109bd6" data-elementor-lightbox-title="WhatsApp Image 2023-01-18 at 12.59.47" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjE4MCwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTE4LWF0LTEyLjU5LjQ3LmpwZWciLCJzbGlkZXNob3ciOiJmMTA5YmQ2In0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-18-at-12.59.47.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-18-at-12.59.47.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="f109bd6" data-elementor-lightbox-title="WhatsApp Image 2023-01-18 at 12.59.48" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjE3OSwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTE4LWF0LTEyLjU5LjQ4LmpwZWciLCJzbGlkZXNob3ciOiJmMTA5YmQ2In0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-18-at-12.59.48.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-18-at-12.59.48.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="f109bd6" data-elementor-lightbox-title="WhatsApp Image 2023-01-18 at 12.59.49" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjE3OCwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTE4LWF0LTEyLjU5LjQ5LmpwZWciLCJzbGlkZXNob3ciOiJmMTA5YmQ2In0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-18-at-12.59.49.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-18-at-12.59.49.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="f109bd6" data-elementor-lightbox-title="WhatsApp Image 2023-01-18 at 12.59.50" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjE3NywidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTE4LWF0LTEyLjU5LjUwLmpwZWciLCJzbGlkZXNob3ciOiJmMTA5YmQ2In0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-18-at-12.59.50.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-18-at-12.59.50.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="f109bd6" data-elementor-lightbox-title="WhatsApp Image 2023-01-18 at 12.59.52" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjE3NiwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTE4LWF0LTEyLjU5LjUyLmpwZWciLCJzbGlkZXNob3ciOiJmMTA5YmQ2In0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-18-at-12.59.52.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-18-at-12.59.52.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="f109bd6" data-elementor-lightbox-title="WhatsApp Image 2023-01-18 at 12.59.50 (1)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjE3NSwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTE4LWF0LTEyLjU5LjUwLTEuanBlZyIsInNsaWRlc2hvdyI6ImYxMDliZDYifQ%3D%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-18-at-12.59.50-1.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-18-at-12.59.50-1.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="f109bd6" data-elementor-lightbox-title="28c32cbe-b57a-4bfe-8747-48c37c5eba84" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjE3NCwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC8yOGMzMmNiZS1iNTdhLTRiZmUtODc0Ny00OGMzN2M1ZWJhODQuanBnIiwic2xpZGVzaG93IjoiZjEwOWJkNiJ9" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/28c32cbe-b57a-4bfe-8747-48c37c5eba84.jpg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/28c32cbe-b57a-4bfe-8747-48c37c5eba84.jpg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure>
              </div>
              </div>
                      </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-83c5708 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="83c5708" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7c9e96a" data-id="7c9e96a" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <section class="elementor-section elementor-inner-section elementor-element elementor-element-2d93024 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="2d93024" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b5fa68b" data-id="b5fa68b" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-f34500e elementor-widget elementor-widget-heading" data-id="f34500e" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h2 class="elementor-heading-title elementor-size-default">Open Air Crusade in Ivory Coast 20-21 Jan 2023</h2>        </div>
                  </div>
                  <div class="elementor-element elementor-element-2371b9a elementor-widget elementor-widget-video" data-id="2371b9a" data-element_type="widget" data-e-type="widget" data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/youtu.be\/RLUWUduVcbo&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;}" data-widget_type="video.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-wrapper elementor-open-inline">
                <div class="elementor-video"></div>    </div>
                      </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d06a9dc" data-id="d06a9dc" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-60e1b44 elementor-widget elementor-widget-text-editor" data-id="60e1b44" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                            <p>In Partnership with Joan Hunter Ministries, Bethammi CFC has organized an Open Air crusade of Miracles and Evangelism that will take place in West Africa. In Two countries: Togo and Ivory Coast.</p>                </div>
                  </div>
                  <div class="elementor-element elementor-element-63f7e10 elementor-widget elementor-widget-text-editor" data-id="63f7e10" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                            <p>Ivory Coast: <b>20-21 January 2023</b></p>                </div>
                  </div>
                  <div class="elementor-element elementor-element-66dbe1d elementor-widget elementor-widget-image" data-id="66dbe1d" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                                        <img loading="lazy" decoding="async" width="768" height="767" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/292548d3-4d0d-4a36-9837-0ecf821610cd-768x767.jpg" class="attachment-medium_large size-medium_large wp-image-2016" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2023/01/292548d3-4d0d-4a36-9837-0ecf821610cd-768x767.jpg 768w, https://www.bethammicfc.org/wp-content/uploads/2023/01/292548d3-4d0d-4a36-9837-0ecf821610cd-300x300.jpg 300w, https://www.bethammicfc.org/wp-content/uploads/2023/01/292548d3-4d0d-4a36-9837-0ecf821610cd-1024x1024.jpg 1024w, https://www.bethammicfc.org/wp-content/uploads/2023/01/292548d3-4d0d-4a36-9837-0ecf821610cd-150x150.jpg 150w, https://www.bethammicfc.org/wp-content/uploads/2023/01/292548d3-4d0d-4a36-9837-0ecf821610cd-600x599.jpg 600w, https://www.bethammicfc.org/wp-content/uploads/2023/01/292548d3-4d0d-4a36-9837-0ecf821610cd-100x100.jpg 100w, https://www.bethammicfc.org/wp-content/uploads/2023/01/292548d3-4d0d-4a36-9837-0ecf821610cd.jpg 1080w" sizes="(max-width: 768px) 100vw, 768px" />                              </div>
                  </div>
                    </div>
              </div>
                    </div>
              </section>
                    </div>
              </div>
                    </div>
              </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-d62c9d4 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="d62c9d4" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cf79d35" data-id="cf79d35" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <section class="elementor-section elementor-inner-section elementor-element elementor-element-d976a78 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="d976a78" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3a7f09b" data-id="3a7f09b" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-226c870 elementor-widget elementor-widget-heading" data-id="226c870" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h2 class="elementor-heading-title elementor-size-default">Open Air Crusade in Togo 15-18 Jan 2023</h2>        </div>
                  </div>
                  <div class="elementor-element elementor-element-bd862c4 elementor-widget elementor-widget-video" data-id="bd862c4" data-element_type="widget" data-e-type="widget" data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/youtu.be\/3sTMlcMKj3A&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;}" data-widget_type="video.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-wrapper elementor-open-inline">
                <div class="elementor-video"></div>    </div>
                      </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1b31da3" data-id="1b31da3" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-02b6c74 elementor-widget elementor-widget-text-editor" data-id="02b6c74" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                            <p>In Partnership with Joan Hunter Ministries, Bethammi CFC has organized an Open Air crusade of Miracles and Evangelism that will take place in West Africa. In Two countries: Togo and Ivory Coast.</p>                </div>
                  </div>
                  <div class="elementor-element elementor-element-a38dc37 elementor-widget elementor-widget-text-editor" data-id="a38dc37" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                            <p>Togo: 15<b>-18 January 2023</b></p>                </div>
                  </div>
                  <div class="elementor-element elementor-element-ad00fe1 elementor-widget elementor-widget-image" data-id="ad00fe1" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                                        <img loading="lazy" decoding="async" width="768" height="543" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-13-at-00.01.39-768x543.jpeg" class="attachment-medium_large size-medium_large wp-image-2023" alt="" srcset="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-13-at-00.01.39-768x543.jpeg 768w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-13-at-00.01.39-300x212.jpeg 300w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-13-at-00.01.39-1024x723.jpeg 1024w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-13-at-00.01.39-600x424.jpeg 600w, https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-13-at-00.01.39.jpeg 1080w" sizes="(max-width: 768px) 100vw, 768px" />                              </div>
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
