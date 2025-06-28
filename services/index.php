<?php
$steps = [];
$json_path = __DIR__ . '/services.json';
if (file_exists($json_path)) {
    $steps = json_decode(file_get_contents($json_path), true);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Working Process | The Brand Weave</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Manrope', sans-serif;
      margin: 0;
      background: #fff;
      color: #122C24;
    }

    .working-process-section {
      padding: 100px 0;
      text-align: center;
    }

    .working-process-title {
      font-size: 52px;
      font-weight: 700;
      margin-bottom: 20px;
      text-transform: uppercase;
    }

    .working-process-subtitle {
      font-size: 20px;
      color: #6F7B80;
      max-width: 700px;
      margin: 0 auto 60px;
    }

    .process-steps-row {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 40px;
      justify-items: center;
    }

    .marketing-single {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 16px rgba(18, 44, 36, 0.06);
      padding: 30px 24px;
      transition: all 0.3s ease;
      text-align: center;
      max-width: 280px;
    }

    .marketing-single:hover {
      transform: translateY(-8px);
      box-shadow: 0 10px 30px rgba(18, 44, 36, 0.15);
    }

    .process-step-icon i {
      font-size: 36px;
      color: #122C24;
      margin-bottom: 20px;
      display: inline-block;
    }

    .process-step-title {
      font-size: 22px;
      font-weight: 700;
      margin-bottom: 12px;
      text-transform: capitalize;
    }

    .process-step-desc {
      font-size: 16px;
      color: #6F7B80;
      line-height: 1.6;
    }

    @media (max-width: 768px) {
      .working-process-title {
        font-size: 38px;
      }
      .process-step-title {
        font-size: 20px;
      }
      .process-step-desc {
        font-size: 15px;
      }
    }
  </style>
</head>
<body>
<?php include '../navbar.php'; ?>

<section class="working-process-section">
  <div class="container">
    <div class="working-process-title">Working Process</div>
    <div class="working-process-subtitle">
      Foster a positive and inclusive team culture aligned with your company's values and mission.
    </div>

    <div class="process-steps-row">
      <?php if (!empty($steps)): ?>
        <?php foreach ($steps as $step): ?>
          <div class="marketing-single">
            <div class="process-step-icon"><i class="<?= htmlspecialchars($step['icon']) ?>"></i></div>
            <div class="process-step-title"><?= htmlspecialchars($step['title']) ?></div>
            <div class="process-step-desc"><?= htmlspecialchars($step['description']) ?></div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <div style="color:red; font-size:18px; grid-column: 1/-1;">
          No steps found! Please check your <b>services.json</b> file.
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php include '../letsConnect.php'; ?>
<?php include '../footer.php'; ?>
</body>
</html>
