<?php
session_start();
list($pdo, $config) = include __DIR__ . '/init.php';
function is_logged_in() {
    return isset($_SESSION['user']);
}
function require_login() {
    if (!is_logged_in()) {
        header('Location: login.php');
        exit;
    }
}
