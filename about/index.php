<?php
// About Us Page for The Brand Weave
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us | The Brand Weave</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Google Fonts: Figtree -->
  <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;600;700&display=swap" rel="stylesheet" />
  <!-- Google Fonts: Bebas Neue & Roboto -->
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../navbar.css" />
  <link rel="stylesheet" href="../style.css" />
  
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon.png">
  <link rel="shortcut icon" href="../assets/favicon.png">
  <link rel="apple-touch-icon" href="../assets/favicon.png">
  
  <style>
    .about-hero {
      background: linear-gradient(135deg, #483aa0 0%, #7b5cff 100%);
      min-height: 60vh;
      display: flex;
      align-items: center;
      position: relative;
      overflow: hidden;
    }
    
    .about-hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="50" cy="50" r="1" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
      opacity: 0.3;
    }
    
    .about-hero-content {
      position: relative;
      z-index: 2;
    }
    
    .team-card {
      background: #fff;
      border-radius: 1.5rem;
      overflow: hidden;
      box-shadow: 0 8px 32px rgba(18,44,36,0.08);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .team-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 16px 48px rgba(18,44,36,0.12);
    }
    
    .team-image {
      width: 100%;
      height: 280px;
      object-fit: cover;
    }
    
    .values-card {
      background: #fff;
      border-radius: 1.2rem;
      padding: 2.5rem 2rem;
      text-align: center;
      box-shadow: 0 4px 24px rgba(18,44,36,0.06);
      transition: transform 0.3s ease;
      height: 100%;
    }
    
    .values-card:hover {
      transform: translateY(-4px);
    }
    
    .values-icon {
      width: 80px;
      height: 80px;
      background: linear-gradient(135deg, #483aa0, #7b5cff);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1.5rem;
      color: white;
      font-size: 2rem;
    }
    
    .stats-card {
      background: linear-gradient(135deg, #483aa0, #7b5cff);
      color: white;
      border-radius: 1.5rem;
      padding: 3rem 2rem;
      text-align: center;
      position: relative;
      overflow: hidden;
    }
    
    .stats-card::before {
      content: '';
      position: absolute;
      top: -50%;
      right: -50%;
      width: 200%;
      height: 200%;
      background: rgba(255,255,255,0.1);
      border-radius: 50%;
      transform: rotate(45deg);
    }
    
    .stats-number {
      font-size: 3.5rem;
      font-weight: 700;
      line-height: 1;
      margin-bottom: 0.5rem;
    }
    
    .stats-label {
      font-size: 1.1rem;
      opacity: 0.9;
      font-weight: 500;
    }
    
    .timeline-item {
      position: relative;
      padding-left: 3rem;
      margin-bottom: 3rem;
    }
    
    .timeline-item::before {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      width: 12px;
      height: 12px;
      background: #483aa0;
      border-radius: 50%;
    }
    
    .timeline-item::after {
      content: '';
      position: absolute;
      left: 5px;
      top: 12px;
      width: 2px;
      height: calc(100% + 1rem);
      background: #e0e0ef;
    }
    
    .timeline-item:last-child::after {
      display: none;
    }
    
    @media (max-width: 767.98px) {
      .about-hero {
        min-height: 50vh;
        text-align: center;
      }
      
      .about-hero h1 {
        font-size: 2.5rem !important;
      }
      
      .team-card {
        margin-bottom: 2rem;
      }
      
      .values-card {
        margin-bottom: 2rem;
      }
      
      .stats-card {
        margin-bottom: 2rem;
      }
    }

    /* Why Us Section: Make image match content height */
    .why-us-row {
      align-items: stretch !important;
      display: flex;
    }

    .why-us-image-col {
      display: flex;
      align-items: stretch;
    }

    .why-us-image-col img {
      height: 100%;
      width: 100%;
      object-fit: cover;
      border-radius: 1.5rem;
      box-shadow: 0 8px 32px rgba(18,44,36,0.08);
    }
    @media (max-width: 991.98px) {
      .why-us-row {
        flex-direction: column;
      }
      .why-us-image-col img {
        height: 280px;
        min-height: 180px;
        max-height: 350px;
      }
    }
  </style>
</head>
<body>
  <!-- Include Navbar -->
  <?php include '../navbar.php'; ?>

  <!-- Hero Section -->
  <section class="about-hero">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center about-hero-content">
          <h1 class="display-3 fw-bold text-white mb-4" style="font-size: 4rem;">
            About The Brand Weave
          </h1>
          <p class="lead text-white mb-0" style="font-size: 1.3rem; opacity: 0.9;">
            We're a passionate team of digital marketers, designers, and strategists dedicated to helping businesses grow online.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Story Section -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h2 class="fw-bold mb-4" style="color: #122c24; font-size: 3rem; line-height: 1.2;">
            Our Story
          </h2>
          <p class="text-muted mb-4" style="font-size: 1.1rem; line-height: 1.7;">
            Founded with a vision to transform how businesses connect with their audiences online, The Brand Weave has grown from a small startup to a trusted digital marketing partner for businesses across various industries.
          </p>
          <p class="text-muted mb-4" style="font-size: 1.1rem; line-height: 1.7;">
            We believe in the power of authentic storytelling, data-driven strategies, and creative innovation. Every project we undertake is an opportunity to make a meaningful impact on our clients' success.
          </p>
          <div class="d-flex align-items-center">
            <div class="me-4">
              <div class="fw-bold text-primary" style="font-size: 2.5rem;">5+</div>
              <div class="text-muted">Years Experience</div>
            </div>
            <div class="me-4">
              <div class="fw-bold text-primary" style="font-size: 2.5rem;">200+</div>
              <div class="text-muted">Projects Completed</div>
            </div>
            <div>
              <div class="fw-bold text-primary" style="font-size: 2.5rem;">98%</div>
              <div class="text-muted">Client Satisfaction</div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <img src="../assets/about_us.jpg" alt="Our Team" class="img-fluid rounded-4 shadow-lg" />
        </div>
      </div>
    </div>
  </section>

  <!-- Our Values Section -->
  <section class="py-5 bg-white">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="fw-bold mb-3" style="color: #122c24; font-size: 3rem;">
          Our Values
        </h2>
        <p class="text-muted" style="font-size: 1.2rem; max-width: 600px; margin: 0 auto;">
          The principles that guide everything we do and shape our relationships with clients and partners.
        </p>
      </div>
      
      <div class="row g-4">
        <div class="col-lg-4 col-md-6">
          <div class="values-card">
            <div class="values-icon">
              <i class="bi bi-lightbulb"></i>
            </div>
            <h4 class="fw-bold mb-3" style="color: #122c24;">Innovation</h4>
            <p class="text-muted mb-0">
              We constantly explore new technologies and creative approaches to deliver cutting-edge solutions that set our clients apart.
            </p>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
          <div class="values-card">
            <div class="values-icon">
              <i class="bi bi-shield-check"></i>
            </div>
            <h4 class="fw-bold mb-3" style="color: #122c24;">Trust</h4>
            <p class="text-muted mb-0">
              Building long-term relationships based on transparency, reliability, and consistent delivery of exceptional results.
            </p>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
          <div class="values-card">
            <div class="values-icon">
              <i class="bi bi-graph-up"></i>
            </div>
            <h4 class="fw-bold mb-3" style="color: #122c24;">Results</h4>
            <p class="text-muted mb-0">
              We're obsessed with measurable outcomes and data-driven strategies that drive real business growth for our clients.
            </p>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
          <div class="values-card">
            <div class="values-icon">
              <i class="bi bi-people"></i>
            </div>
            <h4 class="fw-bold mb-3" style="color: #122c24;">Collaboration</h4>
            <p class="text-muted mb-0">
              Working closely with our clients as partners, sharing knowledge and insights to achieve shared goals.
            </p>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
          <div class="values-card">
            <div class="values-icon">
              <i class="bi bi-award"></i>
            </div>
            <h4 class="fw-bold mb-3" style="color: #122c24;">Excellence</h4>
            <p class="text-muted mb-0">
              Maintaining the highest standards in every project, from concept to execution and beyond.
            </p>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
          <div class="values-card">
            <div class="values-icon">
              <i class="bi bi-heart"></i>
            </div>
            <h4 class="fw-bold mb-3" style="color: #122c24;">Passion</h4>
            <p class="text-muted mb-0">
              Loving what we do and bringing that enthusiasm to every project, big or small.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Statistics Section -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-3 col-md-6">
          <div class="stats-card">
            <div class="stats-number" data-target="500">0</div>
            <div class="stats-label">Happy Clients</div>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-6">
          <div class="stats-card">
            <div class="stats-number" data-target="1000">0</div>
            <div class="stats-label">Projects Delivered</div>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-6">
          <div class="stats-card">
            <div class="stats-number" data-target="15">0</div>
            <div class="stats-label">Team Members</div>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-6">
          <div class="stats-card">
            <div class="stats-number" data-target="98" data-suffix="%">0</div>
            <div class="stats-label">Success Rate</div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Team Section -->
  <!-- <section class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="fw-bold mb-3" style="color: #122c24; font-size: 3rem;">
          Meet Our Team
        </h2>
        <p class="text-muted" style="font-size: 1.2rem; max-width: 600px; margin: 0 auto;">
          The talented individuals behind our success, dedicated to delivering exceptional results for every client.
        </p>
      </div>
      
      <div class="row g-4">
        <div class="col-lg-4 col-md-6">
          <div class="team-card">
            <img src="" alt="Team Member" class="team-image" />
            <div class="p-4">
              <h5 class="fw-bold mb-1" style="color: #122c24;">Abdul Mausooq</h5>
              <p class="text-muted mb-2">Founder & CEO</p>
              <p class="text-muted small mb-0">
                Visionary leader with 8+ years of experience in digital marketing and brand strategy.
              </p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
          <div class="team-card">
            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?auto=format&fit=crop&w=400&q=80" alt="Team Member" class="team-image" />
            <div class="p-4">
              <h5 class="fw-bold mb-1" style="color: #122c24;">Sarah Johnson</h5>
              <p class="text-muted mb-2">Creative Director</p>
              <p class="text-muted small mb-0">
                Award-winning designer passionate about creating memorable brand experiences.
              </p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
          <div class="team-card">
            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=400&q=80" alt="Team Member" class="team-image" />
            <div class="p-4">
              <h5 class="fw-bold mb-1" style="color: #122c24;">Michael Chen</h5>
              <p class="text-muted mb-2">SEO Specialist</p>
              <p class="text-muted small mb-0">
                Data-driven expert helping businesses achieve top search engine rankings.
              </p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
          <div class="team-card">
            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&w=400&q=80" alt="Team Member" class="team-image" />
            <div class="p-4">
              <h5 class="fw-bold mb-1" style="color: #122c24;">Emily Rodriguez</h5>
              <p class="text-muted mb-2">Content Strategist</p>
              <p class="text-muted small mb-0">
                Storytelling expert crafting compelling content that engages and converts.
              </p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
          <div class="team-card">
            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=400&q=80" alt="Team Member" class="team-image" />
            <div class="p-4">
              <h5 class="fw-bold mb-1" style="color: #122c24;">David Kim</h5>
              <p class="text-muted mb-2">Social Media Manager</p>
              <p class="text-muted small mb-0">
                Social media guru building authentic connections and driving engagement.
              </p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
          <div class="team-card">
            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=400&q=80" alt="Team Member" class="team-image" />
            <div class="p-4">
              <h5 class="fw-bold mb-1" style="color: #122c24;">Lisa Thompson</h5>
              <p class="text-muted mb-2">Client Success Manager</p>
              <p class="text-muted small mb-0">
                Dedicated to ensuring every client achieves their goals and exceeds expectations.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
 <!-- why us -->
  <section class="py-5 bg-white">
      <div class="container">
        <div class="row why-us-row" style="min-height: 600px;">
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
          <div class="col-lg-6 why-us-image-col">
            <img src="../assets/team_image.jpg"
                 alt="Team Collaboration"
                 class="img-fluid"
                 style="width: 100%; object-fit: cover;">
          </div>
        </div>
      </div>
    </section>
  <!-- Include Let's Connect Section -->
  <?php include '../letsConnect.php'; ?>

  <!-- Include Footer -->
  <?php include '../footer.php'; ?>

  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <script>
  document.addEventListener("DOMContentLoaded", function() {
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

    // Intersection Observer to trigger animation when in view
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

    document.querySelectorAll('.stats-number').forEach(el => {
      observer.observe(el);
    });
  });
  </script>
</body>
</html>