<?php

require_once __DIR__ . '/../includes/static-pages.php';
$staticPages = bethammi_static_pages();
$staticPageSlug = 'privacy-policy';
$isStaticPage = true;
$contentKind = 'page';
$contentSlug = $staticPageSlug;
$staticPageTitle = $staticPages[$staticPageSlug];
$pageTitle = $staticPageTitle . ' | Beth Ammi Christian Fellowship Church';
$pageDescription = 'Learn what information Beth Ammi Christian Fellowship Church collects through this website and how it is used.';
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
      <p class="page-banner__summary"><?= bethammi_escape($pageDescription) ?></p>
    </div>
  </section>
  <section class="container page-layout page-layout--legal" id="page-layout">
    <article class="page-article">
      <div class="remote-content" id="page-content">
        <template id="static-page-content">
          <div class="legal-page">
            <p class="legal-page__updated"><strong>Last updated: 7 November 2026</strong></p>
            <p>This Privacy Policy explains how Beth Ammi Christian Fellowship Church (“Beth Ammi,” “we,” “us,” or “our”) handles information when you use this website. It describes the website as currently operated; it does not cover services operated by other organizations.</p>

            <nav class="legal-page__contents" aria-label="Privacy policy sections">
              <span>ON THIS PAGE</span>
              <a href="#privacy-information">Information we handle</a>
              <a href="#privacy-use">How we use it</a>
              <a href="#privacy-storage">Cookies and storage</a>
              <a href="#privacy-sharing">Sharing and external services</a>
              <a href="#privacy-retention">Retention and security</a>
              <a href="#privacy-choices">Your choices and contact</a>
              <a href="#privacy-changes">Changes to this policy</a>
            </nav>

            <section class="legal-page__section" id="privacy-information">
              <h2>Information we handle</h2>
              <ul>
                <li><strong>Newsletter subscriptions:</strong> If you subscribe, we store your email address and subscription status so we can manage your subscription and send church updates.</li>
                <li><strong>Messages to the church:</strong> The contact form prepares a message in WhatsApp on your device. The details you enter are not submitted to this website. If you choose to send the message, WhatsApp receives and handles it under its own terms and privacy practices.</li>
                <li><strong>Administration and security:</strong> The private administration area processes account usernames and recovery email addresses. To protect accounts, it may also keep sign-in or password-recovery attempt records, including hashed IP-address or email identifiers and timestamps.</li>
                <li><strong>Essential session information:</strong> The website uses a session cookie to support essential functions such as form security and administration sign-in.</li>
                <li><strong>Public ministry content:</strong> Pages may include church information, team details, and photos or other material selected for publication by the church.</li>
              </ul>
            </section>

            <section class="legal-page__section" id="privacy-use">
              <h2>How we use information</h2>
              <p>We use information to provide requested newsletter updates, respond to inquiries you send to us, operate authorized administration features, protect the website from misuse, and maintain church content. We do not use newsletter addresses for unrelated purposes.</p>
            </section>

            <section class="legal-page__section" id="privacy-storage">
              <h2>Cookies and browser storage</h2>
              <p>The website uses an essential session cookie. The administration theme preference may be saved in your browser’s local storage so an administrator’s light or dark theme choice persists. The site does not currently use a dedicated advertising or analytics tracking service. Your browser may have its own settings for cookies and local storage; disabling essential storage may affect some features.</p>
            </section>

            <section class="legal-page__section" id="privacy-sharing">
              <h2>Sharing and external services</h2>
              <p>We do not sell personal information. Information may be processed by service providers that host or operate the website or deliver a service you request. Links to or use of WhatsApp, social networks, video services, and other external websites are governed by those providers’ own privacy policies. We do not control their practices.</p>
            </section>

            <section class="legal-page__section" id="privacy-retention">
              <h2>Retention and security</h2>
              <p>We keep information for as long as it is needed for the purposes described above, to administer a subscription or account, to protect the website, or to meet applicable obligations. Retention periods may differ by record type. We use reasonable measures to protect information, but no internet transmission or storage system can be guaranteed to be completely secure.</p>
            </section>

            <section class="legal-page__section" id="privacy-choices">
              <h2>Your choices and how to contact us</h2>
              <p>You may ask us to update or remove information you have provided, or to stop newsletter messages. We may need to verify your request and may retain information where necessary for legitimate administration or applicable obligations. To make a request, use our <a href="../pages/contact-us">Contact page</a> or call <a href="tel:+250788482324">+250 788 482 324</a>.</p>
              <p>This website is intended for a general audience and does not ask children to submit personal information through its public forms. If you have a concern about information or an image published on the site, please contact us.</p>
            </section>

            <section class="legal-page__section" id="privacy-changes">
              <h2>Changes to this policy</h2>
              <p>We may update this policy when the website or its practices change. The latest version and its update date will be posted on this page.</p>
            </section>
          </div>
        </template>
      </div>
    </article>
  </section>
</main>
<?php require __DIR__ . '/../includes/site-footer.php'; ?>
