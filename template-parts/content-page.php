<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HUB_2050
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('is-top-slanted is-top-slanted--green'); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php if( get_field('page_subtitle') ): ?>
			<h2 class="entry-subtitle"><?php echo get_field('page_subtitle'); ?></h2>
		<?php endif;?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content();
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
