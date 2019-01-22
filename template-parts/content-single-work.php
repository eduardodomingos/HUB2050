<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HUB_2050
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php if( get_field('work_tagline') ): ?>
			<p><?php the_field('work_tagline'); ?></p>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //hub_entry_footer(); ?>
		<?php hub_share_this(); ?> 	
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
