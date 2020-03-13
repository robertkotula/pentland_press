<?php
/**
 * The front page template file
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pentland_Press
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

			<!-- Reset the WordPress Loop -->
			<?php rewind_posts(); ?>
			<!-- Get posts from Blog -->
			<?php query_posts('post_type=post'); ?>

			<div class="container-fluid padding lax">
			    <div class="row padding">

						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<div class="col-md-4 lax" data-lax-preset="second">
			            <div class="card">
			                <?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'card-imd-top' ) ); ?>
			                <div class="card-body">
			                    <h4 class="card-title"><?php the_title() ;?></h4>
			                    <p class="card-text"><?php the_excerpt() ?></p>
			                    <a href="<?php the_permalink(); ?> " class="btn btn-outline-secondary">Read More</a>
			                </div>
			            </div>
			        </div>
						<?php endwhile; else: ?>
							<p> Sorry, no questions in this category. Contact us with your question. </p>
						<?php endif; ?>

					</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
