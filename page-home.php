 <?php
/* 
	Template Name: Home Page

*/
$slide_text = get_field('slide_text');
$slide_image = get_field('slide_image');
$slide_image_small = get_field('slide_image_small');
$home_about_title = get_field('home_about_title');
$home_about_image = get_field('home_about_image');
$home_about_text = get_field('home_about_text');
$home_about_button_text = get_field('home_about_button_text');
$home_about_button_link = get_field('home_about_button_link');
$home_services_title = get_field('home_services_title');
$home_services_button_text = get_field('home_services_button_text');
$home_services_button_link = get_field('home_services_button_link');
$home_services_icon = get_field('home_services_icon');
$home_services_text = get_field('home_services_text');
$cta_text = get_field('cta_text');
$cta_button_text = get_field('cta_button_text');
$cta_button_link = get_field('cta_button_link');
$cause = get_field('cause');
$whyme_title = get_field('whyme_title');

get_header(); ?>
	<section id="hero">
		<div class="owl-carousel owl-theme"> 
			<?php

	        $loop = new WP_Query( array('post_type' => 'slideshow', ));
	        ?>

	        <?php if($loop->have_posts()) : ?>
	        <?php while($loop->have_posts()) : $loop->the_post() ?>
			<div class="item">
				<img class="fhd" src="<?php the_field('slide_image'); ?>" >
				<img class="small" src="<?php the_field('slide_image_small'); ?>">
				<div class="overlay"></div>
				<h3 class="caption animated fadeIn"><?php the_field('slide_text'); ?></h3>
			</div>
			<?php endwhile ?>
          	<?php endif ?>
          	<?php wp_reset_query(); ?>
		</div>	
	</section>

	<section id="home-about">		
		<div class="container">
			<div class="row justify-content-center title">
				<div class="col">
					<h2 class="text-center"><?php echo $home_about_title; ?></h2>
					<hr>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-sm-12 col-md-8 text-center">
					<img src="<?php echo $home_about_image['url']; ?>">
					<p class="text-left"><?php echo $home_about_text; ?></p>
				</div>
			</div>
			<div class="row justify-content-center btnrow">
				<a href="<?php echo $home_about_button_link; ?>"><button class="btn btn-md button-1"><?php echo $home_about_button_text; ?></button></a>
			</div>
		</div>
	</section>

	<section id="home-services">
		<div class="container">
			<div class="title row justify-content-center">
				<div class="col">
					<h2 class="text-center"><?php echo $home_services_title; ?></h2>
					<hr>
				</div>
			</div>
			<div class="row justify-content-center">
				<?php
		        $loop = new WP_Query( array('post_type' => 'home_services', 'orderby' => 'ID', 'order' => 'ASC' ));
		        ?>

		        <?php if($loop->have_posts()) : ?>
		        <?php while($loop->have_posts()) : $loop->the_post() ?>
				<div class="col-md-4 text-center">
					<div class="servicecard">
						<i class="material-icons"><?php the_field('home_services_icon'); ?></i>
						<h3><?php the_title(); ?></h3>
						<p><?php the_field('home_services_text'); ?></p>
					</div>
				</div>
				<?php endwhile ?>
	          	<?php endif ?>
	          	<?php wp_reset_query(); ?>
			</div>
			<div class="row justify-content-center btnrow">
				<a href="<?php echo $home_services_button_link; ?>"><button class="btn btn-md button-1"><?php echo $home_services_button_text; ?></button></a>
			</div>
		</div>
	</section>

	<section id="home-cta">
		<div class="bg"></div>
		<div class="overlay"></div>
		<div class="container">
			<div class="row align-items-center">
				<div class="col text-center">
					<h4><?php echo $cta_text; ?></h4>
 					<a href="<?php echo $cta_button_link; ?>"><button class="btn btn-md button-2"><?php echo $cta_button_text; ?></button></a>
				</div>	
			</div>
		</div>
	</section>

	<section id="news">
		<div class="container">
			<div class="title row justify-content-center">
				<div class="col">
					<h2 class="text-center">Legfrisebb Bejegyzések</h2>
					<hr>
				</div>
			</div>
			<div class="row">

				<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
 
				<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
				 
				<div class="col-md-4">
					<div class="news-card text-center">
						<img class="img-fluid" src="<?php the_post_thumbnail(); ?>
						<?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
						<p><?php the_excerpt(); ?></p>
					</div>
				</div>
				<?php 
				endwhile;
				wp_reset_postdata();
				?>
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