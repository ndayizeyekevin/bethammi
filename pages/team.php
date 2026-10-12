<?php

$isStaticPage = true;
$contentKind = 'page';
$contentSlug = 'team';
$staticPageTitle = 'Our Team';
$pageTitle = $staticPageTitle . ' | Beth Ammi Christian Fellowship Church';
$pageDescription = 'Meet the team serving Beth Ammi Christian Fellowship Church.';
$siteRoot = '../';
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
      <p class="page-banner__summary" id="page-summary"><?= bethammi_escape($pageDescription) ?></p>
    </div>
  </section>
  <div id="page-message" class="container page-message" role="status" hidden></div>
  <section class="container page-layout page-layout--team" id="page-layout">
    <article class="page-article">
      <header class="team-directory-heading">
        <p class="eyebrow"><span></span> The people behind our mission</p>
        <h2>Serving together.<br><em>Growing in faith.</em></h2>
        <p>Get to know the people who serve and lead our church community.</p>
      </header>
      <div class="remote-content team-directory" id="page-content" aria-live="polite">
        <p>Loading our team…</p>
      </div>
      <template id="static-page-content"></template>
    </article>
  </section>
</main>
<div class="modal fade" id="teamProfileModal" tabindex="-1" aria-labelledby="team-modal-name" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
    <div class="modal-content team-profile-modal">
      <div class="modal-header">
        <h2 class="modal-title" id="team-modal-name"></h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img class="team-profile-modal__image" id="team-modal-image" alt="" hidden>
        <p class="team-profile-modal__title" id="team-modal-title" hidden></p>
        <p class="team-profile-modal__bio" id="team-modal-bio" hidden></p>
      </div>
    </div>
  </div>
</div>
<?php require __DIR__ . '/../includes/site-footer.php'; ?>
