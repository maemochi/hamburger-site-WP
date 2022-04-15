<?php
function add_files() {
    // リセットCSS
    wp_enqueue_style('reset-style', 'https://unpkg.com/ress/dist/ress.min.css');
    // Google Fonts
    wp_enqueue_style('Google Fonts', 'https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;500;700;800;900&family=Roboto:wght@400;500;700;900&display=swap');
    // メインのCSSファイル
    wp_enqueue_style('main-style', get_stylesheet_uri());

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
        )
    );
}
add_action('after_setup_theme', 'theme_setup');

