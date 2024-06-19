<main class="container">
    <h2><?= t('products'); ?></h2>
    <table class="product-table">
        <thead>
            <tr>
                <th><?= t('image'); ?></th>
                <th><?= t('name'); ?></th>
                <th><?= t('description'); ?></th>
                <th><?= t('price'); ?></th>
                <th><?= t('actions'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td data-label="<?= t('image'); ?>"><img src="img/<?= $product['image']; ?>" alt="<?= $product['name']; ?>" style="width: 50px; height: auto;"></td>
                    <td data-label="<?= t('name'); ?>"><?= $product['name']; ?></td>
                    <td data-label="<?= t('description'); ?>"><?= $product['description']; ?></td>
                    <td data-label="<?= t('price'); ?>"><?= $product['price']; ?> руб.</td>
                    <td data-label="<?= t('actions'); ?>">
                        <a href="buy.php?id=<?= $product['id']; ?>" class="btn btn-buy"><?= t('buy'); ?></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
