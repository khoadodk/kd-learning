<?php get_header() ?>

<header class="main-header py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="page-title-heading">
                    <h1 class="fs-4 fw-600"><?php echo get_the_title() ?></h1>
                    <p><?php echo get_the_excerpt() ?></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 text-center">
                <?php
                if (has_post_thumbnail()) {
                ?>
                    <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo get_the_title() ?>" class="img-fluid rounded">
                <?php
                } else {
                ?>
                    <img src="<?php echo get_template_directory_uri() ?>/images/placeholder.png" alt="<?php echo get_the_title() ?>" class="img-fluid rounded">
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</header>


<section class="page-content py-5 border-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <article class="main-content small">
                    <?php the_content(); ?>
                </article>
            </div>
            <div class="col-lg-3 col-md-3">
                <?php get_sidebar() ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>