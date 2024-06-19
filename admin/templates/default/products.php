<?php include 'header.php'; ?>
<h1><?= t('products'); ?></h1>
<a href="add_product.php" class="button"><?= t('add_product'); ?></a>
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
                <td><img src="../img/<?= $product['image']; ?>" alt="<?= $product['name']; ?>" style="width: 50px; height: auto;"></td>
                <td><?= $product['name']; ?></td>
                <td><?= $product['description']; ?></td>
                <td><?= $product['price']; ?> руб.</td>
                <td>
                    <a href="edit_product.php?id=<?= $product['id']; ?>"><?= t('edit'); ?></a>
                    <a href="delete_product.php?id=<?= $product['id']; ?>"><?= t('delete'); ?></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php include 'footer.php'; ?>
