<?php
$blogs = json_decode(file_get_contents(__DIR__ . '/blogs.json'), true);
$slug = $_GET['post'] ?? '';
$blog = null;
foreach ($blogs as $b) {
  if ($b['slug'] === $slug) {
    $blog = $b;
    break;
  }
}
if (!$blog) {
  echo '<h1>404 - Blog Post Not Found</h1>';
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($blog['title']) ?> | The Brand Weave</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../navbar.css" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <style>
    body {
      background: #fff;
      color: #122c24;
      font-family: 'Figtree', 'Segoe UI', Arial, sans-serif;
      margin: 0;
      padding: 0;
      line-height: 1.6;
    }
    
    .main-wrapper {
      max-width: 820px;
      margin: 0 auto;
      padding: 64px 24px;
      text-align: center;
    }
    
    .post-title {
      font-size: clamp(2rem, 4vw, 2.5rem);
      font-weight: 800;
      margin: 0 0 2rem 0;
      color: #122c24;
      line-height: 1.15;
      text-transform: uppercase;
      letter-spacing: -0.02em;
    }
    
    .author-block {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 0.5rem;
      margin-bottom: 3rem;
    }
    
    .author-avatar {
      width: 48px;
      height: 48px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 0.5rem;
      box-shadow: 0 4px 12px rgba(18, 44, 36, 0.1);
    }
    
    .author-name {
      font-weight: 700;
      font-size: 1.1rem;
      color: #122c24;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }
    
    .author-role {
      font-size: 1rem;
      color: #6b7575;
      font-weight: 500;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }
    
    .cover-image {
      width: 100%;
      height: auto;
      border-radius: 1rem;
      margin-bottom: 3rem;
      box-shadow: 0 8px 32px rgba(18, 44, 36, 0.1);
    }
    
    .post-content {
      text-align: justify;
      text-justify: inter-word;
      font-size: 1.15rem;
      line-height: 1.8;
      hyphens: auto;
      -webkit-hyphens: auto;
      -moz-hyphens: auto;
      -ms-hyphens: auto;
    }
    
    .post-content h3 {
      font-size: 1.6rem;
      font-weight: 700;
      margin-top: 3rem;
      margin-bottom: 1.5rem;
      color: #122c24;
      text-align: left;
      letter-spacing: -0.01em;
      line-height: 1.3;
    }
    
    .post-content p {
      margin-bottom: 1.8rem;
      text-indent: 0;
    }
    
    .post-content p:first-of-type {
      margin-top: 0;
    }
    
    .post-content blockquote {
      border-left: 4px solid #06BCC1;
      padding: 1.5rem 2rem;
      background: linear-gradient(135deg, #F4F8FC 0%, #E8F4F8 100%);
      font-size: 1.25rem;
      font-style: italic;
      font-weight: 500;
      margin: 3rem 0;
      border-radius: 0 8px 8px 0;
      box-shadow: 0 4px 16px rgba(6, 188, 193, 0.1);
      text-align: left;
      position: relative;
    }
    
    .post-content blockquote::before {
      content: '"';
      font-size: 4rem;
      color: #06BCC1;
      position: absolute;
      top: -10px;
      left: 10px;
      font-family: Georgia, serif;
      opacity: 0.3;
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
      .main-wrapper {
        padding: 48px 16px;
      }
      
      .post-content {
        font-size: 1.1rem;
        line-height: 1.7;
      }
      
      .post-content h3 {
        font-size: 1.4rem;
        margin-top: 2.5rem;
      }
      
      .post-content blockquote {
        padding: 1.2rem 1.5rem;
        font-size: 1.15rem;
        margin: 2.5rem 0;
      }
    }
    
    /* Improved typography for better readability */
    .post-content p {
      word-spacing: 0.1em;
    }
    
    /* Smooth transitions */
    * {
      transition: all 0.2s ease;
    }
  </style>
</head>
<body>
    <?php include '../navbar.php'; ?>
  <div class="main-wrapper">
    <h1 class="post-title"><?= htmlspecialchars($blog['title']) ?></h1>
    <div class="author-block">
      <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=100&q=80" alt="Author Avatar" class="author-avatar">
      <div class="author-name"><?= htmlspecialchars($blog['author']) ?></div>
      <div class="author-role">Author</div>
    </div>
    <img src="<?= htmlspecialchars($blog['image']) ?>" alt="Cover Image" class="cover-image">
    <div class="post-content">
      <?= $blog['content'] ?>
    </div>
  </div>
  <script>
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
  </script>
</body>
</html>
