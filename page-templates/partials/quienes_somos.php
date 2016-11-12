<?php $location = get_field('map'); ?>
<section class="quienes-somos bg-purple4">
	<div class="wrap">
		<div class="title-section"><?php echo get_field('title_section_about'); ?></div>
		<div class="content-section">
			<div class="description">
				<?php echo get_field('description_about') ?>
			</div>
			<div class="map-section" data-behavior="map">

				<?php if( !empty($location) ): ?>
					<div class="acf-map">
						<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
