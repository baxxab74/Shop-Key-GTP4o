<?php include 'header.php'; ?>
<h1><?= t('settings'); ?></h1>
<form action="settings.php" method="post" class="settings-form">
    <div class="form-group">
        <label for="template"><?= t('select_template_for_frontend'); ?>:</label>
        <select id="template" name="template" class="form-control">
            <?php foreach ($frontend_templates as $template): ?>
                <option value="<?= $template ?>" <?= $current_template == $template ? 'selected' : ''; ?>><?= ucfirst($template) ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="admin_template"><?= t('select_template_for_admin'); ?>:</label>
        <select id="admin_template" name="admin_template" class="form-control">
            <?php foreach ($admin_templates as $template): ?>
                <option value="<?= $template ?>" <?= $current_admin_template == $template ? 'selected' : ''; ?>><?= ucfirst($template) ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <input type="submit" value="<?= t('save'); ?>" class="btn btn-primary">
    </div>
</form>
<?php include 'footer.php'; ?>