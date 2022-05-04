<?php

function theme_setup() {
    // テーマサポート
    add_theme_support('title-tag');// titleタグのサポートを許可
    add_theme_support('post-thumbnails'); // アイキャッチ画像の有効化
    // メニュー
    register_nav_menus(
        array(
            'main-menu' => 'メインメニュー',
            'footer-menu' => 'フッターメニュー'
        )
    );
}
add_action('after_setup_theme', 'theme_setup');

// タイトル出力
function theme_title( $title ) {
    if ( is_front_page() && is_home() ) { //トップページなら
        $title = get_bloginfo( 'name', 'display' );
    } elseif ( is_singular() ) { //シングルページなら
        $title = single_post_title( '', false );
    }
    return $title;
}
add_filter( 'pre_get_document_title', 'theme_title' );


// ファイル読み込み-------------------------------
function add_files() {
    wp_enqueue_style('reset-style', 'https://unpkg.com/ress/dist/ress.min.css'); // リセットCSS
    wp_enqueue_style('Google Fonts', 'https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;500;700;800;900&family=Roboto:wght@400;500;700;900&display=swap'); // Google Fonts
    wp_enqueue_style('main-style', get_stylesheet_uri('/css/style.css')); // メインのCSSファイル
	
    // JavaScriptファイル
	wp_deregister_script('jquery'); // WordPress提供のjquery.jsを読み込まない
    wp_enqueue_script('jquery','//code.jquery.com/jquery-3.6.0.min.js','','',true ); //jQueryの読み込み
    wp_enqueue_script('main-script', get_theme_file_uri().'/js/script.js', array(), '', true); //JSファイルの読み込み
}
add_action('wp_enqueue_scripts', 'add_files'); // add_filesを呼び出す


//カスタムウォーカー編集：メインメニュー　liタグのクラス設定、h3タグを付与-------------------------------
class custom_walker_main_menu extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        if($depth == 0){ //第一階層のときにp-sidebar__main-menuと、h3タグを付ける
            $output .= '<li class="p-sidebar__main-menu"><h3><a href="'.$item->url.'">'.$item->title.'</a></h3>';//$item->url、$item->titleはリンク先と項目名の指定
        }else{ //第一階層以外は//第一階層のときにp-sidebar__sub-menuを付ける
            $output .= '<li class="p-sidebar__sub-menu"><a href="'.$item->url.'">'.$item->title.'</a>';
        }
    }
}

//全角空白を入れて検索した場合、半角空白に置き換え
function empty_search( $query ) {
    if ( $query->is_main_query() && $query->is_search && ! $query->is_admin ) {
    $s = $query->get( 's' );
    $s = str_replace('　',' ', $s );
    $query->set( 's', $s );
    }
}
add_action( 'pre_get_posts', 'empty_search' );

