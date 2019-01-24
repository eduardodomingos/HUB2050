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
		<?php hub_posted_in(); ?>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->


	<?php
	if ( 'post' === get_post_type() ) :
		?>
		<div class="entry-meta container">
			<?php
			hub_posted_on();
			?>
		</div><!-- .entry-meta -->
	<?php endif; ?>
	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'hub' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hub' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer container">
		<div class="back-to-menu">
			<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>'">Back to Menu</a>
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
