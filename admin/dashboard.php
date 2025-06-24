<?php
require_once __DIR__ . '/../inc/auth.php';
require_login();
$stmt = $pdo->query('SELECT * FROM applications ORDER BY created_at DESC');
$applications = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html><head><meta charset="utf-8"><title>Başvurular</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head><body>
<div class="container mt-4">
<a href="logout.php" class="btn btn-secondary float-end">Çıkış</a>
<h2>Başvurular</h2>
<table class="table">
<tr><th>Ad</th><th>Soyad</th><th>Email</th><th>Program</th><th>Tarih</th></tr>
<?php foreach ($applications as $a): ?>
<tr>
<td><?= htmlspecialchars($a['first_name']) ?></td>
<td><?= htmlspecialchars($a['last_name']) ?></td>
<td><?= htmlspecialchars($a['email']) ?></td>
<td><?= htmlspecialchars($a['program']) ?></td>
<td><?= htmlspecialchars($a['created_at']) ?></td>
</tr>
<?php endforeach; ?>
</table>
</div>
</body></html>
