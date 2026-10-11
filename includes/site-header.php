<?php

$loginCsrfToken = $loginCsrfToken ?? '';

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
      <a class="brand" href="index.php#home" aria-label="Beth Ammi Christian Fellowship Church home">
        <span class="brand__mark" aria-hidden="true">BA</span>
        <span class="brand__words"><strong>BETH AMMI</strong><small>CHRISTIAN FELLOWSHIP CHURCH</small></span>
      </a>
      <button class="menu-toggle" type="button" aria-label="Open navigation" aria-expanded="false" aria-controls="site-nav">
        <span></span><span></span><span></span>
      </button>
      <nav class="site-nav" id="site-nav" aria-label="Main navigation">
        <a class="site-nav__home" href="index.php">Home</a>
        <div class="nav-dropdown">
          <button class="nav-dropdown__toggle" type="button" aria-expanded="false" aria-controls="nav-about">Who we are <span aria-hidden="true">⌄</span></button>
          <div class="nav-dropdown__menu" id="nav-about">
            <a href="page.php?type=page&amp;slug=who-we-are">Who we are</a>
            <a href="page.php?type=page&amp;slug=about-us">About us</a>
            <a href="page.php?type=page&amp;slug=our-staff">Our team</a>
            <a href="page.php?type=page&amp;slug=our-parishes">Our parishes</a>
          </div>
        </div>
        <div class="nav-dropdown">
          <button class="nav-dropdown__toggle" type="button" aria-expanded="false" aria-controls="nav-ministries">Ministries <span aria-hidden="true">⌄</span></button>
          <div class="nav-dropdown__menu" id="nav-ministries">
            <a href="page.php?type=page&amp;slug=ministries">Ministries</a>
            <a href="page.php?type=page&amp;slug=outreach-evangelism">Outreach evangelism</a>
            <a href="page.php?type=page&amp;slug=children-ministries">Children's ministry</a>
            <a href="page.php?type=page&amp;slug=women-ministries">Women's ministry</a>
            <a href="page.php?type=page&amp;slug=ltu">LTU in action</a>
          </div>
        </div>
        <div class="nav-dropdown">
          <button class="nav-dropdown__toggle" type="button" aria-expanded="false" aria-controls="nav-partners">Partners <span aria-hidden="true">⌄</span></button>
          <div class="nav-dropdown__menu" id="nav-partners">
            <a href="page.php?type=page&amp;slug=partners">About our partners</a>
            <a href="page.php?type=page&amp;slug=josh">Josh</a>
            <a href="page.php?type=page&amp;slug=joan">Joan</a>
            <a href="page.php?type=page&amp;slug=ep-kiramutse">EP Kiramutse</a>
          </div>
        </div>
        <a href="page.php?type=page&amp;slug=news-and-sermons">News &amp; sermons</a>
        <a href="page.php?type=page&amp;slug=media">Media</a>
        <a href="page.php?type=page&amp;slug=contact-us">Contact</a>
        <a class="nav-visit" href="page.php?type=page&amp;slug=donate">Give <span aria-hidden="true">↗</span></a>
      </nav>
      <button class="btn header-login" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
    </div>
  </header>
