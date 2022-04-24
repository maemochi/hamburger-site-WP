<!DOCTYPE html>
<html <?php language_attributes(); ?>> <!--言語設定を自動的に出力-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('/images/hamburger_icon.png')); ?>" type="image/png">
        <?php wp_head(); ?>
    </head>
    
    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <div class="c-cover c-cover__overlay"></div> <!--.c-cover__overlay用-->
        <header class="l-header p-header">
                <h2 class="p-header__menu"><button class="p-header__button">Menu</button></h2>
                <h1 class="c-title p-header__title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                <?php get_search_form(); ?>
        </header>

