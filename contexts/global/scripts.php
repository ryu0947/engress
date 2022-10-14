<?php
function add_scripts_files()
{
    wp_enqueue_style('reset', 'https://cdn.jsdelivr.net/npm/destyle.css@3.0.2/destyle.min.css', array(), '3.0.2', 'all');
    wp_enqueue_style('my-common-style', get_template_directory_uri() . '/contexts/global/css/common.css', array(), filemtime(get_theme_file_path('/contexts/global/css/common.css')), 'all');
    wp_enqueue_script('my-common-script', get_template_directory_uri() . '/contexts/global/js/common.js', array(), filemtime(get_theme_file_path('/contexts/global/js/common.js')), false, true);
}

add_action('wp_enqueue_scripts', 'add_scripts_files');
