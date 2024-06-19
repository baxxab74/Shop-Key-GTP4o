<?php include 'header.php'; ?>
<h1>Настройки</h1>
<form action="settings.php" method="post">
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
<?php include 'footer.php'; ?>