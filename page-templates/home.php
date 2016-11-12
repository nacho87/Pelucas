<?php
/**
 * Template Name: Home, No Sidebars
 *
 * This template display content at full with, with no sidebars.
 * Please note that this is the WordPress construct of pages and that other 'pages' on your WordPress site will use a different template.
 *
 * @package digistarter
 */

get_header(); ?>

    <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
					<?php get_template_part( 'page-templates/partials/nuestros_productos' ); ?>
					<?php get_template_part( 'page-templates/partials/quienes_somos' ); ?>
            </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>
