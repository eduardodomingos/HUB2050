<div class="hero parallax-window is-bottom-slanted"
<?php 
$hero_image = get_field( 'hero_archive_image', 'option' );
if ($hero_image) :
    $hero_image_src = wp_get_attachment_image_src(  $hero_image, 'hub-fullbleed' )[0];
    $hero_image_opacity = (100 - get_field( 'hero_archive_image_opacity', 'option' ) ) / 100;
    ?>
    data-parallax="scroll" data-image-src="<?php echo $hero_image_src ?>" style="background: linear-gradient(rgba(0,0,0,<?php echo $hero_image_opacity;?>), rgba(0,0,0,<?php echo $hero_image_opacity;?>))"
<?php endif;?>
>
<div class="container">
<?php
$hero_text = get_field( 'hero_archive_text', 'option' );
if ($hero_text) : ?>
<p class="hero-text"><?php echo $hero_text; ?></p>
<?php endif; ?>
</div><!-- .container-->
<button id="scroll">
    <span>scroll</span>
</button>
</div><!-- .hero -->
