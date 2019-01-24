<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HUB_2050
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php get_template_part( 'template-parts/content', 'hero-archive' ); ?>
		<div class="archive-wrapper is-top-slanted is-top-slanted--green">
			<header class="page-header">
					<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
					get_search_form();
					?>
			</header><!-- .page-header -->
		<?php if ( have_posts() ) : ?>
			<div class="container">
					<div class="row">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				?>
				<div class="col-sm-6 col-md-4 col-xs-12">
				<?php
				get_template_part( 'template-parts/content', get_post_type() );
				?>
				</div><!-- .col -->
				<?php
			endwhile;

			?>
			</div><!-- .row -->
			<div class="posts-pagination-wrapper">
				<?php the_posts_pagination(); ?>
			</div><!-- .posts-pagination-wrapper -->
			</div><!-- .container -->
			<?php

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div><!-- .archive-wrapper -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
