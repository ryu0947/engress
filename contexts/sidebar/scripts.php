<?php
function add_sidebar_scripts_files()
{
    if (is_singular('post')) {
        wp_enqueue_style('sidebar-style', get_template_directory_uri() . '/contexts/sidebar/css/sidebar.css', array(), filemtime(get_theme_file_path('/contexts/sidebar/css/sidebar.css')), 'all');
    }
}

add_action('wp_enqueue_scripts', 'add_sidebar_scripts_files');
