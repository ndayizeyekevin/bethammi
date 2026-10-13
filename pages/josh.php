<?php

require_once __DIR__ . '/../includes/static-pages.php';
$staticPages = bethammi_static_pages();
$staticPageSlug = 'josh';
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
              <div data-elementor-type="wp-page" data-elementor-id="1733" class="elementor elementor-1733">
                      <section class="elementor-section elementor-top-section elementor-element elementor-element-08ee1fc elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no wpr-column-slider-no wpr-equal-height-no" data-id="08ee1fc" data-element_type="section" data-e-type="section">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-2521a4b" data-id="2521a4b" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-b0d5068 elementor-widget elementor-widget-heading" data-id="b0d5068" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h5 class="elementor-heading-title elementor-size-default">Rwanda Nyamasheke-2023</h5>        </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-7b14127" data-id="7b14127" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-01fd111 elementor-widget elementor-widget-heading" data-id="01fd111" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h5 class="elementor-heading-title elementor-size-default">Rwanda Nyabihu-2023</h5>        </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-4b32a1b" data-id="4b32a1b" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-050e776 elementor-widget elementor-widget-heading" data-id="050e776" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h5 class="elementor-heading-title elementor-size-default">Burundi-2022</h5>        </div>
                  </div>
                  <div class="elementor-element elementor-element-29f9c2c elementor-widget elementor-widget-image-gallery" data-id="29f9c2c" data-element_type="widget" data-e-type="widget" data-widget_type="image-gallery.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-image-gallery">
                <div id='gallery-1' class='gallery galleryid-1733 gallery-columns-4 gallery-size-medium_large'><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.50" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc3OSwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjUwLmpwZWciLCJzbGlkZXNob3ciOiIyOWY5YzJjIn0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.50.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.50.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.50 (2)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc3OCwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjUwLTIuanBlZyIsInNsaWRlc2hvdyI6IjI5ZjljMmMifQ%3D%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.50-2.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.50-2.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.50 (1)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc3NywidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjUwLTEuanBlZyIsInNsaWRlc2hvdyI6IjI5ZjljMmMifQ%3D%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.50-1.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.50-1.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.32" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc3NiwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMyLmpwZWciLCJzbGlkZXNob3ciOiIyOWY5YzJjIn0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.32 (25)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc3NSwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMyLTI1LmpwZWciLCJzbGlkZXNob3ciOiIyOWY5YzJjIn0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-25.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-25.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.32 (24)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc3NCwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMyLTI0LmpwZWciLCJzbGlkZXNob3ciOiIyOWY5YzJjIn0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-24.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-24.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.32 (23)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc3MywidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMyLTIzLmpwZWciLCJzbGlkZXNob3ciOiIyOWY5YzJjIn0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-23.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-23.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.32 (22)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc3MiwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMyLTIyLmpwZWciLCJzbGlkZXNob3ciOiIyOWY5YzJjIn0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-22.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-22.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon portrait'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.32 (21)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc3MSwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMyLTIxLmpwZWciLCJzbGlkZXNob3ciOiIyOWY5YzJjIn0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-21.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-21.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon portrait'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.32 (20)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc3MCwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMyLTIwLmpwZWciLCJzbGlkZXNob3ciOiIyOWY5YzJjIn0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-20.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-20.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon portrait'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.32 (19)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc2OSwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMyLTE5LmpwZWciLCJzbGlkZXNob3ciOiIyOWY5YzJjIn0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-19.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-19.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon portrait'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.32 (18)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc2OCwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMyLTE4LmpwZWciLCJzbGlkZXNob3ciOiIyOWY5YzJjIn0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-18.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-18.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.32 (17)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc2NywidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMyLTE3LmpwZWciLCJzbGlkZXNob3ciOiIyOWY5YzJjIn0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-17.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-17.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.32 (16)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc2NiwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMyLTE2LmpwZWciLCJzbGlkZXNob3ciOiIyOWY5YzJjIn0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-16.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-16.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.32 (15)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc2NSwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMyLTE1LmpwZWciLCJzbGlkZXNob3ciOiIyOWY5YzJjIn0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-15.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-15.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.32 (14)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc2NCwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMyLTE0LmpwZWciLCJzbGlkZXNob3ciOiIyOWY5YzJjIn0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-14.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-14.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.32 (13)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc2MywidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMyLTEzLmpwZWciLCJzbGlkZXNob3ciOiIyOWY5YzJjIn0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-13.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-13.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon portrait'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.32 (12)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc2MiwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMyLTEyLmpwZWciLCJzbGlkZXNob3ciOiIyOWY5YzJjIn0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-12.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-12.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.32 (11)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc2MSwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMyLTExLmpwZWciLCJzbGlkZXNob3ciOiIyOWY5YzJjIn0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-11.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-11.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.32 (10)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc2MCwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMyLTEwLmpwZWciLCJzbGlkZXNob3ciOiIyOWY5YzJjIn0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-10.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-10.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.32 (9)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc1OSwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMyLTkuanBlZyIsInNsaWRlc2hvdyI6IjI5ZjljMmMifQ%3D%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-9.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-9.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.32 (8)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc1OCwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMyLTguanBlZyIsInNsaWRlc2hvdyI6IjI5ZjljMmMifQ%3D%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-8.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-8.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.32 (7)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc1NywidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMyLTcuanBlZyIsInNsaWRlc2hvdyI6IjI5ZjljMmMifQ%3D%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-7.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-7.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.32 (6)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc1NiwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMyLTYuanBlZyIsInNsaWRlc2hvdyI6IjI5ZjljMmMifQ%3D%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-6.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-6.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.32 (5)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc1NSwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMyLTUuanBlZyIsInNsaWRlc2hvdyI6IjI5ZjljMmMifQ%3D%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-5.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-5.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.32 (4)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc1NCwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMyLTQuanBlZyIsInNsaWRlc2hvdyI6IjI5ZjljMmMifQ%3D%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-4.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-4.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.32 (3)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc1MywidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMyLTMuanBlZyIsInNsaWRlc2hvdyI6IjI5ZjljMmMifQ%3D%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-3.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-3.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.32 (2)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc1MiwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMyLTIuanBlZyIsInNsaWRlc2hvdyI6IjI5ZjljMmMifQ%3D%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-2.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-2.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.32 (1)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc1MSwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMyLTEuanBlZyIsInNsaWRlc2hvdyI6IjI5ZjljMmMifQ%3D%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-1.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-1.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.31" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc1MCwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMxLmpwZWciLCJzbGlkZXNob3ciOiIyOWY5YzJjIn0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.31.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.31.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.31 (2)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc0OSwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMxLTIuanBlZyIsInNsaWRlc2hvdyI6IjI5ZjljMmMifQ%3D%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.31-2.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.31-2.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="29f9c2c" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.31 (1)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc0OCwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMxLTEuanBlZyIsInNsaWRlc2hvdyI6IjI5ZjljMmMifQ%3D%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.31-1.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.31-1.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure>
              </div>
              </div>
                      </div>
                  </div>
                    </div>
              </div>
                  <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-98d345a" data-id="98d345a" data-element_type="column" data-e-type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-be8aafb elementor-widget elementor-widget-heading" data-id="be8aafb" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h5 class="elementor-heading-title elementor-size-default">Burundi-2022</h5>        </div>
                  </div>
                  <div class="elementor-element elementor-element-54b3e08 elementor-widget elementor-widget-image-gallery" data-id="54b3e08" data-element_type="widget" data-e-type="widget" data-widget_type="image-gallery.default">
                  <div class="elementor-widget-container">
                        <div class="elementor-image-gallery">
                <div id='gallery-2' class='gallery galleryid-1733 gallery-columns-4 gallery-size-medium_large'><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="54b3e08" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.56.17" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc4NSwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjU2LjE3LmpwZWciLCJzbGlkZXNob3ciOiI1NGIzZTA4In0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.56.17.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.56.17.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="54b3e08" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.56.17 (5)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc4NCwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjU2LjE3LTUuanBlZyIsInNsaWRlc2hvdyI6IjU0YjNlMDgifQ%3D%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.56.17-5.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.56.17-5.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="54b3e08" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.56.17 (4)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc4MywidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjU2LjE3LTQuanBlZyIsInNsaWRlc2hvdyI6IjU0YjNlMDgifQ%3D%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.56.17-4.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.56.17-4.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="54b3e08" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.56.17 (3)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc4MiwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjU2LjE3LTMuanBlZyIsInNsaWRlc2hvdyI6IjU0YjNlMDgifQ%3D%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.56.17-3.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.56.17-3.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="54b3e08" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.56.17 (2)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc4MSwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjU2LjE3LTIuanBlZyIsInNsaWRlc2hvdyI6IjU0YjNlMDgifQ%3D%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.56.17-2.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.56.17-2.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="54b3e08" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.56.17 (1)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc4MCwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjU2LjE3LTEuanBlZyIsInNsaWRlc2hvdyI6IjU0YjNlMDgifQ%3D%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.56.17-1.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.56.17-1.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="54b3e08" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.50" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc3OSwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjUwLmpwZWciLCJzbGlkZXNob3ciOiI1NGIzZTA4In0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.50.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.50.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="54b3e08" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.50 (2)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc3OCwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjUwLTIuanBlZyIsInNsaWRlc2hvdyI6IjU0YjNlMDgifQ%3D%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.50-2.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.50-2.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="54b3e08" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.50 (1)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc3NywidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjUwLTEuanBlZyIsInNsaWRlc2hvdyI6IjU0YjNlMDgifQ%3D%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.50-1.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.50-1.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="54b3e08" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.32" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc3NiwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMyLmpwZWciLCJzbGlkZXNob3ciOiI1NGIzZTA4In0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="54b3e08" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.32 (25)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc3NSwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMyLTI1LmpwZWciLCJzbGlkZXNob3ciOiI1NGIzZTA4In0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-25.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-25.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="54b3e08" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.32 (24)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc3NCwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMyLTI0LmpwZWciLCJzbGlkZXNob3ciOiI1NGIzZTA4In0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-24.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-24.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="54b3e08" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.32 (23)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc3MywidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMyLTIzLmpwZWciLCJzbGlkZXNob3ciOiI1NGIzZTA4In0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-23.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-23.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon portrait'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="54b3e08" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.32 (21)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc3MSwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMyLTIxLmpwZWciLCJzbGlkZXNob3ciOiI1NGIzZTA4In0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-21.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.32-21.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="54b3e08" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.31" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc1MCwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMxLmpwZWciLCJzbGlkZXNob3ciOiI1NGIzZTA4In0%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.31.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.31.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="54b3e08" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.31 (2)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc0OSwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMxLTIuanBlZyIsInNsaWRlc2hvdyI6IjU0YjNlMDgifQ%3D%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.31-2.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.31-2.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure><figure class='gallery-item'>
                <div class='gallery-icon landscape'>
                  <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="54b3e08" data-elementor-lightbox-title="WhatsApp Image 2023-01-11 at 14.51.31 (1)" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc0OCwidXJsIjoiaHR0cHM6XC9cL3d3dy5iZXRoYW1taWNmYy5vcmdcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAxXC9XaGF0c0FwcC1JbWFnZS0yMDIzLTAxLTExLWF0LTE0LjUxLjMxLTEuanBlZyIsInNsaWRlc2hvdyI6IjU0YjNlMDgifQ%3D%3D" href='https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.31-1.jpeg'><img loading="lazy" decoding="async" src="https://www.bethammicfc.org/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.51.31-1.jpeg" class="attachment-medium_large size-medium_large" alt="" /></a>
                </div></figure>
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
