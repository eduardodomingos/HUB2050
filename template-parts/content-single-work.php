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
			<p class="tagline"><?php the_field('work_tagline'); ?></p>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if( have_rows('ficha_tecnica') ): ?>

	<p class="ficha-tecnica container">

	<?php while( have_rows('ficha_tecnica') ): the_row(); 
		$item = get_sub_field('ficha_tecnica_item');
		?>
		<?php echo '<span><strong>'. $item['ficha_tecnica_item_name'] . ':</strong> ' . $item['ficha_tecnica_item_value'] . '</span>'; ?>
	<?php endwhile; ?>

	</p><!-- ficha-tecnica-->

<?php endif; ?>





	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer container">
		<div class="back-to-menu">
			<a href="<?php echo get_permalink( get_page_by_path( 'work' ) ); ?>">Back to Menu</a>
		</div>
		<?php hub_share_this(); ?>
		<?php
		// Previous/next post navigation.
		$next_post = get_next_post();
		$previous_post = get_previous_post();
		the_post_navigation( array(
			'next_text' => '<span class="meta-nav" aria-hidden="true">+ next</span> ' .
				'<span class="screen-reader-text">Next article: %title</span>',
			'prev_text' => '<span class="meta-nav" aria-hidden="true">- previous</span> ' .
				'<span class="screen-reader-text">Previous article: %title</span>'
		) );
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
