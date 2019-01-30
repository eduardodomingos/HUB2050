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


	<?php
		$equipa = get_field_object('ficha_tecnica_equipa');
		$investimento = get_field_object('ficha_tecnica_investimento');
		$parceiros = get_field_object('ficha_tecnica_parceiros');
		$duracao = get_field_object('ficha_tecnica_duracao');
		$setor = get_field_object('ficha_tecnica_setor');
		$areas = get_field_object('ficha_tecnica_areas');
		$impacto = get_field_object('ficha_tecnica_impacto');

		$ficha_tecnica = [$equipa, $investimento, $parceiros, $duracao, $setor, $areas, $impacto];
	?>
	<?php if( $equipa['value'] || $investimento['value'] || $parceiros['value'] || $duracao['value'] || $setor['value'] || $areas['value'] || $impacto['value'] ) : ?>
		<p class="ficha-tecnica container">
			<?php foreach( $ficha_tecnica as $item ): ?>
				<?php if($item['value']): ?>
				<span><strong><?php echo $item['label']; ?>:</strong><?php echo ' ' . $item['value']; ?></span>
				<?php endif; ?>
			<?php endforeach; ?>
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
