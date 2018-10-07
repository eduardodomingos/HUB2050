<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HUB_2050
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php get_template_part( 'template-parts/content', 'hero-page' ); ?>

			<?php
				if ( have_posts() ) :?>
					<div class="container">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;
					?>
					</div><!-- .container -->
					<?php
				endif;
			?>


			<?php if(get_field('people')): ?>
				<div class="container">
					<div class="row">
						<?php while(has_sub_field('people')): ?>
							
							<div class="col-md-4">
								<div class="people">
									<figure class="people-image">
										<?php 
											$image = get_sub_field('people_photo');
											$size = 'full';
											if( $image ) {
												echo wp_get_attachment_image( $image, $size );
											}
										?>
									</figure>
									<h2 class="people-name"><?php the_sub_field('people_name');?></h2>
									<p class="people-role"><?php the_sub_field('people_role'); ?></p>
								</div>


							</div>

							<?php $counter++; if($counter % 3 === 0) :  echo '</div> <div class="row">'; endif; ?>
						<?php endwhile; ?>
					</div>
				</div>
			<?php endif; ?>




		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
