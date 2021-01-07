<?php get_header();  $post_id = get_the_ID(); ?>

<main id="planer-main-page post-<?php the_ID(); ?>" class="planer-single-develop-main">
    <section class="planer-section-single-develop-project planer-main-section-top planer-layout-section">
        <div class="planer-wrapper-main-section-top">
            <div class="planer-main-wrapper">
                <div class="planer-single-title planer-title-page">
                <h4>разработка и продвижение сайта компании</h4>
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="planer-single-dev-content-wrapper">
                    <div class="planer-single-dev-about-projects">
                        <h1 class="single-about-project-title">О проекте</h1>
                        <span class="description-about-project">
                            <?php echo get_post_meta( $post_id, 'planer_case_first_screen_description', true ); ?>
                        </span>
                        <div class="planer-single-dev-tasking-wrapper">
                            <div class="planer-single-dev-task planer-single-tasking-item">
                                <h3 class="single-dev-tasking-title">Задача  <strong>-</strong>  </h3>
                                <span class="single-dev-tasking-description">
                                    <?php echo get_post_meta($post_id, 'planer_case_first_screen_task_desc', true); ?>
                                </span>
                            </div>
                            <div class="planer-signle-dev-instrument planer-single-tasking-item">
                                <h3 class="single-dev-tasking-title">Инструменты  <strong>-</strong>  </h3>
                                <span class="single-dev-tasking-description">
                                    <?php echo get_post_meta($post_id, 'planer_case_first_screen_instrument_desc', true); ?>
                                </span>
                            </div>
                            <div class="planer-single-dev-geolocation planer-single-tasking-item">
                                <h3 class="single-dev-tasking-title">Гео  <strong>-</strong> </h3>
                                <span class="single-dev-tasking-description">
                                    <?php echo get_post_meta($post_id, 'planer_case_first_screen_geo', true); ?>
                                </span>
                            </div>
                        </div>
                        <div class="planer-single-dev-realization-wrapper">
                            <h1 class="single-about-project-title">Реализация</h1>
                                <?php echo get_post_meta($post_id, 'planer_case_first_screen_realization', true); ?>
                        </div>
                    </div>
                    <div class="planer-single-dev-img-responsive">
                        <img src="<?php echo wp_get_attachment_url(get_post_meta($post_id, 'planer_case_first_screen_image_proj', true)); ?>" alt="first_screen">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="planer-section-single-develop-timeworking planer-main-section-top planer-layout-section">
        <div class="planer-wrapper-main-section-top">
            <div class="planer-main-wrapper">
                <div class="planer-single-title planer-title-page">
                    <h1>Показатели дохода за время сотрудничества</h1>
                </div>
                <div class="planer-single-time-this-work-description">
                    <?php echo get_post_meta($post_id, 'planer_case_second_screen_work-desc', true); ?>
                </div>
                <div class="planer-single-graphic-image">
                    <a target="_blank" href="<?php echo wp_get_attachment_url(get_post_meta($post_id, 'planer_case_second_screen_image_graphic', true)); ?>">
                        <img src="<?php echo wp_get_attachment_url(get_post_meta($post_id, 'planer_case_second_screen_image_graphic', true)); ?>" alt="graphic" >
                    </a>
                </div>
                <div class="planer-single-multimedia-production-wrapper">
                    <h4>Мультимедийный контент-продакшен</h4>
                    <?php echo get_post_meta( $post_id, 'planer_case_second_screen_multimedia_desc', true ); ?>
                </div>
                <div class="planer-single-multimedia-production-wrapper">
                    <h4>Создание единого стиля</h4>
                    <?php echo get_post_meta( $post_id, 'planer_case_second_screen_this_one_style', true ); ?>
                </div>
            </div>
        </div>
    </section>
    <section class="planer-section-single-develop-prototyping planer-main-section-top planer-layout-section">
        <div class="planer-wrapper-main-section-top">
            <div class="planer-main-wrapper">
                <div class="planer-title-white planer-single-title planer-title-page">
                    <h1>Прототипирование</h1>
                </div>
                <div class="planer-single-prototype-description">
                    <?php echo get_post_meta($post_id, 'planer_case_three_four_screen_prototype-desc', true); ?>
                </div>
                <div class="planer-single-prototype-image">
                    <img src="<?php echo wp_get_attachment_url(get_post_meta($post_id, 'planer_case_three_four_screen_protopype_img', true)); ?>" alt="prototype_image">
                </div>
            </div>
            <div class="planer-back">
                <?php the_sky_planer(); ?>
                <div class="planer-city"><img src="<?php echo get_template_directory_uri(); ?>/assets/img//banner/city.png" alt=""></div>
                <?php the_grass_planer(); ?>
            </div>
        </div>
    </section>
    <section class="planer-section-single-develop-design planer-main-section-top planer-layout-section">
        <div class="planer-wrapper-main-section-top">
            <div class="planer-main-wrapper">
                <div class="planer-title-white planer-single-title planer-title-page">
                    <h1>Дизайн</h1>
                </div>
                <div class="planer-single-dev-design-description">
                    <?php echo get_post_meta($post_id, 'planer_case_three_four_screen_design_desc', true); ?>
                </div>
                <div class="planer-single-dev-design-image">
                    <img src="<?php echo wp_get_attachment_url(get_post_meta($post_id, 'planer_case_three_four_screen_design_img', true)); ?>" alt="design_prototype">
                </div>
            </div>
            <div class="planer-back">
                <?php the_sky_planer(); ?>
                <div class="planer-city"><img src="<?php echo get_template_directory_uri(); ?>/assets/img//banner/city.png" alt=""></div>
                <?php the_grass_planer(); ?>
            </div>
        </div>
    </section>
    <section class="planer-section-single-develop-promotion planer-main-section-top planer-layout-section">
        <div class="planer-wrapper-main-section-top">
            <div class="planer-main-wrapper">
                <div class="planer-title-white planer-single-title planer-title-page">
                    <h1>Продвижение</h1>
                </div>
                <div class="planer-single-dev-promotion-description">
                    <?php echo get_post_meta($post_id, 'planer_case_five_screen_promotion-desc', true); ?>
                </div>
            </div>
            <div class="planer-back">
                <?php the_sky_planer(); ?>
                <div class="planer-city"><img src="<?php echo get_template_directory_uri(); ?>/assets/img//banner/city.png" alt=""></div>
                <?php the_grass_planer(); ?>
            </div>
        </div>
    </section>
    <section class="planer-section-single-develop-result planer-main-section-top planer-layout-section">
        <div class="planer-wrapper-main-section-top">
            <div class="planer-case-result-wrapper planer-main-wrapper">
                <div class="planer-result-title planer-single-title planer-title-page">
                    <h1>
                        Результат
                        <span class="result-this-clicks"><strong><?php echo number_format(get_post_meta($post_id, 'planer_case_six_screen_numb_clicks_real', true), 0,' ',' '); ?></strong> кликов</span>
                        <span class="result-number-strong">CTR <?php echo get_post_meta($post_id, 'planer_case_six_screen_numb_ctr', true).'%'; ?></span>
                    </h1>
                </div>
                <div class="planer-single-dev-result-description">
                    <span><?php echo get_post_meta($post_id, 'planer_case_six_screen_time_work_pr_desc', true); ?></span>
                </div>
                <div class="planer-single-dev-result-full-desc">
                    <div class="planer-single-result-people planer-single-result-full-item">
                        <strong><?php echo number_format(get_post_meta($post_id, 'planer_case_six_screen_numb_people_soc', true),0, ' ', ' '); ?></strong>
                        <span>Подписчиков в сообществе <?php echo get_post_meta($post_id, 'planer_case_six_screen_selected_social', true); ?> </span>
                    </div>
                    <div class="planer-single-result-clients planer-single-result-full-item">
                        <strong><?php echo get_post_meta($post_id, 'planer_case_six_screen_numb_clients_call', true); ?></strong>
                        <span>Клиентов оставили заявку при среднем чеке 35 000 рублей</span>
                    </div>
                    <div class="planer-single-result-traffic planer-single-result-full-item">
                        <strong><?php echo get_post_meta($post_id,'planer_case_six_screen_traffic_up', true); ?>%</strong>
                        <span>Вырос трафик в интернет-магазине</span>
                    </div>
                </div>
                <div class="planer-single-dev-clicks-wrapper">  
                    <h5>Клики: </h5>
                    <span>План - <?php  echo number_format(get_post_meta($post_id, 'planer_case_six_screen_numb_clicks_plan', true),0,' ', ' '); ?></span>
                    <span>Факт - <?php  echo number_format(get_post_meta($post_id, 'planer_case_six_screen_numb_clicks_real', true),0,' ', ' ');  ?></span>
                    <p>
                        <?php echo 'Перевыполнение плана по кликам на '.get_post_meta($post_id, 'planer_case_six_screen_plan_close', true).'%'; ?>
                    </p>
                </div>
                <div class="planer-single-dev-result-audition">
                    <h5>Охват</h5>
                    <span> - <?php echo number_format(get_post_meta($post_id, 'planer_case_six_screen_numb_auditories_all', true), 0,' ', ' '); ?> пользователей</span>
                </div>
                <div class="planer-single-dev-google-analitic planer-single-dev-result-description">
                    <h5>Показатели Google Analystics:</h5>
                    <span class="planer-google-anl">Количество сеансов - <?php echo number_format(get_post_meta($post_id,'planer_case_six_screen_google_anl_seances', true),0, ' ', ' '); ?></span>
                    <p>
                        <?php echo get_post_meta($post_id,'planer_case_six_screen_google_analystics', true); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="planer-section-single-develop-designlogistics planer-main-section-top planer-layout-section">
        <div class="planer-wrapper-main-section-top">
            <div class="planer-wrapper-design-end planer-main-wrapper">
                <div class="planer-title-white planer-single-title planer-title-page">
                    <h1>Дизайн и логика сайта (Ui/UX)</h1>
                </div>
                <div class="planer-single-dev-result-description">
                    <?php echo get_post_meta($post_id, 'planer_case_seven_screen_logistic_desc_end',true); ?>
                </div>
                <div class="planer-single-dev-designlogistics-image">
                    <img src="<?php echo wp_get_attachment_url(get_post_meta($post_id, 'planer_case_seven_screen_logistic_img_end', true)); ?>" alt="design_end">
                </div>
            </div>
            <div class="planer-back">
                <?php the_sky_planer(); ?>
                <div class="planer-city"><img src="<?php echo get_template_directory_uri(); ?>/assets/img//banner/city.png" alt=""></div>
                <?php the_grass_planer(); ?>
            </div>
        </div>
    </section>
    <section class="planer-section-single-develop-designlogistics planer-main-section-top planer-layout-section">
        <div class="planer-wrapper-main-section-top">
            <div class="planer-wrapper-design-end planer-main-wrapper">
                <div class="planer-wrapper-end-works">
                    <div class="planer-title-white planer-single-dev-end-page planer-single-title planer-title-page">
                        <h1>Вывод</h1>
                    </div>
                    <div class="planer-single-dev-description-end-work">
                        <?php echo get_post_meta($post_id, 'planer_case_seven_screen_result_work_end', true); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>