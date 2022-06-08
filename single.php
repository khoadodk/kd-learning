<?php get_header() ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <header class="main-header py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="page-title-heading">
                            <h1 class="fs-4 fw-600"><?php echo get_the_title() ?></h1>
                            <p><?php echo get_the_excerpt() ?></p>
                            <p><span class="badge bg-primary"><?php the_time('F jS, Y') ?></span> By <?php the_author_posts_link(); ?></p>
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

        <section class="page-content border-top my-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9">
                        <div class="main-contentop my-3">
                            <?php the_content() ?>
                            <div class="alert alert-secondary">
                                <p class="postmetadata">Posted in: <?php the_category(', ') ?></p>
                            </div>
                            <?php comments_template() ?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 my-3">
                        <?php get_sidebar() ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile;
else : ?>

    <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

<?php get_footer() ?>