<?php

/*
* Template name: Contact Page
*/

get_header(); ?>

<section class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)">
    <div class="container">
        <div class="hero__content">
            <h1 class="hero__title text-center"><?php echo get_the_title() ?></h1>
        </div>
    </div>
</section>

<section class="contact-form my-5">
    <div class="container d-flex justify-content-center">
        <form>
            <?php echo the_field('contact_form') ?>
        </form>
    </div>
</section>


<?php get_footer() ?>