<?php
/**
 * The Header for Queue theme
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
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body>
<div class="bigboard">
<div id="header">
<div class="top_menu" id="tabs-top">
<?php wp_nav_menu( array( 'theme_location' => 'top-menu' ) ); ?>
</div>
<div class="search">
<?php get_search_form(); ?>
</div>
<div id="headerimg" class="headimg">
<a href="/" alt="Homepage">
<img src="/queuetheme/wp-content/uploads/sites/7/2014/06/QueueLogo.png" alt="Queue Logo" />
<!-- This is for the logo
      <?php bloginfo ('name'); ?><br />
	<?php bloginfo ('description'); ?>-->
</a>
</div>
</div>
<div class="top_ad" id="top_ad_format">
