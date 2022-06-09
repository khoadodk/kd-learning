<?php get_header() ?>

<section class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)">
    <div class="container">
        <div class="hero__content">
            <h1 class="hero__title text-center"><?php echo get_the_title() ?></h1>
        </div>
    </div>
</section>

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