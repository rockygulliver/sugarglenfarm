<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />

	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>

<link rel="shortcut icon" href="http://sugarglenfarm.com/favicon.ico" /> 
<link rel="icon" href="http://sugarglenfarm.com/favicon.png" type="image/png" /> 

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-29216078-1', 'sugarglenfarm.com');
  ga('send', 'pageview');

</script>

<!-- 'teach' IE to create and style HTML5 semantic elements -->
<script>
 document.createElement("header");
 document.createElement("nav");
 document.createElement("article");
 document.createElement("section");
 document.createElement("footer");
</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</a>
	</div>
	<?php endif; ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

		</div>
 		
	</header><!-- #masthead -->

	<nav id="top-nav">
	 <div class="table">
	  <div class="table-cell middle">
	   <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" id="sugarglen">Sugar Glen Farm</a>   
	   <a href="<?php echo esc_url( home_url( '/' ) ); ?>about" id="about"><span id="about-text">About</span><img src="<?php echo get_template_directory_uri(); ?>/images/about-icon.png" alt="about" id="about-icon" /></a>
	  </div>
	 </div>
	</nav><!-- #top-nav -->

	<div id="main" class="site-main">