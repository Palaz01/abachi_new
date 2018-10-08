<?php

/**
 * Template part for displaying contact-form
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package abachi
 */

$contact_title = get_field('contact_title');
$contact_text = get_field('contact_text');
$our_contacts = get_field('our_contacts');

?>


<section class="contact">
      <div class="contact-intro text-center" style="background: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>'); background-size: cover;background-position: center center">
			<div class="contact-title">
				<h1 class="text-center"><?php echo $contact_title; ?></h1>
				<p><?php echo $contact_text; ?></p>
			</div>
      </div>
      <div class="container">
			<div class="row justify-content-center">
				<div class="col-sm-12 text-center padd">
					<div class="contact-card">
						<h3>Üzenetküldés</h3>
						<div class="row">
							<div class="col-md-5">
								<p class="text-left"><?php echo $our_contacts; ?></p>
							</div>
							<div class="col-md-7">
								<?php echo do_shortcode('[contact-form-7 id="116" title="Magyar contact form"]'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
      </div>
</section>
