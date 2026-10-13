<?php

http_response_code(404);
$pageTitle = 'Page not found | Beth Ammi Christian Fellowship Church';
$pageDescription = 'The page you are looking for could not be found.';

require __DIR__ . '/includes/site-head.php';
require __DIR__ . '/includes/site-header.php';
?>
<main id="main">
  <section class="page-banner" aria-labelledby="page-title">
    <div class="container">
      <nav class="breadcrumbs" aria-label="Breadcrumb">
        <a href="index">Home</a>
        <span aria-hidden="true">/</span>
        <span id="breadcrumb-label">Not found</span>
      </nav>
      <p class="eyebrow eyebrow--light"><span></span> We missed this one</p>
      <h1 id="page-title">Page not found.</h1>
      <p class="page-banner__summary">The page you requested may have moved, been removed, or never existed.</p>
    </div>
  </section>

  <section class="container page-layout">
    <article class="page-article">
      <div class="remote-content">
        <div class="not-found-wrap" style="padding: 1rem 0 0;">
          <p class="lead mb-4">We couldn’t find the page you were trying to reach.</p>
          <div class="d-flex flex-wrap gap-3">
            <a class="btn button button--navy" href="index">Back home <span aria-hidden="true">↗</span></a>
            <a class="btn button button--gold" href="pages/contact-us">Contact us</a>
          </div>
        </div>
      </div>
    </article>

    <aside class="page-sidebar">
      <div class="sidebar-card sidebar-card--visit">
        <p class="eyebrow"><span></span> Explore instead</p>
        <h2>Find your way<br>back to church.</h2>
        <ul class="list-unstyled mb-0">
          <li><a href="index">Home</a></li>
          <li><a href="pages/about-us">About us</a></li>
          <li><a href="pages/ministries">Ministries</a></li>
          <li><a href="pages/posts">News &amp; sermons</a></li>
          <li><a href="pages/contact-us">Contact</a></li>
        </ul>
      </div>
    </aside>
  </section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
