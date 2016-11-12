<?php
/**
 * Template Name: Events, No Sidebars
 *
 * This template display content at full with, with no sidebars.
 * Please note that this is the WordPress construct of pages and that other 'pages' on your WordPress site will use a different template.
 *
 * @package digistarter
 */

get_header(); ?>


	<section class="grid-events">
		<div class="wrap">
			<ul class="single-list-events">
				<?php while( have_rows('list_eventos') ): the_row(); ?>
					<li class="item-event">
						<figure class="image-event">
							<img src="<?php the_sub_field('imagen_evento') ?>" alt="">
						</figure>
						<div class="details-event">
							<div class="name-event">
								<?php the_sub_field('nombre_evento') ?>
							</div>
							<div class="title-event">
								<?php the_sub_field('titulo_evento') ?>
							</div>
							<div class="content-event">
								<?php the_sub_field('texto_evento') ?>
							</div>
							<a class="read-more"href="<?php the_sub_field('link_evento') ?>">Ver más</a>
						</div>
					</li>
				<?php endwhile; ?>
			</ul>
		</div>
	</section>

<?php get_footer(); ?>
