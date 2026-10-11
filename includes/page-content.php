<?php

$isPostPage = ($contentKind ?? '') === 'post';
$pageError = isset($pageError) && is_string($pageError) ? $pageError : '';
$postContentHtml = isset($postContentHtml) && is_string($postContentHtml) ? $postContentHtml : '';

?>
<main id="main">
    <section class="page-banner" aria-labelledby="page-title">
      <div class="container">
        <nav class="breadcrumbs" aria-label="Breadcrumb"><a href="index.php">Home</a><span aria-hidden="true">/</span><span id="breadcrumb-label"><?= $isPostPage && isset($post) && $post ? bethammi_escape($post['title']) : 'Explore' ?></span></nav>
        <p class="eyebrow eyebrow--light"><span></span><span id="page-kicker">Beth Ammi Christian Fellowship Church</span></p>
        <h1 id="page-title"><?= $isPostPage ? (isset($post) && $post ? bethammi_escape($post['title']) : 'Post unavailable') : 'Loading page…' ?></h1>
        <p class="page-banner__summary" id="page-summary"><?= $isPostPage && isset($post) && $post ? bethammi_escape($post['short_info']) : '' ?></p>
      </div>
    </section>
    <div id="page-message" class="container page-message" role="status"<?= $pageError === '' ? ' hidden' : '' ?>><?= bethammi_escape($pageError) ?></div>
    <section class="container page-layout" id="page-layout">
      <article class="page-article">
        <div class="page-meta" id="page-meta"<?= $isPostPage && isset($post) && $post ? '' : ' hidden' ?>><?= $isPostPage && isset($post) && $post ? 'Published ' . bethammi_escape(date('j F Y', strtotime($post['published_at']))) : '' ?></div>
        <div class="remote-content" id="page-content"><?= $postContentHtml ?></div>
      </article>
      <aside class="page-sidebar" id="page-sidebar">
        <div class="sidebar-card sidebar-card--visit">
          <p class="eyebrow"><span></span> You are welcome</p>
          <h2>Come worship<br>with us.</h2>
          <p>Join the Beth Ammi community for worship, prayer, fellowship, and the Word of God.</p>
          <a class="btn button button--navy" href="index.php#gather">Service times <span aria-hidden="true">↗</span></a>
        </div>
        <div class="sidebar-card sidebar-card--contact">
          <span class="sidebar-card__label">NEED TO GET IN TOUCH?</span>
          <a href="tel:+250788482324">+250 788 482 324</a>
          <a href="https://wa.me/250788482324">WhatsApp us ↗</a>
        </div>
      </aside>
    </section>
    <section class="container archive" id="archive" hidden>
      <div class="archive__heading">
        <div><p class="eyebrow"><span></span> From our church family</p><h2>News &amp; <em>sermons.</em></h2><p>Explore services, events, and updates from Beth Ammi.</p></div>
        <label class="archive-search"><span>Search stories</span><input id="archive-search" type="search" placeholder="Try a title or date…" autocomplete="off"><span class="archive-search__icon" aria-hidden="true">⌕</span></label>
      </div>
      <p class="archive__count" id="archive-count" aria-live="polite"></p>
      <div class="archive-grid" id="archive-grid"></div>
      <p class="archive-empty" id="archive-empty" hidden>No stories match that search. Try a different word.</p>
    </section>
    <section class="container feature-media" id="feature-media" hidden aria-labelledby="feature-media-title">
      <div class="feature-media__heading"><p class="eyebrow"><span></span> Watch and worship</p><h2 id="feature-media-title">Services from<br><em>our church.</em></h2></div>
      <div class="feature-media__grid">
        <article class="video-card"><div class="video-frame"><iframe src="https://www.youtube-nocookie.com/embed/D_DBs-is8KE" title="Nyabihu open-air crusade, first day, 31 August 2023" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div><h3>Nyabihu open-air crusade</h3><p>First day · 31 August 2023</p></article>
        <article class="video-card"><div class="video-frame"><iframe src="https://www.youtube-nocookie.com/embed/Wea0RW87MsI" title="Beth Ammi first service, 2 April 2023" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div><h3>Beth Ammi first service</h3><p>2 April 2023</p></article>
      </div>
      <a class="btn button button--navy feature-media__more" href="https://www.youtube.com/channel/UCx2ezTG5Rr61-0c61D_J7EQ" target="_blank" rel="noopener noreferrer">Visit our YouTube channel <span aria-hidden="true">↗</span></a>
    </section>
    <template id="contact-form-template">
      <section class="contact-form-wrap" aria-labelledby="contact-form-title">
        <div class="contact-form__heading"><p class="eyebrow"><span></span> We'd love to hear from you</p><h2 id="contact-form-title">Send us a <em>message.</em></h2><p>Share a question or let us know you're planning a visit.</p></div>
        <form class="contact-form" id="contact-form">
          <div class="contact-form__name">
            <label>First name<input name="first" autocomplete="given-name" required></label>
            <label>Last name<input name="last" autocomplete="family-name" required></label>
          </div>
          <label>Email address<input name="email" type="email" autocomplete="email" required></label>
          <label>Comment or message<textarea name="message" rows="5"></textarea></label>
          <button class="btn button button--navy" type="submit">Continue in WhatsApp <span aria-hidden="true">↗</span></button>
          <p class="contact-form__note">We'll prepare a WhatsApp message for you to review and send. Your details aren't submitted to this website.</p>
          <p class="contact-form__status" id="contact-form-status" role="status" hidden></p>
        </form>
      </section>
    </template>
    <section class="container page-related" id="page-related" hidden>
      <p class="eyebrow"><span></span> Keep exploring</p><h2>More from <em>Beth Ammi.</em></h2>
      <div id="related-links"></div>
    </section>
  </main>
