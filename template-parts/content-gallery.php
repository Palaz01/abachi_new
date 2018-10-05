<?php

/**
 * Template part for displaying gallery
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package abachi
 */
$shortcode = get_post_meta($post->ID,'gallery_shortcode',true);
?>

<section class="gallery">
   <div class="gallery-intro text-center" style="background: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>'); background-size: cover;background-position: center center">
      <div class="gallery-title">
         <h1 class="text-center"><?php the_field('gallery_title'); ?></h1>
         <p><?php the_field('gallery_description'); ?></p>
      </div>
   </div>
   <div class="container">
      <?php echo do_shortcode($shortcode); ?>
   </div>
</section>
