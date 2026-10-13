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
      <a class="brand" href="<?= bethammi_escape($siteRoot) ?>index#home" aria-label="Beth Ammi Christian Fellowship Church home">
        <span class="brand__mark" aria-hidden="true">BA</span>
        <span class="brand__words"><strong>BETH AMMI</strong><small>CHRISTIAN FELLOWSHIP CHURCH</small></span>
      </a>
      <button class="menu-toggle" type="button" aria-label="Open navigation" aria-expanded="false" aria-controls="site-nav">
        <span></span><span></span><span></span>
      </button>
      <nav class="site-nav" id="site-nav" aria-label="Main navigation">
        <a class="site-nav__home" href="<?= bethammi_escape($siteRoot) ?>index">Home</a>
        <div class="nav-dropdown">
          <button class="nav-dropdown__toggle" type="button" aria-expanded="false" aria-controls="nav-about">Who we are <span aria-hidden="true">⌄</span></button>
          <div class="nav-dropdown__menu" id="nav-about">
            <a href="<?= bethammi_escape($siteRoot) ?>pages/who-we-are">Who We Are</a>
            <a href="<?= bethammi_escape($siteRoot) ?>pages/about-us">About Us</a>
            <a href="<?= bethammi_escape($siteRoot) ?>pages/team">Our Team</a>
            <a href="<?= bethammi_escape($siteRoot) ?>pages/our-parishes">Our Parishes</a>
          </div>
        </div>
        <div class="nav-dropdown">
          <button class="nav-dropdown__toggle" type="button" aria-expanded="false" aria-controls="nav-ministries">Ministries <span aria-hidden="true">⌄</span></button>
          <div class="nav-dropdown__menu" id="nav-ministries">
            <a href="<?= bethammi_escape($siteRoot) ?>pages/ministries">Ministries</a>
            <a href="<?= bethammi_escape($siteRoot) ?>pages/outreach-evangelism">Outreach Evangelism</a>
            <a href="<?= bethammi_escape($siteRoot) ?>pages/children-ministries">Children's Ministry</a>
            <a href="<?= bethammi_escape($siteRoot) ?>pages/women-ministries">Women's Ministry</a>
            <a href="<?= bethammi_escape($siteRoot) ?>pages/ltu">LTU In Action</a>
          </div>
        </div>
        <div class="nav-dropdown">
          <button class="nav-dropdown__toggle" type="button" aria-expanded="false" aria-controls="nav-partners">Partners <span aria-hidden="true">⌄</span></button>
          <div class="nav-dropdown__menu" id="nav-partners">
            <a href="<?= bethammi_escape($siteRoot) ?>pages/partners">About our partners</a>
            <a href="<?= bethammi_escape($siteRoot) ?>pages/josh">God's Beloved Ministries</a>
            <a href="<?= bethammi_escape($siteRoot) ?>pages/joan">Joan Hunter Ministries</a>
            <a href="<?= bethammi_escape($siteRoot) ?>pages/ltu">Lift Them Up</a>
            <a href="<?= bethammi_escape($siteRoot) ?>pages/ep-kiramutse">New City Fellowship Church</a>
          </div>
        </div>
        <a href="<?= bethammi_escape($siteRoot) ?>pages/posts">News &amp; sermons</a>
        <a href="<?= bethammi_escape($siteRoot) ?>page?type=page&amp;slug=media">Media</a>
        <a href="<?= bethammi_escape($siteRoot) ?>pages/contact-us">Contact</a>
        <a class="nav-visit" href="<?= bethammi_escape($siteRoot) ?>pages/donate">Give <span aria-hidden="true">↗</span></a>
      </nav>
      <button class="btn header-login" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
    </div>
  </header>
