<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить товар</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
    <?php include '../../templates/header.php'; ?>
    <main class="container">
        <form method="POST" action="../add_product.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Название товара:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Описание товара:</label>
                <textarea id="description" name="description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="price">Цена:</label>
                <input type="number" id="price" name="price" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="units">Единицы товара (каждая строка - одна единица):</label>
                <textarea id="units" name="units" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Картинка товара:</label>
                <input type="file" id="image" name="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Добавить товар</button>
        </form>
    </main>
    <?php include '../../templates/footer.php'; ?>
</body>
</html>