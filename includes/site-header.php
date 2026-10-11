<?php

$loginCsrfToken = $loginCsrfToken ?? '';
$siteRoot = $siteRoot ?? '';

?>
  <a class="skip-link" href="#main">Skip to content</a>
  <div class="topline">
    <div class="container topline__inner">
      <span>A place to grow in faith and find community</span>
      <a href="tel:+250788482324">Call or WhatsApp <span aria-hidden="true">↗</span></a>
    </div>
  </div>
  <header class="site-header">
    <div class="container header__inner">
      <a class="brand" href="<?= bethammi_escape($siteRoot) ?>index.php#home" aria-label="Beth Ammi Christian Fellowship Church home">
        <span class="brand__mark" aria-hidden="true">BA</span>
        <span class="brand__words"><strong>BETH AMMI</strong><small>CHRISTIAN FELLOWSHIP CHURCH</small></span>
      </a>
      <button class="menu-toggle" type="button" aria-label="Open navigation" aria-expanded="false" aria-controls="site-nav">
        <span></span><span></span><span></span>
      </button>
      <nav class="site-nav" id="site-nav" aria-label="Main navigation">
        <a class="site-nav__home" href="<?= bethammi_escape($siteRoot) ?>index.php">Home</a>
        <div class="nav-dropdown">
          <button class="nav-dropdown__toggle" type="button" aria-expanded="false" aria-controls="nav-about">Who we are <span aria-hidden="true">⌄</span></button>
          <div class="nav-dropdown__menu" id="nav-about">
            <a href="<?= bethammi_escape($siteRoot) ?>pages/who-we-are.php">Who we are</a>
            <a href="<?= bethammi_escape($siteRoot) ?>pages/about-us.php">About us</a>
            <a href="<?= bethammi_escape($siteRoot) ?>page.php?type=page&amp;slug=our-staff">Our team</a>
            <a href="<?= bethammi_escape($siteRoot) ?>page.php?type=page&amp;slug=our-parishes">Our parishes</a>
          </div>
        </div>
        <div class="nav-dropdown">
          <button class="nav-dropdown__toggle" type="button" aria-expanded="false" aria-controls="nav-ministries">Ministries <span aria-hidden="true">⌄</span></button>
          <div class="nav-dropdown__menu" id="nav-ministries">
            <a href="<?= bethammi_escape($siteRoot) ?>pages/ministries.php">Ministries</a>
            <a href="<?= bethammi_escape($siteRoot) ?>pages/outreach-evangelism.php">Outreach evangelism</a>
            <a href="<?= bethammi_escape($siteRoot) ?>pages/children-ministries.php">Children's ministry</a>
            <a href="<?= bethammi_escape($siteRoot) ?>pages/women-ministries.php">Women's ministry</a>
            <a href="<?= bethammi_escape($siteRoot) ?>pages/ltu.php">LTU in action</a>
          </div>
        </div>
        <div class="nav-dropdown">
          <button class="nav-dropdown__toggle" type="button" aria-expanded="false" aria-controls="nav-partners">Partners <span aria-hidden="true">⌄</span></button>
          <div class="nav-dropdown__menu" id="nav-partners">
            <a href="<?= bethammi_escape($siteRoot) ?>pages/partners.php">About our partners</a>
            <a href="<?= bethammi_escape($siteRoot) ?>pages/josh.php">Josh</a>
            <a href="<?= bethammi_escape($siteRoot) ?>pages/joan.php">Joan</a>
            <a href="<?= bethammi_escape($siteRoot) ?>pages/ep-kiramutse.php">EP Kiramutse</a>
          </div>
        </div>
        <a href="<?= bethammi_escape($siteRoot) ?>page.php?type=page&amp;slug=news-and-sermons">News &amp; sermons</a>
        <a href="<?= bethammi_escape($siteRoot) ?>page.php?type=page&amp;slug=media">Media</a>
        <a href="<?= bethammi_escape($siteRoot) ?>page.php?type=page&amp;slug=contact-us">Contact</a>
        <a class="nav-visit" href="<?= bethammi_escape($siteRoot) ?>pages/donate.php">Give <span aria-hidden="true">↗</span></a>
      </nav>
      <button class="btn header-login" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
    </div>
  </header>
