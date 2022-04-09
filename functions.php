<?php
function add_files() {
    // リセットCSS
    wp_enqueue_style('reset-style', 'https://unpkg.com/ress/dist/ress.min.css');
    // Google Fonts
    wp_enqueue_style('Google Fonts', 'https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;500;700;800;900&family=Roboto:wght@400;500;700;900&display=swap');
    // メインのCSSファイル
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
// add_filesを呼び出す
add_action('wp_enqueue_scripts', 'add_files');