<?php

// カスタムメニューからidを削除
function remove_nav_id($id)
{
    return $id = array();
}

// カスタムメニューのliタグに任意のクラスを追加できるようにする
add_filter("nav_menu_item_id", "remove_nav_id");

function add_nav_menu_class($classes, $item, $args)
{
    $classes = [];

    if (isset($args->add_li_class)) {
        $classes['class'] = $args->add_li_class;
    }

    return $classes;
}

add_filter('nav_menu_css_class', 'add_nav_menu_class', 1, 3);

// カスタムメニューのaタグに任意のクラスを追加できるようにする
function add_nav_menu_class_link($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}
add_filter('nav_menu_link_attributes', 'add_nav_menu_class_link', 1, 3);

remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');

remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
