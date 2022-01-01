<?php

	/*
	 * Template Name: Homepage
	 */

	get_header();

	$post_types       = [ "slider", "sign_up_offer", "services", "how-it-works", "why-us", "testimonials" ];
	$total_post_types = 1;

	foreach ( $post_types as $post_type ) {
		if ( $total_post_types % 2 == 0 ) {
			if ( $total_post_types == 2 ) {
				$container_class = "site-section";
			} else {
				$container_class = "site-section bg-light";
			}
		} else {
			$container_class = "site-section";
		}

		if ( $post_type !== "slider" ) {

			if ( $post_type == "testimonials" ) {
				$container_class = "site-section block-13 bg-light";
			}
			echo '<div class="' . $container_class . '">
            <div class="container">';
		}
		get_template_part( "template-parts/homepage/{$post_type}" );
		$total_post_types ++;

		?>

        </div>
        </div>

		<?php
	}

	get_footer();


