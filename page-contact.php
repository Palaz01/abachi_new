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
			<div class="row justify-content-center">
				<div class="col-md-8 text-center padd">
					<div class="contact-card">
						<h3 class=""><?php echo $contact_title; ?></h3>
						<p><?php echo $contact_text; ?></p>
						<p class="text-left"><i class="material-icons">phone</i><span><?php echo $phone_number; ?></span></p>
						<p class="text-left" style="margin-bottom: 25px"><i class="material-icons">mail_outline</i><span><?php echo $email_address; ?></span></p>
						<?php echo do_shortcode(get_post_field('post_content', $postid)); ?>
		            </div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>