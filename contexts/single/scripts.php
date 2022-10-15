<?php
function add_single_scripts_files()
{
    if (is_single()) {
        wp_enqueue_style('single-style', get_template_directory_uri() . '/contexts/single/css/single.css', array(), filemtime(get_theme_file_path('/contexts/single/css/single.css')), 'all');
    }
}

add_action('wp_enqueue_scripts', 'add_single_scripts_files');
