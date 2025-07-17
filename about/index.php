<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us | The Brand Weave</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../navbar.css" />
  <link rel="stylesheet" href="../style.css" />
  <style>
    body {
      background: #fff;
      font-family: 'Inter', 'Poppins', Arial, sans-serif;
      color: #222;
      margin: 0;
      padding: 0;
    }
    .fade-in {
      opacity: 0;
      transform: translateY(40px);
      transition: opacity 0.8s cubic-bezier(.4,0,.2,1), transform 0.8s cubic-bezier(.4,0,.2,1);
    }
    .fade-in.visible {
      opacity: 1;
      transform: none;
    }
    .about-hero-modern {
      min-height: 60vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 6rem 1rem 4rem 1rem;
      background: #fff;
      position: relative;
      overflow: hidden;
    }
    .about-hero-modern h1 {
      font-size: 3.2rem;
      font-weight: 800;
      letter-spacing: -1px;
      color: #222;
      margin-bottom: 1.2rem;
      font-family: 'Poppins', 'Inter', Arial, sans-serif;
    }
    .about-hero-modern p {
      font-size: 1.35rem;
      color: #555;
      max-width: 600px;
      margin: 0 auto;
      font-weight: 500;
    }
    /* About Us 2-column */
    .about-2col-section {
      padding: 4rem 0 4rem 0;
      background: #f8f9fa;
    }
    .about-2col-img {
      border-radius: 1.5rem;
      width: 100%;
      object-fit: cover;
      min-height: 320px;
      max-height: 420px;
      box-shadow: 0 8px 32px rgba(98, 54, 255, 0.08);
    }
    .about-2col-content h2 {
      font-size: 2.2rem;
      font-weight: 700;
      color: #222;
      margin-bottom: 1.2rem;
    }
    .about-2col-content p {
      color: #555;
      font-size: 1.15rem;
      margin-bottom: 1.2rem;
    }
    .about-2col-content ul {
      padding-left: 1.2rem;
      color: #333;
      font-size: 1.08rem;
    }
    /* Stats Section */
    .about-stats-section {
      background: #fff;
      padding: 4rem 0 3rem 0;
    }
    .about-stats-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 2.5rem;
      max-width: 900px;
      margin: 0 auto;
    }
    .about-stat-card {
      background: #f8f9fa;
      border-radius: 1.2rem;
      padding: 2.5rem 1.5rem;
      text-align: center;
      box-shadow: 0 4px 24px rgba(98, 54, 255, 0.06);
      transition: transform 0.3s, box-shadow 0.3s;
      will-change: transform;
    }
    .about-stat-card:hover {
      transform: scale(1.04);
      box-shadow: 0 8px 32px rgba(98, 54, 255, 0.12);
    }
    .about-stat-number {
      font-size: 2.8rem;
      font-weight: 800;
      color: #D4214C;
      margin-bottom: 0.5rem;
      font-family: 'Poppins', 'Inter', Arial, sans-serif;
    }
    .about-stat-label {
      color: #333;
      font-size: 1.1rem;
      font-weight: 500;
    }
    /* Team/Values Section */
    .about-team-section {
      background: #fff;
      padding: 4rem 0 4rem 0;
    }
    .about-team-title {
      font-size: 2.2rem;
      font-weight: 700;
      color: #222;
      margin-bottom: 2.5rem;
      text-align: center;
    }
    .about-team-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 2rem;
      max-width: 1100px;
      margin: 0 auto;
    }
    .about-team-card {
      background: #f8f9fa;
      border-radius: 1.2rem;
      padding: 2.5rem 1.5rem;
      text-align: center;
      box-shadow: 0 4px 24px rgba(98, 54, 255, 0.06);
      transition: transform 0.3s, box-shadow 0.3s;
      will-change: transform;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .about-team-card:hover {
      transform: scale(1.04);
      box-shadow: 0 8px 32px rgba(98, 54, 255, 0.12);
    }
    .about-team-img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 1.2rem;
      border: 3px solid #FBDF06;
    }
    .about-team-name {
      font-weight: 700;
      color: #222;
      font-size: 1.15rem;
      margin-bottom: 0.2rem;
    }
    .about-team-role {
      color: #D4214C;
      font-size: 1rem;
      margin-bottom: 0.7rem;
      font-weight: 500;
    }
    .about-team-desc {
      color: #555;
      font-size: 1rem;
    }
    /* CTA Section */
    .about-cta-section {
      background: #f8f9fa;
      padding: 4rem 0 4rem 0;
      text-align: center;
    }
    .about-cta-title {
      font-size: 2.1rem;
      font-weight: 700;
      color: #222;
      margin-bottom: 1.2rem;
    }
    .about-cta-btn {
      background: #D4214C;
      color: #fff;
      font-weight: 700;
      font-size: 1.15rem;
      border: none;
      border-radius: 2rem;
      padding: 0.9rem 2.5rem;
      margin-top: 1.2rem;
      transition: background 0.2s, transform 0.2s, box-shadow 0.2s;
      box-shadow: 0 2px 12px rgba(212, 33, 76, 0.08);
    }
    .about-cta-btn:hover {
      background: #FBDF06;
      color: #222;
      transform: translateY(-2px) scale(1.04);
      box-shadow: 0 8px 32px rgba(212, 33, 76, 0.12);
    }
    /* Responsive */
    @media (max-width: 991.98px) {
      .about-stats-grid {
        grid-template-columns: repeat(2, 1fr);
      }
      .about-team-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }
    @media (max-width: 767.98px) {
      .about-hero-modern {
        padding: 3.5rem 0.5rem 2.5rem 0.5rem;
      }
      .about-hero-modern h1 {
        font-size: 2.1rem;
      }
      .about-hero-modern p {
        font-size: 1.05rem;
      }
      .about-2col-section {
        padding: 2.5rem 0 2.5rem 0;
      }
      .about-stats-section {
        padding: 2.5rem 0 2rem 0;
      }
      .about-stats-grid {
        grid-template-columns: 1fr;
        gap: 1.2rem;
      }
      .about-team-section {
        padding: 2.5rem 0 2.5rem 0;
      }
      .about-team-grid {
        grid-template-columns: 1fr;
      }
      .about-cta-section {
        padding: 2.5rem 0 2.5rem 0;
      }
    }
  </style>
