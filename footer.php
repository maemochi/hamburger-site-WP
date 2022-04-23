<footer class="l-footer p-footer">
    <?php
        wp_nav_menu(
            array(
                'container' => 'false', //divタグ削除
                'theme_location' => 'footer-menu', //表示するメニュー名を指定
                'items_wrap' => '<ul class="p-footer__menu">%3$s</ul>', //ul要素のID,classを非表示
                // 'walker'  => new custom_walker_main_menu //functions.phpにWalker_Nav_Menuでliタグのクラス名、h3タグ設定
                )
            );
    ?>
            <!-- <ul class="p-footer__menu">
                <li><a class="p-footer__sub-menu" href="#">ショップ情報</a></li>
                <span class="c-line c-line--vertical p-footer__line"></span>
                <li><a class="p-footer__sub-menu" href="#">ヒストリー</a></li>
            </ul> -->
            <p class="p-footer__copy">&copy; Copyright: RaiseTech</p>
        </footer>
        <div class="c-cover"></div>

    <?php wp_footer(); ?>
    </body>
</html>