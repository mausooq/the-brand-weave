<?php
$steps = [];
$json_path = __DIR__ . '/services.json';
if (file_exists($json_path)) {
    $steps = json_decode(file_get_contents($json_path), true);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Services | The Brand Weave</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../navbar.css" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <style>
    body {
      font-family: 'Manrope', sans-serif;
      background: #fff;
      color: #122C24;
      margin: 0;
      padding: 0;
    }
  </style>
</head>
<body>
<?php include '../navbar.php'; ?>

    <!-- Services Section -->
    <section id="services" class="py-5 bg-light">
      <div class="container">
        <div class="mb-5">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <h2 class="text-uppercase fw-bold mb-0" style="letter-spacing: 2px; font-size: 60px; line-height: 1; color: #122c24;">Service<br>Expertise</h2>
            </div>
            <div class="col-lg-6 d-flex justify-content-lg-end align-items-center mt-3 mt-lg-0">
              <p class="text-muted mb-0" style="font-size: 1.2rem; max-width: 450px;">We offer a complete suite of digital marketing services to grow your brand online.</p>
            </div>
          </div>
        </div>
        
        <div class="row-2 ">
          <div class="col-12">
            <div class="card h-100 border-0 shadow-sm service-card d-flex flex-row align-items-center p-4 position-relative overflow-hidden" style="border-radius: 0.7rem;">
              <div class="service-card-content flex-grow-1 position-relative z-2">
                <div class="service-icon-circle mb-3">
                  <i class="bi bi-star-fill"></i>
                </div>
                <h3 class="fw-bold mb-2 service-title">SEO MARKETING</h3>
                <p class="text-muted mb-0 service-subtitle">Identifying and targeting the right keywords<br>that are relevant to your business.</p>
              </div>
              <div class="service-card-image position-absolute top-0 end-0 h-100 d-flex align-items-center justify-content-center" style="width:38%;min-width:260px;">
                <img src="../assets/SEO_marketing.jpg" alt="Service" style="width:100%;height:100%;object-fit:cover;border-radius:0.75rem;" />
                <span class="service-card-arrow-overlay"><i class="bi bi-arrow-up-right"></i></span>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card h-100 border-0 shadow-sm service-card d-flex flex-row align-items-center p-4 position-relative overflow-hidden" style="border-radius: 0.7rem;">
              <div class="service-card-content flex-grow-1 position-relative z-2">
                <div class="service-icon-circle mb-3">
                  <i class="bi bi-star-fill"></i>
                </div>
                <h3 class="fw-bold mb-2 service-title">MEDIA MARKETING</h3>
                <p class="text-muted mb-0 service-subtitle">Social media marketing is about building<br>relationships through engagement.</p>
              </div>
              <div class="service-card-image position-absolute top-0 end-0 h-100 d-flex align-items-center justify-content-center" style="width:38%;min-width:260px;">
                <img src="../assets/media_marketing.png" alt="Service" style="width:100%;height:100%;object-fit:cover;border-radius:0.75rem;" />
                <span class="service-card-arrow-overlay"><i class="bi bi-arrow-up-right"></i></span>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card h-100 border-0 shadow-sm service-card d-flex flex-row align-items-center p-4 position-relative overflow-hidden" style="border-radius: 0.7rem;">
              <div class="service-card-content flex-grow-1 position-relative z-2">
                <div class="service-icon-circle mb-3">
                  <i class="bi bi-star-fill"></i>
                </div>
                <h3 class="fw-bold mb-2 service-title">CONTENT MARKETING</h3>
                <p class="text-muted mb-0 service-subtitle">Engage your audience and drive conversions<br>with high-quality, targeted content campaigns.</p>
              </div>
              <div class="service-card-image position-absolute top-0 end-0 h-100 d-flex align-items-center justify-content-center" style="width:38%;min-width:260px;">
                <img src="../assets/content_marketing.jpg" alt="Service" style="width:100%;height:100%;object-fit:cover;border-radius:0.75rem;" />
                <span class="service-card-arrow-overlay"><i class="bi bi-arrow-up-right"></i></span>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card h-100 border-0 shadow-sm service-card d-flex flex-row align-items-center p-4 position-relative overflow-hidden" style="border-radius: 0.7rem;">
              <div class="service-card-content flex-grow-1 position-relative z-2">
                <div class="service-icon-circle mb-3">
                  <i class="bi bi-star-fill"></i>
                </div>
                <h3 class="fw-bold mb-2 service-title">BRANDING & DESIGN</h3>
                <p class="text-muted mb-0 service-subtitle">Build a memorable brand identity<br>with our creative design and branding solutions.</p>
              </div>
              <div class="service-card-image position-absolute top-0 end-0 h-100 d-flex align-items-center justify-content-center" style="width:38%;min-width:260px;">
                <img src="../assets/Brand_desgining.png" alt="Service" style="width:100%;height:100%;object-fit:cover;border-radius:0.75rem;" />
                <span class="service-card-arrow-overlay"><i class="bi bi-arrow-up-right"></i></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.service-card').forEach(card => {
      card.addEventListener('mouseenter', () => {
        card.classList.add('active');
        const img = card.querySelector('.service-card-image img');
        if (img) img.style.filter = 'none';
      });
      card.addEventListener('mouseleave', () => {
        card.classList.remove('active');
        const img = card.querySelector('.service-card-image img');
        if (img) img.style.filter = 'grayscale(100%)';
      });
    });
  });
</script>

<!-- Working Process Section -->
<section class="working-process-section py-5">
  <div class="container">
    <div class="working-process-title h2 fw-bold text-center">Working Process</div>
    <div class="working-process-subtitle text-center mb-5">
      Foster a positive and inclusive team culture aligned with your company's values and mission.
    </div>

    <div class="row gy-5">
      <?php if (!empty($steps)): ?>
        <?php foreach ($steps as $step): ?>
          <div class="col-12 col-md-6 col-lg-3">
            <div>
              <div class="process-step-icon mb-3" style="font-size: 2.5rem; color: #1e293b;">
                <i class="<?= htmlspecialchars($step['icon']) ?>"></i>
              </div>
              <div class="process-step-title mb-2" style="font-size: 1.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
                <?= htmlspecialchars($step['title']) ?>
              </div>
              <?php if (!empty($step['description'])): ?>
                <div class="process-step-desc" style="font-size: 1.1rem; color: #64748b; line-height: 1.6;">
                  <?= htmlspecialchars($step['description']) ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <div class="col-12 text-danger fs-5">No steps found! Please check your <b>services.json</b> file.</div>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php include '../letsConnect.php'; ?>
<?php include '../footer.php'; ?>
</body>
</html>
