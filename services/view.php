<?php
$services = json_decode(file_get_contents(__DIR__ . '/services.json'), true);
$slug = $_GET['service'] ?? '';
$service = null;
foreach ($services as $s) {
  if ($s['slug'] === $slug) {
    $service = $s;
    break;
  }
}
if (!$service) {
  echo '<h1>404 - Service Not Found</h1>';
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= htmlspecialchars($service['title']) ?> | The Brand Weave</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../navbar.css" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon.png">
  <link rel="shortcut icon" href="../assets/favicon.png">
  <link rel="apple-touch-icon" href="../assets/favicon.png">
  
  <style>
    :root {
      --primary-text: #1e293b;
      --secondary-text: #64748b;
      --background: #ffffff;
      --section-background: #f8fafc;
      --accent: #6366f1;
    }
    body {
      background: var(--background);
      color: var(--primary-text);
    }
    .section {
      padding: 80px 0;
      overflow: hidden;
    }
    .section-bg {
      background-color: var(--section-background);
    }
    .fade-in-section {
      opacity: 0;
      transform: translateY(40px);
      transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }
    .fade-in-section.is-visible {
      opacity: 1;
      transform: translateY(0);
    }
    .service-hero {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 147.6px;
      padding: 40px 20px;
    }
    .service-label span {
      border: 1px solid #d1d5db;
      color: var(--secondary-text);
      font-weight: 500;
      font-size: 0.9rem;
      letter-spacing: 1px;
    }
   
    .statistics-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 0;
      text-align: center;
      justify-content: center;
      align-items: stretch;
      border-radius: 0;
      background: none;
      box-shadow: none;
      margin: 0 auto;
      max-width: 1050px;
    }
    .stat-card {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 0;
      background: none;
      border-radius: 0;
      box-shadow: none;
      width: 100%;
      height: 134px;
      position: relative;
    }
    .stat-card:not(:last-child)::after {
      content: "";
      position: absolute;
      right: 0;
      top: 25%;
      height: 50%;
      width: 1px;
      background: #e2e8f0; /* subtle divider */
    }
    .stat-number {
      font-size: 4.5rem;
      font-weight: 700;
      color: #18362b; /* dark green, adjust as needed */
      line-height: 1;
    }
    .stat-label {
      font-size: 1rem;
      font-weight: 500;
      color: #64748b;
      margin-top: 10px;
    }
    .content-block {
      margin-bottom: 3rem;
    }
    .content-block h3 {
      font-size: 1.5rem;
      font-weight: 600;
      margin-bottom: 0.75rem;
    }
    .content-block p {
      color: var(--secondary-text);
      line-height: 1.6;
    }
    .benefits-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 2rem;
      margin-bottom: 4rem;
    }
    .benefit-item h4 {
      font-size: 1.2rem;
      font-weight: 600;
      margin-bottom: 0.5rem;
    }
    .benefit-item p {
      color: var(--secondary-text);
    }
    .laptop-image {
      width: 100%;
      height: 478.98px;
      max-width: 1049.6px;
      margin: 0px 0 40px;
      border-radius: 15px;
      object-fit: cover;
      box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
    }
    @media (max-width: 900px) {
      .statistics-grid {
        grid-template-columns: 1fr;
        max-width: 100%;
      }
      .stat-card:not(:last-child)::after {
        display: none;
      }
      .container[style*='max-width: 1049.6px'] .row {
        grid-template-columns: 1fr !important;
      }
    }
  </style>
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
      <!-- MORE Service Expertise -->
      <div style="margin-top: 100px;">
        <div class="row align-items-center mb-5">
          <div class="col-lg-6">
            <h2 class="text-uppercase fw-bold mb-0" style="letter-spacing: 2px; font-size: 60px; line-height: 1; color: #122c24;">MORE<br>SERVICE EXPERTISE</h2>
          </div>
          <div class="col-lg-6 d-flex justify-content-lg-end align-items-center mt-3 mt-lg-0">
            <p class="text-muted mb-0" style="font-size: 1.2rem; max-width: 450px;">We offer a comprehensive range of digital marketing services to meet all of your needs.</p>
          </div>
        </div>
        <div class="row-2">
          <?php foreach ($services as $s): ?>
            <?php if ($s['slug'] !== $service['slug']): ?>
              <div class="col-12">
                <a href="view.php?service=<?= urlencode($s['slug']) ?>" class="text-decoration-none">
                  <div class="card h-100 border-0 shadow-sm service-card d-flex flex-row align-items-center p-4 position-relative overflow-hidden" style="border-radius: 0.7rem;">
                    <div class="service-card-content flex-grow-1 position-relative z-2">
                      <div class="service-icon-circle mb-3">
                        <i class="bi bi-star-fill"></i>
                      </div>
                      <h3 class="fw-bold mb-2 service-title"><?= htmlspecialchars($s['title']) ?></h3>
                      <p class="text-muted mb-0 service-subtitle"><?= htmlspecialchars($s['excerpt']) ?></p>
                    </div>
                    <span class="service-card-arrow ms-auto"><i class="bi bi-arrow-right"></i></span>
                    <div class="service-card-image position-absolute top-0 end-0 h-100 d-flex align-items-center justify-content-center" style="width:38%;min-width:260px;">
                      <img src="<?= htmlspecialchars($s['image']) ?>" alt="<?= htmlspecialchars($s['title']) ?>" style="width:100%;height:100%;object-fit:cover;border-radius:0.75rem;filter: grayscale(100%);transition: filter 0.7s cubic-bezier(0.4, 0, 0.2, 1);" />
                      <span class="service-card-arrow-overlay"><i class="bi bi-arrow-up-right"></i></span>
                    </div>
                  </div>
                </a>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <?php include '../letsConnect.php'; ?>
  <?php include '../footer.php'; ?>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      function animate(obj, initVal, lastVal, duration) {
        let startTime = null;
        const finalValStr = obj.dataset.target;
        const step = (currentTime) => {
          if (!startTime) startTime = currentTime;
          const progress = Math.min((currentTime - startTime) / duration, 1);
          let currentValue = progress * (lastVal - initVal) + initVal;
          if (finalValStr.includes('.')) {
            obj.textContent = currentValue.toFixed(1) + (finalValStr.includes('%') ? '%' : '★');
          } else {
            obj.textContent = Math.floor(currentValue) + (finalValStr.includes('+') ? '+' : '');
          }
          if (progress < 1) {
            window.requestAnimationFrame(step);
          } else {
            obj.textContent = finalValStr;
          }
        };
        window.requestAnimationFrame(step);
      }

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            const statNumber = entry.target.querySelector('.stat-number');
            if(statNumber && !statNumber.classList.contains('animated')) {
              const targetValue = parseFloat(statNumber.dataset.target.replace(/[^0-9.]/g, ''));
              animate(statNumber, 0, targetValue, 1500);
              statNumber.classList.add('animated'); 
            }
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.1 });

      document.querySelectorAll('.fade-in-section').forEach(section => {
        observer.observe(section);
      });
    });

    // Service card animation: grayscale to color and shadow effect
    document.addEventListener('DOMContentLoaded', function() {
      document.querySelectorAll('.service-card').forEach(card => {
        card.addEventListener('mouseenter', () => {
          card.classList.add('active');
          const img = card.querySelector('.service-card-image img');
          if(img) img.style.filter = 'none';
        });
        card.addEventListener('mouseleave', () => {
          card.classList.remove('active');
          const img = card.querySelector('.service-card-image img');
          if(img) img.style.filter = 'grayscale(100%)';
        });
      });
    });
  </script>
</body>
</html>
