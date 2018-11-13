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
					
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;
					?>
					
					<?php
				endif;
			?>

			<?php if(get_field('people')): ?>
				<div class="container wow fadeInUp fast">
					<div class="row">
						<div class="col-md-10 offset-md-1">
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
										<?php if( have_rows('people_socials') ): ?>
											<ul class="people-socials">
												<?php while ( have_rows('people_socials') ) : the_row(); ?>
													<?php
													$social_icons = hub_social_links_icons();
													$social_url = get_sub_field('people_social_url');
													foreach ( $social_icons as $attr => $value ) {
														if ( false !== strpos( $social_url, $attr ) ) {
															echo '<li><a href="'. $social_url .'">'. hub_get_svg( array( 'icon' => esc_attr( $value ) ) ) .'</a></li>';
														}
													}
													?>
												<?php endwhile; ?>
											</ul>
										<?php endif; ?>
									</div>


								</div>

								<?php $counter++; if($counter % 3 === 0) :  echo '</div> <div class="row">'; endif; ?>
							<?php endwhile; ?>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
