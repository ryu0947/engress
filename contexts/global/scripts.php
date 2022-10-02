<?php
function add_scripts_files()
{
    wp_enqueue_style('reset', 'https://cdn.jsdelivr.net/npm/destyle.css@3.0.2/destyle.min.css', array(), '3.0.2', 'all');
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap', array(), 'all');
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css', array(), '6.1.1', 'all');
    wp_enqueue_style('my-common-style', get_template_directory_uri() . '/contexts/global/css/common.css', array(), filemtime(get_theme_file_path('/contexts/global/css/common.css')), 'all');
    wp_enqueue_script('my-common-script', get_template_directory_uri() . '/contexts/global/css/common.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'add_scripts_files');
