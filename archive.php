<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Halasz_Consulting
 */

get_header(); ?>
	<section id="blog-heading">
		<div class="container-fluid">
			<div class="row justify-content-center text-center">
				<div class="col">
					<h2><?php the_archive_title(); ?></h2>
				</div>
			</div>
		</div>
	</section>

	<section id="blogpage">
		<div class="container">
			<div class="row">
				<?php
					if ( have_posts() ) :


							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', get_post_format() );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

					endif; 
				?>
			</div>
		</div>
	</section>


<?php

get_footer();
