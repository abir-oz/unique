<?php

	$unique_wm = new WP_Query( array(
		'post_type' => 'slider',
	) );

	if ( $unique_wm->have_posts() ) {
		?>
        <div class="slide-one-item home-slider owl-carousel">
			<?php

				while ( $unique_wm->have_posts() ) {
					$unique_wm->the_post();
					$sliders = get_fields();


					$thumbnail   = $sliders[ 'slider_image' ];
					$heading     = $sliders[ 'slider_heading' ];
					$sub_heading = $sliders[ 'slider_sub-heading' ];

					?>


                    <div class="site-blocks-cover overlay"
                         style="background-image: url(<?php echo $thumbnail; ?>);"
                         data-aos="fade"
                         data-stellar-background-ratio="0.5">
                        <div class="container">

                            <div class="row align-items-center justify-content-center text-center">
                                <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                                    <h1 class="text-white font-weight-light"><?php echo $heading; ?></h1>
                                    <p><?php echo $sub_heading; ?></p>
                                    <p><a href="#" class="btn btn-primary py-3 px-5 text-white">Book Now!</a></p>
                                </div>
                            </div>


                        </div>
                    </div>


					<?php
				}
			?>
        </div>
		<?php

	}
	wp_reset_query();

?>


