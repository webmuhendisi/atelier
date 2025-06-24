<?php
session_start();
$config = include __DIR__ . '/../config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['user'] === $config['admin_user'] && $_POST['pass'] === $config['admin_pass']) {
        $_SESSION['user'] = $_POST['user'];
        header('Location: dashboard.php');
        exit;
    } else {
        $error = 'Hatalı giriş';
    }
}
?>
<!DOCTYPE html>
<html><head><meta charset="utf-8"><title>Admin Giriş</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head><body>
<div class="container mt-5" style="max-width:400px;">
<h2>Admin Giriş</h2>
<?php if (!empty($error)) echo '<div class="alert alert-danger">'.$error.'</div>'; ?>
<form method="post">
<input type="text" name="user" class="form-control mb-2" placeholder="Kullanıcı" required>
<input type="password" name="pass" class="form-control mb-2" placeholder="Şifre" required>
<button class="btn btn-primary">Giriş</button>
</form>
</div></body></html>
