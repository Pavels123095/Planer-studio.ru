<?php
// Do not allow directly accessing this file.
/*
Template Name: О нас
Template Post Type: post, page, event
*/
if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}

    $options_ab_us = get_option('setting_about_us_page');

?>

<?php get_header(); ?>

    <main id="planer-main-page">
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
                <div class="planer-main-wrapper">
                    <div class="planer-title-page">
                        <h1>Если говорить коротко, планер - это:</h1>
                    </div>
                    <div class="planer-main-content-allow">
                        <?php echo $options_ab_us['about_us_setting_planer_editor']; ?>
                    </div>
                </div>
                <div class="planer-down-list">
                    <div class="planer-down-list-wrapper">
                        <i class="fas fa-sort-down"></i><span>листайте вниз</span>
                    </div>
                </div>
                <div class="planer-back">
                    <?php the_sky_planer(); ?>
                    <div class="planer-city"><img src="<?php echo get_template_directory_uri(); ?>/assets/img//banner/city.png" alt=""></div>
                    <?php the_grass_planer(); ?>
                </div>
            </div>
        </section>
        <section class="planer-section-about-us planer-main-section-top planer-layout-section">
            <div class="planer-wrapper-main-section-top planer-about-us">
                <div class="planer-main-wrapper">
                    <div class="planer-title-page">
                        <h1>Наши преимущества</h1>
                    </div>
                    <div class="planer-main-content-allow">
                       <?php echo $options_ab_us['about_us_setting_advant_editor']; ?>
                    </div>
                </div>
                <div class="planer-down-list">
                    <div class="planer-down-list-wrapper">
                        <i class="fas fa-sort-down"></i><span>листайте вниз</span>
                    </div>
                </div>
                <div class="planer-back">
                    <?php the_sky_planer(); ?>
                    <div class="planer-city"><img src="<?php echo get_template_directory_uri(); ?>/assets/img//banner/city.png" alt=""></div>
                    <?php the_grass_planer(); ?>
                </div>
            </div>
        </section>
        <section class="planer-section-about-us planer-main-section-top planer-layout-section">
            <div class="planer-wrapper-main-section-top planer-about-us">
                <div class="planer-main-wrapper">
                    <div class="planer-title-page">
                        <h1>Наши партнёры</h1>
                    </div>
                    <div class="planer-main-content-allow">
                        <?php echo $options_ab_us['about_us_setting_partners_editor']; ?>
                       <div class="planer-partners-content"> 
                           <?php 
                                $args_partner = array('post_type' => 'slider_partners');
                                $partners = new WP_Query( $args_partner );
                                if ($partners->have_posts()) :
                                    while ($partners->have_posts()): $partners->the_post(); $id = get_the_ID();
                            ?>
                                        <div><a href="<?php echo get_post_meta($id, 'planer_partners_link', true); ?>"><?php the_post_thumbnail(); ?></a></div>
                                    <?php endwhile; endif; wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
                <div class="planer-back">
                    <?php the_sky_planer(); ?>
                    <div class="planer-grass planer-box-city"><img src="<?php echo get_template_directory_uri();?>/assets/img/banner/box-city.png" alt=""></div>
                    <?php the_grass_planer(); ?>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>