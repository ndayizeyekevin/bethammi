  <footer class="site-footer">
    <div class="container footer__top">
      <a class="brand brand--footer" href="<?= bethammi_escape($siteRoot) ?>index.php#home" aria-label="Beth Ammi Christian Fellowship Church home">
        <span class="brand__mark" aria-hidden="true">BA</span>
        <span class="brand__words"><strong>BETH AMMI</strong><small>CHRISTIAN FELLOWSHIP CHURCH</small></span>
      </a>
      <p>A place to worship, grow, and belong.<br>We look forward to seeing you.</p>
      <div class="footer__contact"><span>GET IN TOUCH</span><a href="tel:+250788482324">+250 788 482 324</a><a href="https://wa.me/250788482324">WhatsApp us ↗</a><a href="<?= bethammi_escape($siteRoot) ?>page.php?type=page&amp;slug=contact-us">Contact us ↗</a></div>
      <div class="footer__social"><span>FOLLOW ALONG</span><a href="https://www.facebook.com/bethammicfc/" target="_blank" rel="noopener noreferrer"><i class="bi bi-facebook" aria-hidden="true"></i>Facebook ↗</a><a href="https://www.twitter.com/bethammicfc/" target="_blank" rel="noopener noreferrer"><i class="bi bi-twitter-x" aria-hidden="true"></i>Twitter ↗</a><a href="https://www.instagram.com/bethammicfc/" target="_blank" rel="noopener noreferrer"><i class="bi bi-instagram" aria-hidden="true"></i>Instagram ↗</a><a href="https://www.youtube.com/bethammicfc/" target="_blank" rel="noopener noreferrer"><i class="bi bi-youtube" aria-hidden="true"></i>YouTube ↗</a><a href="https://wa.me/250788482324" target="_blank" rel="noopener noreferrer"><i class="bi bi-whatsapp" aria-hidden="true"></i>WhatsApp ↗</a><a href="<?= bethammi_escape($siteRoot) ?>page.php?type=page&amp;slug=media">Media library ↗</a></div>
    </div>
    <div class="container footer__directory">
      <span>EXPLORE BETH AMMI</span>
      <a href="<?= bethammi_escape($siteRoot) ?>pages/daily-bible-verses.php">Daily Bible verses</a>
      <a href="<?= bethammi_escape($siteRoot) ?>pages/ministries.php">Ministries</a>
      <a href="<?= bethammi_escape($siteRoot) ?>pages/outreach-evangelism.php">Outreach</a>
      <a href="<?= bethammi_escape($siteRoot) ?>pages/children-ministries.php">Children</a>
      <a href="<?= bethammi_escape($siteRoot) ?>pages/women-ministries.php">Women</a>
      <a href="<?= bethammi_escape($siteRoot) ?>pages/ltu.php">Lift Them Up</a>
      <a href="<?= bethammi_escape($siteRoot) ?>pages/partners.php">Partners</a>
      <a href="<?= bethammi_escape($siteRoot) ?>pages/our-parishes.php">Our Parishes</a>
      <a href="<?= bethammi_escape($siteRoot) ?>pages/team.php">Our Team</a>
      <a href="<?= bethammi_escape($siteRoot) ?>pages/ep-kiramutse.php">New City Fellowship Church</a>
      <a href="<?= bethammi_escape($siteRoot) ?>pages/joan.php">Joan</a>
      <a href="<?= bethammi_escape($siteRoot) ?>pages/josh.php">Josh</a>
      <a href="<?= bethammi_escape($siteRoot) ?>page.php?type=page&amp;slug=contact">Contact Details</a>
      <a href="<?= bethammi_escape($siteRoot) ?>pages/donate.php">Give</a>
    </div>
    <div class="container footer__bottom"><span>© <span id="year"></span> Beth Ammi Christian Fellowship Church</span><a href="#main">Back to top ↑</a></div>
  </footer>
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content admin-login-modal">
        <div class="modal-header">
          <div><p class="eyebrow"><span></span> BETH AMMI ADMIN</p><h2 class="modal-title" id="loginModalLabel">Welcome back.</h2></div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Sign in to manage posts, team profiles, and parish information.</p>
          <form class="admin-login-modal__form" method="post" action="<?= bethammi_escape($siteRoot) ?>admin/">
            <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($loginCsrfToken, ENT_QUOTES, 'UTF-8') ?>">
            <input type="hidden" name="action" value="login">
            <label for="site-login-username">Username</label>
            <input class="form-control" id="site-login-username" name="username" autocomplete="username" required>
            <label for="site-login-password">Password</label>
            <input class="form-control" id="site-login-password" name="password" type="password" autocomplete="current-password" required>
            <button class="btn button button--navy" type="submit">Sign in <span aria-hidden="true">↗</span></button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
