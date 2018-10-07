<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HUB_2050
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer is-top-slanted">
		
		<a  class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 149 63"><path d="M121.1 26.2l-1.9-11-15.6-5.3.5 15.7zM.3 36.9v16.4l16.8 4.2V38.8zM65.2 5.9L51.5 4.1l5.8 46.5h9.8zM29.3 1.1l3.2 60 12.4.8-7.7-60.8zM79.8 3.1l3.4 57.6 7-1.1V1.4zM.1 5.5L0 23.1l17.1.6-.4-22.3zM104.6 38.9v15.8l14.6-4.3 2.1-11.7zM140.6 20.3c0 4.5-4.5 6.2-4.5 8.6v.3h4.3v2.1h-6.5v-1.8c0-4.2 4.5-4.9 4.5-9.1 0-1.3-.5-1.6-1.2-1.6s-1.2.4-1.2 1.4v1.5h-2.1v-1.4c0-2.3 1.1-3.6 3.4-3.6 2.2 0 3.3 1.3 3.3 3.6zM145.5 16.7c-2.2 0-3.4 1.3-3.4 3.6v23.5c0 2.3 1.2 3.6 3.4 3.6s3.4-1.3 3.4-3.6V20.3c0-2.3-1.2-3.6-3.4-3.6zm1.2 27.2c0 1-.5 1.4-1.2 1.4s-1.2-.4-1.2-1.4V20.2c0-1 .5-1.4 1.2-1.4s1.2.4 1.2 1.4v23.7zM134 32.8v.1-.1zM140.3 34.9v-2.1H134v.1l-.4 8.4h2.1v-1.4.7c.1-1.1.6-1.5 1.2-1.5.7 0 1.2.4 1.2 1.4v3.2c0 1-.5 1.4-1.2 1.4h-.3c-.6-.1-1-.5-1-1.4v-.4h-2.1v.3c0 2.3 1.1 3.6 3.4 3.6 2.2 0 3.4-1.3 3.4-3.6V40.7c0-.4 0-.8-.1-1.2-.2-1.3-.8-2.6-2.7-2.6-.7 0-1.3.3-1.6.6l.1-2.9h4.3z"/></svg>
		</a><!-- .logo -->	
		<?php if( has_nav_menu( 'social' ) ) { ?>
		<nav class="social-nav">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'social',
					'depth'          => 1,
					'link_before'    => '<span class="screen-reader-text">',
					'link_after'     => '</span>' . hub_get_svg( array( 'icon' => 'chain' ) ),
					'container'		=> false
				) );
			?>
		</nav>
		<?php } ?>
		
		<p class="legal">
			<span>Copyright &reg; <?php bloginfo( 'name' ); ?></span>
			<span>Lisbon <?php echo date('Y'); ?></span>
			<?php if( has_nav_menu( 'footer' ) ) {
					wp_nav_menu( array(
						'theme_location' => 'footer',
						'depth'          => 1,
						'container'		=> false,
						'walker'		=> new Waker_Footer_Menu,
						'items_wrap'     => '%3$s'
					) );
			} ?>
		</p>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
