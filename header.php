<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Halasz_Consulting
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/animate.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<nav class="navbar navbar-expand-lg ">
		<a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo.png"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"><i class="material-icons">menu</i></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">

			<?php
			        wp_nav_menu( array(
			          'theme_location' => 'primary',
			          'container'      => false,
			          'menu_class'     => 'nav navbar-nav',
			          'fallback_cb'    => '__return_false',
			          'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			          'depth'          => 2,
			          'walker'         => new bootstrap_4_walker_nav_menu()
			       ) );
			    ?> 


			<!--<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="about.html">Rólam<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="news.html">Hírek</a> 
				</li>
				<li class="nav-item">
					<a class="nav-link" href="blog.html">Blog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="services.html">Szolgáltatások</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contact.html">Kapcsolat</a>
				</li>
			</ul>-->
		</div>
		<div class="nav-info">
			<?php
			        wp_nav_menu( array(
			          'theme_location' => 'secondary',
			          'container'      => false,
			          'menu_class'     => 'nav navbar-nav',
			          'fallback_cb'    => '__return_false',
			          'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			          'depth'          => 2,
			          'walker'         => new bootstrap_4_walker_nav_menu()
			       ) );
			    ?>
		</div>
	</nav>

