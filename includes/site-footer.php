  <footer class="site-footer">
    <div class="container footer__top">
      <a class="brand brand--footer" href="<?= bethammi_escape($siteRoot) ?>index#home" aria-label="Beth Ammi Christian Fellowship Church home">
        <img class="brand__logo" src="<?= bethammi_escape($siteRoot) ?>assets/images/bethammilogo.png" alt="">
        <span class="brand__words"><strong>BETH AMMI</strong><small>CHRISTIAN FELLOWSHIP CHURCH</small></span>
      </a>
      <p>A place to worship, grow, and belong.<br>We look forward to seeing you.</p>
      <div class="footer__contact"><span>GET IN TOUCH</span><a href="tel:+250788482324">+250 788 482 324</a><a href="https://wa.me/250788482324">WhatsApp us ↗</a><a href="<?= bethammi_escape($siteRoot) ?>pages/contact-us">Contact us ↗</a></div>
      <div class="footer__social"><span>FOLLOW ALONG</span><a href="https://www.facebook.com/bethammicfc/" target="_blank" rel="noopener noreferrer"><i class="bi bi-facebook" aria-hidden="true"></i>Facebook ↗</a><a href="https://www.twitter.com/bethammicfc/" target="_blank" rel="noopener noreferrer"><i class="bi bi-twitter-x" aria-hidden="true"></i>Twitter ↗</a><a href="https://www.instagram.com/bethammicfc/" target="_blank" rel="noopener noreferrer"><i class="bi bi-instagram" aria-hidden="true"></i>Instagram ↗</a><a href="https://www.youtube.com/@bethammicfc/" target="_blank" rel="noopener noreferrer"><i class="bi bi-youtube" aria-hidden="true"></i>YouTube ↗</a><a href="https://wa.me/250788482324" target="_blank" rel="noopener noreferrer"><i class="bi bi-whatsapp" aria-hidden="true"></i>WhatsApp ↗</a><a href="<?= bethammi_escape($siteRoot) ?>page?type=page&amp;slug=media">Media library ↗</a></div>
    </div>
    <div class="container footer__directory">
      <span>EXPLORE BETH AMMI</span>
      <a href="<?= bethammi_escape($siteRoot) ?>pages/daily-bible-verses">Daily Bible verses</a>
      <a href="<?= bethammi_escape($siteRoot) ?>pages/ministries">Ministries</a>
      <a href="<?= bethammi_escape($siteRoot) ?>pages/outreach-evangelism">Outreach</a>
      <a href="<?= bethammi_escape($siteRoot) ?>pages/children-ministries">Children</a>
      <a href="<?= bethammi_escape($siteRoot) ?>pages/women-ministries">Women</a>
      <a href="<?= bethammi_escape($siteRoot) ?>pages/ltu">Lift Them Up</a>
      <a href="<?= bethammi_escape($siteRoot) ?>pages/partners">Partners</a>
      <a href="<?= bethammi_escape($siteRoot) ?>pages/our-parishes">Our Parishes</a>
      <a href="<?= bethammi_escape($siteRoot) ?>pages/team">Our Team</a>
      <a href="<?= bethammi_escape($siteRoot) ?>pages/ep-kiramutse">New City Fellowship Church</a>
      <a href="<?= bethammi_escape($siteRoot) ?>pages/joan">Joan</a>
      <a href="<?= bethammi_escape($siteRoot) ?>pages/josh">Josh</a>
      <a href="<?= bethammi_escape($siteRoot) ?>pages/contact-us">Contact Details</a>
      <a href="<?= bethammi_escape($siteRoot) ?>pages/donate" data-bs-toggle="modal" data-bs-target="#donateModal" aria-haspopup="dialog">Give</a>
    </div>
    <div class="container footer__bottom"><span>© <span id="year"></span> Beth Ammi Christian Fellowship Church</span><a href="#main">Back to top ↑</a></div>
  </footer>
  <div class="modal fade" id="donateModal" tabindex="-1" aria-labelledby="donateModalLabel" aria-describedby="donateModalDescription" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content donate-modal">
        <div class="modal-header">
          <div>
            <p class="eyebrow"><span></span> GIVE WITH JOY</p>
            <h2 class="modal-title" id="donateModalLabel">Support the work of Beth Ammi.</h2>
            <p class="donate-modal__description" id="donateModalDescription">Choose the giving method that works best for you.</p>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="donate-modal__methods">
            <section class="donate-method" aria-labelledby="donate-check-title">
              <span class="donate-method__icon bi bi-envelope" aria-hidden="true"></span>
              <h3 id="donate-check-title">By check</h3>
              <p>Make checks payable to Bethammi Christian Fellowship Church and mail to Rusororo Sector, New KBS garage.</p>
            </section>
            <section class="donate-method" aria-labelledby="donate-wire-title">
              <span class="donate-method__icon bi bi-bank" aria-hidden="true"></span>
              <h3 id="donate-wire-title">Wire transfer</h3>
              <p>Contact Alfred Gatabazi for wire transfer information.</p>
              <a href="tel:+250788451308">+250 788 451 308</a>
            </section>
            <section class="donate-method" aria-labelledby="donate-mobile-title">
              <span class="donate-method__icon bi bi-phone" aria-hidden="true"></span>
              <h3 id="donate-mobile-title">Mobile money</h3>
              <p>On MTN, dial <strong>*182*8*1*007002#</strong> and follow the instructions.</p>
              <p>Outside Rwanda? Use <a href="https://www.worldremit.com/" target="_blank" rel="noopener noreferrer">WorldRemit</a> and send to Alfred Gatabazi at <a href="tel:+250788482324">+250 788 482 324</a>.</p>
            </section>
          </div>
          <div class="donate-modal__footer">
            <p>Thank you for supporting the church and its ministries.</p>
            <a class="btn button button--navy" href="<?= bethammi_escape($siteRoot) ?>pages/donate">Go to the donation page <span aria-hidden="true">↗</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
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
  <div class="floating-actions" aria-label="Quick actions">
    <a class="floating-action floating-action--whatsapp" href="https://wa.me/250788482324" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp"><i class="bi bi-whatsapp" aria-hidden="true"></i></a>
    <a class="floating-action floating-action--top" href="#" aria-label="Scroll to top" hidden><i class="bi bi-arrow-up" aria-hidden="true"></i></a>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
