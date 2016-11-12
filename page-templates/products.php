<?php
/**
 * Template Name: Products, No Sidebars
 *
 * This template display content at full with, with no sidebars.
 * Please note that this is the WordPress construct of pages and that other 'pages' on your WordPress site will use a different template.
 *
 * @package digistarter
 */

get_header(); ?>

<!-- 	<section class="banner-product">
		<div class="wrap">
			<h1>Product template</h1>
			<h1><?php echo get_field('title_section') ?></h1>
			<?php echo get_field('description_product') ?>
		</div>
	</section> -->
	<section class="grid-products">
		<div class="wrap">
			<ul class="single-list-products">
				<?php while( have_rows('list_products') ): the_row(); ?>
					<li class="item-product">
						<img src="<?php the_sub_field('image_gallery_product') ?>" alt="">
						<?php the_sub_field('description_gallery') ?>
					</li>
				<?php endwhile; ?>
			</ul>
		</div>
	</section>

<?php get_footer(); ?>
