<?php
function add_course_page_scripts_files()
{
    if (is_page('course')) {
        wp_enqueue_style('scroll-hint-style', 'https://unpkg.com/scroll-hint@latest/css/scroll-hint.css', array(), 'all');
        wp_enqueue_style('course-style', get_template_directory_uri() . '/contexts/course/css/course.css', array(), filemtime(get_theme_file_path('/contexts/course/css/course.css')), 'all');
        wp_enqueue_script('scroll-hint-script', 'https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js', array(), false, false);
        wp_enqueue_script('course-script', get_template_directory_uri() . '/contexts/course/js/course.js', array(), false, true);
    }
}

add_action('wp_enqueue_scripts', 'add_course_page_scripts_files');
