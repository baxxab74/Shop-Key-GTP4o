<?php include 'header.php'; ?>
<h1>Админка - Список товаров</h1>


<!-- Удаляем или комментируем форму выбора шаблонов -->
<!--
<form action="index.php" method="post">
    <label for="template">Выберите шаблон для фронтенда:</label>
    <select id="template" name="template">
        <?php foreach ($frontend_templates as $template): ?>
            <option value="<?= $template ?>" <?= $current_template == $template ? 'selected' : ''; ?>><?= ucfirst($template) ?></option>
        <?php endforeach; ?>
    </select>
    <br>
    <label for="admin_template">Выберите шаблон для админки:</label>
    <select id="admin_template" name="admin_template">
        <?php foreach ($admin_templates as $template): ?>
            <option value="<?= $template ?>" <?= $current_admin_template == $template ? 'selected' : ''; ?>><?= ucfirst($template) ?></option>
        <?php endforeach; ?>
    </select>
    <br>
    <input type="submit" value="Сохранить">
</form>
-->

<ul>
    <?php foreach ($products as $product): ?>
        <li>
            <h2><?= $product['name']; ?></h2>
            <p><?= $product['description']; ?></p>
            <p>Цена: <?= $product['price']; ?> руб.</p>
            <img src="../img/<?= $product['image']; ?>" alt="<?= $product['name']; ?>">
            <a href="edit_product.php?id=<?= $product['id']; ?>">Редактировать</a>
            <a href="delete_product.php?id=<?= $product['id']; ?>">Удалить</a>
        </li>
    <?php endforeach; ?>
</ul>
<?php include 'footer.php'; ?>
