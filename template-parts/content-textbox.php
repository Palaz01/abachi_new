<?php
/**
 * Template part for displaying textbox with optional title
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package abachi
 */

$textbox_title = get_field('textbox_title');
$textbox_text = get_field('textbox_text');

?>

<section id="home-about">		
<div class="container">
   <div class="row justify-content-center title">
      <div class="col">
         <h2 class="text-center"><?php echo $textbox_title; ?></h2>
         <hr>
      </div>
   </div>
   <div class="row justify-content-center">
      <div class="col-sm-12 col-md-8 text-center">
         <p><?php echo $textbox_text; ?></p>
      </div>
   </div>
</div>
</section> 