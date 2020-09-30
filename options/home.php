<?php
class HomeMenu {

    const GROUP = "home_options";

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
        register_setting(self::GROUP, "about", ["default" => "Bienvenue"]);
        register_setting(self::GROUP, "video_link", ["default" => "https://www.youtube.com/watch?v=qba0V6y2UPU"]);    

        //titre section + description
        add_settings_section("home_options_section","Paramètres",function(){
            echo "Vous pouvez ici gérer les paramètres de la page d'accueil";
        }, self::GROUP);

        //champ about
        add_settings_field("home_options_about", "Présentation", function() {
            ?>
                <textarea name="about" cols="30" rows="10" style="width: 100%;"><?php echo get_option("about") ?></textarea>
            <?php
        }, self::GROUP, "home_options_section");

        //champ twitter
        add_settings_field("home_options_video", "Vidéo", function() {
            ?>
                <input name="video_link" type="text" value="<?php echo get_option("video_link") ?>">
            <?php
        }, self::GROUP, "home_options_section");
    }

    /**
     * Creation de la page des paramètres
     *
     * @return void
     */
    public static function addMenu() {
        add_options_page("Gestion des informations de la page d'accueil", "Accueil", "manage_options", self::GROUP, [self::class, "render"]);
    }

    /**
     * Affichage des parametres
     *
     * @return void
     */
    public static function render() {
        ?>
        <h2>Gestion des informations de la page d'accueil</h2>

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
