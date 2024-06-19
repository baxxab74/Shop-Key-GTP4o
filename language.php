<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;

    // Перенаправление на предыдущую страницу
    $previous_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
    header("Location: $previous_url");
    exit();
} elseif (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
} else {
    $lang = 'en'; // Язык по умолчанию
}

$lang_file = __DIR__ . "/languages/$lang.php";

if (file_exists($lang_file)) {
    $translations = include $lang_file;
} else {
    $translations = include __DIR__ . "/languages/en.php";
}

if (!function_exists('t')) {
    function t($key) {
        global $translations;
        return isset($translations[$key]) ? $translations[$key] : $key;
    }
}
?>
