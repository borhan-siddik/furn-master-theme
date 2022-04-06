<?php 

function fm_enqueue() {
	$uri = get_theme_file_uri();
	$ver = FM_DEV_MODE ? time() : false;

	wp_register_style( 'fm-google-font', '//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i', array(), $ver );
	wp_register_style( 'fm-font-awesome-min', $uri . '/furn-master-static/assets/css/font-awesome.min.css', array(), $ver );
	wp_register_style( 'fm-linearicons', $uri . '/furn-master-static/assets/css/linearicons.css', array(), $ver );
	wp_register_style( 'fm-animate', $uri . '/furn-master-static/assets/css/animate.css', array(), $ver );
	wp_register_style( 'fm-owl-carousel-min', $uri . '/furn-master-static/assets/css/owl.carousel.min.css', array(), $ver );
	wp_register_style( 'fm-owl-carousel-default-min', $uri . '/furn-master-static/assets/css/owl.theme.default.min.css', array(), $ver );
	wp_register_style( 'fm-bootstrap-min', $uri . '/furn-master-static/assets/css/bootstrap.min.css', array(), $ver );
	wp_register_style( 'fm-bootsnav', $uri . '/furn-master-static/assets/css/bootsnav.css', array(), $ver );
	wp_register_style( 'fm-styles', $uri . '/furn-master-static/assets/css/style.css', array(), $ver );
	wp_register_style( 'fm-responsive', $uri . '/furn-master-static/assets/css/responsive.css', array(), $ver );

	wp_enqueue_style( 'fm-google-font' );
	wp_enqueue_style( 'fm-font-awesome-min' );
	wp_enqueue_style( 'fm-linearicons' );
	wp_enqueue_style( 'fm-animate' );
	wp_enqueue_style( 'fm-owl-carousel-min' );
	wp_enqueue_style( 'fm-owl-carousel-default-min' );
	wp_enqueue_style( 'fm-bootstrap-min' );
	wp_enqueue_style( 'fm-bootsnav' );
	wp_enqueue_style( 'fm-styles' );
	wp_enqueue_style( 'fm-responsive' );

	wp_register_script( 'fm-modernizer', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', array( 'jquery' ), $ver, true );
	wp_register_script( 'fm-bootstrap-min', $uri . '/furn-master-static/assets/js/bootstrap.min.js', array(), $ver, true );
	wp_register_script( 'fm-bootstrap-nav', $uri . '/furn-master-static/assets/js/bootsnav.js', array(), $ver, true );
	wp_register_script( 'fm-owl-carousel-min', $uri . '/furn-master-static/assets/js/owl.carousel.min.js', array(), $ver, true );
	wp_register_script( 'fm-jquery-easing', '//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js', array(), $ver, true );
	wp_register_script( 'fm-custom', $uri . '/furn-master-static/assets/js/custom.js', array(), $ver, true );

	wp_enqueue_script( 'fm-modernizer' );
	wp_enqueue_script( 'fm-bootstrap-min' );
	wp_enqueue_script( 'fm-bootstrap-nav' );
	wp_enqueue_script( 'fm-owl-carousel-min' );
	wp_enqueue_script( 'fm-jquery-easing' );
	wp_enqueue_script( 'fm-custom' );
}