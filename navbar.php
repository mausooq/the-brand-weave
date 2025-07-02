<?php
// Dynamic base path for navbar links
$base = (strpos($_SERVER['REQUEST_URI'], '/about/') !== false || strpos($_SERVER['REQUEST_URI'], '/services/') !== false || strpos($_SERVER['REQUEST_URI'], '/blogs/') !== false || strpos($_SERVER['REQUEST_URI'], '/contact/') !== false) ? '../' : './';
?>
<!-- TBW Modern Navbar Start -->
<nav class="navbar navbar-expand-lg sticky-top tbw-navbar py-3 shadow">
  <div class="container">
    <!-- Left: Logo and Brand -->
    <a
      class="navbar-brand d-flex align-items-center text-dark fw-bold"
      href="<?= $base ?>index.php"
    >
      <img src="<?= $base ?>assets/logo.png" alt="TBW Logo" width="60" class="me-2" />
    </a>

    <!-- Hamburger for mobile -->
    <button
      class="navbar-toggler text-dark border-0"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#tbwNavbar"
      aria-controls="tbwNavbar"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="tbwNavbar">
      <!-- Center: Menu Items (No Dropdowns) -->
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-3">
        <li class="nav-item">
          <a class="nav-link text-dark" href="<?= $base ?>index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="<?= $base ?>about/">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="<?= $base ?>services/">Service</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link text-dark" href="#about">Pages</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link text-dark" href="<?= $base ?>blogs/">Blogs</a>
        </li>
      </ul>
      <!-- Right: Search Icon & Contact Button -->
      <div class="d-flex align-items-center ms-lg-3 mt-3 mt-lg-0 gap-2">
        <a
          href="#"
          class="text-dark fs-5 me-2 tbw-search-icon d-inline-flex align-items-center justify-content-center"
        >
          <!-- <i class="bi bi-search"></i> -->
        </a>
        <a href="<?= $base ?>contact/" class="btn btn-tbw-green fw-bold px-4 py-2">
          Contact Us
        </a>
      </div>
    </div>
  </div>
</nav>
<!-- TBW Modern Navbar End -->

<script>
  window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".tbw-navbar");
    if (window.scrollY > 80) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  });
</script> 