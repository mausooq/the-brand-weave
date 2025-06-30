<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Brand Weave</title>
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
    <link rel="stylesheet" href="navbar.css" />
    <link rel="stylesheet" href="style.css" />
 
  </head>
  <body>
    <!-- TBW Modern Navbar Start -->
   
<nav class="navbar navbar-expand-lg sticky-top tbw-navbar py-3 shadow">
  <div class="container">
    <!-- Left: Logo and Brand -->
    <a
      class="navbar-brand d-flex align-items-center text-dark fw-bold"
      href="#"
    >
      <img src="./assets/logo.png" alt="TBW Logo" width="60" class="me-2" />
    </a>

    <!-- Hamburger for mobile -->
    <button
      class="navbar-toggler text-dark border-0"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#tbwNavbar"
      aria-controls="tbwNavbar"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="tbwNavbar">
      <!-- Center: Menu Items with Dropdowns -->
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-3">
        <!-- Home Dropdown -->
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle text-dark"
            href="#"
            id="homeDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            Home
          </a>
          <ul
            class="dropdown-menu dropdown-menu-dark dropdown-fade"
            aria-labelledby="homeDropdown"
          >
            <li><a class="dropdown-item" href="#">Home 1</a></li>
            <li><a class="dropdown-item" href="#">Home 2</a></li>
          </ul>
        </li>
        <!-- Portfolio Dropdown -->
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle text-dark"
            href="#"
            id="portfolioDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            Portfolio
          </a>
          <ul
            class="dropdown-menu dropdown-menu-dark dropdown-fade"
            aria-labelledby="portfolioDropdown"
          >
            <li><a class="dropdown-item" href="#">Portfolio 1</a></li>
            <li><a class="dropdown-item" href="#">Portfolio 2</a></li>
          </ul>
        </li>
        <!-- Service Dropdown -->
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle text-dark"
            href="#"
            id="serviceDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            Service
          </a>
          <ul
            class="dropdown-menu dropdown-menu-dark dropdown-fade"
            aria-labelledby="serviceDropdown"
          >
            <li><a class="dropdown-item" href="#">SEO</a></li>
            <li><a class="dropdown-item" href="#">PPC</a></li>
          </ul>
        </li>
        <!-- Pages Dropdown -->
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle text-dark"
            href="#"
            id="pagesDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            Pages
          </a>
          <ul
            class="dropdown-menu dropdown-menu-dark dropdown-fade"
            aria-labelledby="pagesDropdown"
          >
            <li><a class="dropdown-item" href="#">About</a></li>
            <li><a class="dropdown-item" href="#">Team</a></li>
          </ul>
        </li>
        <!-- Blogs Dropdown -->
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle text-dark"
            href="#"
            id="blogsDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            Blogs
          </a>
          <ul
            class="dropdown-menu dropdown-menu-dark dropdown-fade"
            aria-labelledby="blogsDropdown"
          >
            <li><a class="dropdown-item" href="#">Blog List</a></li>
            <li><a class="dropdown-item" href="#">Blog Single</a></li>
          </ul>
        </li>
      </ul>
      <!-- Right: Search Icon & Contact Button -->
      <div class="d-flex align-items-center ms-lg-3 mt-3 mt-lg-0 gap-2">
        <a
          href="#"
          class="text-dark fs-5 me-2 tbw-search-icon d-inline-flex align-items-center justify-content-center"
        >
          <i class="bi bi-search"></i>
        </a>
        <a href="#contact" class="btn btn-tbw-green fw-bold px-4 py-2">
          Contact Us
        </a>
      </div>
    </div>
  </div>
