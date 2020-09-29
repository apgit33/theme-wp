<?php

class SocialMenu {

    const GROUP = 'social_options';

    /**
     * Ajout du menu perso au menu d'administration
     *
     * @return void
     */
    public static function register() {
        add_action('admin_menu', [self::class, 'addMenu']);
        add_action('admin_init', [self::class, 'registerSettings']);
    }

    /**
     * Ajout des paramètres à afficher
     *
     * @return void
     */
    public static function registerSettings() {
        register_setting(self::GROUP, 'facebook_link', ['default' => 'salu']);
        
        add_settings_section('social_options_section','Paramètres',function(){
            echo "Vous pouvez ici gérer les paramètres de vos réseaux sociaux favoris";
        }, self::GROUP);
        
        add_settings_field("social_options_facebook", "Facebook", function() {
            ?>
                <input name="facebook_link" type="text" value="<?php echo get_option('facebook_link') ?>">
            <?php
        }, self::GROUP, 'social_options_section');
        register_setting(self::GROUP, 'facebook_link');

        add_settings_field("social_options_twitter", "Twitter", function() {
            ?>
                <input name="twitter_link" type="text" value="<?php echo get_option('twitter_link') ?>">
            <?php
        }, self::GROUP, 'social_options_section');
        register_setting(self::GROUP, 'twitter_link');
        
        add_settings_field("social_options_linkedin", "LinkedIn", function() {
            ?>
                <input name="linkedin_link" type="text" value="<?php echo get_option('linkedin_link') ?>">
            <?php
        }, self::GROUP, 'social_options_section');
        register_setting(self::GROUP, 'linkedin_link');
    
        add_settings_field("social_options_youtube", "Youtube", function() {
            ?>
                <input name="youtube_link" type="text" value="<?php echo get_option('youtube_link') ?>">
            <?php
        }, self::GROUP, 'social_options_section');
        register_setting(self::GROUP, 'youtube_link');
    }

    /**
     * Creation de la page des paramètres
     *
     * @return void
     */
    public static function addMenu() {
        add_options_page("Gestion des réseaux sociaux", "Réseaux Sociaux", "manage_options", self::GROUP, [self::class, 'render']);
    }

    /**
     * Affichage des parametres
     *
     * @return void
     */
    public static function render() {
        ?>
        <h2>Gestion des réseaux</h2>

        <form action="options.php" method="post">
            <?php 
                settings_fields(self::GROUP);
                do_settings_sections(self::GROUP);
                submit_button();
            ?>
        </form>
        <?php
    }
}
