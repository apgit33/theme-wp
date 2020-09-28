

<?php 
wp_footer() 
?>
        
    <div class="columns">
        <div class="column">
            <h4 class="contact has-text-centered">Informations de contact</h4>
            
            <p class="phone has-text-centered">06 XX XX XX XX</p>
            <p class="mail has-text-centered">mail@mail.fr</p>
        </div>

        <div class="column">
            <h4 class="contact has-text-centered">Réseaux sociaux</h4>
            <div>
            <?php
            if( has_nav_menu('social-menu')) {
                wp_nav_menu(
                    array(
                        'theme_location' => 'social-menu',
                        'container' => false,
                        'menu_class' => 'navbar-item'
                    )
                );
            }
        ?>
            <i class="fa fa-star"></i>
                <ul class="d-flex social">
                    <li><a href="#"><span data-icon="&#xe093;"></span></a></li>
                    <li><a href="#"><span data-icon="&#xe094;"></span></a></li>
                    <li><a href="#"><span data-icon="&#xe097;"></span></a></li>
                    <li><a href="#"><span data-icon="&#xe09c;"></span></a></li>
                    <li><a href="#"><span data-icon="&#xe09d;"></span></a></li>
                    <li><a href="#"><span data-icon="&#xe09b;"></span></a></li>
                    <li><a href="#"><span data-icon="&#xe09a;"></span></a></li>
                    <li><a href="#"><span data-icon="&#xe09e;"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
<!-- </div> -->
<p class="has-text-centered">Copyright - Paturot Adrien</p>
    <script src="<?=PATH?>/js/main.js "></script>
    </body>
</html>