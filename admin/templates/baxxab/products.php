<?php include 'header.php'; ?>
<h1>Товары</h1>
<a href="add_product.php" class="button">Добавить новый товар</a>
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
