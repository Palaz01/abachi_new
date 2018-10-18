<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="single-product-text">
						<h1 class="text-center"><?php single_post_title(); ?></h1>
						<hr>
						<p class="text-left"><?php the_content(); ?></p>
					</div>		
			</article><!-- #post-<?php the_ID(); ?> -->
			<?php get_template_part( 'template-parts/content', 'contact' ); ?>		
		</div>
	</div>
</div>

<section id="products">
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
					<div class="product-card-image">
						<img src="<?php the_post_thumbnail(); ?>
					</div>
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