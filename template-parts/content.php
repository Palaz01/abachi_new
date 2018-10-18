<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package abachi
 */

?>
<div class="col-md-4">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="product-card">
				<div class="product-card-image">
					<img src="<?php the_post_thumbnail(); ?>
				</div>
				<header class="entry-header">
					<?php
					if ( is_singular() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
					endif;

					if ( 'post' === get_post_type() ) : ?>
					<?php
					endif; ?>
				</header><!-- .entry-header -->
				<p><?php the_excerpt(); ?></p>
			</div>		
	</article><!-- #post-<?php the_ID(); ?> -->
</div>
