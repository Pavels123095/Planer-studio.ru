<?php
// Do not allow directly accessing this file.
/*
Template Name: Новости
Template Post Type: post, page, event
*/

if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}

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
                <div class="planer-main-wrapper">
                    <div class="planer-title-page">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="planer-news-content">
                        <?php 
                            $args = array('post_type' => 'post','cat' => '1', 'posts_per_page' => 4, 'numberposts' => 20);
                            $posts = new WP_Query($args);
                            if($posts->have_posts()):
                                while($posts->have_posts()): setup_postdata($posts); $posts->the_post();  ?>
                        <div class="planer-news-item-post">
                            <time class="planer-title-post"><?php echo wp_maybe_decline_date(get_the_date('d M Y')); ?></time>
                            <?php the_post_thumbnail(); ?>
                            <a data-id="<?php the_ID(); ?>" href="<?php the_permalink(); ?>" class="planer-news-except">
                                <?php $text = get_the_excerpt(); echo planer_case_excerpt_task($text, 225); ?>
                            </a>
                        </div>
                        <? endwhile; endif; the_posts_pagination(); wp_reset_postdata(); ?>
                    </div>
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