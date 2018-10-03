 <?php
/* 
	Template Name: Contact Page

*/

$contact_page_title = get_field('contact_page_title');
$contact_title = get_field('contact_title');
$contact_text = get_field('contact_text');
$phone_number = get_field('phone_number');
$email_address = get_field('email_address');

get_header(); ?>

	<section id="contact-heading">
		<div class="container-fluid">
			<div class="row justify-content-center text-center">
				<h2><?php echo $contact_page_title; ?></h2>
			</div>
		</div>
	</section>

	<section id="contact">
		<div class="container">
 			<div class="contact-intro text-center">
				<h1 class="text-center"><?php echo $contact_title; ?></h1>
				<p><?php echo $contact_text; ?></p>
			</div>
			<div class="row justify-content-center">
				<div class="col-sm-12 text-center padd">
					<div class="contact-card">
 						<h3>Üzenetküldés</h3>
						<div class="row">
							<div class="col-md-5">
 								<p class="text-left">Abachi Wellness Kft</p>
								<p class="text-left">Bank: 11111111-33333333-55555555</p>
								<p class="text-left">Adószám: 0130131301-1-121</p>
								<p class="text-left">Cím: 1223 Lorem utca 119</p>
								<p class="text-left"><?php echo $phone_number; ?></p>
								<p class="text-left" style="margin-bottom: 25px"><?php echo $email_address; ?></p>
							</div>
							<div class="col-md-7">
								<?php echo do_shortcode(get_post_field('post_content', $postid)); ?>
							</div>
						</div>
		            </div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>