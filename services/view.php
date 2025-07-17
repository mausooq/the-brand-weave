<?php
// ... PHP logic to load $service and $services ...
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($service['title']) ?> | The Brand Weave</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../navbar.css" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
</head>
<body>
<?php include '../navbar.php'; ?>

<!-- Hero Section -->
<section class="section service-hero">
  <div class="service-label mb-3 fade-in-section">
    <span class="badge rounded-pill px-3 py-2">SERVICES</span>
  </div>
  <h1 class="service-title fade-in-section"><?= htmlspecialchars($service['title']) ?></h1>
</section>

<!-- Main Image Section (after title) -->
<div class="fade-in-section" style="display: flex; justify-content: center;">
  <img 
    src="<?= htmlspecialchars($service['details']['main_image']) ?>" 
    alt="Service Visual" 
    style="width: 100%; max-width: 1049.6px; height: 478.98px; margin: 0px 0 40px; border-radius: 15px; object-fit: cover; box-shadow: 0 4px 24px rgba(0,0,0,0.08);"
  >
</div>

<!-- Statistics Section -->
<section class="section" style="background: #fff;">
  <div class="container" style="background: #fff; max-width: 1049.6px; margin: 0 auto;">
    <div class="statistics-grid">
      <?php foreach ($service['details']['statistics'] as $stat): ?>
      <div class="stat-card fade-in-section">
        <div class="stat-number" data-target="<?= htmlspecialchars($stat['value']) ?>">0</div>
        <div class="stat-label"><?= htmlspecialchars($stat['label']) ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Content Section -->
<section class="section section-bg">
  <div class="container" style="max-width: 1049.6px; margin: 0 auto;">
    <?php foreach ($service['details']['content_blocks'] as $i => $block): ?>
      <div class="content-block fade-in-section">
        <h3><?= htmlspecialchars($block['title']) ?></h3>
        <p><?= htmlspecialchars($block['text']) ?></p>
      </div>
      <?php if ($block['title'] === 'Media Marketing'): ?>
        <div class="fade-in-section" style="display: flex; justify-content: center;">
          <img 
            src="<?= htmlspecialchars($service['details']['main_image']) ?>" 
            alt="Service Visual" 
            style="width: 100%; max-width: 1050px; height: 134px; object-fit: cover; border-radius: 16px; box-shadow: 0 4px 24px rgba(0,0,0,0.08); margin: 32px 0;"
          >
        </div>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
</section>

<!-- Benefits Section -->
<?php if (!empty($service['details']['benefits_section'])): ?>
<section class="section" style="background: #fff;">
  <div class="container">
    <h2 class="mb-5 fade-in-section" style="font-size: 3.5rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #18362b; text-align: left;">
      <?= htmlspecialchars($service['details']['benefits_section']['title']) ?>
    </h2>
    <div class="row" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 2rem;">
      <?php foreach ($service['details']['benefits_section']['items'] as $item): ?>
        <div class="fade-in-section" style="text-align: left;">
          <div style="font-size: 1.25rem; font-weight: 700; text-transform: uppercase; color: #18362b; margin-bottom: 0.5rem; letter-spacing: 0.5px;">
            <?= htmlspecialchars($item['title']) ?>
          </div>
          <div style="color: #64748b; font-size: 1.08rem; line-height: 1.5; font-weight: 400;">
            <?= htmlspecialchars($item['text']) ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <!-- Benefits Image -->
    <div class="fade-in-section" style="display: flex; justify-content: center; margin-top: 40px;">
      <img src="<?= htmlspecialchars($service['details']['benefits_section']['image']) ?>" alt="Benefits Visual" style="width: 1008px; height: 460px; border-radius: 15px; object-fit: cover; box-shadow: 0 4px 24px rgba(0,0,0,0.08);">
    </div>
  </div>
</section>
<?php endif; ?>

<!-- MORE Service Expertise (vertical cards) -->
<div style="margin-top: 100px;">
  <div class="container">
    <div class="row align-items-center mb-5">
      <div class="col-lg-6">
        <h2 class="text-uppercase fw-bold mb-0" style="letter-spacing: 2px; font-size: 60px; line-height: 1; color: #122c24;">MORE<br>SERVICE EXPERTISE</h2>
      </div>
      <div class="col-lg-6 d-flex justify-content-lg-end align-items-center mt-3 mt-lg-0">
        <p class="text-muted mb-0" style="font-size: 1.2rem; max-width: 450px;">We offer a comprehensive range of digital marketing services to meet all of your needs.</p>
      </div>
    </div>
  </div>
  <div class="row-2">
    <?php foreach ($services as $s): ?>
      <?php if ($s['slug'] !== $service['slug']): ?>
        <div class="col-12">
          <div class="card h-100 border-0 shadow-sm service-card service-card-vertical d-flex flex-column align-items-center p-4 position-relative overflow-hidden" style="border-radius: 0.7rem;">
            <div class="service-icon-circle mb-3">
              <i class="bi bi-star-fill"></i>
            </div>
            <h3 class="fw-bold mb-2 service-title text-center w-100"><?= htmlspecialchars($s['title']) ?></h3>
            <p class="text-muted mb-3 service-subtitle text-center w-100"><?= htmlspecialchars($s['excerpt']) ?></p>
            <img src="<?= htmlspecialchars($s['image']) ?>" alt="<?= htmlspecialchars($s['title']) ?>" class="w-100" style="max-width:100%;height:auto;object-fit:cover;border-radius:0.75rem;" />
          </div>
        </div>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
</div>

<?php include '../letsConnect.php'; ?>
<?php include '../footer.php'; ?>
<?php include '../ai-call.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 