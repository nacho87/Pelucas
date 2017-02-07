<?php $location = get_field('map'); ?>
<section id="quienes-somos" class="quienes-somos bg-purple4">
	<div class="wrap">
		<div class="title-section"><?php echo get_field('title_section_about'); ?></div>
		<div class="content-section">
			<div class="description">
				<?php echo get_field('description_about') ?>
			</div>
			<div class="map-section" >
				<?php if( !empty($location) ): ?>
					<img src="<?php echo $location;?>" alt="">
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
