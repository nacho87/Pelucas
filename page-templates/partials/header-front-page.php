<header id="masthead" class="site-header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
	<?php tha_header_top(); ?>

	<?php get_template_part( 'page-templates/partials/banner' ); ?>

	<div class="site-branding">
		<div class="site-title"><h1><?php bloginfo( 'name' ); ?></h1></div>
		<div class="site-description"><h3><?php bloginfo( 'description' ) ?></h3></div>
		<a href="#<?php echo get_field('link_banner', 'option'); ?>" class="btn btn-big"><?php echo get_field( 'label_button' ,'option') ?></a>
	</div>
	<?php tha_header_bottom(); ?>

</header>
<?php tha_header_after(); ?>
