<footer class="l-footer p-footer">
    <?php
        wp_nav_menu(
            array(
                'container' => 'false', //divタグ削除
                'theme_location' => 'footer-menu', //表示するメニュー名を指定
                'items_wrap' => '<ul class="p-footer__menu">%3$s</ul>', //ul要素のID,classを非表示
                )
            );
    ?>
            <p class="p-footer__copy">&copy; Copyright: RaiseTech</p>
</footer>
        <div class="c-cover"></div>

    <?php wp_footer(); ?>
    </body>
</html>