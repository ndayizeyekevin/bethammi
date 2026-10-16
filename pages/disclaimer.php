<?php

require_once __DIR__ . '/../includes/static-pages.php';
$staticPages = bethammi_static_pages();
$staticPageSlug = 'disclaimer';
$isStaticPage = true;
$contentKind = 'page';
$contentSlug = $staticPageSlug;
$staticPageTitle = $staticPages[$staticPageSlug];
$pageTitle = $staticPageTitle . ' | Beth Ammi Christian Fellowship Church';
$pageDescription = 'Important information about the content, links, and giving information on the Beth Ammi website.';
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
      <p class="page-banner__summary" id="page-summary"><?= bethammi_escape($pageDescription) ?></p>
    </div>
  </section>
  <section class="container page-layout" id="page-layout">
    <article class="page-article">
      <div class="remote-content" id="page-content">
        <template id="static-page-content">
          <p><strong>Last updated: 16 October 2026</strong></p>
          <p>This website is provided by Beth Ammi Christian Fellowship Church to share information about the church, its beliefs, ministries, parishes, events, and activities. By using this website, you understand the following.</p>

          <h2>Website information</h2>
          <p>We make reasonable efforts to keep information accurate and current, but content may be incomplete, out of date, or changed without notice. Service times, parish details, event information, contact details, and giving instructions can change. Please contact the church to confirm important details before travelling, attending an event, or making a donation.</p>

          <h2>Faith and pastoral content</h2>
          <p>Bible verses, sermons, articles, and other faith-related materials are shared for spiritual and general informational purposes. Website content is not a substitute for personal pastoral care. If you would like pastoral support, please contact the church directly.</p>

          <h2>No professional advice</h2>
          <p>Nothing on this website is medical, mental-health, legal, or financial advice, and it should not be relied on as such. Please consult an appropriately qualified professional about your individual circumstances.</p>

          <h2>Giving and donations</h2>
          <p>Giving methods and payment details are provided for convenience and may change. Before sending money, verify the recipient and current payment instructions with the church using its <a href="../pages/contact-us">official contact details</a>. The church does not make a representation here about whether a donation is tax-deductible; tax treatment depends on your circumstances and applicable rules.</p>

          <h2>External websites and services</h2>
          <p>This website may link to or display content from third parties, including social networks, video platforms, payment or remittance services, and other websites. Those services are outside the church's control and may have their own terms, availability, and privacy practices. A link or embedded item is not necessarily an endorsement. Please review the relevant third party's information before using its service.</p>

          <h2>Messages sent through WhatsApp</h2>
          <p>The contact form prepares a message for you to review and send through WhatsApp; it does not submit the form details to this website. If you choose to send the message, it will be handled by WhatsApp under its own terms and privacy practices. Please avoid including sensitive personal information.</p>

          <h2>Website availability and use</h2>
          <p>We aim to keep this website available, but do not guarantee uninterrupted access or that every page, link, or feature will always work. You are responsible for how you use information from this website. Nothing in this disclaimer limits any rights or responsibilities that cannot lawfully be limited.</p>

          <h2>Updates to this disclaimer</h2>
          <p>We may update this page when the website or its services change. The latest version will be published here with its update date.</p>
        </template>
      </div>
    </article>
    <aside class="page-sidebar" id="page-sidebar">
      <div class="sidebar-card sidebar-card--contact">
        <span class="sidebar-card__label">QUESTIONS ABOUT THIS PAGE?</span>
        <a href="../pages/contact-us">Contact Beth Ammi ↗</a>
        <a href="tel:+250788482324">+250 788 482 324</a>
      </div>
    </aside>
  </section>
</main>
<?php require __DIR__ . '/../includes/site-footer.php'; ?>
