<?php
/**
 * Template Name: What Page
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
			
			<?php 
			$svg = get_field( 'svg' ); 
			if($svg):
				$svg_src = wp_get_attachment_image_src(  $svg, 'full' )[0];
			?>
			<div class="process is-top-slanted">
				<div class="container">
					<figure>
						<img src="<?php echo $svg_src; ?>" alt="">
					</figure>
				</div>
			</div>
				
			<?php endif;?>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
