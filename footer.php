<?php
// Dynamic base path for footer links (same as navbar)
$base = (strpos($_SERVER['REQUEST_URI'], '/about-us-digital-marketing-agency/') !== false || 
         strpos($_SERVER['REQUEST_URI'], '/services/') !== false || 
         strpos($_SERVER['REQUEST_URI'], '/blogs/') !== false || 
         strpos($_SERVER['REQUEST_URI'], '/contact/') !== false) ? '../' : './';

// Footer Links
$footer_links = [
  ['Home', $base . 'index.php'],
  ['About', $base . 'about-us-digital-marketing-agency/'],
  ['Case Studies', $base . 'case-studies/'],
  ['Contact Us', $base . 'contact/'],
  ['Blog', $base . 'blogs/'],
  ['Career', $base . 'career/'],
];
?>
<footer class="footer bg-white pt-5 pb-5 border-top" style="border-radius: 0; margin-top: 4rem;">
  <div class="container">
    <div class="row gy-5">
      <!-- Brand and Description -->
      <div class="col-md-4">
        <div class="mb-4">
          <img src="<?= $base ?>assets/RED-BG.jpg" alt="The Brand Weave Logo" style="max-height: 60px; width: auto; border-radius: 8px;">
          <div style="font-weight: bold; font-size: 1.3rem; color: #D4214C; margin-top: 0.5rem; letter-spacing: 2px;">THE BRAND WEAVE</div>
        </div>
        <p class="text-muted mb-4">We offer a complete range of digital marketing <br> services to help your brand grow online.</p>
      </div>

      <!-- Company Links -->
      <div class="col-md-2">
        <h6 class="mb-4" style="color: #122c24;">Quick Links</h6>
        <ul class="list-unstyled">
          <?php foreach (array_slice($footer_links, 0, 6) as $link): ?>
            <li class="mb-3"><a href="<?= $link[1] ?>" class="text-decoration-none" style="color: #6f7b80;"><?= $link[0] ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Services Offered -->
      <div class="col-md-2">
        <h6 class="mb-4" style="color: #122c24;">ALL WE OFFER</h6>
        <ul class="list-unstyled">
          <li class="mb-3"><a href="<?= $base ?>services/seo.php" class="text-decoration-none" style="color: #6f7b80;">SEO Marketing</a></li>
          <li class="mb-3"><a href="<?= $base ?>services/smm.php" class="text-decoration-none" style="color: #6f7b80;">Media Marketing</a></li>
          <li class="mb-3"><a href="<?= $base ?>services/content-marketing.php" class="text-decoration-none" style="color: #6f7b80;">Content Marketing</a></li>
          <li class="mb-3"><a href="<?= $base ?>services/branding.php" class="text-decoration-none" style="color: #6f7b80;">Branding & Design</a></li>
          <li class="mb-3"><a href="<?= $base ?>services/google-ads.php" class="text-decoration-none" style="color: #6f7b80;">Google Ads</a></li>
          <li class="mb-3"><a href="<?= $base ?>services/web-design.php" class="text-decoration-none" style="color: #6f7b80;">Web Design</a></li>
          <li class="mb-3"><a href="<?= $base ?>services/email-marketing.php" class="text-decoration-none" style="color: #6f7b80;">Email Marketing</a></li>
        </ul>
      </div>

      <!-- Newsletter & Socials -->
      <div class="col-md-4">
        <h6 class="mb-4" style="color: #122c24;">SUBSCRIBE TO OUR NEWSLETTER</h6>
        <p class="text-muted mb-4">Creative thinkers work collaboratively to bring</p>
        <form class="d-flex bg-light rounded-pill overflow-hidden" style="max-width: 320px;">
          <input type="email" class="form-control border-0 bg-light px-4" placeholder="ENTER EMAIL ADDRESS" />
          <button class="btn btn-link text-dark px-3" type="submit">
            <i class="bi bi-arrow-right"></i>
          </button>
        </form>
        <h6 class="mb-4 mt-5" style="color: #122c24;">OUR SOCIALS</h6>
        <div class="social-links">
          <a href="#" title="Instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
          <a href="#" title="Facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" title="Twitter"><i class="bi bi-twitter-x"></i></a>
        </div>
      </div>
    </div>

    <hr class="my-5"/>

    <!-- Copyright -->
    <div class="text-muted small py-3">
      &copy; <?= date("Y") ?> <a href="#" class="text-decoration-none text-muted fw-semibold">The Brand Weave</a>. All rights reserved.
    </div>
  </div>
</footer>
