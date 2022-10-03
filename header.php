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
        <div class="header-left">
            <?php if (is_front_page()) : ?>
                <h1 class="header__logo"><img src="<?php echo get_template_directory_uri() ?>/img/common/logo.png" alt="Engress"></h1>
            <?php else : ?>
                <div class="header__logo"><img src="<?php echo get_template_directory_uri() ?>/img/common/logo.png" alt="Engress"></div>
            <?php endif; ?>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'global-nav',
                'container' => 'nav',
                'container_class' => 'header-nav',
                'container_id' => 'js-header-nav',
                'menu_class' => 'header-nav__list',
                'add_li_class' => 'header-nav__item',
                'add_a_class' => 'header-nav__link',
                'items_wrap' => '<ul class="%2$s">%3$s</ul>',
            ));
            ?>
        </div>
        <div class="header-right">
            <div class="header__info info-time">
                <div class="business-hours">平日08:00〜20:00</div>
                <div class="tell-number">0123-456-7890</div>
            </div>
            <div class="header__btn cta-btn">
                <a class="request-btn header-request-btn" href="">資料請求</a>
                <a class="contact-btn" href="">お問い合わせ</a>
            </div>
            <button id="js-draw-btn" class="draw-btn" type="button">
                <span class="draw-btn__item"></span>
                <span class="draw-btn__item"></span>
                <span class="draw-btn__item"></span>
            </button>
        </div>
    </header>
    <nav id="js-draw-nav" class="draw-nav">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'draw-nav',
            'container' => 'div',
            'container_class' => 'draw-nav__body',
            'menu_class' => 'draw-nav__list',
            'add_li_class' => 'draw-nav__item',
            'add_a_class' => 'draw-nav__link',
            'items_wrap' => '<ul class="%2$s">%3$s</ul>',
        ));
        ?>
        <div class="cta-btn">
            <a class="request-btn header-request-btn" href="">資料請求</a>
            <a class="contact-btn" href="">お問い合わせ</a>
        </div>
    </nav>