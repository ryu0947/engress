<?php
function add_archive_news_scripts_files()
{
    if (is_archive('news')) {
        wp_enqueue_style('news-style', get_template_directory_uri() . '/contexts/news/css/news.css', array(), filemtime(get_theme_file_path('/contexts/news/css/news.css')), 'all');
    }
}

add_action('wp_enqueue_scripts', 'add_archive_news_scripts_files');
