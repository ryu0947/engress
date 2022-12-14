<?php
function add_template_parts_scripts_files()
{
    if (!(is_front_page())) {
        wp_enqueue_style('breadcrumb-style', get_template_directory_uri() . '/contexts/template/css/breadcrumb.css', array(), filemtime(get_theme_file_path('/contexts/template/css/breadcrumb.css')), 'all');
    }

    if (is_page("blog") || is_archive("news")) {
        wp_enqueue_style('pagenation-style', get_template_directory_uri() . '/contexts/template/css/pagenation.css', array(), filemtime(get_theme_file_path('/contexts/template/css/pagenation.css')), 'all');
    }
}

add_action('wp_enqueue_scripts', 'add_template_parts_scripts_files');
