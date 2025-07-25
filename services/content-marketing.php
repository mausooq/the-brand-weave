<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Content Marketing | The Brand Weave</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
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
    .seo-card {
      background: #f7f9fc;
      border-radius: 24px;
      box-shadow: 0 4px 24px rgba(0,0,0,0.06);
      padding: 48px 32px;
      margin: 48px 0;
      max-width: 1100px;
      margin-left: auto;
      margin-right: auto;
    }
    .seo-card h2, .seo-card h3 {
      color: #1a3c34;
      font-family: 'Poppins', 'Figtree', sans-serif;
      font-weight: 700;
      text-align: center;
      font-size: 2rem;
      margin-bottom: 1.5rem;
    }
    .seo-card p, .seo-card li {
      color: #6a707c;
      font-family: 'Roboto', 'Inter', sans-serif;
      font-size: 1.1rem;
    }
    .seo-card .seo-divider {
      border: none;
      border-top: 1px solid #e5e7eb;
      margin: 2.5rem 0;
    }
    .seo-card .seo-columns {
      display: flex;
      gap: 2rem;
      flex-wrap: wrap;
      justify-content: center;
    }
    .seo-card .seo-col {
      flex: 1 1 300px;
      min-width: 260px;
    }
    .seo-card ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .seo-card li {
      display: flex;
      align-items: center;
      margin-bottom: 1rem;
      transition: color 0.2s;
      cursor: pointer;
    }
    .seo-card li .seo-icon {
      color: #6a707c;
      margin-right: 0.75rem;
      font-size: 1.2em;
      transition: color 0.2s;
    }
    .seo-card li:hover .seo-icon {
      color: #1a3c34;
    }
    .seo-card li:hover span {
      text-decoration: underline;
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
      .seo-card {
        padding: 24px 8px;
      }
      .seo-card .seo-columns {
        flex-direction: column;
        gap: 1.5rem;
      }
      .seo-card h2, .seo-card h3 {
        font-size: 1.5rem;
      }
    }
    @media (max-width: 991.98px) {
      .service-card {
        flex-direction: column !important;
        align-items: center !important;
        text-align: center !important;
      }
      .service-card-content {
        align-items: center !important;
        text-align: center !important;
      }
      .service-card-image {
        position: static !important;
        width: 100% !important;
        min-width: 0 !important;
        height: auto !important;
        margin-top: 1rem;
        display: flex !important;
        justify-content: center !important;
      }
      .service-card-image img {
        width: 100% !important;
        height: auto !important;
        border-radius: 0.75rem !important;
      }
      .container {
        padding-left: 0 !important;
        padding-right: 0 !important;
        margin-left: 0 !important;
        margin-right: 0 !important;
        max-width: 100% !important;
      }
      .content-block {
        text-align: center !important;
      }
      .content-block ul {
        display: inline-block;
        text-align: left;
      }
    }
    .benefits-responsive-container {
      margin-left: 12px;
      margin-right: 12px;
    }
    @media (max-width: 575.98px) {
      .benefits-responsive-container {
        padding-left: 16px !important;
        padding-right: 16px !important;
        margin-left: 16px;
        margin-right: 16px;
      }
      .benefits-heading {
        text-align: center !important;
      }
      .benefits-image-center {
        display: flex !important;
        justify-content: center !important;
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
      <div class="seo-card">
        <h2>What is Content Marketing?</h2>
        <p style="text-align:center; margin-bottom:2rem;">
          Content marketing is a strategic approach that focuses on a clearly defined audience to attract and maintain valuable, relevant and coherent materials, focuses on publishing and distribution - and ultimately, the profitable customer runs action. This includes blogs, videos, infographics, social media posts, eBooks, newsletters, and more - designed to inform, attach and convert.
        </p>
        <hr class="seo-divider">
        <div class="seo-columns">
          <div class="seo-col">
            <h3>Benefits of Content Marketing</h3>
            <ul>
              <li><span class="seo-icon"><i class="bi bi-shield-check"></i></span><span>Trust and Authority Construction</span></li>
              <li><span class="seo-icon"><i class="bi bi-graph-up"></i></span><span>SEO and Google improves ranking</span></li>
              <li><span class="seo-icon"><i class="bi bi-people"></i></span><span>Targeted traffic drives</span></li>
              <li><span class="seo-icon"><i class="bi bi-emoji-smile"></i></span><span>Protects engagement and retention</span></li>
              <li><span class="seo-icon"><i class="bi bi-cash-stack"></i></span><span>Sales supports every stage of funnel</span></li>
              <li><span class="seo-icon"><i class="bi bi-lightbulb"></i></span><span>Produces more leads at low cost</span></li>
            </ul>
          </div>
          <div class="seo-col">
            <h3>How Content Marketing Helps Your Business</h3>
            <ul>
              <li><span class="seo-icon"><i class="bi bi-book"></i></span><span>Educates your audience</span></li>
              <li><span class="seo-icon"><i class="bi bi-bar-chart"></i></span><span>Increases conversions</span></li>
              <li><span class="seo-icon"><i class="bi bi-bullseye"></i></span><span>Brand enhances awareness</span></li>
              <li><span class="seo-icon"><i class="bi bi-envelope"></i></span><span>Nurture customer relationships</span></li>
              <li><span class="seo-icon"><i class="bi bi-clock-history"></i></span><span>Long-term ROI Drive</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Benefits Section -->
  <section class="section" style="background: #fff;">
    <div class="container px-3 benefits-responsive-container" style="max-width: 1200px; margin: 0 auto;">
      <h2 class="mb-5 fade-in-section benefits-heading" style="font-size: 3.5rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #18362b; text-align: left;">Benefits of Content Marketing</h2>
      <div class="row">
        <div class="col-12 col-md-6 col-lg-3 fade-in-section" style="text-align: left;">
          <div style="font-size: 1.25rem; font-weight: 700; text-transform: uppercase; color: #18362b; margin-bottom: 0.5rem; letter-spacing: 0.5px;">Trust & Authority</div>
          <div style="color: #64748b; font-size: 1.08rem; line-height: 1.5; font-weight: 400;">High quality materials keep your brand as an expert in your field, increasing confidence and reliability among potential customers.</div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 fade-in-section" style="text-align: left;">
          <div style="font-size: 1.25rem; font-weight: 700; text-transform: uppercase; color: #18362b; margin-bottom: 0.5rem; letter-spacing: 0.5px;">SEO & Google Ranking</div>
          <div style="color: #64748b; font-size: 1.08rem; line-height: 1.5; font-weight: 400;">Customized content helps your website in high rank on the search engine, driving more organic traffic.</div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 fade-in-section" style="text-align: left;">
          <div style="font-size: 1.25rem; font-weight: 700; text-transform: uppercase; color: #18362b; margin-bottom: 0.5rem; letter-spacing: 0.5px;">Targeted Traffic</div>
          <div style="color: #64748b; font-size: 1.08rem; line-height: 1.5; font-weight: 400;">Attract users who are actively searching for solutions related to your products or services.</div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 fade-in-section" style="text-align: left;">
          <div style="font-size: 1.25rem; font-weight: 700; text-transform: uppercase; color: #18362b; margin-bottom: 0.5rem; letter-spacing: 0.5px;">Engagement & Retention</div>
          <div style="color: #64748b; font-size: 1.08rem; line-height: 1.5; font-weight: 400;">Valuable content keeps your audience busy and encourages them to return for more.</div>
        </div>
      </div>
      <!-- Benefits Image -->
      <div class="fade-in-section benefits-image-center" style="display: flex; justify-content: center; margin-top: 40px;">
        <img src="../assets/content_marketing.jpg" alt="Benefits Visual" style="width: 1008px; height: 460px; border-radius: 15px; object-fit: cover; box-shadow: 0 4px 24px rgba(0,0,0,0.08);">
      </div>
    </div> <!-- End of benefits section container -->
  </section>
  
  <!-- More Services Expertise Section -->
  <section id="services" class="py-5 bg-light">
    <div class="container">
      <div class="mb-5">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <h2 class="text-uppercase fw-bold mb-0" style="letter-spacing: 2px; font-size: 60px; line-height: 1; color: #122c24;">More<br>Services Expertise</h2>
          </div>
          <div class="col-lg-6 d-flex justify-content-lg-end align-items-center mt-3 mt-lg-0">
            <p class="text-muted mb-0 d-flex align-items-center justify-content-between" style="font-size: 1.2rem; max-width: 450px;">
              We offer a complete suite of digital marketing services to grow your brand online.
              <a href="../services/" class="btn  btn-circle ms-3" style="border-color: #122c24; color: #122c24;">
                <span style="display: flex; align-items: center; justify-content: center; width: 100%; height: 100%;"><i class="bi bi-arrow-right"></i></span>
              </a>
            </p>
          </div>
        </div>
      </div>
      <div class="row-2 ">
        <?php
        $services = [
          [
            'file' => 'seo.php',
            'icon' => 'bi-star-fill',
            'title' => 'SEO MARKETING',
            'subtitle' => 'Identifying and targeting the right keywords<br>that are relevant to your business.',
            'img' => '../assets/SEO_marketing.jpg',
            'delay' => 0
          ],
          [
            'file' => 'smm.php',
            'icon' => 'bi-star-fill',
            'title' => 'MEDIA MARKETING',
            'subtitle' => 'Social media marketing is about building<br>relationships through engagement.',
            'img' => '../assets/media_marketing.png',
            'delay' => 100
          ],
          [
            'file' => 'content-marketing.php',
            'icon' => 'bi-star-fill',
            'title' => 'CONTENT MARKETING',
            'subtitle' => 'Engage your audience and drive conversions<br>with high-quality, targeted content campaigns.',
            'img' => '../assets/content_marketing.jpg',
            'delay' => 200
          ],
          [
            'file' => 'branding.php',
            'icon' => 'bi-star-fill',
            'title' => 'BRANDING & DESIGN',
            'subtitle' => 'Build a memorable brand identity<br>with our creative design and branding solutions.',
            'img' => '../assets/Brand_desgining.png',
            'delay' => 300
          ],
          [
            'file' => 'analytics.php',
            'icon' => 'bi-bar-chart',
            'title' => 'ANALYTICS & REPORTING',
            'subtitle' => 'Data-driven insights to measure performance<br>and optimize marketing efforts.',
            'img' => '../assets/SEO_marketing.jpg',
            'delay' => 400
          ],
          [
            'file' => 'google-ads.php',
            'icon' => 'bi-bullseye',
            'title' => 'GOOGLE ADS & PPC',
            'subtitle' => 'Maximize ROI with targeted Google Ads<br>and pay-per-click campaigns.',
            'img' => '../assets/RED-BG.jpg',
            'delay' => 500
          ],
          [
            'file' => 'web-design.php',
            'icon' => 'bi-palette',
            'title' => 'WEBSITE DESIGN',
            'subtitle' => 'Modern, responsive websites<br>that drive results and engagement.',
            'img' => '../assets/hero1.jpg',
            'delay' => 600
          ],
          [
            'file' => 'email-marketing.php',
            'icon' => 'bi-envelope',
            'title' => 'EMAIL MARKETING',
            'subtitle' => 'Run personalized email campaigns<br>to nurture leads and drive conversions.',
            'img' => '../assets/Brand_desgining.png',
            'delay' => 700
          ],
        ];
        $current = basename($_SERVER['PHP_SELF']);
        foreach ($services as $service) {
          if ($service['file'] === $current) continue;
          echo '<div class="col-12">';
          echo '<a href="' . htmlspecialchars($service['file']) . '" class="text-decoration-none">';
          echo '<div class="card h-100 border-0 shadow-sm service-card d-flex flex-row align-items-center p-4 position-relative overflow-hidden" style="border-radius: 0.7rem;" data-aos="fade-up" data-aos-delay="' . $service['delay'] . '">';
          echo '<div class="service-card-content flex-grow-1 position-relative z-2">';
          echo '<div class="service-icon-circle mb-3">';
          echo '<i class="bi ' . htmlspecialchars($service['icon']) . '"></i>';
          echo '</div>';
          echo '<h3 class="fw-bold mb-2 service-title">' . $service['title'] . '</h3>';
          echo '<p class="text-muted mb-0 service-subtitle">' . $service['subtitle'] . '</p>';
          echo '</div>';
          echo '<div class="service-card-image position-absolute top-0 end-0 h-100 d-flex align-items-center justify-content-center" style="width:38%;min-width:260px;">';
          echo '<img src="' . $service['img'] . '" alt="' . $service['title'] . '" style="width:100%;height:100%;object-fit:cover;border-radius:0.75rem;" />';
          echo '<span class="service-card-arrow-overlay"><i class="bi bi-arrow-up-right"></i></span>';
          echo '</div>';
          echo '</div>';
          echo '</a>';
          echo '</div>';
        }
        ?>
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