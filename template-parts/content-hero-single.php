<div class="hero parallax-window is-bottom-slanted"
<?php 
if (has_post_thumbnail()) :
    $hero_image_src =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
    $hero_image_opacity = .5;//(100 - get_field( 'hero_image_opacity' ) ) / 100;
    ?>
    data-parallax="scroll" data-image-src="<?php echo $hero_image_src ?>" style="background: linear-gradient(rgba(0,0,0,<?php echo $hero_image_opacity;?>), rgba(0,0,0,<?php echo $hero_image_opacity;?>))"
<?php endif;?>
>
<div class="container">
<?php
$lead = get_field( 'lead' );
if ($lead) : ?>
<p class="hero-text animated fadeIn"><?php echo $lead; ?></p>
<?php endif; ?>
</div><!-- .container-->
<button id="scroll">
    <span>scroll</span>
</button>
</div><!-- .hero -->
