<?php get_header(); ?>

<main id="planer-main-page post-<?php the_ID(); ?>">
    <section class="planer-main-section-top planer-layout-section">
        <div class="planer-wrapper-main-section-top">
            <div class="planer-main-content planer-layout-row">
                <div class="planer-single-breadcrumbs planer-main-logo">
                    <?php kama_breadcrumbs(' > '); ?>
                </div>
            </div>
            <div class="planer-main-wrapper">
                <?php the_post_thumbnail( 'full' ); ?>
            </div>
            <div class="planer-back">
                <?php the_sky_planer(); ?>
                <div class="planer-city"><img src="<?php echo get_template_directory_uri(); ?>/assets/img//banner/city.png" alt=""></div>
                <?php the_grass_planer(); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>