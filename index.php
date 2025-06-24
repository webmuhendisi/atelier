<?php
list($pdo, $config) = include __DIR__ . '/inc/init.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Atelier Arkın Eğitim Platformu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Atelier Arkın</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="programs.php">Eğitim Programları</a></li>
        <li class="nav-item"><a class="nav-link" href="apply.php">Başvuru</a></li>
        <li class="nav-item"><a class="nav-link" href="faq.php">SSS</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">İletişim</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-4">
    <h1>Hoş Geldiniz</h1>
    <p>Profesyonel ve amatör aşçılık eğitimleri.</p>
    <a href="apply.php" class="btn btn-primary">Hemen Başvur</a>
</div>
</body>
</html>
