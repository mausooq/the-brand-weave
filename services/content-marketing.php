<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Content Marketing | The Brand Weave</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../navbar.css" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
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
      background: #e2e8f0;
    }
    .stat-number {
      font-size: 4.5rem;
      font-weight: 700;
      color: #18362b;
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
    <h1 class="service-title fade-in-section">Content Marketing</h1>
  </section>
  <!-- Main Image Section (after title) -->
  <div class="fade-in-section" style="display: flex; justify-content: center;">
    <img src="../assets/content_marketing.jpg" alt="Content Marketing Visual" style="width: 100%; max-width: 1049.6px; height: 478.98px; margin: 0px 0 40px; border-radius: 15px; object-fit: cover; box-shadow: 0 4px 24px rgba(0,0,0,0.08);">
  </div>
  <!-- Statistics Section -->
  <section class="section" style="background: #fff;">
    <div class="container" style="background: #fff; max-width: 1049.6px; margin: 0 auto;">
      <div class="statistics-grid">
        <div class="stat-card fade-in-section">
          <div class="stat-number" data-target="50+">0</div>
          <div class="stat-label">Regular Clients</div>
        </div>
        <div class="stat-card fade-in-section">
          <div class="stat-number" data-target="6.2%">0</div>
          <div class="stat-label">Yearly Growth Rate</div>
        </div>
        <div class="stat-card fade-in-section">
          <div class="stat-number" data-target="4.5★">0</div>
          <div class="stat-label">Rated By Clients</div>
        </div>
      </div>
    </div>
  </section>
  <!-- Content Section -->
  <section class="section section-bg">
    <div class="container" style="max-width: 1049.6px; margin: 0 auto;">
      <div class="content-block fade-in-section">
        <h3>What is Content Marketing?</h3>
        <p>Content marketing is a strategic approach that focuses on a clearly defined audience to attract and maintain valuable, relevant and coherent materials, focuses on publishing and distribution - and ultimately, the profitable customer runs action. This includes blogs, videos, infographics, social media posts, eBooks, newsletters, and more - designed to inform, attach and convert.</p>
      </div>
      <div class="content-block fade-in-section">
        <h3>Benefits of Content Marketing</h3>
        <ul>
          <li>Trust and Authority Construction: High quality materials keep your brand as an expert in your field, increasing confidence and reliability among potential customers.</li>
          <li>SEO and Google improves ranking: Customized content helps your website in high rank on the search engine, driving more organic traffic.</li>
          <li>Targeted traffic drives: Attract users who are actively searching for solutions related to your products or services.</li>
          <li>Protects engagement and retention: Valuable content keeps your audience busy and encourages them to return for more.</li>
          <li>Sales supports every stage of funnel: From awareness to decision, the material guides the possibilities with its buyer travel.</li>
          <li>Produces more leads at low cost: Material marketing costs less than traditional advertising and gives long-term results.</li>
        </ul>
      </div>
      <div class="content-block fade-in-section">
        <h3>How Content Marketing Helps Your Business</h3>
        <ul>
          <li>Educates your audience: help potential customers make informed decisions with practical materials.</li>
          <li>Increases conversions: Strategic call-to-action converts readers into lead and takes into sale.</li>
          <li>Brand enhances awareness: Sharing, high-affected materials spread your brand message far and wide.</li>
          <li>Nurture customer relationships: Keep your audience through email newsletters, blog updates and supporting guides.</li>
          <li>Long-term ROI Drive: Evergreen material continues to attract traffic and leads for months or years.</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- Service Expertise Section (copied from seo.php) -->
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
              <a href="seo.php" class="service-card-arrow-overlay"><i class="bi bi-arrow-up-right"></i></a>
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
              <a href="smm.php" class="service-card-arrow-overlay"><i class="bi bi-arrow-up-right"></i></a>
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
              <a href="content-marketing.php" class="service-card-arrow-overlay"><i class="bi bi-arrow-up-right"></i></a>
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
              <a href="branding.php" class="service-card-arrow-overlay"><i class="bi bi-arrow-up-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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