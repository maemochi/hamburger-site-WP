<nav class="l-sidebar p-sidebar c-scrollbar--hidden">
            <h2 class="p-sidebar__menu">Menu</h2>
            <button class="p-sidebar__button">
            <span class="c-line c-line--deg45 p-sidebar__close"></span>
            <span class="c-line c-line--deg135 p-sidebar__close"></span>
            </button>
                <?php
                    wp_nav_menu(
                        array(
                            'container' => 'false', //divタグ削除
                            'theme_location' => 'main-menu', //表示するメニュー名を指定
                            'items_wrap' => '<ul>%3$s</ul>', //ul要素のID,classを非表示
                            'walker'  => new custom_walker_main_menu //functions.phpにWalker_Nav_Menuでliタグのクラス名、h3タグ設定
                        )
                    );
                ?>
        </nav>