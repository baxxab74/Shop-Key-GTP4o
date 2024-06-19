<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header class="header">
        <div class="container header-content">
            <h1 class="site-title">Мой магазин</h1>
            <nav class="horizontal-menu">
                <ul>
                    <li><a href="index.php" class="active"><?= t('home'); ?></a></li>
                    <li><a href="products.php"><?= t('products'); ?></a></li>
                    <li><a href="about.php"><?= t('about'); ?></a></li>
                    <li><a href="contact.php"><?= t('contact'); ?></a></li>
                </ul>
            </nav>
            <div class="language-switcher">
                <a href="?lang=ru">RU</a> | <a href="?lang=en">EN</a>
            </div>
        </div>
    </header>
