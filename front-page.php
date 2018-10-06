<?php
/**
 * The home page template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HUB_2050
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php get_template_part( 'template-parts/content', 'hero' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer('micro');
