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
        <img class="brand__logo" src="<?= bethammi_escape($siteRoot) ?>assets/images/bethammilogo.png" alt="">
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
            <a href="<?= bethammi_escape($siteRoot) ?>pages/who-we-are"><i class="fa-solid fa-people-group" aria-hidden="true"></i>Who We Are</a>
            <a href="<?= bethammi_escape($siteRoot) ?>pages/about-us"><i class="fa-solid fa-book-open" aria-hidden="true"></i>About Us</a>
            <a href="<?= bethammi_escape($siteRoot) ?>pages/team"><i class="fa-solid fa-users" aria-hidden="true"></i>Our Team</a>
            <a href="<?= bethammi_escape($siteRoot) ?>pages/our-parishes"><i class="fa-solid fa-location-dot" aria-hidden="true"></i>Our Parishes</a>
          </div>
        </div>
        <div class="nav-dropdown">
          <button class="nav-dropdown__toggle" type="button" aria-expanded="false" aria-controls="nav-ministries">Ministries <span aria-hidden="true">⌄</span></button>
          <div class="nav-dropdown__menu" id="nav-ministries">
            <a href="<?= bethammi_escape($siteRoot) ?>pages/ministries"><i class="fa-solid fa-hands-praying" aria-hidden="true"></i>Ministries</a>
            <a href="<?= bethammi_escape($siteRoot) ?>pages/outreach-evangelism"><i class="fa-solid fa-bullhorn" aria-hidden="true"></i>Outreach Evangelism</a>
            <a href="<?= bethammi_escape($siteRoot) ?>pages/children-ministries"><i class="fa-solid fa-child" aria-hidden="true"></i>Children's Ministry</a>
            <a href="<?= bethammi_escape($siteRoot) ?>pages/women-ministries"><i class="fa-solid fa-person-dress" aria-hidden="true"></i>Women's Ministry</a>
            <!-- <a href="<?= bethammi_escape($siteRoot) ?>pages/ltu">LTU In Action</a> -->
          </div>
        </div>
        <div class="nav-dropdown">
          <button class="nav-dropdown__toggle" type="button" aria-expanded="false" aria-controls="nav-partners">Partners <span aria-hidden="true">⌄</span></button>
          <div class="nav-dropdown__menu" id="nav-partners">
            <a href="<?= bethammi_escape($siteRoot) ?>pages/partners"><i class="fa-solid fa-handshake" aria-hidden="true"></i>About our partners</a>
            <a href="<?= bethammi_escape($siteRoot) ?>pages/josh"><i class="fa-solid fa-heart" aria-hidden="true"></i>God's Beloved Ministries</a>
            <a href="<?= bethammi_escape($siteRoot) ?>pages/joan"><i class="fa-solid fa-hands-praying" aria-hidden="true"></i>Joan Hunter Ministries</a>
            <a href="<?= bethammi_escape($siteRoot) ?>pages/ltu"><i class="fa-solid fa-arrow-up" aria-hidden="true"></i>Lift Them Up</a>
            <a href="<?= bethammi_escape($siteRoot) ?>pages/ep-kiramutse"><i class="fa-solid fa-church" aria-hidden="true"></i>New City Fellowship Church</a>
          </div>
        </div>
        <a href="<?= bethammi_escape($siteRoot) ?>pages/posts">News &amp; sermons</a>
        <a href="<?= bethammi_escape($siteRoot) ?>page?type=page&amp;slug=media">Media</a>
        <a href="<?= bethammi_escape($siteRoot) ?>pages/contact-us">Contact</a>
        <a class="nav-visit" href="<?= bethammi_escape($siteRoot) ?>pages/donate" data-bs-toggle="modal" data-bs-target="#donateModal" aria-haspopup="dialog"><i class="bi bi-heart-fill" aria-hidden="true"></i> Donate</a>
        <button class="nav-login" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
      </nav>
      <a class="btn header-donate" href="<?= bethammi_escape($siteRoot) ?>pages/donate" data-bs-toggle="modal" data-bs-target="#donateModal" aria-haspopup="dialog"><i class="bi bi-heart-fill" aria-hidden="true"></i> Donate</a>
      <form class="header-search" role="search" aria-label="Find text on this page">
        <label class="visually-hidden" for="header-search-input">Find text on this page</label>
        <input id="header-search-input" type="search" placeholder="Find on page" autocomplete="off" aria-controls="header-search-status">
        <button type="submit" aria-label="Find on this page"><i class="bi bi-search" aria-hidden="true"></i></button>
        <p class="header-search__status" id="header-search-status" role="status" aria-live="polite" hidden></p>
      </form>
      <button class="btn header-login" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
    </div>
  </header>
