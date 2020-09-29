

<?php 
wp_footer() 
?>
        
    <div class="columns contacts">
        <div class="column">
            <h4 class="contact has-text-centered">Informations de contact</h4>
            
            <p class="phone has-text-centered">
                <?php echo get_option('phone');?>
            </p>
            <p class="mail has-text-centered">
                <?php echo get_option('email');?>
            </p>
        </div>

        <div class="column">
            <h4 class="contact has-text-centered">Réseaux sociaux</h4>
            <div class="columns is-mobile is-centered">
                <div class="column ">
                    <a class="button is-medium is-facebook" href="<?php echo get_option('facebook_link') ?>">
                        <span class="icon">
                            <i class="fab fa-facebook fa-lg"></i>
                        </span>
                    </a>
                </div>
                <div class="column ">
                    <a class="button is-medium is-twitter" href="<?php echo get_option('twitter_link') ?>">
                        <span class="icon">
                            <i class="fab fa-twitter fa-lg"></i>
                        </span>
                    </a>
                </div>
                <div class="column ">           
                    <a class="button is-medium is-linkedin" href="<?php echo get_option('linkedin_link') ?>">
                        <span class="icon">
                            <i class="fab fa-linkedin fa-lg"></i>
                        </span>
                    </a>
                </div>
                <div class="column "> 
                    <a class="button is-medium is-youtube" href="<?php echo get_option('youtube_link') ?>">
                        <span class="icon">
                            <i class="fab fa-youtube fa-lg"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="columns mb-0">
        <div class="column mt-6">
            <p class="has-text-centered">Copyright - Paturot Adrien</p>
        </div>
    </div>

    <script src="<?=PATH?>/js/main.js "></script>
    </body>
</html>