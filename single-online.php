<?php get_header(); ?>

<section class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>">
    <div class="container">
        <div class="hero__content">
            <h1 class="hero__title text-center"><?php echo the_title() ?></h1>
        </div>
    </div>
</section>

<section class="course-single">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <h2 class="fs-5 fw-600">Course Syllabus</h2>
                <?php echo the_field('syllabus') ?>
            </div>

            <div class="col-lg-3 col-md-3">
                <p><strong>Cost</strong>: <span><?php echo the_field('cost') ?></span></p>
                <p><strong>Duration</strong>: <span><?php echo the_field('duration') ?></span></p>
                <p><strong>Certificate</strong>: <span><?php if (get_field('certificate')) { ?> Yes <?php } else { ?> No <?php } ?></span></p>
            </div>
        </div>
    </div>
</section>
<?php get_footer() ?>