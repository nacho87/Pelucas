<header id="masthead" class="site-header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
	<?php tha_header_top(); ?>

	<?php get_template_part( 'page-templates/partials/banner' ); ?>



	<div class="product-description">
		<div class="wrap">
			<h1 class="section-title"><?php echo get_field('title_section') ?></h1>
			<div class="section-description"><?php echo get_field('description_product') ?></div>
		</div>
	</div>
	<?php tha_header_bottom(); ?>

</header>
<?php tha_header_after(); ?>