</nav>
<!-- TBW Modern Navbar End --> 

    <!-- Hero Section with Carousel -->
    <section
      class="hero-section d-flex align-items-center"
      style="min-height: 90vh; position: relative"
    >
      <!-- Background overlay and image -->
      <div class="hero-bg"></div>
      <div class="container position-relative" style="z-index: 2">
        <div class="row align-items-center">
          <!-- Left: Text Content with Carousel -->
          <div
            class="col-lg-6 text-white py-5 d-flex flex-column"
            style="min-height: 70vh"
          >
            <div
              id="heroCarousel"
              class="carousel slide flex-grow-1"
              data-bs-ride="carousel"
              data-bs-interval="5000"
            >
              <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                  <div class="d-flex flex-column justify-content-center h-100">
                    <h1
                      class="display-1 fw-bold mb-4"
                      style="font-size: 4rem; line-height: 1.1"
                    >
                      Experience the Future of Collaboration
                    </h1>
                    <p
                      class="lead mb-4"
                      style="font-size: 1.5rem; line-height: 1.6"
                    >
                      Empower your team with immersive digital solutions. Step
                      into tomorrow, today.
                    </p>
                  </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                  <div class="d-flex flex-column justify-content-center h-100">
                    <h1
                      class="display-1 fw-bold mb-4"
                      style="font-size: 4rem; line-height: 1.1"
                    >
                      Transform Your Digital Presence
                    </h1>
                    <p
                      class="lead mb-4"
                      style="font-size: 1.5rem; line-height: 1.6"
                    >
                      Strategic marketing solutions that drive growth and
                      deliver measurable results for your business.
                    </p>
                  </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item">
                  <div class="d-flex flex-column justify-content-center h-100">
                    <h1
                      class="display-1 fw-bold mb-4"
                      style="font-size: 4rem; line-height: 1.1"
                    >
                      Build Your Brand's Success Story
                    </h1>
                    <p
                      class="lead mb-4"
                      style="font-size: 1.5rem; line-height: 1.6"
                    >
                      From concept to execution, we craft compelling narratives
                      that connect with your audience and drive conversions.
                    </p>
                  </div>
                </div>
                <!-- Slide 4 -->
                <div class="carousel-item">
                  <div class="d-flex flex-column justify-content-center h-100">
                    <h1
                      class="display-1 fw-bold mb-4"
                      style="font-size: 4rem; line-height: 1.1"
                    >
                      Empower Your Team's Creativity
                    </h1>
                    <p
                      class="lead mb-4"
                      style="font-size: 1.5rem; line-height: 1.6"
                    >
                      Unlock new possibilities with our innovative solutions
                      tailored for your business.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Static Buttons at Bottom (hidden on large screens) -->
            <div class="mt-auto pt-4">
              <a
                href="#contact"
                class="btn btn-primary btn-lg me-3 px-5 py-3"
                style="font-size: 1.2rem"
              >
                Get Started
              </a>
              <a
                href="#portfolio"
                class="btn btn-outline-light btn-lg px-5 py-3"
                style="font-size: 1.2rem"
              >
                View Portfolio <i class="bi bi-arrow-right ms-2"></i>
              </a>
            </div>
            <!-- Fixed Buttons for large screens -->
            <div class="hero-fixed-buttons d-none d-lg-flex">
              <a
                href="#contact"
                class="btn btn-primary btn-lg px-5 py-3"
                style="font-size: 1.2rem"
              >
                Get Started
              </a>
              <a
                href="#portfolio"
                class="btn btn-outline-light btn-lg px-5 py-3"
                style="font-size: 1.2rem"
              >
                View Portfolio <i class="bi bi-arrow-right ms-2"></i>
              </a>
            </div>
          </div>
          <!-- Right: Images that change based on slide -->
          <div class="col-lg-6 d-none d-lg-block">
            <div
              class="hero-images-container position-relative h-100 d-flex align-items-start justify-content-center pt-5"
            >
              <!-- Image 1 (Slide 1) -->
              <div class="hero-image active" data-slide="0">
                <img
                  src="./assets/hero1.jpg"
                  alt="Collaboration"
                  class="img-fluid rounded-4"
                  style="box-shadow: 8px 8px 32px rgba(0, 0, 0, 0.3)"
                />
              </div>
              <!-- Image 2 (Slide 2) -->
              <div class="hero-image" data-slide="1">
                <img
                  src="./assets/hero2.jpg"
                  alt="Digital Marketing"
                  class="img-fluid rounded-4"
                  style="box-shadow: 8px 8px 32px rgba(0, 0, 0, 0.3)"
                />
              </div>
              <!-- Image 3 (Slide 3) -->
              <div class="hero-image" data-slide="2">
                <img
                  src="./assets/hero3.jpg"
                  alt="Brand Success"
                  class="img-fluid rounded-4"
                  style="box-shadow: 8px 8px 32px rgba(0, 0, 0, 0.3)"
                />
              </div>
              <!-- Image 4 (Slide 4) -->
              <div class="hero-image" data-slide="3">
                <img
                  src="./assets/hero4.jpg"
                  alt="Creative Team"
                  class="img-fluid rounded-4"
                  style="box-shadow: 8px 8px 32px rgba(0, 0, 0, 0.3)"
                />
              </div>
              <div class="hero-image-circle"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="trusted-clients">
      <div class="container py-5">
        <h6
          class="text-center text-muted text-uppercase fw-bold mb-5 fs-2"
          style="letter-spacing: 2px"
        >
          Trusted Clients
        </h6>
        <div class="client-logos-wrapper">
          <div class="d-flex align-items-center client-logos">
            <img
              src="./assets/clients_logo/GD logo.jpg"
              alt="GD Logo"
              class="client-logo"
            />
            <img
              src="./assets/clients_logo/intlex_solutions.jpg"
              alt="Intlex Solutions"
              class="client-logo"
            />
            <img
              src="./assets/clients_logo/LEX JURIS LAW CHEMBER LOGO.png"
              alt="Lex Juris Law Chamber Logo"
              class="client-logo"
            />
            <img
              src="./assets/clients_logo/liyas.jpeg"
              alt="Liyas Logo"
              class="client-logo"
            />
            <img
              src="./assets/clients_logo/GD.jpg"
              alt="GD"
              class="client-logo"
            />
          </div>
        </div>
      </div>
    </div>

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
              <span class="service-card-arrow ms-auto"><i class="bi bi-arrow-right"></i></span>
              <div class="service-card-image position-absolute top-0 end-0 h-100 d-flex align-items-center justify-content-center" style="width:38%;min-width:260px;">
                <img src="./assets/SEO_marketing.jpg" alt="Service" style="width:100%;height:100%;object-fit:cover;border-radius:0.75rem;" />
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
              <span class="service-card-arrow ms-auto"><i class="bi bi-arrow-right"></i></span>
              <div class="service-card-image position-absolute top-0 end-0 h-100 d-flex align-items-center justify-content-center" style="width:38%;min-width:260px;">
                <img src="./assets/media_marketing.png" alt="Service" style="width:100%;height:100%;object-fit:cover;border-radius:0.75rem;" />
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
              <span class="service-card-arrow ms-auto"><i class="bi bi-arrow-right"></i></span>
              <div class="service-card-image position-absolute top-0 end-0 h-100 d-flex align-items-center justify-content-center" style="width:38%;min-width:260px;">
                <img src="./assets/content_marketing.jpg" alt="Service" style="width:100%;height:100%;object-fit:cover;border-radius:0.75rem;" />
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
              <span class="service-card-arrow ms-auto"><i class="bi bi-arrow-right"></i></span>
              <div class="service-card-image position-absolute top-0 end-0 h-100 d-flex align-items-center justify-content-center" style="width:38%;min-width:260px;">
                <img src="./assets/Brand_desgining.png" alt="Service" style="width:100%;height:100%;object-fit:cover;border-radius:0.75rem;" />
                <span class="service-card-arrow-overlay"><i class="bi bi-arrow-up-right"></i></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-modern-section">
      <div class="container">
        <div class="row align-items-center">
          <!-- Left: Image with Modern Shape -->
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="about-modern-img-wrap">
              <img src="./assets/about_us.jpg" alt="About Us" class="about-modern-img" />
              <div class="about-modern-img-bg-shape"></div>
            </div>
          </div>
          <!-- Right: Content -->
          <div class="col-lg-6">
            <div class="about-modern-content">
              <h2 class="about-modern-title mb-3">A Forward-Thinking Digital Agency Specializing in <span class="about-modern-highlight">Creative Solutions.</span></h2>
              <p class="about-modern-desc mb-4">
                We are a passionate team of digital marketers, designers, and strategists dedicated to helping businesses grow online. With years of experience and a data-driven approach, we deliver measurable results that elevate your brand.
              </p>
              <ul class="about-modern-values list-unstyled mb-4">
                <li class="d-flex align-items-center mb-2">
                  <span class="about-modern-icon"><i class="bi bi-patch-check-fill"></i></span>
                  <span>Certified SEO & Marketing Experts</span>
              </li>
                <li class="d-flex align-items-center mb-2">
                  <span class="about-modern-icon"><i class="bi bi-bar-chart-line-fill"></i></span>
                  <span>Transparent & Actionable Reporting</span>
              </li>
                <li class="d-flex align-items-center">
                  <span class="about-modern-icon"><i class="bi bi-trophy-fill"></i></span>
                  <span>A Proven Track Record of Success</span>
              </li>
            </ul>
              <a href="#portfolio" class="btn btn-tbw-green-modern">
                View Portfolio
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Case Studies Section -->
    <section id="case-studies" class="py-5 case-studies-section">
      <div class="container">
        <div class="mb-5">
          <h2 class="fw-bold display-5 mt-5" style="color: #fff; font-size: 5rem; text-align: center;">WHAT WE BUILD</h2>
          <p style="max-width: 600px; font-size: 0.8rem; text-align: center; color: #fff; margin: 0 auto;">
            We create real results by capturing the essence of your brand.
          </p>
        </div>
        <div class="row g-4" id="caseStudiesGrid">
          <!-- Case study cards will be loaded here dynamically -->
        </div>
        <div class="text-center mt-4">
          <a href="#" class="btn btn-primary btn-lg px-5 py-3 all-case-study-btn" style="font-size: 1.15rem; border-radius: 2em; font-weight: 600; letter-spacing: 1px; background: #fff; color: #483aa0; border: none; box-shadow: 0 2px 8px rgba(72,58,160,0.10); transition: background 0.2s, color 0.2s;">
            ALL CASE STUDY
          </a>
        </div>
      </div>
    </section>

    <!-- WHY US -->
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
            <img src="./assets/team_image.jpg"
                 alt="Team Collaboration"
                 class="img-fluid rounded-4 shadow team-image"
                 style="width: 100%; object-fit: cover;">
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
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
      <!-- Recent Blogs  -->
