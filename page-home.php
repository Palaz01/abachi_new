 <?php
/* 
	Template Name: Home Page

*/
$slide_text = get_field('slide_text');
$slide_image = get_field('slide_image');
$slide_image_small = get_field('slide_image_small');
$home_about_title = get_field('home_about_title');
$home_about_text = get_field('home_about_text');

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
				<div class="caption animated fadeIn">
 					<h1>Lorem ipsum</h1>
					<p><?php the_field('slide_text'); ?></p>
					<a href="#">Tovább</a>
				</div>
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
					<p><?php echo $home_about_text; ?></p>
				</div>
			</div>
		</div>
	</section>

	<section id="news">
		<div class="container">
			<div class="title row justify-content-center">
				<div class="col">
					<h2 class="text-center">Szauna típusok</h2>
					<p class="text-center">Lorem ipsum dolor sit amet...</p>
				</div>
			</div>
			<div class="row d-flex">

				<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
 
				<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
				 
				<div class="col-md-4">
					<div class="product-card text-left">
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
	
<?php get_footer(); ?>