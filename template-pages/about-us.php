<?php
/*
	 * Template Name: About Us
	 *
	 */


get_header();


$about_us = new WP_Query(array(
    'post_type' => 'one_stop',
));
?>

<div class="site-blocks-cover inner-page-cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                <h1 class="text-white font-weight-light">One Stop Fufillment Solution</h1>
                <div><a href="<?php echo site_url(); ?>">Home</a> <span class="mx-2 text-white">&bullet;</span> <span class="text-white">About</span></div>

            </div>
        </div>
    </div>
</div>


<div class="site-section" data-aos="fade-up">
    <div class="container">
        <?php
        if ($about_us->have_posts()) {

            while ($about_us->have_posts()) {
                $about_us->the_post();
                $section_1 = get_field('first_image');
                $section_2 = get_field('first_text');

                $section_3 = get_field('second_text');
                $section_4 = get_field('second_image');

                $section_5 = get_field('third_image');
                $section_6 = get_field('third_text');

                $section_7 = get_field('fourth_text');
                $section_8 = get_field('fourth_image');

                $section_9 = get_field('fifth_image');
                $section_10 = get_field('fifth_text');

                $section_11 = get_field('sixth_text');
                $section_12 = get_field('sixth_image');
        ?>
                <div class="row text">


                    <div class="row align-items-center justify-content-center my-3">
                        <div class="col-md-6 mb-5 mb-md-0">
                            <img src="<?php echo $section_1 ?>" alt="Image" class="img-fluid rounded">
                        </div>
                        <div class="col-md-6 pl-md-5">
                            <p><?php echo $section_2 ?></p>
                        </div>
                    </div>


                    <div class="row align-items-center justify-content-center my-3">

                        <div class="col-md-6 pl-md-5">
                            <p><?php echo $section_3 ?></p>
                        </div>
                        <div class="col-md-6 mb-5 mb-md-0">
                            <img src="<?php echo $section_4 ?>" alt="Image" class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-center my-3">
                        <div class="col-md-6 mb-5 mb-md-0">
                            <img src="<?php echo $section_5 ?>" alt="Image" class="img-fluid rounded">
                        </div>
                        <div class="col-md-6 pl-md-5">

                            <p><?php echo $section_6 ?></p>

                        </div>
                    </div>
                    <div class="row align-items-center justify-content-center my-3">

                        <div class="col-md-6 pl-md-5">

                            <p><?php echo $section_7 ?></p>
                        </div>
                        <div class="col-md-6 mb-5 mb-md-0">
                            <img src="<?php echo $section_8 ?>" alt="Image" class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-center my-3">
                        <div class="col-md-6 mb-5 mb-md-0">
                            <img src="<?php echo $section_9 ?>" alt="Image" class="img-fluid rounded">
                        </div>
                        <div class="col-md-6 pl-md-5">
                            <?php echo $section_10 ?>
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-center my-3">
                        <div class="col-md-6 pl-md-5">
                            <p><?php echo $section_11 ?></p>
                        </div>
                        <div class="col-md-6 mb-5 mb-md-0">
                            <img src="<?php echo $section_12 ?>" alt="Image" class="img-fluid rounded">
                        </div>
                    </div>

                </div>


        <?php

            }
        }
        wp_reset_query();
        ?>

    </div>
</div>


<?php
get_footer();
