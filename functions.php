<?php 

// Setup
define( 'FM_DEV_MODE', true );

// Includes
include get_theme_file_path( '/includes/front/enqueue.php' );

// Hooks
add_action( 'wp_enqueue_scripts', 'fm_enqueue' );


// Shortcodes
if( ! function_exists( 'bs_shortcode_func' ) ) {
	function bs_shortcode_func( $atts ) {
		$a = shortcode_atts( array(
			'slides'		=> 3
		), $atts );

		include_once get_theme_file_path( '/includes/front/slider.php' );
	}
}

add_shortcode( 'bs-slider', 'bs_shortcode_func' );
