<?php get_header() ?>

<div class="columns" id="single">
    <div class="column">
        <?php if ( have_posts() ): ?>
            <?php while ( have_posts() ): the_post(); ?> 

            <h1 class="title is-4 has-text-centered"><a href="<?php the_permalink() ?>"><?php the_title()?></a></h1>
                
            <p class="is-size-6">Écrit par : <?php the_author_posts_link()?> le <time class="is-size-6"><?php echo get_the_date()?></time></p>
            
            <p><?php the_category(); ?></p>
                <figure class="image">
                        <?php the_post_thumbnail() ?>
                </figure>
                
                
                <div class="content">
                    <?php the_content(); ?>
                </div>
                <?php
           
                if (comments_open() || get_comments_number()) {
                        comments_template();
                }
            
            endwhile;
        endif ?>
    </div>

    <div class="column aside">
        <?php
            $littlePosts = new WP_Query();
            $littlePosts->query(array(
                'showposts' =>  3,
                'post_type' => 'post',
                'order_by' => 'date',
                'order' => 'DESC'
            ));
        ?>

        <?php while ($littlePosts->have_posts() ): $littlePosts->the_post(); ?>
            <div class="card">
                <div class="card-image">
                    <figure class="image">
                        <?php the_post_thumbnail() ?>
                    </figure>
                </div>
                <div class="card-content">
                    <div class="content">
                    <h2 class="title is-4"><a href="<?php the_permalink() ?>"><?php the_title()?></a></h2>
                        <time><?php echo get_the_date()?></time>
                        <p>Écrit par : <?php the_author()?></p>
                        <div><?php the_excerpt() ?></div>
                        
                    </div>
                </div>
                <footer class="card-footer">
                    <a href="<?php the_permalink() ?>" class="card-footer-item">Lire la suite..</a>
                    <a href="<?php the_permalink() ?>#comms" class="card-footer-item has-text-centered"><?php echo get_comments_number() ?> commentaire<?php echo (get_comments_number()<2)?"":"s" ?></a>
                </footer>
            </div>
            <div>
                <figure class="image">
                   <img class="separator" src="<?=PATH?>/images/notes.svg" alt="separateur">
                </figure>
            </div>
        <?php endwhile ?>
    </div>
</div>


<?php get_footer() ?>
