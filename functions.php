<?php
	
	function my_assets() {
		wp_enqueue_style( 'owl-carousel', get_stylesheet_directory_uri() . '/css/owl.carousel.css' );
		wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
		wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css' );
		wp_enqueue_style( 'bloomtheme', get_stylesheet_uri());
		wp_enqueue_style( 'ionicons', get_stylesheet_directory_uri() . '/css/ionicons.min.css' );
		wp_enqueue_style( 'animate', get_stylesheet_directory_uri() . '/css/animate.css' );
		wp_enqueue_style( 'responsive', get_stylesheet_directory_uri() . '/css/responsive.css' );
		
		wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2.min.js');
		wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js');
		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
		wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ) );
		wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.js', array( 'jquery' ) );
		wp_enqueue_script( 'slider', get_template_directory_uri() . '/js/slider.js', array( 'jquery' ) );
		wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0', true );
	}
	add_action( 'wp_enqueue_scripts', 'my_assets' );
