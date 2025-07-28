<?php
$blogs = json_decode(file_get_contents(__DIR__ . '/blogs.json'), true);
$categories = array_unique(array_map(function($b) { return $b['category']; }, $blogs));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog | The Brand Weave</title>
  <!-- Add Bootstrap CSS and Bootstrap Icons for navbar -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../navbar.css" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
  
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon.png">
  <link rel="shortcut icon" href="../assets/favicon.png">
  <link rel="apple-touch-icon" href="../assets/favicon.png">
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    /* Only blog-specific styles retained. Removed duplicate styles for navbar, .tbw-navbar, and general layout that are already in style.css or navbar.css. */
    
    .fade-in {
      opacity: 0;
      transform: translateY(40px);
      transition: opacity 0.8s cubic-bezier(.4,0,.2,1), transform 0.8s cubic-bezier(.4,0,.2,1);
    }
    .fade-in.visible {
      opacity: 1;
      transform: none;
    }
    
    .blogs-hero-modern {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 6rem 1rem 4rem 1rem;
      background: #fff;
      position: relative;
      overflow: hidden;
      background: linear-gradient(
      90deg,
      rgba(24, 24, 24, 0.85) 60%,
      rgba(24, 24, 24, 0.3) 100%
    ),
       url('../assets/bg-2.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
    .blogs-hero-modern h1 {
      font-size: 5.5rem;
      font-weight: 800;
      letter-spacing: -1px;
      color:rgb(255, 255, 255);
      margin-bottom: 1.2rem;
      font-family: 'figtree ', 'Inter', Arial, sans-serif;
      
    }
    .blogs-hero-modern h1 span{
      color: #D4214C;
    }
    .blogs-hero-modern p {
      font-size: 1.35rem;
      color:rgba(255, 225, 0, 0.78);
      max-width: 600px;
      margin: 0 auto;
      font-weight: 500;
    }
    
    .page-wrapper {
      max-width: 1320px;
      margin: 0 auto;
      padding: 0 2rem;
    }
    .nav-menu {
      display: flex;
      align-items: center;
      gap: 2.5rem;
    }
    .nav-menu a {
      text-decoration: none;
      color: #122c24;
      font-weight: 500;
      font-size: 1rem;
    }
    .book-call-btn {
      background: #122c24;
      color: #fff;
      padding: 0.8rem 1.8rem;
      border-radius: 0.5rem;
      font-weight: 600;
      text-decoration: none;
    }
    .blog-header {
      text-align: center;
      padding: 5rem 0 3rem 0;
    }
    .blog-header h1 {
      font-size: 3rem;
      font-weight: 800;
      margin: 0 0 0.5rem 0;
      color: #122c24;
    }
    .blog-header p {
      color: #6b7575;
      font-size: 1.1rem;
      max-width: 420px;
      margin: 0 auto;
      line-height: 1.5;
    }
    .filter-nav {
      display: flex;
      justify-content: center;
      gap: 1rem;
      margin-bottom: 4rem;
      flex-wrap: wrap;
    }
    .filter-nav a {
      text-decoration: none;
      color: #122c24;
      background: #fff;
      border: 1px solid #e8e8e8;
      padding: 0.5rem 1.2rem;
      border-radius: 2rem;
      font-weight: 500;
      transition: background-color 0.2s, color 0.2s;
      cursor: pointer;
    }
    .filter-nav a.active, .filter-nav a:hover {
      background: #122c24;
      color: #fff;
      border-color: #122c24;
    }
    .blog-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 2.5rem;
      margin: 0 auto 5rem auto;
    }
    .blog-card {
      background: #F8F9FA;
      border: none;
      box-shadow: none;
    }
    .blog-img {
      width: 100%;
      height: auto;
      aspect-ratio: 1.8 / 1;
      object-fit: cover;
      border-radius: 1rem;
      margin-bottom: 1.5rem;
    }
    .blog-row {
      display: flex;
      align-items: center;
      gap: 1rem;
      margin-bottom: 0.8rem;
    }
    .blog-category {
      background: #fff;
      color: #122c24;
      font-size: 0.9rem;
      font-weight: 600;
      border-radius: 2rem;
      padding: 0.2rem 1rem;
      border: 1px solid #e8e8e8;
      text-transform: uppercase;
    }
    .blog-meta-row {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      color: #6b7575;
      font-size: 0.9rem;
      font-weight: 500;
      text-transform: uppercase;
    }
    .blog-title {
      font-size: 1.3rem;
      font-weight: 700;
      margin: 0 0 0.8rem 0;
      color: #122c24;
      line-height: 1.2;
      text-transform: uppercase;
    }
    .read-more-btn {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      color: #122c24;
      font-weight: 700;
      font-size: 1rem;
      text-decoration: none;
      text-transform: uppercase;
    }
    .read-more-btn::after {
      content: '→';
      transition: transform 0.2s;
    }
    .read-more-btn:hover::after {
      transform: translateX(4px);
    }
    footer {
      background: #122c24;
      color: #fff;
      padding: 5rem 0;
    }
    .footer-container {
      max-width: 1320px;
      margin: 0 auto;
      padding: 0 2rem;
      display: flex;
      justify-content: space-between;
      gap: 3rem;
      flex-wrap: wrap;
    }
    .footer-about {
      max-width: 320px;
    }
    .footer-about .logo {
      font-size: 1.5rem;
      font-weight: 800;
      margin-bottom: 1rem;
    }
    .footer-links {
      display: flex;
      gap: 4rem;
    }
    .footer-links h4 {
      font-size: 1.2rem;
      margin-bottom: 1.5rem;
    }
    .footer-links ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .footer-links ul li {
      margin-bottom: 1rem;
    }
    .footer-links a {
      color: #e8e8e8;
      text-decoration: none;
    }
    
    /* Responsive */
    @media (max-width: 767.98px) {
      .blogs-hero-modern {
        padding: 3.5rem 0.5rem 2.5rem 0.5rem;
      }
      .blogs-hero-modern h1 {
        font-size: 2.1rem;
      }
      .blogs-hero-modern p {
        font-size: 1.05rem;
      }
    }
    
    @media (max-width: 900px) {
      .blog-grid { grid-template-columns: 1fr; }
      .nav-menu { display: none; }
    }
  </style>
</head>
<body>
    <?php include '../navbar.php'; ?>

<!-- Hero Section -->
<section class="blogs-hero-modern fade-in">
  <h1>INSIGHTS & <br> KNOWLEDGE <span>BLOG</span>
  </h1>
  <p>Stay updated with the latest digital marketing trends, tips, and industry insights.</p>
</section>

<div class="page-wrapper">
  <main>
    <div class="blog-header">
      <h1>Recent Blog Updates</h1>
      <p>We offer a comprehensive range of plumbing services to meet all of your needs.</p>
    </div>

    <div class="filter-nav">
      <a href="#" class="active" data-category="all">All Articles</a>
      <?php foreach ($categories as $cat): ?>
        <a href="#" data-category="<?= htmlspecialchars($cat) ?>"><?= htmlspecialchars($cat) ?></a>
      <?php endforeach; ?>
    </div>

    <div class="blog-grid" id="blogGrid">
      <?php foreach ($blogs as $blog): ?>
      <div class="blog-card" data-category="<?= htmlspecialchars($blog['category']) ?>">
        <img src="<?= htmlspecialchars($blog['image']) ?>" alt="<?= htmlspecialchars($blog['title']) ?>" class="blog-img">
        <div class="blog-content">
          <div class="blog-row">
            <span class="blog-category"><?= htmlspecialchars($blog['category']) ?></span>
            <div class="blog-meta-row">
              <span><?= htmlspecialchars($blog['date']) ?></span> <span class="blog-meta-dot"></span> <span><?= htmlspecialchars($blog['read_time']) ?></span>
            </div>
          </div>
          <h2 class="blog-title"><?= htmlspecialchars($blog['title']) ?></h2>
          <a href="view.php?post=<?= urlencode($blog['slug']) ?>" class="read-more-btn">Read Now</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </main>
</div>

<script>
  // Navbar scroll animation
  window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".tbw-navbar");
    if (navbar) {
      if (window.scrollY > 80) {
        navbar.classList.add("scrolled");
      } else {
        navbar.classList.remove("scrolled");
      }
    }
  });

  // Blog filter system
  document.querySelectorAll('.filter-nav a').forEach(function(btn) {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      document.querySelectorAll('.filter-nav a').forEach(function(b) { b.classList.remove('active'); });
      btn.classList.add('active');
      var cat = btn.getAttribute('data-category');
      document.querySelectorAll('.blog-card').forEach(function(card) {
        if (cat === 'all' || card.getAttribute('data-category') === cat) {
          card.style.display = '';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });
  
  // Fade-in on scroll
  function revealOnScroll() {
    document.querySelectorAll('.fade-in').forEach(function(el) {
      var rect = el.getBoundingClientRect();
      if (rect.top < window.innerHeight - 60) {
        el.classList.add('visible');
      }
    });
  }
  window.addEventListener('scroll', revealOnScroll);
  window.addEventListener('DOMContentLoaded', revealOnScroll);
</script>
<?php include '../letsConnect.php'; ?>
<?php include '../footer.php'; ?>
</body>
</html>

