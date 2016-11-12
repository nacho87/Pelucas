<section class="banner-home">
	<ul class="owl-carousel" data-behavior="carousel">
		<?php while( have_rows('images_slider', 'option') ): the_row(); ?>
			<li>
				<img src="<?php the_sub_field('image') ?>" alt="">
			</li>
		<?php endwhile; ?>
	</ul>
</section>
