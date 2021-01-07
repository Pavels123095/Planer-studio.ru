<?php
if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}
the_post();
$id = get_the_ID();
?>
<?php get_header(); ?>

<main id="planer-main-page post-<?php the_ID(); ?>">
    <section class="planer-section-services planer-main-section-top planer-layout-section">
        <div class="planer-wrapper-main-section-top">
            <div class="planer-main-wrapper">
                <div class="planer-title-page">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="planer-services-img">
                    <? if( has_post_thumbnail() ): 
                        the_post_thumbnail();
                    endif; ?>
                </div>
                <div class="planer-first-screen-description planer-description-visited-site">
                    <?php the_content(); ?>
                </div>
                <div class="planer-cost-services">
                    <span> от <?php echo get_post_meta($id,'planer_cost_catalog', true ); ?> руб</span>
                    <span class="planer-down-cost"> <?php echo get_post_meta($id,'planer_cost_down', true ); ?> руб</span>
                </div>
                <div class="planer-btn-services-call">
                    <a href="<?php echo get_home_url().'/'.'case/'; ?>" class="planer-btn-cases">Примеры работ</a>
                </div>
                <div class="planer-up-down-list planer-down-list">
                    <div class="planer-down-list-wrapper">
                        <i class="fas fa-sort-down"></i><span>листайте вниз</span>
                    </div>
                </div>
            </div>
            <div class="planer-arrow-pagination-services">
                <?php planer_post_navigation_services(); ?>
            </div>
            <div class="planer-back">
                <?php the_sky_planer(); ?>
                <div class="planer-airplane"><?php svg_airplane(); ?></div>
                <div class="planer-city"><img src="<?php echo get_template_directory_uri(); ?>/assets/img//banner/city.png" alt=""></div>
                <div class="planer-single-service-boy planer-boy">
                    <!-- <img src="<?php //echo get_template_directory_uri();?>/assets/img/a2menwoman.png" alt=""> -->
                    <?php svg_men(); ?>
                </div>
                <?php the_grass_planer(); ?>
            </div>
        </div>
    </section>
    <section class="planer-section-blur planer-main-section-top planer-visited-section planer-layout-section">
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
            <div class="planer-visited-content-second-wrapper planer-main-wrapper planer-layout-container">
                <div class="planer-title-page">
                    <h1>На что обратить внимание?</h1>
                </div>
                <div class="planer-single-description">
                    <p>
                        При создании сайта-визитки прежде всего нужно делать упор на визуальный аспект:
                        дизайн должен быть запоминающимся и соответствующим современным требованиям.
                        С другой стороны, нужно тщательно продумать информацию,
                        которую вы собираетесь размещать на сайте:
                        она должна быть уникальной и содержать максимальное количество ваших преимуществ.
                    </p>
                </div>
                <div class="planer-visited-content-allow">
                    <div class="planer-how-visited-title">
                        <h3>Какие преимущества?</h3>
                    </div>
                    <ul class="planer-ul-visited-about">
                        <li>
                            <span class="planer-li-before"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon8.png" alt=""></span>
                            <span class="planer-li-text">Низкая стоимость</span>
                        </li>
                        <li>
                            <span class="planer-li-before"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon7.png" alt=""></span>
                            <span class="planer-li-text">Возможность воплотить практически любое дизайнерское решение</span>
                        </li>
                        <li>
                            <span class="planer-li-before"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon6.png" alt=""></span>
                            <span class="planer-li-text">Быстрая разработка</span>
                        </li>
                        <li>
                            <span class="planer-li-before"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon5.png" alt=""></span>
                            <span class="planer-li-text">Высокая скорость загрузки</span>
                        </li>
                        <li>
                            <span class="planer-li-before"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon4.png" alt=""></span>
                            <span class="planer-li-text">Простая и интуитивно-понятная структура</span>
                        </li>
                        <li>
                            <span class="planer-li-before"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon3.png" alt=""></span>
                            <span class="planer-li-text">Невысокая стоимость хостинга</span>
                        </li>
                        <li>
                            <span class="planer-li-before"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon2.png" alt=""></span>
                            <span class="planer-li-text" >Возможность использования практически любой cms</span>
                        </li>
                        <li>
                            <span class="planer-li-before"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon1.png" alt=""></span>
                            <span class="planer-li-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="planer-down-list">
                <div class="planer-color-blue planer-down-list-wrapper">
                    <i class="fas fa-sort-down"></i><span>листайте вниз</span>
                </div>
            </div>
            <div class="planer-back">
                <?php the_sky_planer(); ?>
                <div class="planer-airplane"><?php //svg_airplane(); ?></div>
                <div class="planer-city"><img src="<?php echo get_template_directory_uri(); ?>/assets/img//banner/city.png" alt=""></div>
                <div class="planer-single-service-boy planer-boy">
                    <!-- <img src="<?php //echo get_template_directory_uri();?>/assets/img/a2menwoman.png" alt=""> -->
                    <?php svg_men(); ?>
                </div>
                <?php the_grass_planer(); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>