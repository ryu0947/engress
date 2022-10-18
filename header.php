<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="header__left">
            <div class="header__logo"><img src="<?php echo get_template_directory_uri() ?>/img/common/logo-header.png" alt="Engress"></div>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'global-nav',
                'container' => 'nav',
                'container_class' => 'header__nav',
                'container_id' => 'js-header-nav',
                'menu_class' => 'header__list',
                'add_li_class' => 'header__item',
                'add_a_class' => 'header__link',
                'items_wrap' => '<ul class="%2$s">%3$s</ul>',
            ));
            ?>
        </div>
        <div class="header__right">
            <div class="header__info">
                <div class="header__hours">平日08:00〜20:00</div>
                <div class="header__tel">0123-456-7890</div>
            </div>
            <div class="header__btn">
                <a class="request-btn request-btn--header" href="<?php echo esc_url(home_url('/contact')); ?>">資料請求</a>
                <a class="contact-btn" href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a>
            </div>
            <button id="js-draw-btn" class="draw-btn" type="button">
                <span class="draw-btn__item"></span>
                <span class="draw-btn__item"></span>
                <span class="draw-btn__item"></span>
            </button>
        </div>
    </header>
    <nav id="js-draw-nav" class="draw-nav">
        <div class="draw-nav__inner">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'draw-nav',
                'container' => 'false',
                'menu_class' => 'draw-nav__list',
                'add_li_class' => 'draw-nav__item',
                'add_a_class' => 'draw-nav__link',
                'items_wrap' => '<ul class="%2$s">%3$s</ul>',
            ));
            ?>
            <div class="draw-nav__btn">
                <a class="request-btn request-btn--draw" href="<?php echo esc_url(home_url('/contact')); ?>">資料請求</a>
                <a class="contact-btn contact-btn--draw" href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a>
            </div>
        </div>
    </nav>