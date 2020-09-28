<?php

//ajoute une nouvelle zone de menu
function register_menu(){
    register_nav_menus(
        array(
            'header-menu' => __( 'Menu Header' ),
            'social-menu' => __( 'Social Menu' )
        )
      );
}
add_action('init', 'register_menu');

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
add_action('wp_enqueue_scripts','montheme_register_assets');

function montheme_title_separator() {
    return '|';
}
function montheme_document_title_parts($title) {
    return $title;
}


add_action('after_setup_theme','montheme_supports');

add_filter('document_title_separator', 'montheme_title_separator');
// add_filter('document_title_parts', 'montheme_document_title_parts');



// function remove_admin_login_header() {
//     remove_action('wp_head', '_admin_bar_bump_cb');
// }
// add_action('get_header', 'remove_admin_login_header');

// function msk_load_css_fontawesome() {
//     if (!is_admin()) {
//       wp_enqueue_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css', null, '4.0.1' );
//     }
//   }
// add_action('wp_enqueue_scripts', 'msk_load_css_fontawesome');

function montheme_menu_class($classes){
    $classes[] = 'navbar-item';
    return $classes;
}

function montheme_menu_link_class($attrs){
    $attrs['class'] = 'navbar-link';
    return $attrs;
}
add_filter('nav_menu_css_class','montheme_menu_class');
add_filter('nav_menu_link_attributes','montheme_menu_link_class');


require_once('options/social.php');


SocialMenu::register();