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
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="navbar.css" />
  </head>
  <body>
    <?php include 'navbar.php'; ?>

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
              src="./assets/logo.png"
              alt="Client Logo 1"
              class="client-logo"
            />
            <img
              src="./assets/logo.png"
              alt="Client Logo 2"
              class="client-logo"
            />
            <img
              src="./assets/logo.png"
              alt="Client Logo 3"
              class="client-logo"
            />
            <img
              src="./assets/logo.png"
              alt="Client Logo 4"
              class="client-logo"
            />
            <img
              src="./assets/logo.png"
              alt="Client Logo 5"
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
    <section id="about" class="py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <img
              src="https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?auto=format&fit=crop&w=600&q=80"
              alt="About Us"
              class="about-img w-100"
            />
          </div>
          <div class="col-lg-6">
            <h2 class="fw-bold mb-3">About Our Agency</h2>
            <p class="mb-3">
              We are a passionate team of digital marketers, designers, and
              strategists dedicated to helping businesses grow online. With
              years of experience and a data-driven approach, we deliver
              measurable results for our clients.
            </p>
            <ul class="list-unstyled mb-4">
              <li class="mb-2">
                <i class="bi bi-check-circle-fill text-primary me-2"></i>
                Certified SEO & Marketing Experts
              </li>
              <li class="mb-2">
                <i class="bi bi-check-circle-fill text-primary me-2"></i>
                Transparent Reporting
              </li>
              <li class="mb-2">
                <i class="bi bi-check-circle-fill text-primary me-2"></i> Proven
                Track Record
              </li>
            </ul>
            <a href="#portfolio" class="btn btn-outline-primary px-4"
              >View Portfolio</a
            >
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-5 bg-light">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="fw-bold">Our Projects</h2>
          <p class="text-muted">
            A showcase of our recent work and success stories.
          </p>
        </div>
        <div class="row g-4">
          <div class="col-md-4">
            <img
              src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=600&q=80"
              alt="Project 1"
              class="portfolio-img w-100"
            />
          </div>
          <div class="col-md-4">
            <img
              src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80"
              alt="Project 2"
              class="portfolio-img w-100"
            />
          </div>
          <div class="col-md-4">
            <img
              src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=600&q=80"
              alt="Project 3"
              class="portfolio-img w-100"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials Section (Optional) -->
    <section id="testimonials" class="py-5">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="fw-bold">What Our Clients Say</h2>
        </div>
        <div
          id="testimonialCarousel"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div
                class="testimonial-card p-4 mx-auto"
                style="max-width: 600px; background: #fff"
              >
                <p class="mb-3">
                  "The Brand Weave helped us double our website traffic in just
                  3 months. Highly recommended!"
                </p>
                <div class="d-flex align-items-center">
                  <img
                    src="https://randomuser.me/api/portraits/men/32.jpg"
                    alt="Client 1"
                    class="rounded-circle me-3"
                    width="48"
                  />
                  <div>
                    <strong>John D.</strong><br /><span class="text-muted small"
                      >E-commerce Owner</span
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div
                class="testimonial-card p-4 mx-auto"
                style="max-width: 600px; background: #fff"
              >
                <p class="mb-3">
                  "Professional, creative, and results-driven. Our go-to agency
                  for all things digital."
                </p>
                <div class="d-flex align-items-center">
                  <img
                    src="https://randomuser.me/api/portraits/women/44.jpg"
                    alt="Client 2"
                    class="rounded-circle me-3"
                    width="48"
                  />
                  <div>
                    <strong>Sarah K.</strong><br /><span
                      class="text-muted small"
                      >Startup Founder</span
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#testimonialCarousel"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#testimonialCarousel"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
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
        <div class="border rounded h-100 d-flex align-items-center">
          <div class="flex-grow-1">
            <span class="badge bg-light text-dark mb-2">SEO</span>
            <p class="text-muted small mb-1">• SEP 29, 2024 — 16MIN READ</p>
            <h5 class="fw-bold">NIKZE: JUST DO IT - BUILDING A GLOBAL BRAND</h5>
            <a href="#" class="text-dark fw-semibold mt-3 d-inline-block">READ NOW →</a>
          </div>
          <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=400&q=80" alt="Blog 1" class="rounded ms-4" style="width: 320px; height: 220px; object-fit: cover;">
        </div>
      </div>
      <div class="col-md-6">
        <div class="border rounded h-100 d-flex align-items-center">
          <div class="flex-grow-1">
            <span class="badge bg-light text-dark mb-2">SEO</span>
            <p class="text-muted small mb-1">• SEP 29, 2024 — 16MIN READ</p>
            <h5 class="fw-bold">NIKZE: JUST DO IT - BUILDING A GLOBAL BRAND</h5>
            <a href="#" class="text-dark fw-semibold mt-3 d-inline-block">READ NOW →</a>
          </div>
          <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=400&q=80" alt="Blog 1" class="rounded ms-4" style="width: 320px; height: 220px; object-fit: cover;">
        </div>
      </div>
      <div class="col-md-6">
        <div class="border rounded h-100 d-flex align-items-center">
          <div class="flex-grow-1">
            <span class="badge bg-light text-dark mb-2">SEO</span>
            <p class="text-muted small mb-1">• SEP 29, 2024 — 16MIN READ</p>
            <h5 class="fw-bold">NIKZE: JUST DO IT - BUILDING A GLOBAL BRAND</h5>
            <a href="#" class="text-dark fw-semibold mt-3 d-inline-block">READ NOW →</a>
          </div>
          <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=400&q=80" alt="Blog 1" class="rounded ms-4" style="width: 320px; height: 220px; object-fit: cover;">
        </div>
      </div>
      <div class="col-md-6">
        <div class="border rounded h-100 d-flex align-items-center">
          <div class="flex-grow-1">
            <span class="badge bg-light text-dark mb-2">SEO</span>
            <p class="text-muted small mb-1">• SEP 29, 2024 — 16MIN READ</p>
            <h5 class="fw-bold">NIKZE: JUST DO IT - BUILDING A GLOBAL BRAND</h5>
            <a href="#" class="text-dark fw-semibold mt-3 d-inline-block">READ NOW →</a>
          </div>
          <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=400&q=80" alt="Blog 1" class="rounded ms-4" style="width: 320px; height: 220px; object-fit: cover;">
        </div>
      </div>
      </div>
    </div>
  </div>
</section>


    <!-- Contact Section -->
     

    <?php include 'letsConnect.php'; ?>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

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
    </script>
  </body>
</html>


