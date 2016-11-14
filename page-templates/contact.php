<?php
/**
 * Template Name: Contact, No Sidebars
 *
 * This template display content at full with, with no sidebars.
 * Please note that this is the WordPress construct of pages and that other 'pages' on your WordPress site will use a different template.
 *
 * @package digistarter
 */

get_header(); ?>

<section class="section-contact bg-purple4">
	<div class="wrap">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>
