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
   <div class="container">
      <?php echo do_shortcode($shortcode); ?>
   </div>
</section>
