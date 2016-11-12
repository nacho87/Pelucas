<section class="nuestros-productos">
	<div class="wrap">
		<div class="title-section"><?php echo get_field('title_section_products'); ?></div>
		<ul class="list-home-item-products">
			<?php $vars = get_field('products'); ?>

			<?php while( have_rows('products') ): the_row(); ?>
				<li class="home-item-product">
					<figure class="image-home-product">
						<img src="<?php the_sub_field('image_product') ?>" alt="">
					</figure>
					<h3 class="title-home-product"><?php the_sub_field('title_product'); ?></h3>
					<div class="description-home-product">
						<?php the_sub_field('excerpt_product') ?>
					</div>
					<a class="btn-white"href="<?php the_sub_field('link_to_section') ?>">Ver Mas</a>
				</li>
			<?php endwhile; ?>
		</ul>
	</div>
</section>
