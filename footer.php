<footer class="footer">
    <div class="footer__body">
        <div class="footer__container">
            <div class="footer__inner">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-nav',
                    'container' => 'nav',
                    'container_class' => 'footer__nav',
                    'menu_class' => 'footer__list',
                    'add_li_class' => 'footer__item',
                    'add_a_class' => 'footer__link',
                    'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                ));
                ?>
                <div class="footer__right">
                    <div class="footer__logo">
                        <img src="<?php echo get_template_directory_uri() ?>/img/common/logo-footer.png" alt="Engress">
                    </div>
                    <div class="footer__info">
                        <div class="footer__tel">0123-456-7890</div>
                        <div class="footer__hours">平日08:00~20:00</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="footer__container">
            <small class="copy-right">&copy; 2020 Engress.</small>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>