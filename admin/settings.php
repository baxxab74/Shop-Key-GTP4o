<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

include '../includes/db.php';
include 'includes/admin_functions.php';
include '../language.php'; // Подключаем файл управления языком

$frontend_templates = ['template1', 'template2']; // Пример шаблонов для фронтенда
$admin_templates = ['admin_template1', 'admin_template2']; // Пример шаблонов для админки

$current_template = 'template1'; // Текущий шаблон для фронтенда
$current_admin_template = 'admin_template1'; // Текущий шаблон для админки

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $current_template = $_POST['template'];
    $current_admin_template = $_POST['admin_template'];
    // Здесь можно добавить логику для сохранения выбранных шаблонов
}

render_admin_page('settings', [
    'title' => t('settings'),
    'frontend_templates' => $frontend_templates,
    'admin_templates' => $admin_templates,
    'current_template' => $current_template,
    'current_admin_template' => $current_admin_template
]);
?>