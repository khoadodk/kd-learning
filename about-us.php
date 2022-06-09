<?php

/*
* Template name: About us page
*/

get_header();
?>

<section class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)">
    <div class="container">
        <div class="hero__content">
            <h1 class="hero__title text-center"><?php echo get_the_title() ?></h1>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="container">
        <h1 class="heading text-center my-5">Who Are We?<span></span></h1>
        <row class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="<?php echo the_field('who_we_are_image') ?>" alt="who we are" class="img-fluid">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <?php echo the_field('who_we_are_text') ?>
            </div>
        </row>
    </div>
</section>

<section class="my-5">
    <div class="container">
        <h1 class="heading text-center my-5">What Do We Do?<span></span></h1>
        <row class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <?php echo the_field('what_we_do_text') ?>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="<?php echo the_field('what_we_do_image') ?>" alt="who we are" class="img-fluid">
            </div>

        </row>
    </div>
</section>


<?php get_footer() ?>