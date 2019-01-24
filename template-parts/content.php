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
		<?php $categories = get_the_category(); ?>
		<a href="<?php echo esc_url( get_permalink() ) ?>">
			<?php the_post_thumbnail( 'hub-thumbnail', ['style' => 'opacity:'. (get_field('thumbnails_opacity', 'option') / 100) .';'] );?>
			<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
			<span class="entry-category"><?php echo $categories[0]->name; ?></span>
		</a>
	</header><!-- .entry-header -->
	
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php hub_posted_on(); ?>
		<a class="continue-reading" href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">read +</a>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
