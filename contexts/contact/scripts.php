<?php
function add_contact_page_scripts_files()
{
    wp_enqueue_style('contact-style', get_template_directory_uri() . '/contexts/contact/css/contact.css', array(), filemtime(get_theme_file_path('/contexts/contact/css/contact.css')), 'all');
}

add_action('wp_enqueue_scripts', 'add_contact_page_scripts_files');
