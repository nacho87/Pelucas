<?php
/**
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package lean
 */
?>
<!DOCTYPE html>
<?php tha_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
	<?php tha_head_top(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon.png?v=zXdaBmlpX8">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-32x32.png?v=zXdaBmlpX8" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-16x16.png?v=zXdaBmlpX8" sizes="16x16">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/manifest.json?v=zXdaBmlpX8">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/safari-pinned-tab.svg?v=zXdaBmlpX8" color="#5bbad5">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon.ico?v=zXdaBmlpX8">
	<meta name="apple-mobile-web-app-title" content="Pelucas Graciela Ani">
	<meta name="application-name" content="Pelucas Graciela Ani">
	<meta name="theme-color" content="#ffffff">

	<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,600,700,700italic,100,300' rel='stylesheet' type='text/css'>
	<?php tha_head_bottom(); ?>
	<?php wp_head(); ?>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-33764227-1', 'auto');
  ga('send', 'pageview');

	</script>
</head>

<body <?php body_class(); ?>>
<?php tha_body_top(); ?>
<div id="page" class="hfeed site">
	<?php tha_header_before(); ?>

	<?php if ( is_front_page() ):  ?>

		<?php get_template_part( 'page-templates/partials/header-front-page' ); ?>

		<?php get_template_part( 'page-templates/partials/navbar' ); ?>
	<?php else: ?>
		<?php get_template_part( 'page-templates/partials/navbar' ); ?>
		<?php get_template_part( 'page-templates/partials/header-page' ); ?>

	<?php endif ?>



	<?php tha_content_before(); ?>

		<?php tha_content_top(); ?>
