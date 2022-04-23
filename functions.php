<?php

function add_files() {
    // リセットCSS
    wp_enqueue_style('reset-style', 'https://unpkg.com/ress/dist/ress.min.css');
    // Google Fonts
    wp_enqueue_style('Google Fonts', 'https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;500;700;800;900&family=Roboto:wght@400;500;700;900&display=swap');
    // メインのCSSファイル
    wp_enqueue_style('main-style', get_stylesheet_uri('/css/style.css'));

	// WordPress提供のjquery.jsを読み込まない
    // JavaScriptファイル
	wp_deregister_script('jquery');
    wp_enqueue_script('jquery','//code.jquery.com/jquery-3.6.0.min.js','','',true );
    wp_enqueue_script('main-script', get_theme_file_uri().'/js/script.js', array(), '', true);
}
// add_filesを呼び出す
add_action('wp_enqueue_scripts', 'add_files');


function theme_setup() {
    // titleタグ
    add_theme_support('title-tag');
    // メニュー
    register_nav_menus(
        array(
            'main-menu' => 'メインメニュー',
            'footer_menu' => 'フッターメニュー'
        )
    );
}
add_action('after_setup_theme', 'theme_setup');


//カスタムウォーカー編集：liタグのクラス設定、h3タグを付与-------------------------------
class custom_walker_main_menu extends Walker_Nav_Menu {
 
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        if($depth == 0){ //第一階層のときにp-sidebar__main-menuと、h3タグを付ける
            $output .= '<li class="p-sidebar__main-menu"><h3><a href="'.$item->url.'">'.$item->title.'</a></h3>';//$item->url、$item->titleはリンク先と項目名の指定
        }else{ //第一階層以外は//第一階層のときにp-sidebar__sub-menuを付ける
            $output .= '<li class="p-sidebar__sub-menu"><a href="'.$item->url.'">'.$item->title.'</a>';
        }
    }

}