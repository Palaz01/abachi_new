<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Halasz_Consulting
 */

get_header(); ?>
	<section id="blog-heading">
		<div class="container-fluid">
			<div class="row justify-content-center text-center">
				<div class="col">
					<h2><?php single_post_title(); ?></h2>
				</div>
			</div>
		</div>
	</section>

	
	<section id="blogpostpage">
		<div class="container">
			<div class="row justify-content-center">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'content-single', get_post_type() );

			endwhile; // End of the loop.
			?>

			</div>
		</div>
	</section>

	<?php

get_footer();
