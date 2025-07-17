<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Google Ads & PPC Campaigns | The Brand Weave</title>
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
    <h1 class="service-title fade-in-section">Google Ads & PPC Campaigns</h1>
  </section>
  <!-- Main Image Section (after title) -->
  <div class="fade-in-section" style="display: flex; justify-content: center;">
    <img src="../assets/SEO_marketing.jpg" alt="Google Ads Visual" style="width: 100%; max-width: 1049.6px; height: 478.98px; margin: 0px 0 40px; border-radius: 15px; object-fit: cover; box-shadow: 0 4px 24px rgba(0,0,0,0.08);">
  </div>
  <!-- Statistics Section -->
  <section class="section" style="background: #fff;">
    <div class="container" style="background: #fff; max-width: 1049.6px; margin: 0 auto;">
      <div class="statistics-grid">
        <div class="stat-card fade-in-section">
          <div class="stat-number" data-target="100+">0</div>
          <div class="stat-label">Campaigns Managed</div>
        </div>
        <div class="stat-card fade-in-section">
          <div class="stat-number" data-target="8.5%">0</div>
          <div class="stat-label">Avg. Conversion Rate</div>
        </div>
        <div class="stat-card fade-in-section">
          <div class="stat-number" data-target="4.8★">0</div>
          <div class="stat-label">Rated By Clients</div>
        </div>
      </div>
    </div>
  </section>
  <!-- Content Section -->
  <section class="section section-bg">
    <div class="container" style="max-width: 1049.6px; margin: 0 auto;">
      <div class="content-block fade-in-section">
        <h3>What are Google Ads & PPC Campaigns?</h3>
        <p>Google advertising, also known as Pay-Per-Click (PPC) advertising, is a powerful online marketing strategy where you only pay when someone clicks on your advertisement. These ads appear on Google Search Results, YouTube, partner websites, and more—helping you reach potential customers at the right time, when they are searching for your products or services.</p>
      </div>
      <div class="content-block fade-in-section">
        <h3>Benefits of Google Ads & PPC Campaigns</h3>
        <ul>
          <li><strong>Immediate visibility on Google:</strong> Appear in search results within hours, not weeks or months, without waiting for SEO.</li>
          <li><strong>Highly targeted advertising:</strong> Reach your ideal audience by targeting keywords, locations, devices, interests, and even specific times of day.</li>
          <li><strong>Full budget control:</strong> Set your daily or monthly ad spend with no hidden costs—scale up or down as needed.</li>
          <li><strong>Measurable results:</strong> Track clicks, conversions, cost-per-lead, and ROI in real time to optimize performance.</li>
          <li><strong>Increased website traffic and sales:</strong> Drive high-intent visitors to your landing pages and turn them into customers.</li>
          <li><strong>Remarketing opportunities:</strong> Reconnect with visitors who didn’t convert the first time with smart retargeting ads.</li>
        </ul>
      </div>
      <div class="content-block fade-in-section">
        <h3>How Google Ads & PPC Help Your Business</h3>
        <ul>
          <li><strong>Drive immediate leads and sales:</strong> Perfect for launching new products, offers, or events.</li>
          <li><strong>Target the right customers:</strong> Access users who are actively searching for what you provide.</li>
          <li><strong>Defeat the competition quickly:</strong> Appear above your rivals in search results and gain market share.</li>
          <li><strong>Learn and improve rapidly:</strong> Use A/B testing for data-driven optimization of ads, keywords, and landing pages.</li>
          <li><strong>Complement SEO and organic strategy:</strong> Fill gaps in search rankings and boost conversions.</li>
        </ul>
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