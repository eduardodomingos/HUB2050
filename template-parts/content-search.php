<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HUB_2050
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<a href="<?php esc_url( the_permalink() ); ?>" rel="bookmark" <?php echo has_post_thumbnail() ? 'style="background: url('. wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) .') center/cover no-repeat;"' : ''; ?> >
			<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
		</a>
	</header><!-- .entry-header -->
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<div class="continue-reading">
		<a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">read +</a>
	</div><!-- .continue-reading -->

	<footer class="entry-footer">
		<?php hub_posted_on(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
