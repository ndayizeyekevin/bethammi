<?php

$isStaticPage = true;
$contentKind = 'page';
$contentSlug = 'contact-us';
$staticPageTitle = 'Contact Us';
$pageTitle = $staticPageTitle . ' | Beth Ammi Christian Fellowship Church';
$pageDescription = 'Get in touch with Beth Ammi Christian Fellowship Church, plan a visit, or send us a message.';
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
  <section class="container page-layout page-layout--contact" id="page-layout">
    <article class="page-article">
      <header class="contact-page-heading">
        <p class="eyebrow"><span></span> We'd love to hear from you</p>
        <h2>Let's connect<br><em>and grow together.</em></h2>
        <p>Whether you have a question, need prayer, or are planning a visit, reach out. We look forward to welcoming you.</p>
      </header>
      <div class="remote-content contact-page-content" id="page-content" aria-live="polite"></div>
      <template id="static-page-content"></template>
    </article>
  </section>
  <template id="contact-form-template">
    <section class="contact-form-wrap" aria-labelledby="contact-form-title">
      <div class="contact-form__heading">
        <p class="eyebrow"><span></span> A message for our team</p>
        <h2 id="contact-form-title">How can we <em>help?</em></h2>
        <p>Fill in the form and we'll prepare a message for you to review and send through WhatsApp.</p>
      </div>
      <form class="contact-form" id="contact-form">
        <div class="contact-form__name">
          <label>First name<input name="first" autocomplete="given-name" required></label>
          <label>Last name<input name="last" autocomplete="family-name" required></label>
        </div>
        <label>Email address<input name="email" type="email" autocomplete="email" required></label>
        <label>Comment or message<textarea name="message" rows="5"></textarea></label>
        <button class="btn button button--navy" type="submit">Continue in WhatsApp <span aria-hidden="true">↗</span></button>
        <p class="contact-form__note">Your details are not submitted to this website. WhatsApp opens so you can review and send your message.</p>
        <p class="contact-form__status" id="contact-form-status" role="status" hidden></p>
      </form>
    </section>
  </template>
</main>
<?php require __DIR__ . '/../includes/site-footer.php'; ?>
