<?php
/* 
	Template Name: Gallery Page

*/

get_header(); ?>
	<div id="gallery-page">
		<div class="gallery-intro text-center" style="background: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>'); background-size: cover;background-position: center center">
			<div class="gallery-title">
				<h1 class="text-center"><?php the_field('gallery_title'); ?></h1>
				<p><?php the_field('gallery_description'); ?></p>
			</div>
		</div>
		<?php get_template_part('template-parts/content', 'textbox'); ?>
		<?php get_template_part( 'template-parts/content', 'gallery' ); ?>
	</div>
<?php get_footer(); ?>