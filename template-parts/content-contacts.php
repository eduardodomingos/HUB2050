<div class="contacts"
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
		$contacts_phone = get_field( 'contacts_phone' );
		$contacts_email = get_field( 'contacts_email' );
		$contacts_partnerships = get_field( 'contacts_partnerships' );
		if ($contacts_address) {
			echo '<div class="contact-address">' . $contacts_address . '</div>';
		}

		if ( $contacts_phone || $contacts_email || $contacts_partnerships ) {
			?>
			<ul class="contact-list">
				<?php
				if($contacts_phone) {
					echo '<li><a href="malito:'. str_replace(" ", "", $contacts_phone) .'">'. $contacts_phone  .'</a></li>';
				}
				if($contacts_email) {
					echo '<li><a href="malito:'. $contacts_email .'">email</a></li>';
				}
				if($contacts_partnerships) {
					echo '<li><a href="malito:'. $contacts_partnerships .'">partnerships</a></li>';
				}
				?>
			</ul>
			<?php
		}

		?>

	</div><!-- contact -->


</div><!-- .container-->
</div><!-- .hero -->
