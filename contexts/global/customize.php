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

function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'blog';
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);
