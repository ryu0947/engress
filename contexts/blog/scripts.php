<?php
function add_blog_page_scripts_files()
{
    if (is_page('blog')) {
        wp_enqueue_style('blog-style', get_template_directory_uri() . '/contexts/blog/css/blog.css', array(), filemtime(get_theme_file_path('/contexts/blog/css/blog.css')), 'all');
    }
}

add_action('wp_enqueue_scripts', 'add_blog_page_scripts_files');
