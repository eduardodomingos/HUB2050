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

			<?php 
			$terms = get_terms( array(
				'taxonomy' => 'area',
				'hide_empty' => false,
			) );
			if  ($terms) : ?>
			<div class="button-group filter-button-group">
				<button data-filter="*">show all</button>
				<?php foreach($terms as $term) : ?>
				<button data-filter=".<?php echo str_replace(' ', '-', strtolower($term->name)) ?>"><?php echo $term->name; ?></button>
				<?php endforeach; ?>
			</div>
			<?php  endif;?>

			<?php 
			$posts = get_field('works', 'option');
			if( $posts ): ?>
				<div class="grid">
				<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
					<?php setup_postdata($post); ?>
					<?php $term_list = wp_get_post_terms($post->ID, 'area', array("fields" => "names")); ?>

					<a class="<?php echo str_replace(' ', '-', strtolower($term_list[0])) ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					
				<?php endforeach; ?>
				</div>
				<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>

			<?php 
			$posts = get_field('partners', 'option');
			if( $posts ): ?>
				<div class="partners">
				<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
					<?php setup_postdata($post); ?>
						<?php if( get_field('url') ): ?>
							<a href="<?php the_field('url'); ?>"><?php the_title(); ?></a>
						<?php else: ?>
							<span><?php the_title(); ?></span>
						<?php endif;?>
				<?php endforeach; ?>
				</div>
				<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>

			




		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
