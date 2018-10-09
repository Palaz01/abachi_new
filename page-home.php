 <?php
/* 
	Template Name: Home Page

*/
$slide_text = get_field('slide_text');
$slide_image = get_field('slide_image');
$slide_image_small = get_field('slide_image_small');

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
				<div class="overlay"></div>
				<div class="caption animated fadeIn">
 					<h1><?php the_title(); ?></h1>
					<p><?php the_field('slide_text'); ?></p>
					<a href="<?php the_field('slide_link'); ?>">Tovább</a>
				</div>
			</div>
			<?php endwhile ?>
          	<?php endif ?>
          	<?php wp_reset_query(); ?>
		</div>	
	</section>

 	<?php get_template_part('template-parts/content', 'textbox'); ?>
	<section id="products" class="home-products">
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
				wp_reset_postdata(); ?>
			</div>
			<div class="row justify-content-center">
				<a href="abachi/szaunatipusok" class="button-2">Összes típus</a>
			</div>
		</div>
	</section>
	
	<div class="gallery-intro text-center">
		<div class="gallery-title">
			<h1 class="text-center"><?php the_field('gallery_title'); ?></h1>
			<p><?php the_field('gallery_description'); ?></p>
		</div>
	</div>

	<?php get_template_part( 'template-parts/content', 'gallery' ); ?>
	<div class="container text-center">	
		<a href="abachi/galeria" class="button-1">Teljes galléria</a>
		<br>
		<br>
		<br>
	</div>
	<?php get_template_part( 'template-parts/content', 'contact' ); ?>
	
	
<?php get_footer(); ?>