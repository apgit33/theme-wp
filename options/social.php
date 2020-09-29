<?php
class SocialMenu {

    const GROUP = "social_options";

    /**
     * Ajout du menu perso au menu d"administration
     *
     * @return void
     */
    public static function register() {
        add_action("admin_menu", [self::class, "addMenu"]);
        add_action("admin_init", [self::class, "registerSettings"]);
    }

    /**
     * Ajout des paramètres à afficher
     *
     * @return void
     */
    public static function registerSettings() {
        //parametres
        register_setting(self::GROUP, "facebook_link", ["default" => "https://fr-fr.facebook.com/"]);
        register_setting(self::GROUP, "twitter_link", ["default" => "https://twitter.com/?lang=fr"]);
        register_setting(self::GROUP, "linkedin_link", ["default" => "https://www.linkedin.com/"]);
        register_setting(self::GROUP, "youtube_link", ["default" => "https://www.youtube.com/"]);    
        register_setting(self::GROUP, "email", ["default" => "contact@contact.fr"]);
        register_setting(self::GROUP, "phone", ["default" => "06 XX XX XX XX"]);

        //titre section + description
        add_settings_section("social_options_section","Paramètres",function(){
            echo "Vous pouvez ici gérer les paramètres des informations de contact";
        }, self::GROUP);

        //champ facebook
        add_settings_field("social_options_facebook", "Facebook", function() {
            ?>
                <input name="facebook_link" type="text" value="<?php echo get_option("facebook_link") ?>">
            <?php
        }, self::GROUP, "social_options_section");

        //champ twitter
        add_settings_field("social_options_twitter", "Twitter", function() {
            ?>
                <input name="twitter_link" type="text" value="<?php echo get_option("twitter_link") ?>">
            <?php
        }, self::GROUP, "social_options_section");
        
        //champ linkedin
        add_settings_field("social_options_linkedin", "LinkedIn", function() {
            ?>
                <input name="linkedin_link" type="text" value="<?php echo get_option("linkedin_link") ?>">
            <?php
        }, self::GROUP, "social_options_section");
    
        //champ youtube
        add_settings_field("social_options_youtube", "Youtube", function() {
            ?>
                <input name="youtube_link" type="text" value="<?php echo get_option("youtube_link") ?>">
            <?php
        }, self::GROUP, "social_options_section");

        //champ telephone
        add_settings_field("social_options_phone", "Téléphone", function() {
            ?>
                <input name="phone" type="text" value="<?php echo get_option("phone") ?>">
            <?php
        }, self::GROUP, "social_options_section");

        //champ email
        add_settings_field("social_options_email", "Email", function() {
            ?>
                <input name="email" type="email" value="<?php echo get_option("email") ?>">
            <?php
        }, self::GROUP, "social_options_section");
        
    }

    /**
     * Creation de la page des paramètres
     *
     * @return void
     */
    public static function addMenu() {
        add_options_page("Gestion des informations de contact", "Contact", "manage_options", self::GROUP, [self::class, "render"]);
    }

    /**
     * Affichage des parametres
     *
     * @return void
     */
    public static function render() {
        ?>
        <h2>Gestion des informations de contact</h2>

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
