<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package HUB_2050
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php get_template_part( 'template-parts/content', 'hero-single' ); ?>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'single-work' );

			echo '<a href="' . get_permalink( get_page_by_path( 'work' ) ) . '">Back to Menu</a>';
			
			// Previous/next post navigation.
			$next_post = get_next_post();
			$previous_post = get_previous_post();
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">+ next</span> ' .
					'<span class="screen-reader-text">Next article: %title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">- previous</span> ' .
					'<span class="screen-reader-text">Previous article: %title</span>'
			) );

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
