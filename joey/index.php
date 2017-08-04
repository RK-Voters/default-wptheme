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
 * @subpackage rkoters_joey
 */



?><!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Joey Brunelle for Portland City Council</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/truncated.css" />
		

    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->


		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <style type="text/css">
      @media screen and (max-width: 480px) {
        .mobilep-hide {
          display:none !important;
        }
      }
    </style>

		<?php wp_head(); ?>

	</head>
	<body class="landing <?php echo (is_admin_bar_showing()) ? "admin_bar_showing" : ""; ?>" >
		<div id="page-wrapper">

			<!-- Header -->
			<header id="header">
				<h1><a href="http://brunelleforportland.org">Joey Brunelle</a> for Portland City Council</h1>
				<nav id="nav">
					<ul>
            <li><a href="#main">Issues</a></li>
            <li><a href="http://brunelleforportland.org/about-joey-brunelle.html">Bio</a></li>
            <li><a href="http://brunelleforportland.org/endorsements-joey-brunelle.html">Endorsements</a></li>
            <li><a href="http://brunelleforportland.org/press-joey-brunelle.html">Joey in the Press</a></li>
            <li><a href="http://brunelleforportland.org/open-city-budget-tool.html">Explore the City Budget</a></li>
            <li><a href="https://medium.com/brunelle-for-portland" target="_blank">Joey's Blog</a>
							<ul>
                <li><a href="https://medium.com/brunelle-for-portland" target="_blank">Issues &amp; Ideas</a></li>
								<li><a href="https://medium.com/brunelle-for-portland/weekly/home" target="_blank">Weekly Council News</a></li>
              </ul>
            </li>
						<li><a href="#sign-up" class="button">Sign Up</a></li>
            <li><a href="https://secure.actblue.com/contribute/page/brunelle-for-portland" target="_blank" class="button">Donate</a></li>
            <li><a href="http://facebook.com/brunelleforportland"><span class="fa fa-facebook-official"></span></a></li>
					</ul>
				</nav>
			</header>

      <section class="container" style="margin-top: 20px">
        <section class="box">
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

		<!-- Scripts
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]
			<script src="assets/js/main.js"></script>-->


			<?php wp_footer(); ?>

	</body>
</html>
