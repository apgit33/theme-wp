<?php get_header() ?>


<?php if ( have_posts() ): ?>
    <div class="columns">
        <aside id="main_sidebar" class="column">
            <?php wp_list_categories(); ?>
        </aside>  
        <div class="column content">
        <?php while ( have_posts() ): the_post(); ?>
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


<?php else: ?>
    <h1>pas d'article</h1>
<?php endif; ?>
    
<?php get_footer() ?>
