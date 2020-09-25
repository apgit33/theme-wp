<?php

//ajoute une nouvelle zone de menu
function register_menu(){
    register_nav_menu('header-menu',__('Menu Header'));
}

function montheme_supports(){
    add_theme_support('title-tag');
}

function montheme_register_assets(){
    // wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    // wp_enqueue_style('bootstrap');  
    wp_register_style( 'bulma', get_template_directory_uri() . '/css/bulma.min.css' );
    wp_enqueue_style( 'bulma' );

    // wp_enqueue_style('moncss', get_stylesheet_uri());
    wp_register_style( 'custom', get_template_directory_uri() . '/css/custom.css' );
    wp_enqueue_style( 'custom' );

}

function montheme_title_separator() {
    return '|';
}
function montheme_document_title_parts($title) {
    return $title;
}


add_action('after_setup_theme','montheme_supports');
add_action('wp_enqueue_scripts','montheme_register_assets');
add_filter('document_title_separator', 'montheme_title_separator');
// add_filter('document_title_parts', 'montheme_document_title_parts');

add_action('init', 'register_menu');