<?php title_part("Our Services"); ?>

<?php

$unique_wm = new WP_Query(array(
    'post_type' => 'services',
));

if ($unique_wm->have_posts()) {


?>

    <div class="row mb-3 align-items-stretch">
        <?php
        while ($unique_wm->have_posts()) {
            $unique_wm->the_post();
        ?>
            <div class="col-md-4 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="h-entry">
                    <img src="<?php the_post_thumbnail_url("hompage_thumb"); ?>" alt="Image" class="img-fluid">
                    <h2 class="font-size-regular text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
            </div>
        <?php
        }
        ?>

    </div>


    <?php
    if ($unique_wm->post_count > 6) {
    ?>
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="400">
                <a href="#" class="btn btn-outline-primary border-2 py-3 px-5">Learn More</a>
            </div>
        </div>
<?php
    }
}


wp_reset_query();

?>