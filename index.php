<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package abachi
 */

$products_description = get_field('products_description');

get_header(); ?>
	<section id="blog-heading" style="background: url('<?php the_field('products_cover_image', get_option('page_for_posts')); ?>');background-size: cover; background-position: center center">
		<div class="container-fluid">
			<div class="row justify-content-center text-center">
				<div class="products-page-title">
					<h1><?php single_post_title(); ?></h1>
					<p><?php the_field('products_description', get_option('page_for_posts')); ?></p>
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
