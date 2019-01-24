<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package HUB_2050
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php get_template_part( 'template-parts/content', 'hero-search' ); ?>
		<div class="search-wrapper is-top-slanted is-top-slanted--green">
			<header class="page-header">
					<h1 class="page-title">New Search</h1>
					<?php get_search_form(); ?>
			</header><!-- .page-header -->
		<?php if ( have_posts() ) : ?>

		<div class="container">
				<div class="row">

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				?>
				<div class="col-sm-6 col-md-4 col-xs-12">
				<?php
				get_template_part( 'template-parts/content');
				?>
				</div><!-- .col -->
				<?php

			endwhile;
			?>
			</div><!-- .row -->
			<div class="posts-navigation-wrapper">
				<?php the_posts_navigation(); ?>
				</div><!-- .posts-pagination-wrapper -->
			</div><!-- .container -->
			<?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div><!-- .search-wrapper -->
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
