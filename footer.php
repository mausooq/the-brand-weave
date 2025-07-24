<?php
// Dynamic base path for footer links (same as navbar)
$base = (strpos($_SERVER['REQUEST_URI'], '/about/') !== false || strpos($_SERVER['REQUEST_URI'], '/services/') !== false || strpos($_SERVER['REQUEST_URI'], '/blogs/') !== false || strpos($_SERVER['REQUEST_URI'], '/contact/') !== false) ? '../' : './';

// Dynamic Footer Links
$footer_links = [
  // Company
  ['Home', $base . 'index.php'],
  ['About', $base . 'about/'],
  ['Case Studies', $base . 'case-studies/'],
  ['Pricing', $base . 'pricing/'],
  ['Blog', $base . 'blogs/'],
  ['Career', $base . 'career/'],
  // Support
  ['Contact Us', $base . 'contact/'],
  ['License', $base . 'license/'],
  ['Changelog', $base . 'changelog/'],
  ['Style Guide', $base . 'style-guide/'],
  ['404 Not Found', $base . '404/'],
  ['Protect Password', $base . 'protect-password/'],
];

$root = __DIR__;
$coming_soon_gif = 'https://media.giphy.com/media/3o7aD2saalBwwftBIY/giphy.gif'; // Placeholder GIF

foreach ($footer_links as $link) {
  $label = $link[0];
  $url = $link[1];
  // Only check for folders that are not external or root
  $folder = trim(str_replace([$base, './'], '', $url), '/');
  if ($folder && !is_dir("$root/$folder")) {
    // Suppress warning if folder already exists due to race condition or parallel requests
    @mkdir("$root/$folder");
  }
  if ($folder && is_dir("$root/$folder") && !file_exists("$root/$folder/index.php")) {
    file_put_contents("$root/$folder/index.php", "<!DOCTYPE html>\n<html lang='en'>\n<head><meta charset='UTF-8'><title>Coming Soon</title><style>body{display:flex;flex-direction:column;align-items:center;justify-content:center;height:100vh;background:#f8f9fa;font-family:sans-serif;}h1{color:#483aa0;}img{max-width:320px;margin:2rem 0;}p{font-size:1.2rem;color:#555;}</style></head><body><h1>Coming Soon</h1><img src='$coming_soon_gif' alt='Coming Soon'><p>This page is under construction. Please check back soon!</p></body></html>");
  }
}
?>
<footer class="footer bg-white pt-5 pb-5 border-top" style="border-radius: 0; margin-top: 4rem; ">
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
        <h6 class=" mb-4" style="color: #122c24;">COMPANY</h6>
        <ul class="list-unstyled">
          <?php foreach (array_slice($footer_links, 0, 6) as $link): ?>
            <li class="mb-3"><a href="<?= $link[1] ?>" class="text-decoration-none" style="color: #6f7b80;"><?= $link[0] ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Support Links -->
      <div class="col-md-2">
        <h6 class=" mb-4" style="color: #122c24;">THE BRAND WEAVE</h6>
        <ul class="list-unstyled">
          <?php foreach (array_slice($footer_links, 6) as $link): ?>
            <li class="mb-3"><a href="<?= $link[1] ?>" class="text-decoration-none" style="color: #6f7b80;"><?= $link[0] ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Newsletter Subscription -->
      <div class="col-md-4">
        <h6 class="mb-4" style="color: #122c24;">SUBSCRIBE TO OUR NEWSLETTER</h6>
        <p class="text-muted mb-4">Creative thinkers work collaboratively to bring</p>
        <form class="d-flex bg-light rounded-pill overflow-hidden" style="max-width: 320px;">
          <input type="email" class="form-control border-0 bg-light px-4" placeholder="ENTER EMAIL ADDRESS" />
          <button class="btn btn-link text-dark px-3" type="submit">
            <i class="bi bi-arrow-right"></i>
          </button>
        </form>
      </div>
    </div>

    <hr class="my-5"/>

    <!-- Copyright -->
    <div class=" text-muted small py-3">
    &copy; 2025<a href="#" class="text-decoration-none text-muted fw-semibold"> The Brand Weave. </a>All rights reserved.
    </div>
  </div>
</footer>
