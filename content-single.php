<div class="col-md-9">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="blogpost text-center">
				<img class="img-fluid" src="<?php the_post_thumbnail(); ?>
				<header class="entry-header">
					<?php

					if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta text-left">
						<?php the_date(); ?>
					</div><!-- .entry-meta -->
					<?php
					endif; ?>
				</header><!-- .entry-header -->

				<p class="text-left"><?php the_content(); ?></p>


			</div>
		
	</article><!-- #post-<?php the_ID(); ?> -->
</div>