<?php
/**
 * Template Name: Work Page
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

			<div class="work-wrapper is-top-slanted is-top-slanted--green">
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<?php if( get_field('page_subtitle') ): ?>
						<h2 class="entry-subtitle"><?php echo get_field('page_subtitle'); ?></h2>
					<?php endif;?>
				</header><!-- .entry-header -->
				<div class="container wow fadeInUp fast">
			<?php 
			$terms = get_terms( array(
				'taxonomy' => 'area',
				'hide_empty' => false,
			) );
			if  ($terms) : ?>
			<div class="filter-button-group-wrapper">
				<ul class="button-group filter-button-group">
					<li class="is-active"><button data-filter="*">Show All</button></li>
					<?php foreach($terms as $term) : ?>
					<li><button data-filter=".<?php echo str_replace(array(' ', '/'), '-', strtolower($term->name)) ?>"><?php echo $term->name; ?></button></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<?php  endif;?>

			<?php 
			$posts = get_field('works', 'option');
			if( $posts ): ?>
				
					<div class="row works">
						<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
							<?php setup_postdata($post); ?>
							<?php $term_list = wp_get_post_terms($post->ID, 'area', array("fields" => "names")); ?>
							<div class="col-md-4 col-sm-6 col-xs-12 <?php echo str_replace(array(' ', '/'), '-', strtolower($term_list[0])) ?>">
								<?php
								get_template_part( 'template-parts/content', get_post_type() );
								?>
							</div><!-- col -->
							
						<?php endforeach; ?>
					</div><!-- .row -->
					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

				
			<?php endif; ?>

			<?php 
			$posts = get_field('partners', 'option');
			if( $posts ): ?>
				<div class="partners">
					<h2>Partners</h2>
					<ul>
				<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
					<?php setup_postdata($post); ?>

					<?php if( get_field('partner_logo') ): ?>
						<li>
						<?php if( get_field('partner_link') ): ?>
							<a title="<?php the_title(); ?>" href="<?php the_field('partner_link'); ?>" target="_blank">
						<?php endif;?>
						<?php 
						$image = get_field('partner_logo');
						$size = 'hub-partner-logo'; // (thumbnail, medium, large, full or custom size)
						if( $image ) {
							echo wp_get_attachment_image( $image, $size, "", array( "class" => "partner-logo" ) );
						}
						?>
						<?php if( get_field('partner_link') ): ?>
							</a>
						<?php endif;?>
						</li>
					<?php endif;?>
				<?php endforeach; ?>
				</ul>
				</div><!-- .partners -->
				<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>
				</div><!-- .container -->
			</div><!-- .work-wrapper -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
