<nav id="primary-nav" class="navbar-header" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
	<div class="mobile-menu">
		<button class="hamburger hamburger--elastic" type="button"
			aria-label="Menu" aria-controls="navigation">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</button>
	</div>
	<div class="wrap">
		<?php 	wp_nav_menu( array(
			    'theme_location' => 'primary-navigation',
			    'menu_class' => 'flexnav', //Adding the class for FlexNav
			    'items_wrap' => '<ul data-breakpoint=" '. esc_attr( get_theme_mod( 'digistarter_mobile_min_width' ) ) .' " id="%1$s" class="%2$s">%3$s</ul>', // Adding data-breakpoint for FlexNav
			    ));
		?>
	</div>
</nav>
