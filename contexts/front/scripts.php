<?php
function add_front_page_scripts_files()
{
    if (is_front_page()) {
        wp_enqueue_style('front-style', get_template_directory_uri() . '/contexts/front/css/front.css', array(), filemtime(get_theme_file_path('/contexts/front/css/front.css')), 'all');
    }
}

add_action('wp_enqueue_scripts', 'add_front_page_scripts_files');