</head>
<body>
<?php include '../navbar.php'; ?>

<!-- Hero Section -->
<section class="about-hero-modern fade-in">
  <h1>About The Brand Weave</h1>
  <p>We're a passionate team of digital marketers, designers, and strategists dedicated to helping businesses grow online.</p>
</section>

<!-- About Us Section (2-column) -->
<section class="about-2col-section fade-in">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 about-2col-content">
        <h2>Who We Are</h2>
        <p>The Brand Weave is a modern digital marketplace agency focused on empowering businesses to grow. Our mission is to deliver creative, data-driven solutions that help brands stand out and succeed in a competitive world.</p>
        <ul>
          <li><strong>Vision:</strong> To be the go-to digital partner for ambitious brands worldwide.</li>
          <li><strong>Mission:</strong> To blend creativity, technology, and strategy for measurable business growth.</li>
        </ul>
      </div>
      <div class="col-lg-6">
        <img src="../assets/about_us.jpg" alt="About Us" class="about-2col-img" />
      </div>
    </div>
  </div>
</section>

<!-- Statistics Section -->
<section class="about-stats-section fade-in">
  <div class="about-stats-grid">
    <div class="about-stat-card">
      <div class="about-stat-number" data-target="500">0</div>
      <div class="about-stat-label">Happy Clients</div>
    </div>
    <div class="about-stat-card">
      <div class="about-stat-number" data-target="1000">0</div>
      <div class="about-stat-label">Projects Delivered</div>
    </div>
    <div class="about-stat-card">
      <div class="about-stat-number" data-target="15">0</div>
      <div class="about-stat-label">Team Members</div>
    </div>
    <div class="about-stat-card">
      <div class="about-stat-number" data-target="98" data-suffix="%">0</div>
      <div class="about-stat-label">Success Rate</div>
    </div>
  </div>
</section>

<!-- Team/Values Section -->
<section class="about-team-section fade-in">
  <div class="about-team-title">Meet Our Team</div>
  <div class="about-team-grid">
    <div class="about-team-card">
      <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Abdul Mausooq" class="about-team-img" />
      <div class="about-team-name">Abdul Mausooq</div>
      <div class="about-team-role">Founder & CEO</div>
      <div class="about-team-desc">Visionary leader with 8+ years of experience in digital marketing and brand strategy.</div>
    </div>
    <div class="about-team-card">
      <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah Johnson" class="about-team-img" />
      <div class="about-team-name">Sarah Johnson</div>
      <div class="about-team-role">Creative Director</div>
      <div class="about-team-desc">Award-winning designer passionate about creating memorable brand experiences.</div>
    </div>
    <div class="about-team-card">
      <img src="https://randomuser.me/api/portraits/men/85.jpg" alt="Michael Chen" class="about-team-img" />
      <div class="about-team-name">Michael Chen</div>
      <div class="about-team-role">SEO Specialist</div>
      <div class="about-team-desc">Data-driven expert helping businesses achieve top search engine rankings.</div>
    </div>
    <div class="about-team-card">
      <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Emily Rodriguez" class="about-team-img" />
      <div class="about-team-name">Emily Rodriguez</div>
      <div class="about-team-role">Content Strategist</div>
      <div class="about-team-desc">Storytelling expert crafting compelling content that engages and converts.</div>
    </div>
  </div>
</section>

<!-- Call to Action Section -->
<section class="about-cta-section fade-in">
  <div class="about-cta-title">Ready to grow your business with us?</div>
  <a href="../contact/" class="about-cta-btn">Contact Us</a>
</section>

<?php include '../letsConnect.php'; ?>
<?php include '../footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
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
// Counter animation
function animateCountUp(el, target, suffix = '', duration = 1800) {
  let start = 0;
  let startTime = null;
  target = +target;
  function step(timestamp) {
    if (!startTime) startTime = timestamp;
    let progress = Math.min((timestamp - startTime) / duration, 1);
    let value = Math.floor(progress * (target - start) + start);
    el.textContent = value + suffix;
    if (progress < 1) {
      requestAnimationFrame(step);
    } else {
      el.textContent = target + suffix;
    }
  }
  requestAnimationFrame(step);
}
const observer = new IntersectionObserver((entries, obs) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const el = entry.target;
      if (!el.classList.contains('counted')) {
        el.classList.add('counted');
        const target = el.getAttribute('data-target');
        const suffix = el.getAttribute('data-suffix') || '';
        animateCountUp(el, target, suffix);
      }
    }
  });
}, { threshold: 0.6 });
document.querySelectorAll('.about-stat-number').forEach(el => {
  observer.observe(el);
});
</script>
<?php include '../ai-call.php'; ?>
</body>
</html>
