<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'language.php'; // Подключаем файл управления языком
include 'includes/db.php';

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

include 'templates/default/header.php';
include 'templates/default/main.php'; // Подключаем основной шаблон
include 'templates/default/footer.php';
?>