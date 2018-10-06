<div class="hero"
<?php 
$hero_image = get_field( 'hero_image' );
if ($hero_image) :
    $hero_image_src = wp_get_attachment_image_src(  $hero_image, 'hub-fullbleed' )[0];
    $hero_image_opacity = (100 - get_field( 'hero_image_opacity' ) ) / 100;
    ?>
    style="background: linear-gradient(rgba(0,0,0,<?php echo $hero_image_opacity;?>), rgba(0,0,0,<?php echo $hero_image_opacity;?>)), url(<?php echo $hero_image_src;?>) center / cover no-repeat;"
<?php endif;?>
>
<div class="container">
<?php
$hero_text = get_field( 'hero_text' );
if ($hero_text) : ?>
<p class="hero-text"><?php echo $hero_text; ?></p>
<?php endif; ?>
</div><!-- .container-->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 20.3"><path fill="#57ffcf" d="M0 19L1440 0v20.3H0z"/></svg>
</div><!-- .hero -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1439 75.5"><path fill="#57ffcf" d="M0 0h1439v2.9L0 75.5z"/></svg>
