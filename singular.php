<?php

if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}

the_post();
$id = get_the_ID();

?>

<?php get_header(); ?>


<main id="planer-main-page post-<?php the_ID(); ?>">
    <section class="planer-main-section-top planer-layout-section">
        <div class="planer-wrapper-main-section-top">
            <div class="planer-main-content planer-layout-row">
                <div class="planer-single-breadcrumbs planer-main-logo">
                    <?php kama_breadcrumbs(' > '); ?>
                </div>
                <div class="planer-main-right-content">
                    <div class="planer-main-right-contact">
                        <a class="planer-main-phone" href="">
                            <?php
                                $val = get_option('planer_tel_option'); //option_key - имя опции
                                echo trim($val);
                            ?>
                        </a>
                        <a class="planer-main-mail" href="">
                            <?php
                                $val = get_option('planer_mail_option'); //option_key - имя опции
                                echo trim($val);
                            ?>
                        </a>
                    </div>
                    <div class="planer-main-modal-btn-show">
                        <button class="planer-main-btn">Оставить заявку</button>
                    </div>
                </div>
            </div>
            <?php get_template_part( 'templates/cases-post', get_post_type() ); ?>
            <!-- <div class="planer-down-list">
                <div class="planer-down-list-wrapper">
                    <i class="fas fa-sort-down"></i><span>листайте вниз</span>
                </div>
            </div> -->
            <div class="planer-back">
                <?php the_sky_planer(); ?>
                <div class="planer-airplane"><?php svg_airplane(); ?></div>
                <div class="planer-city"><img src="<?php echo get_template_directory_uri(); ?>/assets/img//banner/city.png" alt=""></div>
                <div class="planer-boy planer-bottom-boy planer-boy-pl-yellow"><img src="<?php echo get_template_directory_uri();?>/assets/img/a2_menwoman.png" alt=""></div>
                <?php the_grass_planer(); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>