 <?php
/* 
	Template Name: About Page

*/

$about_image = get_field('about_image');
$about_title = get_field('about_title');
$about_text = get_field('about_text');
$testimonial_text = get_field('testimonial_text');
$client = get_field('client');
$whyme_title = get_field('whyme_title');

get_header(); ?>

	<section id="about-page-stock">
		<div class="container-fluid">
			<div class="row">
			</div>
		</div>
	</section>

	<section id="about-me">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 text-center">
					<img src="<?php echo $about_image['url']; ?>">
					<h2><?php echo $about_title; ?></h2>
					<hr>
					<p class="text-left"><?php echo $about_text; ?></p>
				</div>
			</div>
		</div>
	</section>

	<section id="testimonials">
		<div class="bg">			
		</div>
		<div class="overlay"></div>
		<div class="container">
			<div class="row align-items-center">
				<div class="col text-center">
					<div class="owl-carousel owl-theme">
						<?php
				        $loop = new WP_Query( array('post_type' => 'testimonials', ));
				        ?>

				        <?php if($loop->have_posts()) : ?>
				        <?php while($loop->have_posts()) : $loop->the_post() ?>
						<div class="item">
							<p class="lead"><?php the_field('testimonial_text'); ?></p>
		 					<hr>
		 					<p class="lead"><?php the_field('client'); ?></p>
	 					</div>
	 					<?php endwhile ?>
			          	<?php endif ?>
			          	<?php wp_reset_query(); ?>
 					</div>	
				</div>	
			</div>
		</div>
	</section>

	<section id="home-whyme">
		<div class="container">
			<div class="title row">
				<div class="col">
					<h2 class="text-center"><?php echo $whyme_title; ?></h2>
					<hr>
				</div>
			</div>
			<div class="row justify-content-center">
				<?php
		        $loop = new WP_Query( array('post_type' => 'whyme', 'orderby' => 'ID', 'order' => 'ASC' ));
		        ?>
		        <?php if($loop->have_posts()) : ?>
		        <?php while($loop->have_posts()) : $loop->the_post() ?>
				<div class="col-sm-12 whyme-items">
					<div class="circle"></div>
					<p><?php the_field('cause'); ?></p>
				</div>
				<?php endwhile ?>
	          	<?php endif ?>
	          	<?php wp_reset_query(); ?>
			</div>
		</div>
	</section>


<?php get_footer(); ?>