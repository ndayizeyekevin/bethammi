<?php

require_once __DIR__ . '/../includes/static-pages.php';
$staticPages = bethammi_static_pages();
$staticPageSlug = 'terms-of-use';
$isStaticPage = true;
$contentKind = 'page';
$contentSlug = $staticPageSlug;
$staticPageTitle = $staticPages[$staticPageSlug];
$pageTitle = $staticPageTitle . ' | Beth Ammi Christian Fellowship Church';
$pageDescription = 'Read the terms that apply when using the Beth Ammi Christian Fellowship Church website.';
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
            <p>These Terms of Use apply to your access to and use of the Beth Ammi Christian Fellowship Church website. By using the website, you agree to use it responsibly and in accordance with these terms.</p>

            <nav class="legal-page__contents" aria-label="Terms of use sections">
              <span>ON THIS PAGE</span>
              <a href="#terms-use">Using this website</a>
              <a href="#terms-content">Website content</a>
              <a href="#terms-third-party">External services</a>
              <a href="#terms-giving">Giving information</a>
              <a href="#terms-availability">Availability and responsibility</a>
              <a href="#terms-changes">Changes and contact</a>
            </nav>

            <section class="legal-page__section" id="terms-use">
              <h2>Using this website</h2>
              <p>You may use this website for lawful, personal, and informational purposes. You must not attempt to disrupt the site, gain unauthorized access to its systems or accounts, interfere with other visitors, or use the site to publish or transmit unlawful, harmful, or misleading material.</p>
            </section>

            <section class="legal-page__section" id="terms-content">
              <h2>Website content</h2>
              <p>Unless otherwise stated, website text, design, photographs, and other materials are provided by or for Beth Ammi Christian Fellowship Church. You may view and share links to public pages for personal, non-commercial purposes. Do not reproduce or commercially use material in a way that suggests endorsement or violates another person’s rights. Some content may belong to third parties and remain subject to their permissions and terms.</p>
              <p>Church news, ministry information, Bible resources, and pastoral material are provided for general and spiritual information. They are not professional, legal, medical, mental-health, or financial advice. See the <a href="../pages/disclaimer">Website Disclaimer</a> for further information.</p>
            </section>

            <section class="legal-page__section" id="terms-third-party">
              <h2>External services and links</h2>
              <p>This website may link to or display services operated by other organizations, including messaging, social-media, video, and donation-related services. Those services have their own terms, privacy policies, and availability. We do not control them, and a link does not necessarily mean that we endorse all of their content or practices.</p>
            </section>

            <section class="legal-page__section" id="terms-giving">
              <h2>Giving information</h2>
              <p>Giving methods and instructions are shared for convenience and may change. Confirm the recipient and current instructions with the church before sending money. Any payment or remittance service you choose is subject to that service’s terms. Information on this website does not determine the tax treatment of a gift.</p>
            </section>

            <section class="legal-page__section" id="terms-availability">
              <h2>Information, availability, and responsibility</h2>
              <p>We make reasonable efforts to keep information useful and current, but details may be incomplete, changed, or temporarily unavailable. The website is provided without a promise that access will always be uninterrupted or error-free. To the extent permitted by applicable law, Beth Ammi is not responsible for loss arising from reliance on website information or from third-party websites or services. Nothing in these terms excludes a right or responsibility that cannot lawfully be excluded.</p>
              <p>You are responsible for your use of the website and for checking important details directly with the church. The <a href="../pages/privacy-policy">Privacy Policy</a> explains how information is handled.</p>
            </section>

            <section class="legal-page__section" id="terms-changes">
              <h2>Changes and contact</h2>
              <p>We may update these terms as the website changes. Updated terms will be posted here with a revised date. If you have a question about them, please use our <a href="../pages/contact-us">Contact page</a> or call <a href="tel:+250788482324">+250 788 482 324</a>.</p>
            </section>
          </div>
        </template>
      </div>
    </article>
  </section>
</main>
<?php require __DIR__ . '/../includes/site-footer.php'; ?>
