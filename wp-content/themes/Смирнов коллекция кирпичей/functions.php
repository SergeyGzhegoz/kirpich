<?php 
function site_scripts(){
    wp_enqueue_style( 'style-css', get_stylesheet_uri() );
    wp_enqueue_style( 'style-Catalog', get_template_directory_uri() . '/assets/css/styleCatalog.css');
    wp_enqueue_style( 'style-Foreign', get_template_directory_uri() . '/assets/css/styleForeign.css');
    wp_enqueue_style( 'style-General', get_template_directory_uri() . '/assets/css/styleGeneral.css');
    wp_enqueue_style( 'style-Gubern', get_template_directory_uri() . '/assets/css/styleGubern.css');
    wp_enqueue_style( 'style-Novinki', get_template_directory_uri() . '/assets/css/styleNovinki.css');
    wp_enqueue_style( 'style-TrForeign', get_template_directory_uri() . '/assets/css/styleTrForeign.css');
    wp_enqueue_style( 'style-TrGubern', get_template_directory_uri() . '/assets/css/styleTrGubern.css');
    wp_enqueue_style( 'style-Cityes', get_template_directory_uri() . '/assets/css/cityes.css');
    wp_enqueue_style( 'style-Header', get_template_directory_uri() . '/assets/css/header.css');
    
}
add_action( 'wp_enqueue_scripts', 'site_scripts' );


function add_menu(){
    register_nav_menu( 'primary', 'Главное меню сайта' );
}

add_action( 'init', 'add_menu' );
?>