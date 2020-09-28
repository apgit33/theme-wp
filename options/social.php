<?php

class SocialMenu {

    const GROUP = 'social_options';

    public static function register() {
        add_action('admin_menu', [self::class, 'addMenu']);
        add_action('admin_init', [self::class, 'registerSettings']);
    }

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
        register_setting(self::GROUP, 'twitter_link');
    }

    public static function addMenu() {
        add_options_page("Gestion des réseaux sociaux", "Réseaux Sociaux", "manage_options", self::GROUP, [self::class, 'render']);
    }

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
