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

        <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
						<h1>Contact </h1>
                </main><!-- #main -->
                <?php if ( have_posts() ) : ?>
                	<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
                	<?php endwhile; ?>
                <?php else : ?>
                <?php endif; ?>
        </div><!-- #primary -->

<!-- <?php get_sidebar(); ?> -->
<?php get_footer(); ?>
