<?php

	$unique_tm = new WP_Query( array(
		'post_type' => 'testimonials',
	) );

	if ( $unique_tm->have_posts() ) {
		?>
		<?php title_part( "How Our Clients Rate Us?" ); ?>
        <div class="nonloop-block-13 owl-carousel">

			<?php
				while ( $unique_tm->have_posts() ) {
					$unique_tm->the_post();
					$fields = get_fields();


					$thumbnail   = $fields[ 'reviewer_image' ];
					$name        = $fields[ 'name' ];
					$review      = $fields[ 'review' ];
					$designation = $fields[ 'designation' ];


					?>


                    <div class="item">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 mb-5">
                                    <img src="<?php echo $thumbnail; ?>"
                                         alt="Image"
                                         class="img-md-fluid">
                                </div>
                                <div class="overlap-left col-lg-6 bg-white p-md-5 align-self-center">
                                    <p class="text-black lead"><?php echo $review; ?></p>
                                    <p class="">&mdash; <em><?php echo $name; ?></em>, <a
                                                href="#"><?php echo $designation; ?></a></p>
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

