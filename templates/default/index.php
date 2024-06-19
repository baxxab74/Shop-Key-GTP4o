<?php include 'header.php'; ?>
        <?php if (empty($products)): ?>
            <p>Нет товаров</p>
        <?php else: ?>
            <ul>
                <?php foreach ($products as $product): ?>
                    <li>
                        <h2><?= $product['name']; ?></h2>
                        <p><?= $product['description']; ?></p>
                        <p>Цена: <?= $product['price']; ?> руб.</p>
                        <img src="img/<?= $product['image']; ?>" alt="<?= $product['name']; ?>">
                        <a href="add_to_cart.php?id=<?= $product['id']; ?>">Добавить в корзину</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
<?php include 'footer.php'; ?>
