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

	<footer id="colophon" class="site-footer">
		logo aqui
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
