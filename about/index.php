<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us | The Brand Weave</title>
  <!-- Bootstrap 5 CSS -->
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts: Figtree -->
    <link
      href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <!-- Google Fonts: Bebas Neue & Roboto -->
    <link
      href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    
    <!-- AOS Animation CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon.png">
    <link rel="shortcut icon" href="../assets/favicon.png">
    <link rel="apple-touch-icon" href="../assets/favicon.png">
    <link rel="stylesheet" href="../navbar.css" />
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <style>
    body {
      background: #fff;
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
    .about-hero-modern h1 {
      font-size: 5.5rem;
      font-weight: 800;
      letter-spacing: -1px;
      color:rgb(255, 255, 255);
      margin-bottom: 1.2rem;
      font-family: 'figtree ', 'Inter', Arial, sans-serif;
      
    }
    .about-hero-modern h1 span{
      color: #D4214C;
    }
    .about-hero-modern p {
      font-size: 1.35rem;
      color:rgba(255, 225, 0, 0.78);
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
  <h1>WEAVING  DIGITAL <br> SUCCESS <span>TOGETHER</span>
  </h1>
  <p>At Brand Weave, we bring together branding, content, and marketing to help your business thrive online.</p>
</section>

<!-- About Us Section (2-column) -->
<section class="py-5 bg-white">
      <div class="container">
        <div class="row align-items-start" style="min-height: 600px;">
          <!-- Left: Text Content -->
          <div class="col-lg-6 mt-5">
            <h2 class="fw-bold" style="color: #122c24; font-size: 66px; line-height: 1.1; margin-bottom: 2rem;">
              WHY WE ARE<br>YOUR BEST CHOICE
            </h2>
            <p class="text-muted mb-5" style="font-size: 1.15rem;">
              We work in such a way that the dashboards provide easy-to-read charts, graphs, and summaries for executives or stakeholders. Through storytelling and value propositions, marketing can sway consumer choices.
            </p>
            <div class="mb-4 d-flex align-items-start">
              <span class="me-3" style="font-size: 2rem; color: #122c24;">
                <i class="bi bi-globe2"></i>
              </span>
              <div>
                <div class="fw-bold" style="color: #122c24; font-size: 1.25rem;">RESEARCH</div>
                <div class="text-muted mt-3" style="font-size: 1.1rem;">Up-to-date performance data so decisions <br> can be made quickly.</div>
              </div>
            </div>
            <div class="mb-4 d-flex align-items-start">
              <span class="me-3" style="font-size: 2rem; color: #122c24;">
                <i class="bi bi-lightbulb"></i>
              </span>
              <div>
                <div class="fw-bold" style="color: #122c24; font-size: 1.25rem;">GENERATE IDEA</div>
                <div class="text-muted mt-3" style="font-size: 1.1rem;">A strong brand can differentiate a company <br> from its competitors and build loyalty.</div>
              </div>
            </div>
            <div class="mb-4 d-flex align-items-start">
              <span class="me-3" style="font-size: 2rem; color: #122c24;">
                <i class="bi bi-stars"></i>
              </span>
              <div>
                <div class="fw-bold" style="color: #122c24; font-size: 1.25rem;">ENGAGEMENT</div>
                <div class="text-muted mt-3" style="font-size: 1.1rem;">Communication with consumers, building <br> trust and relationships through engagement.</div>
              </div>
          </div>
          </div>
          <!-- Right: Image -->
          <div class="col-lg-6">
            <img src="../assets/aboutus.jpg"
                 alt="Team Collaboration"
                 class="img-fluid rounded-4 shadow team-image"
                 style="width: 100%; object-fit: cover;">
          </div>
        </div>
      </div>
    </section>


<!-- Statistics Section -->
<section class="about-stats-section fade-in">
  <div class="about-stats-grid">
    <div class="about-stat-card">
      <div class="about-stat-number" data-target="60" data-suffix="+">0</div>
      <div class="about-stat-label">Happy Clients</div>
    </div>
    <div class="about-stat-card">
      <div class="about-stat-number" data-target="200" data-suffix="+">0</div>
      <div class="about-stat-label">Projects Delivered</div>
    </div>
    <div class="about-stat-card">
      <div class="about-stat-number" data-target="25" data-suffix="+">0</div>
      <div class="about-stat-label">Team Members</div>
    </div>
    <div class="about-stat-card">
      <div class="about-stat-number" data-target="98" data-suffix="%">0</div>
      <div class="about-stat-label">Success Rate</div>
    </div>
  </div>
</section>



<!-- Testimonials Section (Copied from index.php) -->
<section id="testimonials" class="py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold display-1" style="text-transform: uppercase; letter-spacing: 2px; color: #22332e; font-size: 4rem;">WORDS OF OUR CLIENTS</h2>
      <p class="lead text-muted mt-3" style="max-width: 800px; margin: 0 auto; font-size: 1rem;">
        Effective marketing strategies attract and nurture potential customers,
        moving them <br> through the sales funnel and converting them into buyers.
      </p>
    </div>
    <div class="testimonials-container">
      <div class="testimonials-track" id="testimonialsTrack">
        <!-- Testimonials will be loaded here dynamically -->
      </div>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Load testimonials from JSON
  fetch('../testimonials.json')
    .then(response => response.json())
    .then(data => {
      const track = document.getElementById('testimonialsTrack');
      const testimonials = data.testimonials;
      // Create duplicate testimonials for seamless loop
      const allTestimonials = [...testimonials, ...testimonials];
      // Group testimonials into rows of 3
      const rows = [];
      for (let i = 0; i < allTestimonials.length; i += 3) {
        const row = allTestimonials.slice(i, i + 3);
        rows.push(row);
      }
      // Create rows of testimonials
      rows.forEach(row => {
        const rowDiv = document.createElement('div');
        rowDiv.className = 'testimonials-row';
        row.forEach(testimonial => {
          const card = document.createElement('div');
          card.className = 'testimonial-card';
          card.innerHTML = `
            <img src="${testimonial.avatar}" alt="${testimonial.name}" class="rounded-circle" />
            <p>"${testimonial.quote}"</p>
            <div>
              <strong>${testimonial.name}</strong>
              <span class="text-muted small">${testimonial.role}</span>
            </div>
          `;
          rowDiv.appendChild(card);
        });
        track.appendChild(rowDiv);
      });
      // Adjust animation duration based on number of rows
      const totalRows = rows.length;
      const animationDuration = totalRows * 4; // 4 seconds per row
      track.style.animationDuration = `${animationDuration}s`;
    })
    .catch(error => {
      console.error('Error loading testimonials:', error);
      // Fallback to static testimonials if JSON fails
      const track = document.getElementById('testimonialsTrack');
      track.innerHTML = `
        <div class="testimonials-row">
          <div class="testimonial-card">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client 1" class="rounded-circle" />
            <p>"The Brand Weave helped us double our website traffic in just 3 months. Highly recommended!"</p>
            <div>
              <strong>John D.</strong>
              <span class="text-muted small">E-commerce Owner</span>
            </div>
          </div>
          <div class="testimonial-card">
            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Client 2" class="rounded-circle" />
            <p>"Professional, creative, and results-driven. Our go-to agency for all things digital."</p>
            <div>
              <strong>Sarah K.</strong>
              <span class="text-muted small">Startup Founder</span>
            </div>
          </div>
          <div class="testimonial-card">
            <img src="https://randomuser.me/api/portraits/men/85.jpg" alt="Client 3" class="rounded-circle" />
            <p>"Their team is responsive, innovative, and always delivers on time. We love working with The Brand Weave!"</p>
            <div>
              <strong>Michael B.</strong>
              <span class="text-muted small">Marketing Director</span>
            </div>
          </div>
        </div>
      `;
    });
});
</script>
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
</body>
</html>
