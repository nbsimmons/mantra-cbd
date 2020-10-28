<?php

	function stylesandscripts() {
		wp_deregister_script('jquery');
		$parent_style = 'storefront';
		wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js');
		wp_enqueue_style('foundation', get_stylesheet_directory_uri() . '/css/foundation.min.css' );
		wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css' );
	    wp_enqueue_style( $parent_style, 'https://cdn.jsdelivr.net/npm/swiper@5/css/swiper.min.css' );
	    wp_enqueue_script( $parent_style, 'https://cdn.jsdelivr.net/npm/swiper@5/js/swiper.min.js' );
	    wp_enqueue_script('app', get_stylesheet_directory_uri() . '/js/app.js' );
	}
	add_action( 'wp_enqueue_scripts', 'stylesandscripts' );

	function dotiavatar_function() {
	    return '';
	}
	function acf_flatfile() {
		foreach( glob( get_stylesheet_directory_uri() . '/inc/acf/*.php' ) as $acf ) {
		    require_once $acf;
		    unset($acf);
		}
	}
	add_action( 'acf/init', 'acf_flatfile' );
	if ( ! function_exists( 'storefront_credit' ) ) {
		/**
		 * Display the theme credit
		 *
		 * @since  1.0.0
		 * @return void
		 */
		function storefront_credit() {
			$links_output = '';
	
			if ( apply_filters( 'storefront_credit_link', true ) ) {
				$links_output .= '<a href="https://woocommerce.com" target="_blank" title="' . esc_attr__( 'WooCommerce - The Best eCommerce Platform for WordPress', 'storefront' ) . '" rel="author">' . esc_html__( 'Built with Storefront &amp; WooCommerce', 'storefront' ) . '</a>.';
			}
	
			if ( apply_filters( 'storefront_privacy_policy_link', true ) && function_exists( 'the_privacy_policy_link' ) ) {
				$separator = '<span role="separator" aria-hidden="true"></span>';
				$links_output = get_the_privacy_policy_link( '', ( ! empty( $links_output ) ? $separator : '' ) ) . $links_output;
			}
			
			$links_output = apply_filters( 'storefront_credit_links_output', $links_output );
			?>
			<div class="site-info">
				<?php echo esc_html( apply_filters( 'storefront_copyright_text', $content = '&copy; ' . get_bloginfo( 'name' ) . ' ' . date( 'Y' ) ) ); ?>
	
				
			</div><!-- .site-info -->
			<?php
		}
	}
	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page();
	}
	if ( ! function_exists( 'storefront_site_branding' ) ) {
		/**
		 * Site branding wrapper and display
		 *
		 * @since  1.0.0
		 * @return void
		 */
		function storefront_site_branding() {
			?>
			<div class="">
			
				<div class="grid-x grid-margin-x align-middle" style="padding-bottom: 10px;">
					<div class="cell shrink">
						<?php storefront_site_title_or_logo(); ?>
					</div>
					<a href="mailto:info@mantra-cbd.co.uk" class="cell shrink header-icons-link" style=""><i class="fas fa-envelope header-icons"></i> <span>info@mantra-cbd.co.uk</span></a>
					<a href="tel:07856642341" class="cell shrink header-icons-link" style=""><i class="fas fa-phone header-icons"></i> <span>07856 642 341</span></a>
					<a href="https://www.instagram.com/mantracbduk/" target="_blank" class="cell shrink header-icons-link" style=""><i class="fab fa-instagram header-icons"></i> <span>@mantracbduk</span></a>
					<div class="cell auto searchMeBaby">
						<div class="grid-x align-right">
						<?php the_widget( 'WC_Widget_Product_Search', 'title=' ); ?>
						</div>
						
					</div>
				</div>
			</div>
			<?php
		}
	}
	if ( ! function_exists( 'storefront_header_container' ) ) {
		/**
		 * The header container
		 */
		function storefront_header_container() {
			echo '<div class="col-full cuheader">';
		}
	}
	if ( ! function_exists( 'storefront_product_search' ) ) {
	/**
	 * Display Product Search
	 *
	 * @since  1.0.0
	 * @uses  storefront_is_woocommerce_activated() check if WooCommerce is activated
	 * @return void
	 */
	function storefront_product_search() {
		if ( storefront_is_woocommerce_activated() ) {
			?>
			<div class="site-search">
				<?php the_widget( 'WC_Widget_Product_Search', 'title=' ); ?>
			</div>
			<?php
		}
	}
	if ( ! function_exists( 'storefront_primary_navigation' ) ) {
		/**
		 * Display Primary Navigation
		 *
		 * @since  1.0.0
		 * @return void
		 */
		function storefront_primary_navigation() {
			?>
			<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_html_e( 'Primary Navigation', 'storefront' ); ?>">
			<button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false"><span><?php echo esc_attr( apply_filters( 'storefront_menu_toggle_text', __( '', 'storefront' ) ) ); ?></span></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'primary-navigation',
					)
				);
	
				wp_nav_menu(
					array(
						'theme_location'  => 'handheld',
						'container_class' => 'handheld-navigation',
					)
				);
				?>
			</nav><!-- #site-navigation -->
			<?php
		}
	}
}