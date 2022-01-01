<?php

get_header();
the_post();
$banner_background = get_template_directory_uri() . '/assets/images/hero_bg_2.jpg';
?>
<div class="site-blocks-cover inner-page-cover" style="background-image: url(<?php echo $banner_background ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                <h1 class="text-white font-weight-light">Get In Touch</h1>
                <div><a href="index.html">Home</a> <span class="mx-2 text-white">&bullet;</span> <span class="text-white">
                        <?php the_title(); ?>
                    </span></div>

            </div>
        </div>
    </div>
</div>

<div class="site-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mx-0 px-0 mb-5 bg-white">
                <div class="col-md-12 mb-3 px-0 mx-0">
                    <?php
                    if (has_post_thumbnail()) :
                    ?>
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="Image" class="img-fluid" />
                    <?php
                    endif;
                    ?>
                </div>
                <div class="p-3 m-3 mb-5">
                    <h2 class="font-weight-light"><? the_title(); ?></h2>
                    <p class="text-muted">
                        <? the_content(); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
