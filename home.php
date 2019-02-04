<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HUB_2050
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php get_template_part( 'template-parts/content', 'hero-blog' ); ?>
		<div class="blog-wrapper is-top-slanted is-top-slanted--green">
			<header class="blog-header">
				<h1 class="blog-title"><?php single_post_title(); ?></h1>
				
				<?php if( get_field('page_subtitle', get_option('page_for_posts')) ): ?>
					<h2 class="blog-subtitle"><?php echo get_field('page_subtitle', get_option('page_for_posts')); ?></h2>
				<?php endif;?>

				<?php get_search_form(); ?>
			</header><!-- .blog-header -->
		<?php
		if ( have_posts() ) :
			?>
			<div class="container wow fadeInUp fast">
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
		</div><!-- .blog-wrapper -->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_sidebar();
get_footer();
