<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Halasz_Consulting
 */

?>
<?php wp_footer(); ?>
	
	<footer class="footer">
		<div class="container-fluid">
			<div class="row top-footer justify-content-center">
				<div class="col-sm-6 center">
					<div class="top-footer-content ">
						<?php
	                    if(is_active_sidebar('footer-sidebar-1')){
	                    dynamic_sidebar('footer-sidebar-1');
	                    }
	                    ?>
					</div>
				</div>
				<div class="col-sm-6 center">
					<?php
			        wp_nav_menu( array(
			          'theme_location' => 'footer',
			          'container'      => false,
			          'menu_class'     => 'top-footer-content',
				      'fallback_cb'    => '__return_false',
				      'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				      'depth'          => 2,
			          'walker'         => new bootstrap_4_walker_nav_menu()
				       ) );
				    ?> 
					<!--<ul class="top-footer-content">
						<li>Rólam</li>
						<li>Hírek</li>
						<li>Blog</li>
						<li>Szolgáltatások</li>
						<li>Kapcsolat</li>
						<li>Adatvédelem</li>
					</ul>-->
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row bottom-footer">
				<div class="col bottom-footer-text">
					<p>2018 Abachi welness Kft. - Minden jog fenntartva!</p><p>Honlapkészítés és e-marketing: InteliArt</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/owl.carousel.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/app.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>
