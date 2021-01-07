<?php
if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}

the_post();
?>

<?php get_header(); ?>
    <main id="planer-main-page post-<?php the_ID(); ?>">
        <section class="planer-main-section-top planer-layout-section" id="<?php the_ID();?>">
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
                    <div class="planer-single-time">
                        <time class="planer-date-post-single"><?php the_date('d M Y'); ?></time>
                    </div>
                    <div class="planer-single-title planer-title-page">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="planer-single-wrapper">
                        <div class="planer-single-img">
                            <? if( has_post_thumbnail() ): 
                                $attr = array(300, 160);
                                echo get_the_post_thumbnail();
                            endif; ?>
                        </div>
                        <div class="planer-single-description">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="planer-pagination-wrapper">
                        <?php planer_post_navigation(); ?>
                    </div>
                </div>
                <div class="planer-back">
                    <?php the_sky_planer(); ?>
                    <div class="planer-airplane"><?php svg_airplane(); ?></div>
                    <div class="planer-grass planer-bottom planer-box-city"><img src="<?php echo get_template_directory_uri(); ?>/assets/img//banner/box-city.png" alt=""></div>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>