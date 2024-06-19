<?php

function get_admin_template_path() {
    $current_admin_template = include __DIR__ . '/template_config.php';
    return $current_admin_template;
}

function render_admin_template($template, $vars = []) {
    extract($vars);
    ob_start();
    include $template;
    return ob_get_clean();
}

function render_admin_page($template_name, $vars = []) {
    $template_path = get_admin_template_path();
    $template = __DIR__ . "/../templates/$template_path/$template_name.php";
    echo render_admin_template($template, $vars);
}

function get_available_admin_templates() {
    $template_dir = __DIR__ . '/../templates';
    $templates = array_filter(glob($template_dir . '/*'), 'is_dir');
    return array_map('basename', $templates);
}
?>