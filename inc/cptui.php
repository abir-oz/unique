<?php

function cptui_register_my_cpts() {

	/**
	 * Post Type: Sliders.
	 */

	$labels = [
		"name" => __( "Sliders", "unique" ),
		"singular_name" => __( "Slider", "unique" ),
	];

	$args = [
		"label" => __( "Sliders", "unique" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "slider", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "slider", $args );

	/**
	 * Post Type: Services.
	 */

	$labels = [
		"name" => __( "Services", "unique" ),
		"singular_name" => __( "Service", "unique" ),
	];

	$args = [
		"label" => __( "Services", "unique" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "services", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "services", $args );

	/**
	 * Post Type: How it Works.
	 */

	$labels = [
		"name" => __( "How it Works", "unique" ),
		"singular_name" => __( "How it Works", "unique" ),
	];

	$args = [
		"label" => __( "How it Works", "unique" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "how-it-works", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title" ],
		"show_in_graphql" => false,
	];

	register_post_type( "how-it-works", $args );

	/**
	 * Post Type: Why Us.
	 */

	$labels = [
		"name" => __( "Why Us", "unique" ),
		"singular_name" => __( "Why Us", "unique" ),
	];

	$args = [
		"label" => __( "Why Us", "unique" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "why-us", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title" ],
		"show_in_graphql" => false,
	];

	register_post_type( "why-us", $args );

	/**
	 * Post Type: Testimonials.
	 */

	$labels = [
		"name" => __( "Testimonials", "unique" ),
		"singular_name" => __( "Testimonial", "unique" ),
	];

	$args = [
		"label" => __( "Testimonials", "unique" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "testimonials", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "testimonials", $args );

	/**
	 * Post Type: One Stop Fufillments.
	 */

	$labels = [
		"name" => __( "One Stop Fufillments", "unique" ),
		"singular_name" => __( "One Stop Fufillment", "unique" ),
	];

	$args = [
		"label" => __( "One Stop Fufillments", "unique" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "one_stop", "with_front" => true ],
		"query_var" => true,
		"show_in_graphql" => false,
	];

	register_post_type( "one_stop", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

