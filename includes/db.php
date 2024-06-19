<?php
// Параметры подключения к базе данных
$servername = "localhost"; // Имя сервера базы данных
$username = "mysql";        // Имя пользователя базы данных
$password = "mysql";            // Пароль пользователя базы данных
$dbname = "my_shop";          // Имя базы данных

// Создаем соединение
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем соединение
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
