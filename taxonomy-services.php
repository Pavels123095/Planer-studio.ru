<?php
// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}
?>

<?php get_header(); ?>

<main id="planer-main-page" class="planer-main-section-top planer-layout-section">
    <div class="planer-wrapper-main-section-top">
        <div class="planer-main-wrapper">
            <div class="planer-title-catalog planer-title-page">
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="planer-archive-catalog-content">
                <?php $args = array(
                    'post_type' => 'services',
                    'numberposts' => '20',
                    'orderby' => 'date',
                );
                $cat_post = new WP_Query($args);
                
                if ($cat_post->have_posts()) :
                    while ($cat_post->have_posts()) : $cat_post->the_post();
                        require TEMPLATEPATH .'/templates/catalog/catalog-loop.php';
                    endwhile;
                endif;
                wp_reset_postdata(); ?>
            </div>
        </div>
        <div class="planer-back">
            <?php the_sky_planer(); ?>
            <div class="planer-city"><img src="<?php echo get_template_directory_uri(); ?>/assets/img//banner/city.png" alt=""></div>
            <div class="planer-icons-catalog planer-boy"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/a2_razmit_svgformat.svg" alt=""></div>
            <?php the_grass_planer(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
