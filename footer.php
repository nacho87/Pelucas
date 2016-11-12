<?php
/**
 * The template for displaying the footer.
 *
 * @package lean
 */
?>
	<?php tha_content_bottom(); ?>
	</div>
	<?php tha_content_after(); ?>
		<?php tha_footer_before(); ?>
	<footer id="colophon" class="site-footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">

		<?php tha_footer_top(); ?>
		<div class="wrap">
			<div class="footer-branding">
				<h2 class="site-title"><?php bloginfo( 'name' ); ?></h2>
				<div class="site-description"><?php bloginfo( 'description' ) ?></div>
			</div>

			<?php get_template_part( 'page-templates/partials/social_icon' ); ?>

			<?php get_template_part( 'page-templates/partials/navbar_footer' ); ?>

		</div>
		<?php tha_footer_bottom(); ?>
	</footer>
	<?php tha_footer_after(); ?>
</div>

<?php tha_body_bottom(); ?>
<?php wp_footer(); ?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
</body>
</html>
