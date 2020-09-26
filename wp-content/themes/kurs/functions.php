<?php 

//add_filter('show_admin_bar', '__return_false');

add_action('wp_enqueue_scripts', 'css_and_js');

function css_and_js(){

    wp_enqueue_style( 'gfonts', 'http://fonts.googleapis.com/css?family=Montserrat:300,400%7COpen+Sans:400,400i,700%7CMerriweather:400ii?subset=cyrillic');

    //css

    wp_enqueue_style('bott', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array() );
    wp_enqueue_style('font-icons', get_stylesheet_directory_uri() . '/css/font-icons.css', array());
    wp_enqueue_style('sliders', get_stylesheet_directory_uri() . '/css/sliders.css', array());
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/style.css', array() );
    wp_enqueue_style('responsive', get_stylesheet_directory_uri() . '/css/responsive.css', array() );
    wp_enqueue_style('spacings', get_stylesheet_directory_uri() . '/css/spacings.css', array());
    wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/css/animate.min.css', array());

    //java scripts
    
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script( 'plugins', get_stylesheet_directory_uri() . '/js/plugins.js', array('jquery'), null, true);
    wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'), null, true);

}

register_nav_menus(array(
    'head_menu' => 'Ну какое-нибудь меню в шапке',
    'footersfsffsdfs' => 'Меню в футере',
) );