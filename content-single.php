<div class="col-md-8">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="single-product-text">
				<h1 class="text-center"><?php single_post_title(); ?></h1>
				<hr>
				<p class="text-left"><?php the_content(); ?></p>
			</div>		
	</article><!-- #post-<?php the_ID(); ?> -->
</div>