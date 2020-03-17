<?php if( have_posts() ): while( have_posts() ): the_post();
/*If there are posts and while there are posts, show post*/
?>

    <?php the_content();?>

<?php endwhile; else: endif;?>