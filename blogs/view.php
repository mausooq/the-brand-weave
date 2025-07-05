<?php
// Load content from JSON file
$contentFile = 'content.json';
if (file_exists($contentFile)) {
    $content = json_decode(file_get_contents($contentFile), true);
} else {
    // Fallback content if JSON file doesn't exist
    $content = [
        "page_title" => "Media Marketing Services",
        "hero" => [
            "title" => "Media Marketing",
            "subtitle" => "Amplify Your Brand's Voice Across Digital Platforms",
            "description" => "Strategic media marketing solutions that build brand awareness, foster relationships, and drive business growth through comprehensive digital engagement."
        ],
        "stats" => [
            ["number" => "50+", "label" => "Regular Clients"],
            ["number" => "127", "label" => "Projects Completed"],
            ["number" => "98%", "label" => "Success Rate"],
            ["number" => "24/7", "label" => "Support"]
        ],
        "services" => [
            [
                "title" => "Social Media Management",
                "description" => "Each social platform, from Instagram and Facebook to TikTok and LinkedIn, caters to different demographics. Effective media marketing tailors content to the strengths of each platform and its audience.",
                "features" => ["Platform-specific content", "Audience engagement", "Community building", "Performance analytics"]
            ],
            [
                "title" => "Content Creation & Distribution",
                "description" => "Blogs, videos, infographics, and podcasts are crafted to inform, entertain, and inspire the audience. The content is distributed through various media channels to establish authority.",
                "features" => ["Blog writing", "Video production", "Infographic design", "Podcast creation"]
            ],
            [
                "title" => "SEO & Keywords Optimization",
                "description" => "Optimizing content for search engines ensures it ranks higher on Google and other platforms, driving organic traffic to your brand's website or social profiles.",
                "features" => ["Keyword research", "On-page SEO", "Content optimization", "Ranking improvement"]
            ],
            [
                "title" => "Influencer Partnerships",
                "description" => "Media marketing includes collaborating with influencers who can authentically promote your brand to their audience, adding credibility and expanding reach.",
                "features" => ["Micro-influencers", "Macro-influencers", "Campaign management", "ROI tracking"]
            ]
        ],
        "benefits" => [
            "Reach wider and more diverse audiences across multiple channels",
            "Higher ROI compared to traditional media with tailored approaches", 
            "Immediate audience interaction and real-time feedback",
            "Advanced targeting ensures precise audience reach"
        ],
        "cta" => [
            "title" => "Ready to Amplify Your Brand?",
            "description" => "In a world dominated by digital engagement, media marketing is essential for building brand awareness, fostering relationships, and driving business growth.",
            "button_text" => "Get Started Today"
        ]
    ];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($content['page_title']); ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon.png">
    <link rel="shortcut icon" href="../assets/favicon.png">
    <link rel="apple-touch-icon" href="../assets/favicon.png">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        .header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            padding: 1rem 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: #6366f1;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: #6366f1;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 120px 0 80px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 20"><defs><radialGradient id="a" cx="50%" cy="0%"><stop offset="0%" stop-color="rgba(255,255,255,0.1)"/><stop offset="100%" stop-color="rgba(255,255,255,0)"/></radialGradient></defs><rect width="100%" height="100%" fill="url(%23a)"/></svg>');
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            animation: slideInUp 0.8s ease-out;
        }

        .hero .subtitle {
            font-size: 1.5rem;
            font-weight: 300;
            margin-bottom: 1.5rem;
            animation: slideInUp 0.8s ease-out 0.2s both;
        }

        .hero .description {
            font-size: 1.1rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
            animation: slideInUp 0.8s ease-out 0.4s both;
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Stats Section */
        .stats {
            background: white;
            padding: 60px 0;
            box-shadow: 0 -10px 30px rgba(0, 0, 0, 0.1);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            text-align: center;
        }

        .stat-item {
            padding: 2rem;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .stat-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            color: #6366f1;
            margin-bottom: 0.5rem;
            animation: countUp 2s ease-out;
        }

        .stat-label {
            font-size: 1.1rem;
            color: #666;
            font-weight: 500;
        }

        @keyframes countUp {
            from { opacity: 0; transform: scale(0.5); }
            to { opacity: 1; transform: scale(1); }
        }

        /* Services Section */
        .services {
            padding: 100px 0;
            background: #f8fafc;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 3rem;
            color: #1e293b;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .service-card {
            background: white;
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #6366f1, #8b5cf6);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .service-card:hover::before {
            transform: scaleX(1);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        .service-card h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #1e293b;
        }

        .service-card p {
            color: #64748b;
            margin-bottom: 1.5rem;
            line-height: 1.7;
        }

        .service-features {
            list-style: none;
        }

        .service-features li {
            padding: 0.5rem 0;
            color: #475569;
            position: relative;
            padding-left: 1.5rem;
        }

        .service-features li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #10b981;
            font-weight: bold;
        }

        /* Benefits Section */
        .benefits {
            padding: 100px 0;
            background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
            color: white;
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .benefit-item {
            padding: 2rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .benefit-item:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-5px);
        }

        /* CTA Section */
        .cta {
            padding: 100px 0;
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            color: white;
            text-align: center;
        }

        .cta h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .cta p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button {
            display: inline-block;
            padding: 1rem 2.5rem;
            background: white;
            color: #6366f1;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero .subtitle {
                font-size: 1.2rem;
            }
            
            .nav-links {
                display: none;
            }
            
            .services-grid,
            .benefits-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Scroll animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="nav container">
            <div class="logo">Greeko</div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1><?php echo htmlspecialchars($content['hero']['title']); ?></h1>
                <p class="subtitle"><?php echo htmlspecialchars($content['hero']['subtitle']); ?></p>
                <p class="description"><?php echo htmlspecialchars($content['hero']['description']); ?></p>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stats-grid">
                <?php foreach ($content['stats'] as $stat): ?>
                <div class="stat-item fade-in">
                    <div class="stat-number"><?php echo htmlspecialchars($stat['number']); ?></div>
                    <div class="stat-label"><?php echo htmlspecialchars($stat['label']); ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <h2 class="section-title fade-in">Our Services</h2>
            <div class="services-grid">
                <?php foreach ($content['services'] as $service): ?>
                <div class="service-card fade-in">
                    <h3><?php echo htmlspecialchars($service['title']); ?></h3>
                    <p><?php echo htmlspecialchars($service['description']); ?></p>
                    <ul class="service-features">
                        <?php foreach ($service['features'] as $feature): ?>
                        <li><?php echo htmlspecialchars($feature); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits">
        <div class="container">
            <h2 class="section-title fade-in">Why Choose Our Media Marketing?</h2>
            <div class="benefits-grid">
                <?php foreach ($content['benefits'] as $benefit): ?>
                <div class="benefit-item fade-in">
                    <p><?php echo htmlspecialchars($benefit); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <h2><?php echo htmlspecialchars($content['cta']['title']); ?></h2>
            <p><?php echo htmlspecialchars($content['cta']['description']); ?></p>
            <a href="#contact" class="cta-button"><?php echo htmlspecialchars($content['cta']['button_text']); ?></a>
        </div>
    </section>

    <script>
        // Scroll animations
        function animateOnScroll() {
            const elements = document.querySelectorAll('.fade-in');
            
            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add('visible');
                }
            });
        }

        window.addEventListener('scroll', animateOnScroll);
        animateOnScroll(); // Run once on load

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add parallax effect to hero
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const hero = document.querySelector('.hero');
            hero.style.transform = `translateY(${scrolled * 0.5}px)`;
        });
    </script>
</body>
</html>