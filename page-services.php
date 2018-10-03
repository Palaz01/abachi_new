 <?php
/* 
	Template Name: Services Page

*/

$services_icon = get_field('services_icon');


get_header(); ?>
	<section id="services-hero">
		<div class="title container-fluid">
			<div class="row justify-content-center">
				<h1>Szolgáltatások</h1>
			</div>
			<div class="bg"></div>
			<div class="overlay"></div>
		</div>
	</section>

	<section id="services-page">
		<div class="container">
			<div class="row justify-content-center">
				<?php
		        $loop = new WP_Query( array('post_type' => 'services_details', 'orderby' => 'ID', 'order' => 'ASC' ));
		        ?>
		        <?php if($loop->have_posts()) : ?>
		        <?php while($loop->have_posts()) : $loop->the_post() ?>
				<div class="col-md-9 text-center first-service services-item">
					<i class="material-icons"><?php the_field('services_icon'); ?></i>
					<h3><?php the_title(); ?></h3>
					<p class="text-left more"><?php the_content(); ?></p>
				</div>
				<?php endwhile ?>
	          	<?php endif ?>
	          	<?php wp_reset_query(); ?>

			</div>
		</div>
	</section>

<?php get_footer(); ?>