<section class="py-5 bg-white">
  <div class="container text-center">
    <h2 class="fw-bold display-5" style="color: #122c24; font-size: 64px;">RECENT BLOG UPDATES</h2>
    <p class="text-muted mb-5">
      We offer a complete range of digital marketing services to help your brand grow online.
    </p>
    <div class="row g-4">
      <!-- Blog Card 1 -->
      <div class="col-md-6">
        <div class="blog-modern-card d-flex align-items-stretch h-100" style="background: #fff; box-shadow: 0 4px 24px rgba(18,44,36,0.07); border-radius: 1.5rem; overflow: hidden; min-height: 250px; transition: box-shadow 0.2s, transform 0.2s;">
          <div style="flex: 0 0 60%; max-width: 60%;" class="p-4 d-flex flex-column justify-content-between">
            <div>
              <span class="badge bg-light text-dark mb-2" style="font-size: 0.95rem; font-weight: 600; letter-spacing: 0.05em;">SEO</span>
              <p class="text-muted small mb-3" style="font-size: 0.95rem;">• SEP 29, 2024 — 16MIN READ</p>
              <h5 class="fw-bold mb-3" style="font-size: 24px; color: #122c24; line-height: 1.33; letter-spacing: -.03rem; word-break: break-word; text-transform: uppercase;">
                NIKZE: JUST DO IT - BUILDING A GLOBAL BRAND
              </h5>
            </div>
            <a href="#" class="text-dark fw-semibold d-inline-flex align-items-center gap-2" style="font-size: 1.05rem; text-decoration: none; transition: color 0.2s;">
              READ NOW <span style="font-size: 1.3em;">→</span>
            </a>
          </div>
          <div style="flex: 0 0 40%; max-width: 40%; display: flex;">
            <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=400&q=80"
                 alt="Blog 1"
                 style="width: 100%; height: 100%; object-fit: cover; border-radius: 0 1.5rem 1.5rem 0;">
                  </div>
                </div>
              </div>
      <!-- Blog Card 2 -->
      <div class="col-md-6">
        <div class="blog-modern-card d-flex align-items-stretch h-100" style="background: #fff; box-shadow: 0 4px 24px rgba(18,44,36,0.07); border-radius: 1.5rem; overflow: hidden; min-height: 250px; transition: box-shadow 0.2s, transform 0.2s;">
          <div style="flex: 0 0 60%; max-width: 60%;" class="p-4 d-flex flex-column justify-content-between">
            <div>
              <span class="badge bg-light text-dark mb-2" style="font-size: 0.95rem; font-weight: 600; letter-spacing: 0.05em;">BUSINESS</span>
              <p class="text-muted small mb-3" style="font-size: 0.95rem;">• SEP 29, 2024 — 12MIN READ</p>
              <h5 class="fw-bold mb-3" style="font-size: 24px; color: #122c24; line-height: 1.33; letter-spacing: -.03rem; word-break: break-word; text-transform: uppercase;">
                MANIV DOE: BUILDING BRANDING AND LOGO
              </h5>
            </div>
            <a href="#" class="text-dark fw-semibold d-inline-flex align-items-center gap-2" style="font-size: 1.05rem; text-decoration: none; transition: color 0.2s;">
              READ NOW <span style="font-size: 1.3em;">→</span>
            </a>
          </div>
          <div style="flex: 0 0 40%; max-width: 40%; display: flex;">
            <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=400&q=80"
                 alt="Blog 2"
                 style="width: 100%; height: 100%; object-fit: cover; border-radius: 0 1.5rem 1.5rem 0;">
          </div>
        </div>
      </div>
      <!-- Blog Card 3 -->
      <div class="col-md-6">
        <div class="blog-modern-card d-flex align-items-stretch h-100" style="background: #fff; box-shadow: 0 4px 24px rgba(18,44,36,0.07); border-radius: 1.5rem; overflow: hidden; min-height: 250px; transition: box-shadow 0.2s, transform 0.2s;">
          <div style="flex: 0 0 60%; max-width: 60%;" class="p-4 d-flex flex-column justify-content-between">
            <div>
              <span class="badge bg-light text-dark mb-2" style="font-size: 0.95rem; font-weight: 600; letter-spacing: 0.05em;">CONTENT</span>
              <p class="text-muted small mb-3" style="font-size: 0.95rem;">• SEP 28, 2024 — 10MIN READ</p>
              <h5 class="fw-bold mb-3" style="font-size: 24px; color: #122c24; line-height: 1.33; letter-spacing: -.03rem; word-break: break-word; text-transform: uppercase;">
                THE POWER OF CONTENT MARKETING IN 2024
              </h5>
        </div>
            <a href="#" class="text-dark fw-semibold d-inline-flex align-items-center gap-2" style="font-size: 1.05rem; text-decoration: none; transition: color 0.2s;">
              READ NOW <span style="font-size: 1.3em;">→</span>
            </a>
          </div>
          <div style="flex: 0 0 40%; max-width: 40%; display: flex;">
            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80"
                 alt="Blog 3"
                 style="width: 100%; height: 100%; object-fit: cover; border-radius: 0 1.5rem 1.5rem 0;">
          </div>
        </div>
      </div>
      <!-- Blog Card 4 -->
      <div class="col-md-6">
        <div class="blog-modern-card d-flex align-items-stretch h-100" style="background: #fff; box-shadow: 0 4px 24px rgba(18,44,36,0.07); border-radius: 1.5rem; overflow: hidden; min-height: 250px; transition: box-shadow 0.2s, transform 0.2s;">
          <div style="flex: 0 0 60%; max-width: 60%;" class="p-4 d-flex flex-column justify-content-between">
            <div>
              <span class="badge bg-light text-dark mb-2" style="font-size: 0.95rem; font-weight: 600; letter-spacing: 0.05em;">MEDIA</span>
              <p class="text-muted small mb-3" style="font-size: 0.95rem;">• SEP 27, 2024 — 8MIN READ</p>
              <h5 class="fw-bold mb-3" style="font-size: 24px; color: #122c24; line-height: 1.33; letter-spacing: -.03rem; word-break: break-word; text-transform: uppercase;">
                SOCIAL MEDIA STRATEGIES FOR BRANDS
              </h5>
            </div>
            <a href="#" class="text-dark fw-semibold d-inline-flex align-items-center gap-2" style="font-size: 1.05rem; text-decoration: none; transition: color 0.2s;">
              READ NOW <span style="font-size: 1.3em;">→</span>
            </a>
          </div>
          <div style="flex: 0 0 40%; max-width: 40%; display: flex;">
            <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=400&q=80"
                 alt="Blog 4"
                 style="width: 100%; height: 100%; object-fit: cover; border-radius: 0 1.5rem 1.5rem 0;">
          </div>
        </div>
      </div>
    </div>
      </div>
    </section>


    <!-- Contact Section -->
     

    <?php include 'letsConnect.php'; ?>

    <!-- Footer -->
    <footer class="footer bg-white pt-5 pb-5 border-top" style="border-radius: 0; margin-top: 4rem; ">
  <div class="container">
    <div class="row gy-5">
      <!-- Brand and Description -->
      <div class="col-md-4">
        <div class="mb-4">
          <img src="./assets/logo.png" alt="The Brand Weave Logo" style="max-height: 60px; width: auto;">
        </div>
        <p class="text-muted mb-4">We offer a complete range of digital marketing <br> services to help your brand grow online.</p>
      </div>

      <!-- Company Links -->
      <div class="col-md-2">
        <h6 class=" mb-4" style="color: #122c24;">COMPANY</h6>
        <ul class="list-unstyled">
          <li class="mb-3"><a href="#" class="text-decoration-none" style="color: #6f7b80;">Home</a></li>
          <li class="mb-3"><a href="#" class="text-decoration-none" style="color: #6f7b80;">About</a></li>
          <li class="mb-3"><a href="#" class="text-decoration-none" style="color: #6f7b80;">Case Studies</a></li>
          <li class="mb-3"><a href="#" class="text-decoration-none" style="color: #6f7b80;">Pricing</a></li>
          <li class="mb-3"><a href="#" class="text-decoration-none" style="color: #6f7b80;">Blog</a></li>
          <li class="mb-3"><a href="#" class="text-decoration-none" style="color: #6f7b80;">Career</a></li>
        </ul>
      </div>

      <!-- Support Links -->
      <div class="col-md-2">
        <h6 class=" mb-4" style="color: #122c24;">THE BRAND WEAVE</h6>
        <ul class="list-unstyled">
          <li class="mb-3"><a href="#" class="text-decoration-none" style="color: #6f7b80;">Contact Us</a></li>
          <li class="mb-3"><a href="#" class="text-decoration-none" style="color: #6f7b80;">License</a></li>
          <li class="mb-3"><a href="#" class="text-decoration-none" style="color: #6f7b80;">Changelog</a></li>
          <li class="mb-3"><a href="#" class="text-decoration-none" style="color: #6f7b80;">Style Guide</a></li>
          <li class="mb-3"><a href="#" class="text-decoration-none" style="color: #6f7b80;">404 Not Found</a></li>
          <li class="mb-3"><a href="#" class="text-decoration-none" style="color: #6f7b80;">Protect Password</a></li>
        </ul>
      </div>

      <!-- Newsletter Subscription -->
      <div class="col-md-4">
        <h6 class="mb-4" style="color: #122c24;">SUBSCRIBE TO OUR NEWSLETTER</h6>
        <p class="text-muted mb-4">Creative thinkers work collaboratively to bring</p>
        <form class="d-flex bg-light rounded-pill overflow-hidden" style="max-width: 320px;">
          <input type="email" class="form-control border-0 bg-light px-4" placeholder="ENTER EMAIL ADDRESS" />
          <button class="btn btn-link text-dark px-3" type="submit">
            <i class="bi bi-arrow-right"></i>
          </button>
        </form>
      </div>
    </div>

    <hr class="my-5"/>

    <!-- Copyright -->
    <div class=" text-muted small py-3">
      © 2025 – All rights reserved, Developed by <strong>Abdul Mausooq</strong> – Powered by <a href="#" class="text-decoration-none text-muted fw-semibold">THE BRAND WEAVE</a>
        </div>
      </div>
    </footer>


    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <script>
      window.addEventListener("scroll", function () {
        const navbar = document.querySelector(".tbw-navbar");
        if (window.scrollY > 80) {
          navbar.classList.add("scrolled");
        } else {
          navbar.classList.remove("scrolled");
        }
      });

      // Sync hero images with carousel slides
      document.addEventListener("DOMContentLoaded", function () {
        const carousel = document.getElementById("heroCarousel");
        const heroImages = document.querySelectorAll(".hero-image");

        carousel.addEventListener("slide.bs.carousel", function (event) {
          // Remove active class from all images
          heroImages.forEach((img) => img.classList.remove("active"));

          // Add active class to corresponding image
          const slideIndex = event.to;
          const targetImage = document.querySelector(
            `[data-slide="${slideIndex}"]`
          );
          if (targetImage) {
            targetImage.classList.add("active");
          }
        });

        // Duplicate logos for infinite marquee
        const logosContainer = document.querySelector(".client-logos");
        if (logosContainer) {
          const logos = logosContainer.querySelectorAll(".client-logo");
          logos.forEach((logo) => {
            const clone = logo.cloneNode(true);
            logosContainer.appendChild(clone);
          });
        }
      });

      let isScrolling = false;
      let scrollTimeout;
      let lastHoveredCard = null;
      window.addEventListener('scroll', function () {
        isScrolling = true;
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(() => {
          isScrolling = false;
          // After scrolling stops, if mouse is over a card, show effect
          if (lastHoveredCard) {
            lastHoveredCard.classList.add('active');
          }
        }, 200);
      });
      document.querySelectorAll('.service-card').forEach(card => {
        card.addEventListener('mouseenter', () => {
          lastHoveredCard = card;
          if (!isScrolling) {
            card.classList.add('active');
          }
        });
        card.addEventListener('mouseleave', () => {
          card.classList.remove('active');
          if (lastHoveredCard === card) lastHoveredCard = null;
        });
      });

      document.addEventListener('DOMContentLoaded', function() {
        // Load testimonials from JSON
        fetch('./testimonials.json')
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

      document.addEventListener('DOMContentLoaded', function() {
        // Load case studies from JSON
        fetch('./case-studies.json')
          .then(response => response.json())
          .then(data => {
            const grid = document.getElementById('caseStudiesGrid');
            data.caseStudies.forEach(cs => {
              const col = document.createElement('div');
              col.className = 'col';
              col.innerHTML = `
                <div class="case-study-card">
                  <img src="${cs.image}" alt="${cs.title}" class="case-study-image" />
                  <div class="case-study-content">
                    <div class="case-study-title">${cs.title}</div>
                    <div class="case-study-desc">${cs.description}</div>
                    <a href="${cs.link}" class="case-study-btn">FULL CASE STUDY <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              `;
              grid.appendChild(col);
            });
        });
      });
    </script>
  </body>
</html>


