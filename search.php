<?php get_header(); ?>

<header class="cat-header py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6">
                <div class="cat-header-text text-center">
                    <h1 class="fw-600">Search result for: <?php echo get_search_query() ?></h1>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="default-holder mt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <div class="list-group mb-3">
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                    ?>
                            <a href="<?php the_permalink() ?>" class="list-group-item list-group-item-action small ">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 col-md-4 img-wrapper">
                                        <?php
                                        if (has_post_thumbnail()) {
                                        ?>
                                            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo get_the_title() ?>" class="img-fluid rounded post-thumbnail">
                                        <?php
                                        } else {
                                        ?>
                                            <img src="<?php echo get_template_directory_uri() ?>/images/placeholder.png" alt="<?php echo get_the_title() ?>" class="img-fluid rounded post-thumbnail">
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="col-lg-8 col-md-8">
                                        <h3 class="fs-5 fw-600"><?php echo get_the_title(); ?></h3>
                                        <p><?php echo get_the_excerpt() ?></p>
                                    </div>
                                </div>
                            </a>
                        <?php
                        }
                    } else {
                        ?>
                        <p><?php esc_html_e('Sorry, no posts matched your criteria') ?></p>
                    <?php
                    }
                    ?>
                </div>
            </div>

            <div class="col-lg-3 col-m d-3">

                <?php get_sidebar(); ?>

            </div>
        </div>
    </div>
</section>
<?php get_footer() ?>