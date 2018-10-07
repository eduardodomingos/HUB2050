<?php
/**
 * Template Name: Contacts Page
 * 
 * The template for displaying the contacts page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HUB_2050
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php get_template_part( 'template-parts/content', 'contacts' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer('micro');
