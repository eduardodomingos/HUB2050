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
				<div class="container">
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
					<li><button data-filter=".<?php echo str_replace(' ', '-', strtolower($term->name)) ?>"><?php echo $term->name; ?></button></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<?php  endif;?>

			<?php 
			$posts = get_field('works', 'option');
			if( $posts ): ?>
				<div class="container">
					<div class="row works">
						<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
							<?php setup_postdata($post); ?>
							<?php $term_list = wp_get_post_terms($post->ID, 'area', array("fields" => "names")); ?>
							<div class="col-md-4 col-sm-6 col-xs-12 <?php echo str_replace(' ', '-', strtolower($term_list[0])) ?>">
								<?php
								get_template_part( 'template-parts/content', get_post_type() );
								?>
							</div><!-- col -->
							
						<?php endforeach; ?>
					</div><!-- .row -->
					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

				</div><!-- .container -->
			<?php endif; ?>

			<?php 
			$posts = get_field('partners', 'option');
			if( $posts ): ?>
				<div class="partners">
				<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
					<?php setup_postdata($post); ?>
						<?php if( get_field('partner_link') ): ?>
							<a href="<?php the_field('partner_link'); ?>" target="_blank"><?php the_title(); ?></a>
						<?php else: ?>
							<span><?php the_title(); ?></span>
						<?php endif;?>
				<?php endforeach; ?>
				</div>
				<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>
				</div><!-- .container -->
			</div><!-- .work-wrapper -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
