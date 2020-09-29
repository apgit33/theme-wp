<?php
require_once('walker/CommentsWalker.php');
require_once("options/social.php");

//ajoute une nouvelle zone de menu
function register_menu(){
    register_nav_menus(
        array(
            "header-menu" => __( "Menu Header" ),
            "social-menu" => __( "Social Menu" )
        )
      );
}

function montheme_supports(){
    add_theme_support("title-tag");
    add_theme_support("post--thumbnails");
}

/**
 * Ajout des fichiers css
 *
 * @return void
 */
function montheme_register_assets(){

    wp_register_style( "bulma", "https://cdn.jsdelivr.net/npm/bulma@0/css/bulma.min.css" );
    wp_enqueue_style( "bulma" );

    wp_register_style( "fontawesome", "https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5/css/all.min.css" );
    wp_enqueue_style( "fontawesome" );

    wp_register_style( "bulma", "https://cdn.jsdelivr.net/npm/bulma-social@1/bin/bulma-social.min.css" );
    wp_enqueue_style( "bulma" );

    wp_register_style( "custom", get_template_directory_uri() . "/css/custom.css" );
    wp_enqueue_style( "custom" );

}

function montheme_title_separator() {
    return "|";
}

function montheme_document_title_parts($title) {
    return $title;
}

function montheme_menu_class($classes){
    $classes[] = "navbar-item";
    return $classes;
}

add_action("init", "register_menu");
add_action("wp_enqueue_scripts","montheme_register_assets");
add_action("after_setup_theme","montheme_supports");


add_filter("document_title_separator", "montheme_title_separator");
add_filter("document_title_parts", "montheme_document_title_parts");
add_filter("nav_menu_css_class","montheme_menu_class");


SocialMenu::register();