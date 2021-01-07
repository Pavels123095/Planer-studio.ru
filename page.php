<?php
// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}
?>

<?php get_header(); ?>

    <main id="planer-main-page" class="planer-main-section-top planer-layout-section">
        <div class="planer-wrapper-main-section-top planer-layout-container">

            <div class="planer-title-page">
                <h1> <?php wp_title(''); ?></h1>
            </div>
            <div class="planer-page-content planer-layout-row">
                <?php the_content(); ?>
            </div>

            <div class="planer-back">
                <?php the_sky_planer(); ?>
                <div class="planer-city"><img src="<?php echo get_template_directory_uri(); ?>/assets/img//banner/city.png" alt=""></div>
                <div class="planer-airplane"><?php //svg_airplane(); ?></div>
                <div class="planer-boy"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/a2.svg" alt=""></div>
                <?php the_grass_planer(); ?>
            </div>
        </div>
    </main>

<?php get_footer(); ?>