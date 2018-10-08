<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package abachi
 */

$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );

get_header(); ?>
	<section id="blog-heading" class="single-product-heading" style="background: url('<?php echo $backgroundImg[0] ?>') no-repeat;background-size: cover;background-position: center center;">

	</section>

	
	<section id="blogpostpage">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'content-single', get_post_type() );

			endwhile; // End of the loop.
			?>

	</section>

	<?php

get_footer();
