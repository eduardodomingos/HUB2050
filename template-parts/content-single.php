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
		<?php
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				hub_posted_on();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

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

	<footer class="entry-footer">
		<?php //hub_entry_footer(); ?>
		<?php hub_share_this(); ?> 	
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
