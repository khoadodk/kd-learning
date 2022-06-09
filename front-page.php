<?php

/*
* Template name: Front Page
*/

get_header(); ?>


<section class="hero" style="background-image: url(<?php echo the_field('hero_image') ?>)">
    <div class="container d-flex justify-content-center text-center">
        <div class="hero__content">
            <h1 class="hero__title">KD LEARNING</h1>
            <p class="fs-5 text-white py-2 w-50 text-center mx-auto"><?php echo the_field('hero_title') ?></p>
            <button type="button" class="btn btn-primary my-2" data-bs-toggle="modal" data-bs-target="#signUpModal">
                <svg style="color: white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" zoomAndPan="magnify" viewBox="0 0 30 30.000001" height="20" preserveAspectRatio="xMidYMid meet" version="1.0">
                    <defs>
                        <clipPath id="id1">
                            <path d="M 2.328125 4.222656 L 27.734375 4.222656 L 27.734375 24.542969 L 2.328125 24.542969 Z M 2.328125 4.222656 " clip-rule="nonzero" fill="white"></path>
                        </clipPath>
                    </defs>
                    <g clip-path="url(#id1)">
                        <path fill="white" d="M 27.5 7.53125 L 24.464844 4.542969 C 24.15625 4.238281 23.65625 4.238281 23.347656 4.542969 L 11.035156 16.667969 L 6.824219 12.523438 C 6.527344 12.230469 6 12.230469 5.703125 12.523438 L 2.640625 15.539062 C 2.332031 15.84375 2.332031 16.335938 2.640625 16.640625 L 10.445312 24.324219 C 10.59375 24.472656 10.796875 24.554688 11.007812 24.554688 C 11.214844 24.554688 11.417969 24.472656 11.566406 24.324219 L 27.5 8.632812 C 27.648438 8.488281 27.734375 8.289062 27.734375 8.082031 C 27.734375 7.875 27.648438 7.679688 27.5 7.53125 Z M 27.5 7.53125 " fill-opacity="1" fill-rule="nonzero"></path>
                    </g>
                </svg> Sign Up
            </button>
        </div>
    </div>
</section>

<section class="features-section py-5">
    <h1 class="heading text-center py-3">Features<span></span></h1>
    <p class="text-center pb-3">What We Have</p>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="d-flex align-items-center small border rounded mb-3 feature-holder">
                    <div class="flex-shrink-0">
                        <img src="<?php echo get_template_directory_uri() ?>/images/feature1.png" alt="Feature 1" class="img-fluid">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h3 class="fs-6 fw-600 mt-3">
                            <?php echo the_field('feature_one_title') ?>
                        </h3>
                        <p><?php echo the_field('feature_one_text') ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="d-flex align-items-center small border rounded mb-3 feature-holder">
                    <div class="flex-shrink-0">
                        <img src="<?php echo get_template_directory_uri() ?>/images/feature2.png" alt="Feature 2" class="img-fluid">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h3 class="fs-6 fw-600 mt-3">
                            <?php echo the_field('feature_two_title') ?>
                        </h3>
                        <p><?php echo the_field('feature_two_text') ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="d-flex align-items-center small border rounded mb-3 feature-holder">
                    <div class="flex-shrink-0">
                        <img src="<?php echo get_template_directory_uri() ?>/images/feature3.png" alt="Feature 3" class="img-fluid">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h3 class="fs-6 fw-600 mt-3">
                            <?php echo the_field('feature_three_title') ?>
                        </h3>
                        <p><?php echo the_field('feature_three_text') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main-content py-3">
    <h1 class="heading text-center py-3">Our Goal<span></span></h1>
    <p class="text-center pb-3">Why choose us</p>
    <div class="container">
        <div class="row align-items-center ">
            <div class="col-lg-6 col-md-6 text-center">
                <?php
                if (has_post_thumbnail()) {
                ?>
                    <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="Main content" class="img-fluid">
                <?php
                } else {
                ?>
                    <img src="<?php echo get_template_directory_uri() ?>/images/placeholder.png" alt="placeholder" class="img-fluid rounded">
                <?php
                }
                ?>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="content-area">
                    <?php the_content() ?>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="main-content py-5">
    <div class="container">
        <h1 class="heading text-center py-3">Courses<span></span></h1>
        <p class="text-center pb-3">What We Offer</p>

        <div class="row">
            <div class="col-lg-3 col-md-3">
                <a href="<?php echo get_bloginfo('url') ?>/job_oriented" class="card text-dark text-center mb-3">
                    <img src="<?php echo get_template_directory_uri() ?>/images/course1.png" alt="Course 1">
                    <div class="card-body">
                        <h3 class="m-0 fs-6 fw-600">Job Oriented Courses</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3">
                <a href="<?php echo get_bloginfo('url') ?>/hybrid" class="card text-dark text-center mb-3">
                    <img src="<?php echo get_template_directory_uri() ?>/images/course2.png" alt="Course 2">
                    <div class="card-body">
                        <h3 class="m-0 fs-6 fw-600">Hybrid Courses</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3">
                <a href="<?php echo get_bloginfo('url') ?>/online" class="card text-dark text-center mb-3">
                    <img src="<?php echo get_template_directory_uri() ?>/images/course3.png" alt="Course 3">
                    <div class="card-body">
                        <h3 class="m-0 fs-6 fw-600">Online Courses</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3">
                <a href="<?php echo get_bloginfo('url') ?>/inperson" class="card text-dark text-center mb-3">
                    <img src="<?php echo get_template_directory_uri() ?>/images/course4.png" alt="Course 4">
                    <div class="card-body">
                        <h3 class="m-0 fs-6 fw-600">In Person Courses</h3>
                    </div>
                </a>
            </div>
        </div>

    </div>
</section>

<?php get_footer() ?>