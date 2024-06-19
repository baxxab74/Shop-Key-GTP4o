<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include '../language.php'; // Подключаем файл управления языком
?>
<!DOCTYPE html>
<html lang="<?= isset($_SESSION['lang']) ? $_SESSION['lang'] : 'en' ?>">
<head>
    <meta charset="UTF-8">
    <title><?= t('title'); ?></title>
    <link rel="stylesheet" href="css/admin_styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1><?= t('title'); ?></h1>
        </header>
        <div class="main-content">
            <aside class="sidebar">
                <nav>
                    <ul>
                        <li><a href="index.php"><?= t('welcome'); ?></a></li>
                        <li><a href="products.php"><?= t('products'); ?></a></li>
                        <li><a href="settings.php"><?= t('settings'); ?></a></li>
                        <li><a href="logout.php"><?= t('logout'); ?></a></li>
                    </ul>
                </nav>
                <div class="language-switcher">
                    <form method="get" action="/language.php">
                        <label for="lang"><?= t('select_language'); ?>:</label>
                        <select id="lang" name="lang" onchange="this.form.submit()">
                            <option value="en" <?= (isset($_SESSION['lang']) && $_SESSION['lang'] == 'en') ? 'selected' : '' ?>>English</option>
                            <option value="ru" <?= (isset($_SESSION['lang']) && $_SESSION['lang'] == 'ru') ? 'selected' : '' ?>>Русский</option>
                        </select>
                    </form>
                </div>
            </aside>
            <main class="content">