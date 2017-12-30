<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage rkoters_dion
 */



?><!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Dion Organizing</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />

		<?php wp_head(); ?>

	</head>
	<body class="landing <?php echo (is_admin_bar_showing()) ? "admin_bar_showing" : ""; ?>" >
		<div id="page-wrapper">

			<!-- Header -->
			<header id="header">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/logo_purple.png" />
				<div class="tagline">ORGANIZING</div>
			</header>

			<section class="page_container" >
				<section class="box" >
							<?php
								if ( have_posts() ) {
								    while ( have_posts() ) {
								        the_post();
												the_content();
										}
								}
							?>
				</section>
			</section>
		</div>
		
		<?php wp_footer(); ?>

	</body>
</html>
