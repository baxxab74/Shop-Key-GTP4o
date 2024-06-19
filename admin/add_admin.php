<?php
include '../includes/db.php';

// Имя пользователя и пароль администратора
$username = 'admin';
$password = '123456';

// Хэширование пароля
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Вставка администратора в таблицу
$sql = "INSERT INTO admins (username, password) VALUES ('$username', '$hashed_password')";
if ($conn->query($sql) === TRUE) {
    echo "Администратор успешно добавлен.";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
