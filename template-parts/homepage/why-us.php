<?php title_part( "Why Unique Fufillment?" ); ?>

<?php

	$unique_wm = new WP_Query( array(
		'post_type' => 'how-it-works',
	) );

	if ( $unique_wm->have_posts() ) {

		while ( $unique_wm->have_posts() ) {
			$unique_wm->the_post();
			$thumbanail = get_field('image');

			?>


            <div class="row mb-3 align-items-stretch">
                <div class="col-md-12 col-lg-12 mb-5 mb-lg-4">
                    <div class="h-entry">
                        <img src="<?php echo $thumbanail ?>" alt="Image"
                             class="img-fluid">
                    </div>
                </div>
            </div>


			<?php

		}

	}
	wp_reset_query();

?>





