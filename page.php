<?php get_header() ?>


<p>Ceci est la page page</p>
    

<?php if ( have_posts() ): ?>
    <ul>
        <?php while ( have_posts() ): the_post(); ?>
            <li> <?php the_title() ?></li>
        <?php endwhile ?>
    </ul>

<?php else: ?>
    <h1>pas d'article</h1>
<?php endif; ?>

<?php get_footer() ?>