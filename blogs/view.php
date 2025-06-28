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
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Figtree:wght@700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../navbar.css" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <style>
    body {
      background: #ffffff;
      color: #1a1a1a;
      font-family: 'Manrope', 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      margin: 0;
      padding: 0;
      line-height: 1.6;
    }
    
    .main-wrapper {
      max-width: 1008px;
      margin: 0 auto;
      padding: 40px 0 0 0;
      background: #fff;
    }
    
    .cover-image {
      display: block;
      width: 1008px;
      height: 460px;
      object-fit: cover;
      border-radius: 18px;
      margin: 12px auto 32px auto;
    }
    
    .meta-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 12px;
      padding: 0 4px;
    }
    
    .category-badge {
      display: inline-block;
      background: #f5f7fa;
      color: #3a4a5b;
      padding: 8px 24px;
      border-radius: 24px;
      font-size: 1.1rem;
      font-weight: 500;
      letter-spacing: 0.04em;
      border: 1px solid #e0e6ed;
      text-transform: uppercase;
    }
    
    .post-meta {
      color: #6b7a89;
      font-size: 1.1rem;
      font-weight: 500;
      letter-spacing: 0.04em;
    }
    
    .post-content {
      max-width: 1008px;
      margin: 0 auto;
      font-size: 1.18rem;
      color: #2a2a2a;
      line-height: 1.7;
      padding: 0 4px 60px 4px;
    }
    
    .post-content h2, .post-content h3, .post-content h5 {
      font-family: 'Figtree', sans-serif;
      font-size: 24px;
      color: #122C24;
      margin: 0 0 10px 0;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 0.01em;
    }
    
    .post-content h3 {
      font-size: 1.5rem;
      margin: 40px 0 16px 0;
    }
    
    .post-content p {
      font-family: 'Manrope', sans-serif;
      font-size: 16px;
      color: #6F7B80;
      font-weight: 500;
      margin: 0 0 40px 0;
      line-height: 1.5;
    }
    
    .post-content blockquote {
      font-family: 'Manrope', sans-serif;
      font-size: 18px;
      color: #6F7B80;
      font-style: italic;
      font-weight: 500;
      margin: 40px 0;
      border-left: 4px solid #06BCC1;
      padding: 1.5rem 2rem;
      background: linear-gradient(135deg, #F4F8FC 0%, #E8F4F8 100%);
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
    
    @media (max-width: 1100px) {
      .main-wrapper, .cover-image, .post-content {
        max-width: 100vw;
        width: 100vw;
      }
      .cover-image {
        width: 100vw;
        min-width: 0;
      }
    }
    @media (max-width: 1024px) {
      .main-wrapper, .cover-image, .post-content {
        max-width: 100vw;
        width: 100vw;
      }
      .cover-image {
        width: 100vw;
        min-width: 0;
      }
    }
    
    @media (max-width: 1050px) {
      .main-wrapper, .cover-image, .post-content {
        max-width: 100vw;
        width: 100vw;
      }
      .cover-image {
        width: 100vw;
        min-width: 0;
      }
    }
    
    @media (max-width: 1020px) {
      .main-wrapper, .cover-image, .post-content {
        max-width: 100vw;
        width: 100vw;
      }
      .cover-image {
        width: 100vw;
        min-width: 0;
        height: 40vw;
        max-height: 460px;
      }
    }
    
    @media (max-width: 700px) {
      .main-wrapper, .cover-image, .post-content {
        max-width: 100vw;
        width: 100vw;
      }
      .cover-image {
        width: 100vw;
        min-width: 0;
        height: 40vw;
        max-height: 320px;
      }
      .meta-row {
        flex-direction: column;
        align-items: flex-start;
        gap: 8px;
      }
      .post-content h2, .post-content h3 {
        font-size: 1.3rem;
        margin: 32px 0 12px 0;
      }
      .post-content p {
        font-size: 1rem;
      }
    }
    
    .blog-title {
      text-align: center;
      font-family: 'Figtree', sans-serif;
      font-size: 2rem;
      font-weight: 800;
      color: #122C24;
      text-transform: uppercase;
      margin: 0 0 40px 0;
      letter-spacing: 0.01em;
    }
    .author-block {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 20px;
      margin-bottom: 48px;
    }
    .author-avatar {
      width: 64px;
      height: 64px;
      border-radius: 50%;
      object-fit: cover;
      background: #f5f7fa;
      border: 2px solid #e0e6ed;
    }
    .author-info {
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    .author-name {
      font-family: 'Figtree', sans-serif;
      font-size: 20px;
      font-weight: 700;
      color: #122C24;
      margin-bottom: 2px;
      text-transform: uppercase;
    }
    .author-role {
      font-family: 'Manrope', sans-serif;
      font-size: 16px;
      color: #6F7B80;
      font-weight: 500;
      text-transform: uppercase;
      letter-spacing: 0.01em;
    }
    @media (max-width: 700px) {
      .blog-title {
        font-size: 1.2rem;
        margin-bottom: 24px;
      }
      .author-block {
        gap: 10px;
        margin-bottom: 24px;
      }
      .author-avatar {
        width: 40px;
        height: 40px;
      }
      .author-name {
        font-size: 1rem;
      }
      .author-role {
        font-size: 0.85rem;
      }
    }

    .more-blogs-section {
      max-width: 1008px;
      margin: 0 auto 60px auto;
      padding: 0 4px;
    }
    .more-blogs-title {
      font-family: 'Figtree', sans-serif;
      font-size: 1.5rem;
      font-weight: 800;
      color: #122C24;
      text-transform: uppercase;
      margin: 0 0 32px 0;
      letter-spacing: 0.01em;
      text-align: left;
    }
    .more-blogs-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 2rem;
    }
    .more-blog-card {
      background: #F8F9FA;
      border-radius: 16px;
      box-shadow: 0 2px 8px rgba(18,44,36,0.04);
      padding: 20px 18px 24px 18px;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      transition: box-shadow 0.2s;
      min-height: 420px;
    }
    .more-blog-card:hover {
      box-shadow: 0 8px 32px rgba(18,44,36,0.10);
    }
    .more-blog-img {
      width: 100%;
      height: 160px;
      object-fit: cover;
      border-radius: 12px;
      margin-bottom: 18px;
    }
    .more-blog-meta-row {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 10px;
    }
    .more-blog-date {
      color: #6F7B80;
      font-size: 0.95rem;
      font-family: 'Manrope', sans-serif;
      font-weight: 500;
    }
    .more-blog-title-link {
      text-decoration: none;
    }
    .more-blog-title {
      font-family: 'Figtree', sans-serif;
      font-size: 1.1rem;
      font-weight: 800;
      color: #122C24;
      margin-bottom: 10px;
      text-transform: uppercase;
      line-height: 1.2;
    }
    .more-blog-excerpt {
      font-family: 'Manrope', sans-serif;
      font-size: 15px;
      color: #6F7B80;
      margin-bottom: 18px;
      line-height: 1.5;
    }
    .more-blog-read-btn {
      display: inline-flex;
      align-items: center;
      gap: 4px;
      color: #122C24;
      font-family: 'Figtree', sans-serif;
      font-size: 1rem;
      font-weight: 700;
      text-decoration: none;
      text-transform: uppercase;
      margin-top: auto;
      transition: color 0.2s;
    }
    .more-blog-read-btn:hover {
      color: #06BCC1;
    }
    .arrow {
      font-size: 1.1em;
      margin-left: 2px;
    }
    @media (max-width: 900px) {
      .more-blogs-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
      }
      .more-blog-card {
        min-height: unset;
      }
    }
  </style>
</head>
<body>
    <?php include '../navbar.php'; ?>
    <div class="main-wrapper">
      <h1 class="blog-title"><?= htmlspecialchars($blog['title']) ?></h1>
      <div class="author-block">
        <img src="<?= htmlspecialchars($blog['author_avatar'] ?? 'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=120&q=80') ?>" alt="Author Avatar" class="author-avatar">
        <div class="author-info">
          <div class="author-name"><?= htmlspecialchars($blog['author']) ?></div>
          <div class="author-role"><?= htmlspecialchars($blog['author_role']) ?></div>
        </div>
      </div>
      <img src="<?= htmlspecialchars($blog['image']) ?>" alt="Cover Image" class="cover-image">
      <div class="meta-row">
        <span class="category-badge"><?= htmlspecialchars($blog['category']) ?></span>
        <span class="post-meta">
          <span><?= htmlspecialchars($blog['date']) ?> &mdash; <?= htmlspecialchars($blog['read_time']) ?></span>
        </span>
      </div>
      <div class="post-content">
        <?= $blog['content'] ?>
      </div>

      <!-- More Blog Updates Section -->
      <div style="max-width: 1200px; margin: 0 auto 60px auto;">
        <h1 style="text-align: center; font-family: 'Figtree', sans-serif; font-size: 4rem; font-weight: 800; color: #122C24; text-transform: uppercase; margin: 0 0 18px 0; letter-spacing: 0.01em;">
          MORE BLOG UPDATES
        </h1>
        <div style="text-align: center; color: #6F7B80; font-size: 1.5rem; font-family: 'Manrope', sans-serif; margin-bottom: 60px;">
          We offer a comprehensive range of plumbing services to meet.
        </div>
        <?php
        $count = 0;
        foreach ($blogs as $b) {
          // Don't show the current blog
          if ($b['slug'] === $blog['slug']) continue;
          if ($count >= 3) break;
        ?>
        <div style="
          display: flex;
          align-items: center;
          background: #fff;
          border-radius: 28px;
          box-shadow: none;
          border: 1.5px solid #e6ecef;
          padding: 48px 36px;
          max-width: 100%;
          min-height: 260px;
          margin: 0 auto 40px auto;
          gap: 36px;
        ">
          <!-- Left: Blog Info -->
          <div style="flex: 1; min-width: 0;">
            <span class="category-badge" style="margin-bottom: 18px; display: inline-block;"><?= htmlspecialchars($b['category']) ?></span>
            <div class="post-meta" style="margin-bottom: 18px; display: flex; align-items: center; gap: 8px;">
              <span style="font-size: 1.2rem;">•</span>
              <span><?= htmlspecialchars($b['date']) ?> &mdash; <?= htmlspecialchars($b['read_time']) ?></span>
            </div>
            <div style="font-family: 'Figtree', sans-serif; font-size: 2.2rem; font-weight: 800; color: #122C24; text-transform: uppercase; margin-bottom: 18px; letter-spacing: 0.01em; line-height: 1.1;">
              <?= htmlspecialchars($b['title']) ?>
            </div>
            <a href="view.php?post=<?= htmlspecialchars($b['slug']) ?>" style="font-family: 'Figtree', sans-serif; font-size: 1.3rem; font-weight: 700; color: #122C24; text-decoration: none; text-transform: uppercase; display: inline-flex; align-items: center; gap: 10px; margin-top: 18px;">
              READ NOW <span style="font-size: 1.5em;">→</span>
            </a>
          </div>
          <!-- Right: Blog Image -->
          <div style="flex: 0 0 420px; display: flex; align-items: center; justify-content: center;">
            <a href="view.php?post=<?= htmlspecialchars($b['slug']) ?>">
              <img src="<?= htmlspecialchars($b['image']) ?>" alt="<?= htmlspecialchars($b['title']) ?>" style="width: 420px; height: 260px; object-fit: cover; border-radius: 16px; border: 1.5px solid #e6ecef;">
            </a>
          </div>
        </div>
        <?php $count++; } ?>
      </div>
      <!-- End More Blog Updates Section -->
    </div>
    <?php include '../letsConnect.php'; ?>
    <?php include '../footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
