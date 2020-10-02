
<?php get_header() ?>


<div class="columns is-vcentered">
    <div class="column ">
        <p class="has-text-centered">
            <?php echo get_option("about") ?>
        </p>
    </div>
    <div class="column">
        <iframe style="width: 100%;" height="315" src="<?php echo get_option("video_link") ?>" title="vidéo de preésentation" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

<section>
        <h2 class="title is-2 has-text-centered">Dernier article</h2>
    <div class="columns">
        <div class="column">
        <?php
            $littlePosts = new WP_Query();
            $littlePosts->query(array(
                'showposts' =>  1,
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
</section>



<?php get_footer() ?>
