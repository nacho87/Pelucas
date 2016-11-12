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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,600,700,700italic,100,300' rel='stylesheet' type='text/css'>
	<?php tha_head_bottom(); ?>
	<?php wp_head(); ?>
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
