<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Halasz_Consulting
 */

get_header(); ?>

	<section class="not-found">
		<div class="container-fluid">
			<div class="row notfoundbg align-items-center">
				<div class="col-sm-12 text-center">
					<h2>Page not found!</h2>
				</div>
			</div>
		</div>
		  <div class="container">
		  	<div class="row homelink align-items-center">
		  		<div class="col-sm-12 text-center">
		  			<h3>No content in this link. Homepage: <a href="<?php echo get_home_url(); ?>">http://halaszconsulting.ch</a></h3>
		  		</div>
		  	</div>
		  </div> 
	</section><!-- .error-404 -->

<?php
get_footer();
