<?php
function add_course_page_scripts_files()
{
    wp_enqueue_style('course-style', get_template_directory_uri() . '/contexts/course/css/course.css', array(), filemtime(get_theme_file_path('/contexts/course/css/course.css')), 'all');
}

add_action('wp_enqueue_scripts', 'add_blog_page_scripts_files');
