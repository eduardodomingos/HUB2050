<div class="contacts  hero-contacts"
<?php 
$hero_image = get_field( 'contacts_background_image' );
if ($hero_image) :
    $hero_image_src = wp_get_attachment_image_src(  $hero_image, 'hub-fullbleed' )[0];
    $hero_image_opacity = (100 - get_field( 'contacts_background_image_opacity' ) ) / 100;
    ?>
    style="background: linear-gradient(rgba(0,0,0,<?php echo $hero_image_opacity;?>), rgba(0,0,0,<?php echo $hero_image_opacity;?>)), url(<?php echo $hero_image_src;?>) center / cover no-repeat;"
<?php endif;?>
>
<div class="container">
	<div class="contact">
		<h2 class="contact-title">stay in touch</h2>
		<?php

		$contacts_address = get_field( 'contacts_address' );
		$contacts_phone_label = get_field( 'contacts_phone_label' );
		$contacts_phone = get_field( 'contacts_phone' );
		$contacts_email_label = get_field( 'contacts_email_label' );
		$contacts_email = get_field( 'contacts_email' );
		$contacts_partnerships_label = get_field( 'contacts_partnerships_label' );
		$contacts_partnerships = get_field( 'contacts_partnerships' );

		?>
		<div class="contacts-big">
			<?php if ($contacts_phone) { echo '<a href="tel:'. str_replace(" ", "", $contacts_phone) .'">'. $contacts_phone  .'</a>'; } ?>
			<?php if ($contacts_phone && $contacts_email) : ?>
			<br>
			<?php endif; ?>
			<?php if ($contacts_email) { echo '<a target="_blank" href="mailto:'. $contacts_email .'">'. $contacts_email .'</a>'; }?>
		</div><!-- contacts-big -->
		<div class="contacts-small">
			<?php if($contacts_address) { echo $contacts_address; } ?>
		</div><!-- contacts-small -->
	</div><!-- contact -->
</div><!-- .container-->
</div><!-- .hero -->


if($contacts_email) {
					echo '<li><a target="_blank" href="mailto:'. $contacts_email .'">'. $contacts_email_label .'</a></li>';
				}