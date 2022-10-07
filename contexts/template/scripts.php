<?php
function add_template_parts_scripts_files()
{
    if (!(is_front_page() || is_single("blog") || is_single("news"))) {
        wp_enqueue_style('template-style', get_template_directory_uri() . '/contexts/template/css/lower.css', array(), filemtime(get_theme_file_path('/contexts/template/css/lower.css')), 'all');
    }
}

add_action('wp_enqueue_scripts', 'add_template_parts_scripts_files');
