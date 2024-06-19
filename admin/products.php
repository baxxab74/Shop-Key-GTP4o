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

$sql = "SELECT id, name, description, price, image FROM products";
$result = $conn->query($sql);

if (!$result) {
    // Вывод ошибки базы данных
    die("Ошибка базы данных: " . $conn->error);
}

$products = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}

$conn->close();

render_admin_page('products', [
    'title' => t('products'),
    'products' => $products
]);
?>