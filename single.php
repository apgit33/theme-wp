<?php get_header() ?>


<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
        the_post(); 
        
        the_post_thumbnail();
?>
    
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php
        the_date();


        the_content();

        if (comments_open() || get_comments_number()) {
                comments_template();
        }
        
} 

}        

?>
<?php get_footer() ?>
