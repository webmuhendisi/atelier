<?php
$config = include __DIR__ . '/../config.php';
$pdo = new PDO('sqlite:' . $config['db_path']);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec("CREATE TABLE IF NOT EXISTS applications (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    first_name TEXT,
    last_name TEXT,
    birthdate TEXT,
    email TEXT,
    phone TEXT,
    program TEXT,
    preference TEXT,
    internship TEXT,
    created_at TEXT
)");
return [$pdo, $config];

