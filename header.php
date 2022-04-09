<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="世界一美味しい！ハンバーガーショップ">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('/images/hamburger_icon.png')); ?>" type="image/png">
        <?php wp_head(); ?>
    </head>
    
    <body>
        <?php wp_body_open(); ?>
        <div class="c-cover c-cover__overlay"></div> <!--.c-cover__overlay用-->
        <header class="l-header p-header">
                <h2 class="p-header__menu"><button class="p-header__button">Menu</button></h2>
                <h1 class="c-title p-header__title">Hamburger</h1>
                <form class="p-search-form">
                    <input type="search" name="search" value="" class="c-search-box p-search-form__search-box">
                    <button class="c-button p-search-form__button" type="submit">検索</button>
                </form>
        </header>

        <nav class="l-sidebar p-sidebar c-scrollbar--hidden">
            <h2 class="p-sidebar__menu">Menu</h2>
            <button class="p-sidebar__button">
            <span class="c-line c-line--deg45 p-sidebar__close"></span>
            <span class="c-line c-line--deg135 p-sidebar__close"></span>
            </button>
                    <ul><h3 class="p-sidebar__main-menu">バーガー</h3>
                        <li class="p-sidebar__sub-menu"><a href="#">ハンバーガー</a></li>
                        <li class="p-sidebar__sub-menu"><a href="#">チーズバーガー</a></li>
                        <li class="p-sidebar__sub-menu"><a href="#">テリヤキバーガー</a></li>
                        <li class="p-sidebar__sub-menu"><a href="#">アボカドバーガー</a></li>
                        <li class="p-sidebar__sub-menu"><a href="#">フィッシュバーガー</a></li>
                        <li class="p-sidebar__sub-menu"><a href="#">ベーコンバーガー</a></li>
                        <li class="p-sidebar__sub-menu"><a href="#">チキンバーガー</a></li>
                    </ul>                
                    <ul><h3 class="p-sidebar__main-menu">サイド</h3>
                        <li class="p-sidebar__sub-menu"><a href="#">ポテト</a></li>
                        <li class="p-sidebar__sub-menu"><a href="#">サラダ</a></li>
                        <li class="p-sidebar__sub-menu"><a href="#">ナゲット</a></li>
                        <li class="p-sidebar__sub-menu"><a href="#">コーン</a></li>
                    </ul>
                
                    <ul><h3 class="p-sidebar__main-menu">ドリンク</h3>
                        <li class="p-sidebar__sub-menu"><a href="#">コーラ</a></li>
                        <li class="p-sidebar__sub-menu"><a href="#">ファンタ</a></li>
                        <li class="p-sidebar__sub-menu"><a href="#">オレンジ</a></li>
                        <li class="p-sidebar__sub-menu"><a href="#">アップル</a></li>
                        <li class="p-sidebar__sub-menu"><a href="#">紅茶（Ice/Hot）</a></li>
                        <li class="p-sidebar__sub-menu"><a href="#">コーヒー（Ice/Hot）</a></li>
                    </ul>
        </nav>