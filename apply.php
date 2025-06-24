<?php
session_start();
list($pdo, $config) = include __DIR__ . '/inc/init.php';
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'first_name' => $_POST['first_name'] ?? '',
        'last_name' => $_POST['last_name'] ?? '',
        'birthdate' => $_POST['birthdate'] ?? '',
        'email' => $_POST['email'] ?? '',
        'phone' => $_POST['phone'] ?? '',
        'program' => $_POST['program'] ?? '',
        'preference' => $_POST['preference'] ?? '',
        'internship' => $_POST['internship'] ?? '',
        'created_at' => date('c')
    ];
    $stmt = $pdo->prepare("INSERT INTO applications (first_name,last_name,birthdate,email,phone,program,preference,internship,created_at) VALUES (:first_name,:last_name,:birthdate,:email,:phone,:program,:preference,:internship,:created_at)");
    $stmt->execute($data);
    // send email using PHPMailer
    require __DIR__ . '/vendor/autoload.php';
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->setFrom($data['email'], $data['first_name']);
    $mail->addAddress($config['admin_email']);
    $mail->Subject = 'Yeni Başvuru';
    $mail->Body = "Yeni başvuru:\n" . print_r($data, true);
    $mail->send();
    $_SESSION['success'] = 'Başvurunuz alındı';
    header('Location: apply.php');
    exit;
}
?>
<?php include 'header.php'; ?>
<div class="container mt-4">
<?php if (!empty($_SESSION['success'])): ?>
<div class="alert alert-success"><?= $_SESSION['success']; unset($_SESSION['success']); ?></div>
<?php endif; ?>
<form method="post">
    <div class="mb-3">
        <label>Ad</label>
        <input type="text" name="first_name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Soyad</label>
        <input type="text" name="last_name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Doğum Tarihi</label>
        <input type="date" name="birthdate" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>E-posta</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Telefon</label>
        <input type="text" name="phone" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Program</label>
        <select name="program" class="form-select">
            <option>Profesyonel Aşçılık</option>
            <option>Amatör Aşçılık</option>
            <option>Amatör Pastacılık</option>
        </select>
    </div>
    <div class="mb-3">
        <label>Eğitim Tercihi</label>
        <select name="preference" class="form-select">
            <option>Hafta içi</option>
            <option>Hafta sonu</option>
        </select>
    </div>
    <div class="mb-3">
        <label>Staj</label>
        <select name="internship" class="form-select">
            <option>Stajlı</option>
            <option>Stajsız</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Gönder</button>
</form>
</div>
<?php include 'footer.php'; ?>
