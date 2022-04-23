<nav class="l-sidebar p-sidebar c-scrollbar--hidden">
            <h2 class="p-sidebar__menu">Menu</h2>
            <button class="p-sidebar__button">
            <span class="c-line c-line--deg45 p-sidebar__close"></span>
            <span class="c-line c-line--deg135 p-sidebar__close"></span>
            </button>
                <?php
                    wp_nav_menu(
                        array(
                            // 'menu_class' => '',
                            // 'menu_id' => '',
                            'container' => 'false', //divタグ削除
                            'theme_location' => 'main-menu', //表示するメニュー名を指定
                            'items_wrap' => '<ul>%3$s</ul>', //ul要素のID,classを非表示
                            'walker'  => new custom_walker_main_menu //functions.phpにWalker_Nav_Menuでliタグのクラス名、h3タグ設定
                        )
                    );
                ?>
            <!-- <ul>
                <li class="p-sidebar__main-menu"><h3><a href="#">バーガー</a></h3></li>
                    <ul>
                        <li class="p-sidebar__sub-menu"><a href="#">ハンバーガー</a></li>
                        <li class="p-sidebar__sub-menu"><a href="#">チーズバーガー</a></li>
                        <li class="p-sidebar__sub-menu"><a href="#">テリヤキバーガー</a></li>
                        <li class="p-sidebar__sub-menu"><a href="#">アボカドバーガー</a></li>
                        <li class="p-sidebar__sub-menu"><a href="#">フィッシュバーガー</a></li>
                        <li class="p-sidebar__sub-menu"><a href="#">ベーコンバーガー</a></li>
                        <li class="p-sidebar__sub-menu"><a href="#">チキンバーガー</a></li>
                    </ul>                
                    <li class="p-sidebar__main-menu"><h3><a href="#">サイド</a></h3></li>
                    <ul>
                        <li class="p-sidebar__sub-menu"><a href="#">ポテト</a></li>
                        <li class="p-sidebar__sub-menu"><a href="#">サラダ</a></li>
                        <li class="p-sidebar__sub-menu"><a href="#">ナゲット</a></li>
                        <li class="p-sidebar__sub-menu"><a href="#">コーン</a></li>
                    </ul>
                    <li class="p-sidebar__main-menu"><h3><a href="#">ドリンク</a></h3></li>
                    <ul>
                        <li class="p-sidebar__sub-menu"><a href="#">コーラ</a></li>
                        <li class="p-sidebar__sub-menu"><a href="#">ファンタ</a></li>
                        <li class="p-sidebar__sub-menu"><a href="#">オレンジ</a></li>
                        <li class="p-sidebar__sub-menu"><a href="#">アップル</a></li>
                        <li class="p-sidebar__sub-menu"><a href="#">紅茶（Ice/Hot）</a></li>
                        <li class="p-sidebar__sub-menu"><a href="#">コーヒー（Ice/Hot）</a></li>
                    </ul>
            </ul> -->
        </nav>