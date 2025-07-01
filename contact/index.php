<?php
// PHPMailer integration for contact form
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php';

// Contact Page for The Brand Weave
$formSent = false;
$formError = '';

// Default values for repopulation
$firstName = $lastName = $contact = $email = $company = $subject = $message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = trim($_POST['firstName'] ?? '');
    $lastName = trim($_POST['lastName'] ?? '');
    $contact = trim($_POST['contact'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $company = trim($_POST['company'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($firstName && $lastName && $email && $message) {
        $mail = new PHPMailer(true);
        try {
            // Hostinger SMTP config
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'contact@thebrandweave.com'; // your domain email
            $mail->Password = 'strongPassword@123'; // your email password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('contact@thebrandweave.com', 'The Brand Weave Contact');
            $mail->addAddress('abdulmausooq@gmail.com'); // or any recipient
            $mail->addReplyTo($email, $firstName . ' ' . $lastName);

            $mail->Subject = 'Contact Form: ' . ($subject ?: 'New Message');
            $mail->Body = "Name: $firstName $lastName\n" .
                          "Email: $email\n" .
                          "Contact: $contact\n" .
                          "Company: $company\n" .
                          "Message:\n$message\n";

            $mail->send();
            // Redirect to avoid resubmission and clear fields
            header('Location: ' . strtok($_SERVER['REQUEST_URI'], '?') . '?sent=1');
            exit;
        } catch (Exception $e) {
            $formError = 'Sorry, your message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
        }
    } else {
        $formError = 'Please fill in all required fields.';
    }
}
// Show success message if redirected
$formSent = isset($_GET['sent']) && $_GET['sent'] == 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us | The Brand Weave</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Google Fonts: Figtree, Bebas Neue, Roboto -->
  <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;600;700&family=Bebas+Neue&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../navbar.css" />
  <link rel="stylesheet" href="../style.css" />
  <style>
    body {
      font-family: 'Figtree', 'Roboto', Arial, sans-serif;
      background: #f6f7fb;
    }
    .contact-hero {
      background: linear-gradient(120deg, #483aa0 0%, #7b5cff 100%);
      color: #fff;
      padding: 64px 0 40px 0;
      text-align: center;
      border-radius: 0 0 2rem 2rem;
      margin-bottom: 2rem;
      box-shadow: 0 8px 32px rgba(72,58,160,0.08);
    }
    .contact-hero h1 {
      font-family: 'Bebas Neue', cursive;
      font-size: 3rem;
      letter-spacing: 2px;
      margin-bottom: 0.5rem;
    }
    .contact-hero p {
      font-size: 1.2rem;
      opacity: 0.9;
    }
    .contact-section {
      padding: 0 0 48px 0;
      background: none;
      border-radius: 0;
      box-shadow: none;
    }
    .contact-info-panel {
      background: #fff;
      border-radius: 1.5rem;
      box-shadow: 0 4px 24px rgba(72,58,160,0.07);
      padding: 2.5rem 2rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      min-height: 100%;
    }
    .contact-info-panel h5 {
      color: #122c24;
      font-weight: 700;
      margin-bottom: 2rem;
      letter-spacing: 1px;
    }
    .contact-info-panel .info-item {
      display: flex;
      align-items: center;
      gap: 1rem;
      margin-bottom: 1.5rem;
    }
    .contact-info-panel .info-item:last-child {
      margin-bottom: 0;
    }
    .contact-info-panel .info-icon {
      font-size: 1.7rem;
      color: #122c24;
      background: #f3f0ff;
      border-radius: 50%;
      padding: 0.5rem;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 2.7rem;
      height: 2.7rem;
    }
    .contact-info-panel .social-links {
      margin-top: 2rem;
      display: flex;
      gap: 1.2rem;
    }
    .contact-info-panel .social-links a {
      color: #122c24;
      font-size: 1.5rem;
      transition: color 0.2s;
    }
    .contact-info-panel .social-links a:hover {
      color: #122c24;
    }
    .contact-form-card {
      background: #fff;
      border-radius: 1.5rem;
      box-shadow: 0 4px 32px rgba(72,58,160,0.10);
      padding: 2.5rem 2rem;
      min-height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      transition: box-shadow 0.2s;
    }
    .contact-form-card:hover {
      box-shadow: 0 8px 40px rgba(72,58,160,0.13);
    }
    .form-floating > .form-control, .form-floating > .form-select {
      border-radius: 0.75rem;
      border: none;
      background: #f8f8fc;
      font-size: 1rem;
    }
    .form-floating > label {
      color: #122c24;
      font-weight: 500;
      opacity: 0.85;
    }
    .form-control:focus {
      border: none;
      box-shadow: none;
      background: #fff;
    }
    .btn-primary {
      background: linear-gradient(90deg, #483aa0 0%, #7b5cff 100%);
      border: none;
      font-weight: 700;
      letter-spacing: 1px;
      border-radius: 2rem;
      padding: 0.75rem 0;
      font-size: 1.1rem;
      transition: background 0.2s;
    }
    .btn-primary:hover {
      background: linear-gradient(90deg, #7b5cff 0%, #483aa0 100%);
    }
    @media (max-width: 991px) {
      .contact-info-panel, .contact-form-card {
        border-radius: 1.2rem;
        padding: 2rem 1.2rem;
      }
    }
    @media (max-width: 767px) {
      .contact-hero {
        padding: 40px 0 24px 0;
        border-radius: 0 0 1.2rem 1.2rem;
      }
      .contact-section {
        padding-bottom: 24px;
      }
      .contact-info-panel, .contact-form-card {
        border-radius: 1rem;
        padding: 1.2rem 0.7rem;
      }
    }
    .blog-header {
      text-align: center;
      padding: 5rem 0 3rem 0;
    }
    .blog-header h1 {
      font-size: 3rem;
      font-weight: 800;
      margin: 0 0 0.5rem 0;
      color: #122c24;
    }
    .blog-header p {
      color: #6b7575;
      font-size: 1.1rem;
      max-width: 420px;
      margin: 0 auto;
      line-height: 1.5;
    }
    .contact-form-card .bi {
      color: #122c24 !important;
    }
  </style>
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
</head>
<body>
  <?php include '../navbar.php'; ?>

  <!-- Blog-style Header Section -->
  <div class="blog-header">
    <h1>Contact Us</h1>
    <p>We'd love to hear from you! Reach out for collaborations, queries, or just to say hello.</p>
  </div>

  <!-- Contact Section -->
  <section class="contact-section">
    <div class="container">
      <div class="row g-4 align-items-stretch justify-content-center">
        <!-- Contact Info Panel -->
        <div class="col-lg-5 mb-4 mb-lg-0">
          <div class="contact-info-panel h-100">
            <h5>Contact Information</h5>
            <div class="info-item">
              <span class="info-icon"><i class="bi bi-telephone-fill"></i></span>
              <div>
                <div class="fw-semibold">Phone</div>
                <a href="tel:+919826000000" class="text-decoration-none text-dark">+91 9826 000000</a>
              </div>
            </div>
            <div class="info-item">
              <span class="info-icon"><i class="bi bi-envelope-fill"></i></span>
              <div>
                <div class="fw-semibold">Email</div>
                <a href="mailto:info@thebrandweave.com" class="text-decoration-none text-dark">info@thebrandweave.com</a>
              </div>
            </div>
            <div class="info-item">
              <span class="info-icon"><i class="bi bi-geo-alt-fill"></i></span>
              <div>
                <div class="fw-semibold">Address</div>
                <span>Indore, Madhya Pradesh, India</span>
              </div>
            </div>
            <div class="social-links">
              <a href="#" title="Instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
              <a href="#" title="Facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" title="Twitter"><i class="bi bi-twitter-x"></i></a>
            </div>
          </div>
        </div>
        
        <!-- Contact Form Card -->
        <div class="col-lg-7">
          <div class="contact-form-card h-100">
            <h2 class="fw-bold mb-4 text-center" style="color: #122c24;">Send Us a Message</h2>
            <?php if ($formSent): ?>
              <div class="alert alert-success">Thank you! Your message has been sent.</div>
            <?php elseif ($formError): ?>
              <div class="alert alert-danger"><?= htmlspecialchars($formError) ?></div>
            <?php endif; ?>
            <form method="post" action="">
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required value="<?= htmlspecialchars($firstName) ?>" />
                    <label for="firstName">First Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required value="<?= htmlspecialchars($lastName) ?>" />
                    <label for="lastName">Last Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="tel" class="form-control" id="contact" name="contact" placeholder="Contact" required value="<?= htmlspecialchars($contact) ?>" />
                    <label for="contact">Contact</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required value="<?= htmlspecialchars($email) ?>" />
                    <label for="email">Email</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="company" name="company" placeholder="Company" value="<?= htmlspecialchars($company) ?>" />
                    <label for="company">Company</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" value="<?= htmlspecialchars($subject) ?>" />
                    <label for="subject">Subject</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Message" id="message" name="message" style="height: 120px" required><?= htmlspecialchars($message) ?></textarea>
                    <label for="message">Message</label>
                  </div>
                </div>
              </div>
              <div class="d-grid mt-4">
                <button type="submit" class="btn btn-primary btn-lg rounded-pill fw-bold">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include '../footer.php'; ?>
  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>