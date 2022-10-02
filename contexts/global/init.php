<?php
// テーマに指定した機能の有効化をする
function theme_setup()
{
    // アイキャッチ画像を有効化
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'theme_setup');

// カスタムメニューの有効化
register_nav_menus(
    array(
        'global-nav' => 'グローバルナビ',
        'draw-nav' => 'ドロワーメニュー',
        'footer-nav' => 'フッターナビ'
    )
);

// カスタム投稿タイプとカスタムメニューの有効化
function add_custom_post_type()
{
    register_post_type(
        'works',
        array(
            'public' => true,
            'has_archive' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-star-filled',
            'show_in_rest' => 'true',
            'labels' => array(
                'name' => '制作実績',
                'all_items' => '制作実績一覧',
                'add_new' => '新しい制作実績を追加',
                'add_new_item' => '新しい作実績を追加',
                'not_found' => '記事はありません',
                'not_found_in_trash' => 'ゴミ箱に記事はありません',
            ),
            'supports' => array(
                'title',
                'editor',
                'thumbnail'
            )

        )
    );

    register_taxonomy(
        'genre',
        'works',
        array(
            'label' => '制作ジャンル',
            'hierarchical' => true,
            'show_ui' => true,
        ),
    );
}

add_action('init', 'add_custom_post_type');
