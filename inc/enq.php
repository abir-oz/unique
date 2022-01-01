<?php

function unique_assets()
{


	wp_enqueue_style('wptheme-poppins.css', "//fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700");
	wp_enqueue_style('wptheme-icomon.css', get_template_directory_uri() . '/assets/fonts/icomoon/style.css', null, '1.0');
	wp_enqueue_style('wptheme-flaticon.css', get_template_directory_uri() . '/assets/fonts/flaticon/font/flaticon.css', null, '1.0');
	wp_enqueue_style('wptheme-aos.css', get_template_directory_uri() . '/assets/css/aos.css', null, '1.0');
	wp_enqueue_style('wptheme-bootstrap-datepicker.css', get_template_directory_uri() . '/assets/css/bootstrap-datepicker.css', null, '1.0');
	wp_enqueue_style('wptheme-bootstrap.min.css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', null, '1.0');
	wp_enqueue_style('wptheme-jquery-ui.css', get_template_directory_uri() . '/assets/css/jquery-ui.css', null, '1.0');
	wp_enqueue_style('wptheme-magnific-popup.css', get_template_directory_uri() . '/assets/css/magnific-popup.css', null, '1.0');
	wp_enqueue_style('wptheme-mediaelementplayer.css', get_template_directory_uri() . '/assets/css/mediaelementplayer.css', null, '1.0');
	wp_enqueue_style('wptheme-owl.carousel.min.css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', null, '1.0');
	wp_enqueue_style('wptheme-owl.theme.default.min.css', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', null, '1.0');
	wp_enqueue_style('wptheme-style.css', get_template_directory_uri() . '/assets/css/style.css', null, '1.0');


	wp_enqueue_script('wptheme-aos.js', get_template_directory_uri() . '/assets/js/aos.js', array('jquery'), '1.0', true);
	wp_enqueue_script('wptheme-bootstrap-datepicker.min.js', get_template_directory_uri() . '/assets/js/bootstrap-datepicker.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('wptheme-bootstrap.min.js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('wptheme-jquery-3.3.1.min.js', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('wptheme-jquery-migrate-3.0.1.min.js', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.1.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('wptheme-jquery-ui.js', get_template_directory_uri() . '/assets/js/jquery-ui.js', array('jquery'), '1.0', true);
	wp_enqueue_script('wptheme-jquery.countdown.min.js', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('wptheme-jquery.magnific-popup.min.js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('wptheme-jquery.stellar.min.js', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('wptheme-main.js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
	wp_enqueue_script('wptheme-mediaelement-and-player.min.js', get_template_directory_uri() . '/assets/js/mediaelement-and-player.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('wptheme-owl.carousel.min.js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('wptheme-popper.min.js', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('wptheme-slick.min.js', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '1.0', true);


	if (is_singular()) {
		wp_enqueue_script("comment-reply");
	}
}

add_action('wp_enqueue_scripts', 'unique_assets');
