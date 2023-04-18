<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package remmie_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'remmie_theme'); ?></a>


		<header>
			<div class="header-bg">
				<img class="header-img" src="https://img.redro.pl/naklejki/vector-cartoon-semi-truck-cartoon-funny-truck-green-cute-car-700-189991168.jpg" alt="Logo">
				<nav>
					<ul class="main-nav">
					<a href="#"><li>Home</li></a>
					<a href="#About"><li>About</li></a>
					<a href="#Contact"><li>Contact</li></a>
					</ul>
				</nav>
			</div>
		</header>