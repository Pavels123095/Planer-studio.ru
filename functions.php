<?php

use function PHPSTORM_META\map;

require_once TEMPLATEPATH . '/inc/planer-assets.php';
new PlanerAssets();


require_once TEMPLATEPATH . '/inc/planer-post-types.php';
new PlanerPostTypes();

require_once TEMPLATEPATH .'/inc/planer-customizer.php';
new PlanerCustomizer();


require_once TEMPLATEPATH .'/inc/planer-admin-page.php';
new PlanerAdminPage();

// require_once TEMPLATEPATH . '/inc/planer-section-register.php';
// new PlanerSectionRegister();

require_once TEMPLATEPATH .'/inc/kama-metabox.php';
class_exists('Kama_Post_Meta_Box') && new Kama_Post_Meta_Box(
    array(
        'id' => 'planer_result_begin',
        'title' => 'Начальные результаты',
        'post_type'  => array('case', 'page'),
        'fields' => array(
            'planer_result_begin_precent' => array (
                'title' => 'Начальный результат (в процентах)',
                'type' => 'number',
                'attr' => 'min="0" max="100"'
            ),
            'planer_result_begin_description' => array(
                'title' => 'Описание начального результата',
                'type' => 'text'
            )
        )
    )
); 
class_exists('Kama_Post_Meta_Box') && new Kama_Post_Meta_Box(
    array(
        'id' => 'planer_partners',
        'title' => 'Ссылка партнёра',
        'post_type'  => array('slider_partners', 'page'),
        'fields' => array(
            'link' => array (
                'title' => 'Ссылка на сайт партнёра',
                'type' => 'text',
            ),
        )
    )
); 
class_exists('Kama_Post_Meta_Box') && new Kama_Post_Meta_Box(
    array(
        'id' => 'planer_result_end',
        'title' => 'Конечные результаты',
        'post_type'  => array('case', 'page'),
        'fields' => array(
            'planer_result_end_precent' => array (
                'title' => 'Конечный Результат (в процентах)',
                'type' => 'number',
                'attr' => 'min="0" max="100"'
            ),
            'planer_result_end_description' => array(
                'title' => 'Описание конечного результата',
                'type' => 'text'
            )
        ),
    )
);


//metabox this case-development
if( class_exists('Kama_Post_Meta_Box') ){
    new Kama_Post_Meta_Box(
        array(
            'id' => 'planer_case_first_screen',
            'title' => 'О проекте (Первый экран)',
            'theme' => array('table' => array('title_patt')),
            'priority' => 'high',
            'post_type'  => array('case'),
            'fields' => array(
                'description' => array (
                    'title' => 'Описание проекта',
                    'type' => 'textarea',
                    'attr' => 'height="100px"'
                ),
                'image_proj' => array(
                    'type' => 'image',
                    'title' => 'Картинка справа',
                    'options' => 'url',
                ),
                'task_desc' => array(
                    'title' => 'Описание Задач',
                    'type' => 'wp_editor',
                    'attr' => 'style="width: 100%;"',
                    'options' => array(
                        'wpautop' => false,
                    )
                ),
                'instrument_desc' => array(
                    'title' => 'Инструменты Задач',
                    'type' => 'wp_editor',
                    'attr' => 'style="width: 100%;"',
                    'options' => array(
                        'wpautop' => false,
                    )
                ),
                'geo' => array(
                    'title' => 'Геолокация',
                    'type' => 'wp_editor',
                    'options' => array(
                        'wpautop' => false,
                    )
                ),
                'realization' => array(
                    'title' => 'Реализация',
                    'type' => 'wp_editor',
                    'options' => array(
                        'wpautop' => false,
                    )
                )
            ),
        )
    );
    new Kama_Post_Meta_Box(
        array(
            'id' => 'planer_case_second_screen',
            'title' => 'Показатели (Второй экран)',
            'theme' => array('table' => array('title_patt')),
            'priority' => 'high',
            'post_type'  => array('case'),
            'fields' => array(
                'work-desc' => array (
                    'title' => 'Описание доходов за время сотрудничества',
                    'type' => 'textarea',
                    'attr' => 'height="100px"'
                ),
                'image_graphic' => array(
                    'type' => 'image',
                    'title' => 'График (изображением)',
                    'options' => 'url',
                ),
                'multimedia_desc' => array(
                    'title' => 'Мультимедийный контент-продакшен',
                    'type' => 'textarea',
                    'attr' => 'style="width: 100%;"'
                ),
                'this_one_style' => array(
                    'title' => 'Создание единого стиля',
                    'type' => 'textarea',
                    'attr' => 'style="width: 100%;"'
                ),
            ),
        )
    );
    new Kama_Post_Meta_Box(
        array(
            'id' => 'planer_case_three_four_screen',
            'title' => 'Прототипирование и Дизайн (Третий и Четвёртный экраны)',
            'theme' => array('table' => array('title_patt')),
            'priority' => 'high',
            'post_type'  => array('case'),
            'fields' => array(
                'prototype-desc' => array (
                    'title' => 'Описание процесса создания прототипа',
                    'type' => 'wp_editor',
                    'attr' => 'height="100px"',
                    'options' => array(
                        'wpautop' => false,
                    )
                ),
                'protopype_img' => array(
                    'type' => 'image',
                    'title' => 'Прототип (изображение)'
                ),
                'design_desc' => array(
                    'title' => 'Описание разработки дизайна',
                    'type' => 'textarea',
                    'attr' => 'style="width: 100%;"'
                ),
                'design_img' => array(
                    'title' => 'Дизайн (изображение лёжа)',
                    'type' => 'image',
                ),
            ),
        )
    );
    new Kama_Post_Meta_Box(
        array(
            'id' => 'planer_case_five_screen',
            'title' => 'Продвижение (Пятый экран)',
            'theme' => array('table' => array('title_patt')),
            'priority' => 'high',
            'post_type'  => array('case'),
            'fields' => array(
                'promotion-desc' => array (
                    'title' => 'Описание процесса продвижения',
                    'type' => 'wp_editor',
                    'options' => array(
                        'wpautop' => false,
                    )
                ),
            ),
        )
    );
    new Kama_Post_Meta_Box(
        array(
            'id' => 'planer_case_six_screen',
            'title' => 'Результаты (Шестой экран)',
            'theme' => array('table' => array('title_patt')),
            'priority' => 'high',
            'post_type'  => array('case'),
            'fields' => array(
                'time_work_pr_desc' => array(
                    'title' => 'описание времени работы',
                    'type' => 'text'
                ),
                'numb_clicks_real' => array (
                    'title' => 'Число кликов по факту',
                    'type' => 'number',
                ),
                'numb_clicks_plan' => array (
                    'title' => 'Число кликов по плану',
                    'type' => 'number',
                ),
                'numb_people_soc' => array (
                    'title' => 'Число подписчиков',
                    'type' => 'number',
                ),
                'selected_social' => array(
                    'title' => 'В какой соц. сети',
                    'type' => 'select',
                    'options' => array(
                        'Вконтакте' => 'Вконтакте',
                        'Одноклассниках' => 'Одноклассниках',
                        'Фейсбуке' => 'Фейсбуке',
                        'Инстаграме' => 'Инстаграме',
                    ),
                ),
                'numb_clients_call' => array (
                    'title' => 'Число клиентов оставивших заявку',
                    'type' => 'number',
                ),
                'numb_auditories_all' => array (
                    'title' => 'Охват (количество пользователей)',
                    'type' => 'number',
                ),
                'numb_ctr' => array (
                    'title' => 'CTR',
                    'type' => 'number',
                    'attr' => 'step="any"'
                ),
                'plan_close' => array (
                    'title' => 'Выполнен план на (по кликам в процентах %)',
                    'type' => 'number',
                    'attr' => 'step="any"'
                ),
                'traffic_up' => array (
                    'title' => 'Вырос трафик на (%)',
                    'type' => 'number',
                    'attr' => 'step="any"'
                ),
                'google_analystics' => array (
                    'title' => 'Google Analystics (описание, комментарии, расхождения и т.п.)',
                    'type' => 'textarea',
                ),
                'google_anl_seances' => array (
                    'title' => 'Число сеансов',
                    'type' => 'number',
                ),
            ),
        )
    );
    new Kama_Post_Meta_Box(
        array(
            'id' => 'planer_case_seven_screen',
            'title' => 'Дизайн и логика (UI/UX) (Седьмой экран и вывод)',
            'theme' => array('table' => array('title_patt')),
            'priority' => 'high',
            'post_type'  => array('case'),
            'fields' => array(
                'logistic_desc_end' => array (
                    'title' => 'Описание полученного продукта',
                    'type' => 'wp_editor',
                    'options' => array(
                        'wpautop' => false,
                    )
                ),
                'logistic_img_end' => array(
                    'title' => 'общее изображение всех экранов дизайна',
                    'type' => 'image',
                ),
                'result_work_end' => array(
                    'title' => 'Вывод о проделанной работе',
                    'type' => 'wp_editor',
                    'options' => array(
                        'wpautop' => false,
                    )
                ),
            ),
        )
    );
}


// функция подсчёта подъёма траффика (конверсия) (в процентах)
function planer_traffic_up_calc($post_id) {
    $views = get_post_meta($post_id, 'planer_case_six_screen_numb_auditories_all', true);
    $client = get_post_meta( $post_id, 'planer_case_six_screen_numb_clients_call', true );

    $result = $client / $views;
    $result = $result * 100;
    $result = number_format($result, 0, '', '');

    return $result.'%';
}

//Функция подсчёта выполнения плана по кликам 
function planer_calc_this_click($post_id) {
    $meta_fact = get_post_meta($post_id, 'planer_case_six_screen_numb_clicks_plan', true);
    $meta_real = get_post_meta($post_id, 'planer_case_six_screen_numb_clicks_real', true);
    $fact = $meta_fact / 100;
    $real = $meta_real / 100;
    $result = $fact - $real;

    return $result.'%';
}

// функция вычитывания CTR
function planer_ctr_calculate($post_id) {
    $clicks = get_post_meta($post_id, 'planer_case_six_screen_numb_clicks_real', true);
    $views  = get_post_meta($post_id, 'planer_case_six_screen_numb_auditories_all', true);
    $result = $clicks / $views;
    $result = number_format($result, 2);

    return $result .'%';
}

// обрезание текста рукописный код
function planer_case_excerpt_task(string $desc_task, int $i) {
    $string = strip_tags($desc_task);
    $string = substr($string, 0, $i);
    $string = rtrim($string, "!,.-");
    $string = substr($string, 0, strrpos($string, ' '));

    return $string.'...';
}



add_action( 'after_setup_theme', 'planer_nav_menu');
add_action('admin_menu', 'add_option_field_planer_tel');
add_action('wp_ajax_planer_call_me', 'planer_call_me_callback');
add_action('wp_ajax_nopriv_planer_call_me', 'planer_call_me_callback');
add_action('admin_menu', 'add_option_field_planer_mail');

// add_filter( 'single_template', 'planer_case_template' );
add_filter( 'nav_menu_item_args', 'planer_menu_nav_item_args');
add_filter( 'nav_menu_item_args', 'planer_popup_item_wrap');
add_theme_support( 'post-thumbnails');
add_theme_support( 'services-thumbnails');
add_theme_support( 'case-thumbnails');

add_filter( 'excerpt_length', function(){
	return 10;
});

require_once ABSPATH . '/wp-admin/includes/theme.php';
require_once TEMPLATEPATH . '/templates/planer-breadcrumbs.php';

function the_sky_planer() { ?>
    <div class="planer-sky">
        <img class="planer-sk7" src="<?php echo get_template_directory_uri(); ?>/assets/img/sky/sk7.png" alt="">
        <img class="planer-sk4" src="<?php echo get_template_directory_uri(); ?>/assets/img/sky/sk4.png" alt="">
        <img class="planer-sk8" src="<?php echo get_template_directory_uri(); ?>/assets/img/sky/sk8.png" alt="">
        <img class="planer-sk5" src="<?php echo get_template_directory_uri(); ?>/assets/img/sky/sk5.png" alt="">
        <img class="planer-sk6" src="<?php echo get_template_directory_uri(); ?>/assets/img/sky/sk6.png" alt="">
        <img class="planer-sk1" src="<?php echo get_template_directory_uri(); ?>/assets/img/sky/sk1.png" alt="">
        <img class="planer-sk2" src="<?php echo get_template_directory_uri(); ?>/assets/img/sky/sk2.png" alt="">
        <img class="planer-sk3" src="<?php echo get_template_directory_uri(); ?>/assets/img/sky/sk3.png" alt="">
    </div>
<? }

function the_grass_planer() { ?>
	<div class="planer-grass"><img src="<?php echo get_template_directory_uri(); ?>/assets/img//banner/grass.png" alt=""></div>
<?php }

function planer_post_navigation_services() {
    $args = array(
        'prev_next' => true,
        'next_text' => __( '<i class="fas fa-caret-right"></i>', 'Next post', 'planer' ),
        'prev_text' => __( '<i class="fas fa-caret-left"></i>', 'Prev post', 'planer' ),
    ); ?>

    <?php the_post_navigation($args); ?>

<?php }

function planer_post_navigation_case() {
    $args = array(
        'prev_next' => true,
        'next_text' => __( 'Следующий кейс<i class="fas fa-caret-right"></i>', 'Next post', 'planer' ),
        'prev_text' => __( '<i class="fas fa-caret-left"></i> Предыдущий кейс', 'Prev post', 'planer' ),
    ); ?>

    <?php the_post_navigation($args); ?>

<?php }

function planer_post_navigation() {
    $args = array(
        'prev_next' => true,
        'next_text' => __( 'Следующая новость <i class="fa fa-angle-right"></i>', 'Next post', 'planer' ),
        'prev_text' => __( '<i class="fa fa-angle-left"></i> Предыдущая новость', 'Prev post', 'planer' ),
    ); ?>
        <?php  the_post_navigation($args); ?>

<?php }



function svg_men() { ?>
    <img src="<?php echo get_template_directory_uri().'/assets/img/men.svg'; ?>" alt="">
<?php }

function svg_airplane() { ?>
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="<?php echo get_template_directory_uri(); ?>/assets/img/icon_homepage_svgformat.svg" id="Слой_1" data-name="Слой 1" viewBox="0 0 715.58 594.15">
        <defs xmlns="http://www.w3.org/2000/svg">
            <style>
                .cls-1{fill:#e6c9b9;}.cls-2{fill:#df8e75;}.cls-3{fill:#5dc2d7;}.cls-4{fill:#312783;}.cls-5{fill:#cba7aa;}
                .cls-6{fill:#e5c8b8;}.cls-7{fill:#1593ae;}.cls-8{fill:#cfe7df;}.cls-9{fill:url(#Безымянный_градиент_34);}
                .cls-10{fill:url(#Безымянный_градиент_34-2);}.cls-11{fill:#f2dace;}.cls-12{fill:#addadd;}
                .cls-13{fill:url(#Безымянный_градиент_91);}.cls-14{fill:#caa7aa;}.cls-15{fill:url(#Безымянный_градиент_11);}
                .cls-16{fill:url(#Безымянный_градиент_11-2);}.cls-17{fill:url(#Безымянный_градиент_91-2);}.cls-18{fill:url(#Безымянный_градиент_93);}
                .cls-19{fill:url(#Безымянный_градиент_93-2);}.cls-20{fill:url(#Безымянный_градиент_38);}.cls-21{fill:url(#Безымянный_градиент_34-3);}
                .cls-22{mask:url(#mask);}.cls-23{fill:url(#Безымянный_градиент_9);}.cls-24{fill:url(#Безымянный_градиент_38-2);}
                .cls-25{fill:url(#Безымянный_градиент_38-3);}.cls-26{fill:url(#Безымянный_градиент_38-4);}
                .cls-27{fill:url(#Безымянный_градиент_38-5);}.cls-28{fill:url(#Безымянный_градиент_36);}.cls-29{mask:url(#mask-2);}
                .cls-30{fill:url(#Безымянный_градиент_9-2);}.cls-31{fill:url(#Безымянный_градиент_91-3);}
                .cls-32{fill:url(#Безымянный_градиент_11-3);}.cls-33{fill:url(#Безымянный_градиент_11-4);}
                .cls-34{fill:url(#Безымянный_градиент_91-4);}.cls-35{fill:url(#Безымянный_градиент_93-3);}
                .cls-36{fill:url(#Безымянный_градиент_93-4);}.cls-37{fill:url(#Безымянный_градиент_48);}
                .cls-38{fill:url(#Безымянный_градиент_45);}.cls-39{fill:url(#Безымянный_градиент_48-2);}
                .cls-40{fill:url(#Безымянный_градиент_48-3);}.cls-41{fill:url(#Безымянный_градиент_48-4);}
                .cls-42{mask:url(#mask-3);}.cls-43{fill:url(#Безымянный_градиент_9-3);}.cls-44{filter:url(#luminosity-invert);}
            </style>
            <linearGradient id="Безымянный_градиент_34" x1="-7.89" y1="138.46" x2="1.33" y2="138.46" gradientTransform="matrix(-0.6, -0.8, -0.8, 0.6, 744.35, 52.25)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#724793"/><stop offset="1" stop-color="#8dd2f6"/></linearGradient>
            <linearGradient id="Безымянный_градиент_34-2" x1="-17.51" y1="140.19" x2="-6.87" y2="140.19" gradientTransform="matrix(-0.67, -0.74, -0.74, 0.67, 741.03, 37.46)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#Безымянный_градиент_34"/><linearGradient id="Безымянный_градиент_91" x1="100.86" y1="210.05" x2="177.85" y2="210.05" gradientTransform="matrix(-1, 0, 0, 1, 632.67, 0)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#1593ae"/><stop offset="1" stop-color="#5dc2d7"/></linearGradient>
            <linearGradient id="Безымянный_градиент_11" x1="147.76" y1="153.23" x2="147.76" y2="111.7" gradientTransform="matrix(-0.99, -0.12, -0.12, 0.99, 654.69, 19.76)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#493527"/><stop offset="1" stop-color="#765162"/></linearGradient>
            <linearGradient id="Безымянный_градиент_11-2" x1="147.23" y1="136.4" x2="147.23" y2="111.69" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#Безымянный_градиент_11"/>
            <linearGradient id="Безымянный_градиент_91-2" x1="55.4" y1="405.7" x2="180.14" y2="405.7" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#Безымянный_градиент_91"/><linearGradient id="Безымянный_градиент_93" x1="161.1" y1="559.71" x2="222.19" y2="559.71" gradientTransform="matrix(-1, 0, 0, 1, 632.67, 0)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#f8f2ed"/><stop offset="1" stop-color="#807db9"/></linearGradient>
            <linearGradient id="Безымянный_градиент_93-2" x1="33.08" y1="560.83" x2="71.9" y2="560.83" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#Безымянный_градиент_93"/><linearGradient id="Безымянный_градиент_38" x1="1565.06" y1="239.3" x2="1586.89" y2="215.35" gradientTransform="translate(-749 971.47) rotate(-32.94)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#a32c49"/><stop offset="1" stop-color="#b37a66"/></linearGradient>
            <linearGradient id="Безымянный_градиент_34-3" x1="-7.84" y1="138.36" x2="1.39" y2="138.36" gradientTransform="matrix(-0.6, -0.8, -0.8, 0.6, 744.25, 52.26)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#Безымянный_градиент_34"/><filter id="luminosity-invert" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feColorMatrix values="-1 0 0 0 1 0 -1 0 0 1 0 0 -1 0 1 0 0 0 1 0"/></filter><mask id="mask" x="507.7" y="102.25" width="192.98" height="491.9" maskUnits="userSpaceOnUse">
            <g class="cls-44">
                <g transform="translate(-85.01 -5.86)"><path class="cls-1" d="M618,199.89l-11,1.64,17.35-50.69s-.23-4.66-3.5-11.23c-3.79-7.62-7.48-10-7.48-10s-3.65,7.88-1.24,13c.58,1.23,5.52,8.2,5.52,8.2s-13,25.18-22.22,44.61c-5.51,11.58-.9,15.28-.9,15.28l28.13,2.1Z"/><path class="cls-2" d="M634.51,160.12c-.28-.85-1.54-4.89-1.54-4.89s-1.65-7.21-.49-10a16.67,16.67,0,0,1,7.52-7.6c2.87-1.2,25.61,7.56,27.23,13.89a50.58,50.58,0,0,1,1.23,17.68c-.66,4.08-1.15,10.06.79,12,12,11.77,1.52,22.77.57,24.51s-7.55-9.46-7.55-9.46l-34.76,12.26s-2.85-9.5,2.52-17.38C636.8,181.14,634.51,160.12,634.51,160.12Z"/>
                    <path class="cls-3" d="M607,201.53c.44-.64,32.06-6.73,34.73-7s-.3,15.39-.3,15.39l-25.23,11.48Z"/><path class="cls-4" d="M626.38,201.1s-3-10.93-5.81-11.14-3.08,8.76-.52,18.24c2.39,8.86,7.83,20.09,10.11,18.41a2.24,2.24,0,0,0,.79-2s-.24,1.16-1,1c-1.37-.27-4.93-9-7.36-18-1.71-6.37-2.63-13.32-1.51-14.89C622.42,190.79,626.38,201.1,626.38,201.1Z"/><path class="cls-4" d="M633.83,194.11s-1.3-14.84-4.88-15.77-6,10.59-5,23.45c1,12,4.94,26,8.57,25.46,2.78-.44,3.24-3.74,3.24-3.74s-1.58,3-3.4,2.31-4-12-5-24.24c-.72-8.63-.27-17.84,1.54-19.6C631.15,179.85,633.83,194.11,633.83,194.11Z"/><path class="cls-5" d="M641.15,179,644,191.07s4.09,5.75,7.74,3.14a34.33,34.33,0,0,1,5.57-3.44l-6.74-16.54Z"/><path class="cls-6" d="M640.12,140.09l-6.21,11.67s-3.26,10.53-4.06,11.21a14.4,14.4,0,0,0-2,2.56l1.78,2.23-1,12s8.92,3.75,13.82,1.49,8.93-8.87,8.93-8.87,5.18-3.21,6.3-5,1.78-5.88.46-5.65a14.74,14.74,0,0,1-3.63-.16s4.9-9.57,3.1-13.81-5-7.86-9.55-8.9A10.89,10.89,0,0,0,640.12,140.09Z"/><path class="cls-6" d="M618.88,317.65c-1.09,3.09,14.49,109.94,14.49,109.94s18.48,122,19.14,119.85,7.46,0,7.46,0,4.71-83.78,2.93-98.94-10.39-31.76-10.39-31.76l8.07-99.12-8.07,18.84,39.92,97.56L733,547.47l7.67-2.92c-14.51-76.65-11.53-76.86-17-97.49-1.69-6.37-15.78-27.58-15.78-27.58s-6.56-54.32-15.5-76.89-41.29-70.22-41.29-70.22Z"/><path class="cls-3" d="M635.08,253.47s-9.29,26.79-15,50.77c-4.82,20.32-8.28,53.59-8.28,53.59h96.34s-27.74-68.49-34.95-82.95-20.4-24.37-20.4-24.37Z"/><path class="cls-7" d="M657.3,190.77s20,8.59,22.35,11.25-16.86,58-16.86,58l-30,.07s-8.72-27.78-6.69-42.32,5.54-18.72,9.32-21.58,10.48-3.73,10.48-3.73Z"/><path class="cls-2" d="M650.92,136.27c-2.93-.52-9.27-.07-11.73,2.13s-3.44,6.67-3.44,6.67,3.5,3.24,6.37,10.43,12.11,7.38,12.11,7.38l14-1.14s.64-10.33-4-17.72C661,138.83,654.71,137,650.92,136.27Z"/><path class="cls-8" d="M611.83,364.73v1.18a4.09,4.09,0,0,0,7,2.88l.45-.45.43,2a4.08,4.08,0,0,0,6.66,2.24l6.44-5.55,17.32,8.69a4.1,4.1,0,0,0,4.8-.84l6.87-7.26,4.9,6a4.08,4.08,0,0,0,6,.36l7-6.75,9.09,6.67a4.08,4.08,0,0,0,6.18-1.7c1.07-2.54,2.34-5,3-4.31.49.51,3.22,1.65,6.42,2.88a4.09,4.09,0,0,0,4.89-6h-97.4Z"/><path class="cls-3" d="M635.08,204,644,189s.26,2.4,4.43,2a30.94,30.94,0,0,0,8.17-2l5.19,3.71-7.43,11.63-7.86-9.48Z"/><path class="cls-3" d="M675.71,244.11s-6.82-19-7.43-29.71c-.67-11.69,4.8-21.64,12.12-11.69s18.26,41.4,18.26,41.4Z"/><circle class="cls-3" cx="643.93" cy="205.31" r="1.32"/><circle class="cls-3" cx="640.85" cy="217.94" r="1.32"/><rect class="cls-3" x="611.83" y="361.25" width="97.39" height="3.49"/><path class="cls-8" d="M651.84,549.86l-2.89-6a1.18,1.18,0,0,1,1.8-1.43l5,4.06,1.18-2.56a1.17,1.17,0,0,1,2.24.49h0l4.78-3.05a1.18,1.18,0,0,1,1.68,1.53L662,549.86Z"/><path class="cls-8" d="M729.88,547.47l-1.08-3.91a1.25,1.25,0,0,1,2.08-1.24l2.21,2.15,9.23-5.82a1.25,1.25,0,0,1,1.86,1.46l-1.49,4.36h3a1.26,1.26,0,0,1,.71,2.29l-2.8,1.94H729.88Z"/><path class="cls-4" d="M648.61,549.86v13.43s-10.86,13.62-15,14.41-6.32,0-6.32,0l-2,6.52h24.27s3.18-8.49,6.14-8.89,0,8.89,0,8.89h4.74s5.93-8.29,4.74-13a18,18,0,0,0-4.14-7.7l1.57-13.63Z"/><path class="cls-4" d="M730.5,548.7l5.24,16a7.73,7.73,0,0,0-2.62,4.08c-.87,2.91.62,13.57.62,13.57h4.08l.8,1.86h21.76l-1.74-5.82a18.84,18.84,0,0,1-5.86-5,73.72,73.72,0,0,1-5.25-9.53l-3.34-15.14Z"/><ellipse class="cls-4" cx="636.97" cy="140.04" rx="6.47" ry="3.07" transform="matrix(0.6, -0.8, 0.8, 0.6, 140.76, 563.27)"/><polygon class="cls-4" points="640.15 133.6 641.32 135.41 638.68 141.2 632.7 144.81 631.6 143.08 640.15 133.6"/><ellipse class="cls-9" cx="635.96" cy="138.46" rx="6.47" ry="3.07" transform="translate(141.62 561.83) rotate(-52.86)"/><ellipse class="cls-4" cx="646.01" cy="142.04" rx="6.86" ry="3.63" transform="translate(108.74 527.84) rotate(-48.08)"/><path class="cls-1" d="M692.93,244.11l2.3,15.43s6.8,8.4,9.5,17.3,9.17,43.06,9.17,43.06L724.42,335l-8.49,10.63-11.2-3.28,3.1-22.45-28-75.79Z"/><polygon class="cls-4" points="649.73 135.4 651.04 137.53 647.95 143.52 641.07 146.72 639.83 144.69 649.73 135.4"/><ellipse class="cls-10" cx="644.86" cy="140.19" rx="6.86" ry="3.63" transform="translate(109.74 526.38) rotate(-48.08)"/><polygon class="cls-4" points="649.79 141.4 656.75 153.56 656.18 157.21 647.68 143.97 649.79 141.4"/><path class="cls-4" d="M683.39,203.38s6.17-9.52,4.45-11.75-8.58,3.53-14,11.75c-5,7.68-9.79,19.2-7,19.8a2.27,2.27,0,0,0,2-.77s-1,.59-1.42-.09c-.71-1.22,3.42-9.66,8.53-17.47,3.61-5.52,8.19-10.84,10.11-11C688.46,193.56,683.39,203.38,683.39,203.38Z"/><path class="cls-4" d="M679.48,194.81s5-14.53,2-16.9-10.12,7.45-14.49,20c-4.08,11.73-6.25,26.59-2.58,27.57,2.79.75,4.61-2.17,4.61-2.17s-2.75,2.2-4.17.76,1.27-13,5.43-24.94c2.94-8.43,7.22-16.92,9.67-17.81C682.92,180.25,679.48,194.81,679.48,194.81Z"/><path class="cls-11" d="M623.71,152s3.27-5,1.9-8.13-3.33-4.89-4.33-6.42-1.47-2.29-1.47-2.29-1.62,1.73.13,4.57c.54.87,1.57,3.28,1.57,3.28s-3.47,4.18-1.54,7.1S623.71,152,623.71,152Z"/>
                </g>
            </g></mask>
            <linearGradient id="Безымянный_градиент_9" x1="-153.01" y1="354.06" x2="-6.42" y2="354.06" gradientTransform="matrix(-1, 0, 0, 1, 632.67, 0)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#23203d"/><stop offset="1" stop-color="#5a6b8e" stop-opacity="0.5"/></linearGradient><linearGradient id="Безымянный_градиент_38-2" x1="1468.46" y1="241.19" x2="1532.32" y2="171.13" gradientTransform="translate(-716.84 881.88) rotate(-28.93)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#Безымянный_градиент_38"/><linearGradient id="Безымянный_градиент_38-3" x1="1585.04" y1="231.17" x2="1606.88" y2="207.21" gradientTransform="translate(-716.84 881.88) rotate(-28.93)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#Безымянный_градиент_38"/><linearGradient id="Безымянный_градиент_38-4" x1="1584.5" y1="222" x2="1605.7" y2="198.74" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#Безымянный_градиент_38"/><linearGradient id="Безымянный_градиент_38-5" x1="1403.3" y1="279.55" x2="1569.11" y2="97.63" gradientTransform="translate(-658.4 1008.34) rotate(-34.28)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#Безымянный_градиент_38"/><linearGradient id="Безымянный_градиент_36" x1="-17.45" y1="140.09" x2="-6.81" y2="140.09" gradientTransform="matrix(-0.67, -0.74, -0.74, 0.67, 740.94, 37.47)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#Безымянный_градиент_34"/><mask id="mask-2" x="270.17" y="0" width="117.17" height="200.1" maskUnits="userSpaceOnUse"><g class="cls-44"><g transform="translate(-85.01 -5.86)"><path class="cls-1" d="M374.15,48.19l-7.95-8s-7.77-4.72-8.85-6c-1.55-1.88-1.14-1.81-1.14-1.81l8.16,3.53s-6.24-4.92-7.61-7-1.14-6.43-1.14-6.43l12.37,10s-7.87-9.83-8.21-11.29.14-1.63.14-1.63l17.53,16.61,2.49,9.93Z"/><path class="cls-3" d="M466.83,157.05s-11.76-10.91-18.44-19.3-26.08-27.17-26.08-27.17a107.89,107.89,0,0,0-8.39-20c-8.68-15.12-33.86-47.47-33.86-47.47l-5.8,4.81L408.92,119,462.37,206Z"/><path class="cls-12" d="M469.92,158s-2.95-5.48-7.28-5.58c-1.71,0-8.32,0-11.05,9.67-2.16,7.65,5.56,35.38,5.56,35.38s-5.9-30.27,2.69-38.17C463.58,155.87,469.92,158,469.92,158Z"/><path class="cls-12" d="M425.91,107.58s-22.64,2-24.94,6a52.05,52.05,0,0,0-2.92,5.51Z"/><path class="cls-12" d="M426.67,109l-28,15.85a8.05,8.05,0,0,0,6.39-.44C408.22,122.61,426.67,109,426.67,109Z"/></g></g></mask><linearGradient id="Безымянный_градиент_9-2" x1="160.32" y1="85.57" x2="277.49" y2="85.57" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#Безымянный_градиент_9"/><linearGradient id="Безымянный_градиент_91-3" x1="100.85" y1="210.03" x2="177.84" y2="210.03" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#Безымянный_градиент_91"/><linearGradient id="Безымянный_градиент_11-3" x1="147.75" y1="153.21" x2="147.75" y2="111.68" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#Безымянный_градиент_11"/><linearGradient id="Безымянный_градиент_11-4" x1="147.22" y1="136.38" x2="147.22" y2="111.66" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#Безымянный_градиент_11"/><linearGradient id="Безымянный_градиент_91-4" x1="55.39" y1="405.68" x2="180.12" y2="405.68" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#Безымянный_градиент_91"/><linearGradient id="Безымянный_градиент_93-3" x1="161.09" y1="559.68" x2="219" y2="559.68" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#Безымянный_градиент_93"/><linearGradient id="Безымянный_градиент_93-4" x1="33.06" y1="560.8" x2="71.89" y2="560.8" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#Безымянный_градиент_93"/><linearGradient id="Безымянный_градиент_48" x1="204.32" y1="201.6" x2="242.14" y2="160.11" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e96331"/><stop offset="1" stop-color="#fbce4f"/></linearGradient><linearGradient id="Безымянный_градиент_45" x1="146.83" y1="167.68" x2="168.53" y2="143.87" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fcfbec"/><stop offset="1" stop-color="#afbcb9"/></linearGradient><linearGradient id="Безымянный_градиент_48-2" x1="109.77" y1="237.98" x2="272.03" y2="59.97" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#Безымянный_градиент_48"/><linearGradient id="Безымянный_градиент_48-3" x1="180.44" y1="212.58" x2="261.01" y2="124.2" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#Безымянный_градиент_48"/><linearGradient id="Безымянный_градиент_48-4" x1="224.43" y1="183.39" x2="246.88" y2="158.76" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#Безымянный_градиент_48"/><mask id="mask-3" x="270.58" y="13.71" width="261.27" height="579.91" maskUnits="userSpaceOnUse"><g class="cls-44"><g transform="translate(-85.01 -5.86)"><path class="cls-1" d="M374.14,48.21l-7.95-8s-7.77-4.72-8.85-6c-1.56-1.88-1.14-1.82-1.14-1.82l8.16,3.54s-6.24-4.92-7.61-7-1.15-6.43-1.15-6.43l12.38,10s-7.87-9.83-8.21-11.3.14-1.62.14-1.62l17.53,16.6,2.49,9.94Z"/><path class="cls-11" d="M380.36,44.63s-.43-5.89-3.17-9.09-5.64-4.51-7.34-5.94l-2.55-2.13s-1.26,2.6,1.8,5.28c.94.82,3,3.27,3,3.27s-2.54,6.11.75,8.81S380.36,44.63,380.36,44.63Z"/><path class="cls-3" d="M466.82,157.07s-11.76-10.91-18.44-19.3S422.3,110.6,422.3,110.6a107.89,107.89,0,0,0-8.39-20C405.23,75.47,380,43.11,380,43.11l-5.79,4.82,34.66,71.12L462.36,206Z"/><path class="cls-13" d="M500.75,163.52a15.67,15.67,0,0,1-6.21,6.16c-4.1,2-10.82-6.08-10.82-6.08l-21.85-8.83s-8.14,7.12-6.92,24.58c1.53,22,9.21,86,9.21,86h47.22s18.06-53,19.7-68.57,0-25,0-25Z"/><path class="cls-1" d="M579.45,320.19l7.11,7.85s12.27,5.32,13.54,5.53,2.55,1.7,1.28,2.12-8.51-1.27-8.51-1.27,8.08,7.44,9,8.08,1.59,3,0,3-3.3.85-4.79,0-9.57-7-9.57-7,6.17,9.79,6.17,10.42-.43,1.71-1.49,1.49S581,337,581,337a2.49,2.49,0,0,0-2.56-.64c-1.7.43-3.61,5.32-5.53,5.53a16.69,16.69,0,0,1-3.61,0S571.6,338,572,337s1.29-4.16,2.35-7.87a7.64,7.64,0,0,0-1.5-6.64Z"/><polygon class="cls-14" points="495.43 145.89 498.17 163.38 492.88 173.89 482.79 173.09 479.4 157.59 489.65 145.89 495.43 145.89"/><polygon class="cls-12" points="485.36 170.96 482.45 265.34 477.8 265.34 477.8 174.19 485.36 170.96"/><path class="cls-12" d="M499.13,163c1.18-.78,8.14,2.1,8.14,2.1s-9.9,9.36-15.12,11.1C475,182,472.41,164.79,475,160.09c0,0,5.4,1.25,5.52,2.47.24,2.32,1.14,11.79,9.13,5.82A41.76,41.76,0,0,1,499.13,163Z"/><path class="cls-12" d="M540.05,190.22s-.24-7.14-.56-12c-.16-2.5-1-11.67-6.93-13-5.73-1.26-14.84,5.62-14.77,21.45.06,13.58,8.18,29.43,8.18,28.83s-4.09-26.82-.26-34.12c5.34-10.19,8.44-2.61,9.07-.88C535.3,181.86,540.05,190.22,540.05,190.22Z"/><path class="cls-3" d="M531.27,173.11s8.31,6.44,14,32.87c4,18.57,12.32,43.72,12.32,43.72s6.56,12.3,9.21,17.83c5.39,11.22,15.29,55.06,15.29,55.06h-8.31s-52.37-101.3-52.37-127.78C521.45,179.25,531.27,173.11,531.27,173.11Z"/><path class="cls-12" d="M537.25,254.39s18.82-12.73,23.13-11.08a52.82,52.82,0,0,1,5.74,2.43Z"/><path class="cls-12" d="M537.51,255.94l31.75-5.4a8.1,8.1,0,0,1-5.24,3.7C560.45,254.89,537.51,255.94,537.51,255.94Z"/><path class="cls-12" d="M469.91,158s-3-5.48-7.28-5.58c-1.72,0-8.32,0-11.05,9.67-2.16,7.65,5.56,35.38,5.56,35.38s-5.9-30.28,2.69-38.17C463.57,155.88,469.91,158,469.91,158Z"/><path class="cls-15" d="M478,139.34s-2.32-12.63-1.92-16,2.48-7.13,4.82-8.06,9.84-4.48,18.15-1.27c9.8,3.78,11.13,13.29,10.48,18.68-.75,6.35-12.56,22.3-12.56,22.3l-2.32-2.59Z"/><path class="cls-1" d="M479.78,122.47,477,128.65l-.44,4.8-1.45,7.44,1.27,12.36c.62,4.15,2.35,5.76,3,5.9,0,0,4.4.79,5.55.79,1.58,0,7.85-2.54,8.93-5.21,2.17-5.38,2.57-4.55,2.57-4.55s1.72.47,4.3-2.49c1.14-1.32,3.67-5.86,1.21-6.9-1.52-.65-3.68,1-3.68,1s5.66-13.39.84-17-7.44-3.73-11-4.37S479.78,122.47,479.78,122.47Z"/><path class="cls-16" d="M485.8,122.32s3.78-2.53,6.24-1.41,3.75,10.23,6.59,13.51S507,139.3,507,139.3s5-8.15,1-16.93c-2.9-6.36-10.27-9.29-13.27-9.44-18.71-.9-17,8.68-17,8.68s5.94-3.35,6.27-1.68A3.65,3.65,0,0,0,485.8,122.32Z"/><path class="cls-17" d="M511.61,274.08s13.77,27.51,16.51,39S539,378,544.29,405.7c2.78,14.56,8,16.11,15.48,39.07,6.51,19.88,17.5,101.26,17.5,101.26s-14.14,1.64-12.54,0-75.37-217.42-75.37-217.42-8.47,64.84-9.93,70.31a74.23,74.23,0,0,0-1.72,13.53s.83,16.51,1.81,29.1-14.3,102.83-14.3,102.83l-12.68-1.09s1.81-178.47,2-203.65,9.82-75,9.82-75Z"/>
            <polygon class="cls-12" points="511.61 265.5 511.61 274.94 462.78 274.92 464.4 265.5 511.61 265.5"/><rect class="cls-7" x="498.78" y="264.23" width="6.84" height="13.14"/><rect class="cls-7" x="488.94" y="263.65" width="2.87" height="13.14"/><rect class="cls-7" x="471.09" y="263.65" width="2.87" height="13.14"/><path class="cls-18" d="M467,539.15V558.9s4.21,4,4.55,9-2.28,12.34-2.28,12.34h-3.72l-.33-3.35a2.58,2.58,0,0,0-4.69.28l-1.18,3.07h-5.62l-1-2.56a2.58,2.58,0,0,0-4.81,0l-1,2.52h-4.76l-.81-2.14a2.58,2.58,0,0,0-4.73-.23l-1.17,2.37h-4.31l-1-2.23c-.6-1.67-2.76-1.81-3.86-.17l-1,2.4h-4.1l-.91-2.1a1.73,1.73,0,0,0-3.31,0l-1,2.11-5.29,0s-1.59-12.11,4.52-13.67,15.41-1.07,15.41-1.07,8.94-2.4,12.8-5.66,6.05-20.71,6.05-20.71Z"/><path class="cls-19" d="M563.05,575.36s-2.26-13.17-.91-15.15a38.74,38.74,0,0,1,2.53-3.33l-3.9-19.23h18.52l4.66,20s11.82,10.24,13.15,13.73S599.6,584,599.6,584h-1.49L597,582.14c-.81-1.4-3.71-1.15-4.17.41l-.42,1.45h-4.13L587,582c-.91-1.36-3.81-.94-4.14.66l-.27,1.33h-4.31L577,581.93c-.89-1.41-3.87-1-4.17.65l-.26,1.42H567.9v-8.52Z"/><rect class="cls-7" x="463.75" y="264.05" width="2.87" height="13.14"/><path class="cls-12" d="M425.9,107.6s-22.64,2-24.94,6a52.55,52.55,0,0,0-2.92,5.52Z"/><path class="cls-12" d="M426.66,109l-28,15.85a8.05,8.05,0,0,0,6.39-.44C408.21,122.63,426.66,109,426.66,109Z"/></g></g></mask><linearGradient id="Безымянный_градиент_9-3" x1="15.82" y1="342.93" x2="177.11" y2="342.93" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#Безымянный_градиент_9"/>
        </defs>
        <title xmlns="http://www.w3.org/2000/svg">на главную</title>
        <polygon xmlns="http://www.w3.org/2000/svg" class="cls-37" points="213.97 179.51 230.36 165.84 250.7 167.9 215.13 197.35 195.77 193.81 213.97 179.51 213.97 179.51"/>
        <path xmlns="http://www.w3.org/2000/svg" class="cls-38" d="M176,150.63s-17.76-4.78-25.64-5.69-11.72,0-11.72,0l-2,13.43L177,166.32Z" transform="translate(-85.01 -5.86)"/>
        <path xmlns="http://www.w3.org/2000/svg" class="cls-39" d="M282.67,69.68s1.59,9.12,0,13c-2.15,5.22-79.66,76.37-98,87.19-15.87,9.38-73.79,38.37-92.4,46l-.48.15A58.9,58.9,0,0,1,85,208s-.47,8,2.25,9.38l9.09,1.88a4.64,4.64,0,0,0,2.27.47c5.17-.47,117.53-41.39,117.53-41.39S290.83,87.44,291.59,85C293.47,79.07,282.67,69.68,282.67,69.68Z" transform="translate(-85.01 -5.86)"/>
        <path xmlns="http://www.w3.org/2000/svg" class="cls-40" d="M317.25,175.46s-10.59-1.16-13.05-.31c-4.4,1.53-10,8.4-13.57,13.27-31.44-10.74-93.9-31.89-119.13-39.08,1.09,2.57,1.72,1.87-.37,2.19-4,.6-6.9-.3-13.27-1.6s-18.72-4.49-19.08-5c-9.47.84-15.6,4.13-17.58,8.8-3.34,7.89,16.69,16.69,31.26,19.42S308.63,196.6,308.63,196.6l.71-1.76h0Z" transform="translate(-85.01 -5.86)"/>
        <polygon xmlns="http://www.w3.org/2000/svg" class="cls-41" points="217.29 176.89 233.69 163.21 254.02 165.27 237.49 178.97 217.29 176.89 217.29 176.89 217.29 176.89"/>
    </svg>
<? }

function svg_woman() { ?>
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="<?php echo get_template_directory_uri();?>/assets/img/a2menwoman.png" viewBox="0 0 647.6 548.74">
        <defs>
            <style>
                .cls-1{fill:#d1a897;}.cls-2{fill:url(#Безымянный_градиент_18);}
                .cls-13,.cls-3{fill:#e5c8b8;}.cls-4{fill:url(#Безымянный_градиент_106);}
                .cls-5{fill:#acdadd;}.cls-6{fill:url(#Безымянный_градиент_106-2);}
                .cls-14,.cls-7{fill:#0f93ae;}.cls-8{fill:url(#Безымянный_градиент_101);}
                .cls-9{fill:url(#Безымянный_градиент_101-2);}.cls-10{fill:url(#Безымянный_градиент_101-3);}.cls-11{fill:url(#Безымянный_градиент_100);}
                .cls-12{fill:url(#Безымянный_градиент_100-2);}.cls-13{opacity:0.88;}.cls-14,.cls-31{opacity:0.69;}
                .cls-15{fill:#df8e75;}.cls-16{fill:#caa6a9;}.cls-17{fill:#5cc1d7;}.cls-18{fill:#cfe7df;}
                .cls-19{isolation:isolate;}.cls-20{fill:url(#Безымянный_градиент_94);}.cls-21{fill:#e74e0f;}
                .cls-22{fill:url(#Безымянный_градиент_91);}.cls-23{fill:#8dcfdc;}.cls-24{fill:url(#Безымянный_градиент_51);}
                .cls-25,.cls-50{opacity:0.58;}.cls-25{fill:url(#Безымянный_градиент_156);}.cls-26{fill:url(#Безымянный_градиент_89);}
                .cls-27{fill:url(#Безымянный_градиент_91-2);}.cls-28{fill:url(#Безымянный_градиент_100-3);}
                .cls-29{fill:url(#Безымянный_градиент_93);}.cls-30{mask:url(#mask);}.cls-31{fill:url(#Безымянный_градиент_131);}
                .cls-32{fill:url(#Безымянный_градиент_51-2);}.cls-33{fill:url(#Безымянный_градиент_51-3);}
                .cls-34{fill:url(#Безымянный_градиент_51-4);}
                .cls-35,.cls-36,.cls-38{fill:none;stroke-miterlimit:10;}
                .cls-35{stroke:#2d4193;stroke-width:4px;opacity:0.57;}
                .cls-36{stroke:#5cc1d7;opacity:0.89;}.cls-36,.cls-38{stroke-width:3px;}.cls-37{fill:#8fd0da;}.cls-38{stroke:#8fd0da;}.cls-39{fill:url(#Безымянный_градиент_51-5);}.cls-40{fill:#2d4193;opacity:0.68;}.cls-41{mask:url(#mask-2);}.cls-42{opacity:0.78;fill:url(#Безымянный_градиент_131-2);}.cls-43{mask:url(#mask-3);}.cls-44{opacity:0.81;fill:url(#Безымянный_градиент_131-3);}.cls-45{mask:url(#mask-4);}.cls-46{opacity:0.64;fill:url(#Безымянный_градиент_131-4);}.cls-47{opacity:0.75;mix-blend-mode:screen;}.cls-48{fill:#fff;}.cls-49{mask:url(#mask-5);}.cls-50{fill:url(#Безымянный_градиент_9);}.cls-51{mask:url(#mask-6);}.cls-52{opacity:0.74;fill:url(#Безымянный_градиент_131-5);}.cls-53{fill:url(#Безымянный_градиент_94-2);}.cls-54{fill:url(#Безымянный_градиент_94-3);}.cls-55{fill:url(#Безымянный_градиент_94-4);}
                .cls-56{filter:url(#luminosity-invert);}
            </style>
            <linearGradient id="Безымянный_градиент_18" x1="216.59" y1="70.19" x2="263.02" y2="70.19" gradientUnits="userSpaceOnUse">
            <stop offset="0" stop-color="#493526"/><stop offset="1" stop-color="#775262"/></linearGradient>
            <linearGradient id="Безымянный_градиент_106" x1="187.47" y1="163.53" x2="273.26" y2="163.53" gradientUnits="userSpaceOnUse">
            <stop offset="0" stop-color="#0f93ae"/><stop offset="1" stop-color="#5cc1d7"/></linearGradient>
            <linearGradient id="Безымянный_градиент_106-2" x1="173.59" y1="376.01" x2="273.22" y2="376.01" xlink:href="#Безымянный_градиент_106"/>
            <linearGradient id="Безымянный_градиент_101" x1="206.32" y1="219.88" x2="211.3" y2="219.88" gradientUnits="userSpaceOnUse">
            <stop offset="0" stop-color="#23203d"/><stop offset="1" stop-color="#596b8c"/></linearGradient><linearGradient id="Безымянный_градиент_101-2" x1="196.35" y1="226.55" x2="201.14" y2="226.55" xlink:href="#Безымянный_градиент_101"/><linearGradient id="Безымянный_градиент_101-3" x1="192.51" y1="213.38" x2="202.7" y2="213.38" xlink:href="#Безымянный_градиент_101"/>
            <linearGradient id="Безымянный_градиент_100" x1="242.6" y1="537.42" x2="310.22" y2="537.42" gradientUnits="userSpaceOnUse">
                <stop offset="0" stop-color="#f8f3ed"/><stop offset="1" stop-color="#817cb8"/></linearGradient>
                <linearGradient id="Безымянный_градиент_100-2" x1="151.72" y1="537.42" x2="193.66" y2="537.42" xlink:href="#Безымянный_градиент_100"/>
                <linearGradient id="Безымянный_градиент_94" x1="87.59" y1="149.12" x2="235.8" y2="149.12" gradientUnits="userSpaceOnUse">
                    <stop offset="0" stop-color="#e86232"/><stop offset="1" stop-color="#facd4f"/></linearGradient>
                    <linearGradient id="Безымянный_градиент_91" x1="187.6" y1="163.45" x2="273.38" y2="163.45" xlink:href="#Безымянный_градиент_106"/>
                    <linearGradient id="Безымянный_градиент_51" x1="251.3" y1="167.73" x2="296.14" y2="167.73" gradientTransform="translate(55.95 -23.78) rotate(11.7)" xlink:href="#Безымянный_градиент_101"/>
                    <linearGradient id="Безымянный_градиент_156" x1="379.04" y1="118.19" x2="511.34" y2="118.19" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#acdadd"/><stop offset="0.28" stop-color="#c3e4e7" stop-opacity="0.72"/>
                        <stop offset="1" stop-color="#fff" stop-opacity="0"/></linearGradient>
                        <linearGradient id="Безымянный_градиент_89" x1="216.71" y1="70.11" x2="263.14" y2="70.11" xlink:href="#Безымянный_градиент_18"/>
                        <linearGradient id="Безымянный_градиент_91-2" x1="173.71" y1="375.92" x2="273.35" y2="375.92" xlink:href="#Безымянный_градиент_106"/>
                        <linearGradient id="Безымянный_градиент_100-3" x1="242.72" y1="537.34" x2="307.82" y2="537.34" xlink:href="#Безымянный_градиент_100"/>
                        <linearGradient id="Безымянный_градиент_93" x1="151.84" y1="537.34" x2="193.78" y2="537.34" xlink:href="#Безымянный_градиент_100"/>
                        <filter id="luminosity-invert" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feColorMatrix values="-1 0 0 0 1 0 -1 0 0 1 0 0 -1 0 1 0 0 0 1 0"/></filter>
                            <mask id="mask" x="39.77" y="15.72" width="182.86" height="533.02" maskUnits="userSpaceOnUse">
                                <g class="cls-56"><g transform="translate(-87.59 -25.1)"><polygon class="cls-1" points="246.34 98.39 242.86 116.27 224.36 116.27 232.92 76.13 246.34 98.39"/>
                                <path class="cls-2" d="M253.75,67.44s9.26,1.77,9.27-10c0-4.9-8.65-8.38-15.25-9.45-7.18-1.17-19-5.55-27.78,8.66-11.26,18.25,9,37.24,9,37.24l9.68-9.34Z"/>
                                <path class="cls-3" d="M259.91,60.25c-.4.4.93,11.79.93,11.79s-.65,7.66,1,10.91S264,87.24,264,87.24l-3.48,1.61-.94,16.9c1.5.32-6.41,3-16.75-2.09-4.64-2.28-7.13-14.65-7.13-14.65s-4.23-4.77-3.4-9.24,3.57-4,3.57-4l3.46,6.92,1.64-4,.23-10.34s-.31-7.3,5.2-8.09a38.92,38.92,0,0,1,6.79-.31C255.6,60,259.91,60.25,259.91,60.25Z"/>
                                <path class="cls-4" d="M221.85,107.18a17.33,17.33,0,0,0,6.87,6.81c4.55,2.28,13.83,2.28,13.83,2.28l30.71,15.45-10.91,88.16H210.09s-20-58.62-21.81-75.89,0-27.72,0-27.72Z"/>
                                <polygon class="cls-5" points="234.09 114.35 237.35 219.88 242.49 219.88 242.49 118.99 234.09 114.35"/>
                                <path class="cls-5" d="M223.65,106.64c-1.31-.85-9,2.33-9,2.33s11.08,10,16.74,12.29c14.83,5.95,20-.3,18.34-1.75,0,0-5.79-9.08-5.94-7.73-.26,2.57-.84,7.39-9.69.78A46.56,46.56,0,0,0,223.65,106.64Z"/>
                                <path class="cls-6" d="M210.09,230.33s-11.66,32.57-14.69,45.29-9.19,81.8-7.93,98.16S180.25,395,177.83,418s-4.24,113.31-4.24,113.31,15.65,1.81,13.88,0,46.62-245.4,46.62-245.4,7.16,79.37,8.77,85.43a26.38,26.38,0,0,1,0,12.12,178.07,178.07,0,0,0-4.57,27.27C237.21,424.68,250,529.51,250,529.51l14-1.21s9.42-197.54,9.16-225.41-10.87-83-10.87-83Z"/>
                                <polygon class="cls-5" points="210.09 219.88 210.09 230.33 264.15 230.31 262.35 219.88 210.09 219.88"/>
                                <rect class="cls-7" x="220.51" y="218.48" width="7.57" height="14.54"/><rect class="cls-7" x="247.93" y="217.83" width="3.18" height="14.54"/>
                                <rect class="cls-7" x="259.19" y="217.83" width="3.18" height="14.54"/>
                                <path class="cls-8" d="M208.67,231.63s-3.67-19.72-1.83-22,3.36-1.69,4.12,0,0,21.08,0,21.08Z"/>
                                <polygon class="cls-9" points="196.35 215.92 198.73 237.8 201.14 237.19 198.71 215.31 196.35 215.92"/>
                                <path class="cls-5" d="M224.29,225.75v35.7s-5,15.75-14.2,15.75a58.2,58.2,0,0,1-14.69-1.58V226.1Z"/>
                                <path class="cls-10" d="M194.58,210.1a.7.7,0,0,0-1.29.11c-.61,1.82-1.29,4.72-.21,6.43,1.54,2.42,7.17,2,9.11-.91,1.41-2.1-.42-5.17-1.7-6.89a.71.71,0,0,0-1.27.31c-.25,1.43.6,5-1.61,5.25S195.17,211.19,194.58,210.1Z"/>
                                <path class="cls-11" d="M247.66,514.67v21.86s-4.66,4.45-5,10,2.52,13.66,2.52,13.66h4.11l.38-3.71a2.86,2.86,0,0,1,5.19.32l1.3,3.39h6.22l1.14-2.83a2.86,2.86,0,0,1,5.33,0l1.06,2.79h5.27l.9-2.36a2.85,2.85,0,0,1,5.23-.26l1.3,2.62h4.76l1.11-2.47c.67-1.84,3.06-2,4.28-.19l1.11,2.66h4.53l1-2.33a1.91,1.91,0,0,1,3.66-.05l1.11,2.33,5.86,0s1.75-13.41-5-15.12S288,543.86,288,543.86s-9.89-2.66-14.16-6.27-6.7-22.92-6.7-22.92Z"/>
                                <path class="cls-5" d="M180.86,130.57s-1.43-7,.37-12.15,7.17-9.08,11.28-6.39c5.89,3.85,9.41,10,10.19,23.74.86,15-3.8,25.9-3.73,25.24s-.22-25.25-3.57-33.75c-4.67-11.84-10.52-5.29-11.42-3.48C183.25,125.26,180.86,130.57,180.86,130.57Z"/>
                                <path class="cls-5" d="M261.8,126s3.94-4,8.38-2.17c1.75.73,4.43,2.58,4.82,9.71.47,8.79-4.21,26-4.21,26s0-26.4-1-28.23S261.8,126,261.8,126Z"/>
                                <path class="cls-12" d="M192.17,556.32s2.51-14.58,1-16.77a42.06,42.06,0,0,0-2.79-3.69L193,514.67h-20.5l-4.53,21.56s-12,6.08-13.46,10-2.76,14-2.76,14h1.65l1.18-2.06c.9-1.55,4.11-1.27,4.61.45l.47,1.61h4.58l1.48-2.21c1-1.5,4.22-1,4.58.73l.3,1.48h4.77l1.45-2.29c1-1.57,4.28-1.1,4.61.72l.29,1.57h5.11v-3.72Z"/></g>
                                </g></mask><linearGradient id="Безымянный_градиент_131" x1="127.36" y1="307.33" x2="287.47" y2="307.33" xlink:href="#Безымянный_градиент_101"/>
                                <linearGradient id="Безымянный_градиент_51-2" x1="108.89" y1="201.37" x2="113.68" y2="201.37" xlink:href="#Безымянный_градиент_101"/>
                                <linearGradient id="Безымянный_градиент_51-3" x1="209.97" y1="222.07" x2="225.67" y2="222.07" xlink:href="#Безымянный_градиент_101"/>
                                <linearGradient id="Безымянный_градиент_51-4" x1="206.45" y1="219.8" x2="211.42" y2="219.8" xlink:href="#Безымянный_градиент_101"/>
                                <linearGradient id="Безымянный_градиент_51-5" x1="192.63" y1="213.3" x2="202.83" y2="213.3" xlink:href="#Безымянный_градиент_101"/>
                                <mask id="mask-2" x="389.62" y="108.76" width="70.82" height="91.16" maskUnits="userSpaceOnUse">
                                    <g class="cls-56"><g transform="translate(-87.59 -25.1)">
                                        <path class="cls-13" d="M535.09,165.69c-1.09,2.58-17.22,37.93-17.22,37.93l-31.82-41.21v11.73s18.26,36.59,23.25,41.58c7.74,7.75,15.49,5,15.49,5L548,177.5Z"/>
                                        <path class="cls-13" d="M488.72,174.32s-1.46,1-3.88-1.45-3.14-7.18-3.14-7.18l-4.49-9.05,7.63-6.32s-3.73-7.51-4.22-10.61a15.21,15.21,0,0,1,.3-5.83l10,17.82v8.54s.24-5.05,2.42-6l2.18-1-1.1,20Z"/></g>
                    </g></mask><linearGradient id="Безымянный_градиент_131-2" x1="480.92" y1="179.44" x2="548.02" y2="179.44" xlink:href="#Безымянный_градиент_101"/><mask id="mask-3" x="452.25" y="105.56" width="59.93" height="80.23" maskUnits="userSpaceOnUse">
                    <g class="cls-56"><g transform="translate(-87.59 -25.1)">
                    <path class="cls-14" d="M574.76,130.66s22.16,9.52,24.78,12.48-18.68,64.3-18.68,64.3l-33.27.08s-9.67-30.8-7.41-46.92,6.13-20.76,10.33-23.93,11.62-4.13,11.62-4.13Z"/></g>
                    </g></mask><linearGradient id="Безымянный_градиент_131-3" x1="563.81" y1="185.12" x2="597.57" y2="185.12" xlink:href="#Безымянный_градиент_101"/><mask id="mask-4" x="389.68" y="36.34" width="234.14" height="512.37" maskUnits="userSpaceOnUse">
                    <g class="cls-56"><g transform="translate(-87.59 -25.1)"><path class="cls-15" d="M548.09,96.81c-.31-.94-1.7-5.42-1.7-5.42s-1.84-8-.55-11.12a18.41,18.41,0,0,1,8.33-8.42c3.18-1.33,28.4,8.38,30.2,15.39s2,15.39,1.36,19.6c-.73,4.53-1.28,11.16.88,13.28,13.24,13,1.68,25.24.62,27.17s-8.36-10.49-8.36-10.49l-38.54,13.6s-3.16-10.54,2.79-19.27C550.63,120.12,548.09,96.81,548.09,96.81Z"/><path class="cls-16" d="M557.36,117.72l3.14,13.41s4.54,6.37,8.59,3.48a38.27,38.27,0,0,1,6.17-3.82l-7.47-18.34Z"/><path class="cls-3" d="M549.39,77.05l-3,14.34s-.23,12.22-.87,13.19a15.74,15.74,0,0,0-1.29,3.34l2.58,1.83,2.58,13s10.66,1.23,15.18-2.68,6.77-12.2,6.77-12.2,4.53-5,5.17-7.24.09-6.81-1.25-6.16a15.83,15.83,0,0,1-3.91,1s2.26-11.7-1-15.66-7.75-6.83-12.92-6.52A12.08,12.08,0,0,0,549.39,77.05Z"/><path class="cls-3" d="M535.15,165.77c-1.09,2.57-17.22,37.92-17.22,37.92l-31.82-41.21v11.73s18.26,36.6,23.25,41.59c7.74,7.75,15.5,5,15.5,5l23.23-43.21Z"/><path class="cls-17" d="M524.86,174.21c0-.86,21.63-33.51,23.89-35.46S558.11,153,558.11,153l-10,29Z"/>
                    <path class="cls-3" d="M537.44,271.46c-1.21,3.43,16,121.89,16,121.89S574,528.63,574.72,526.23s8.27,0,8.27,0,5.22-92.88,3.25-109.69-11.52-35.21-11.52-35.21l8.94-109.9-8.94,20.89L619,400.52l45,125.74,8.51-3.23c-16.09-85-12.79-85.22-18.85-108.09-1.87-7.07-17.49-30.58-17.49-30.58s-7.28-60.22-17.19-85.25-45.78-77.84-45.78-77.84Z"/>
                    <path class="cls-17" d="M550.63,200.3S540.33,230,534,256.6c-5.34,22.52-9.17,59.41-9.17,59.41h106.8s-30.75-75.94-38.75-92-22.61-27-22.61-27Z"/><path class="cls-7" d="M575.26,130.79s22.16,9.52,24.78,12.48-18.69,64.3-18.69,64.3l-33.26.08s-9.67-30.8-7.41-46.92S546.81,140,551,136.8s11.62-4.13,11.62-4.13Z"/>
                    <path class="cls-3" d="M605.24,156.72C607.8,160,621,209.67,621,209.67s-.58,11.75-15.94,11.09-49.55-17.07-49.55-17.07l10.76-2.9,38.41,6.86-12.31-33.44Z"/><path class="cls-15" d="M561.55,69.12c-3.29.35-9.9,2.78-11.84,5.89s-1.6,8.17-1.6,8.17,4.73,2.36,10,9.13,15.17,4.13,15.17,4.13l11.09-7.07S584,76.7,578.12,73.26,565.79,68.68,561.55,69.12Z"/>
                    <path class="cls-18" d="M524.86,323.66V325a4.53,4.53,0,0,0,7.73,3.21l.5-.5.47,2.21a4.53,4.53,0,0,0,7.39,2.48l7.14-6.15,19.2,9.63a4.52,4.52,0,0,0,5.32-.93l7.62-8.05,5.43,6.66a4.52,4.52,0,0,0,6.66.39l7.72-7.48,10.08,7.4a4.52,4.52,0,0,0,6.85-1.89c1.19-2.82,2.6-5.53,3.32-4.78.55.57,3.58,1.84,7.12,3.19a4.53,4.53,0,0,0,5.42-6.69h-108Z"/>
                    <path class="cls-17" d="M550.63,145.45l9.87-16.59s.29,2.67,4.92,2.27a34.27,34.27,0,0,0,9.06-2.27l5.75,4.12L572,145.88l-8.72-10.52Z"/><path class="cls-17" d="M595.67,189.93s-7.56-21-8.24-32.93c-.73-13,5.33-24,13.44-13s20.25,45.9,20.25,45.9Z"/>
                    <circle class="cls-17" cx="560.44" cy="146.92" r="1.47"/><circle class="cls-17" cx="557.02" cy="160.92" r="1.47"/>
                    <rect class="cls-17" x="524.86" y="319.8" width="107.97" height="3.87"/>
                    <path class="cls-3" d="M566.31,200.79l-10.76-12a40.33,40.33,0,0,0-12.25.41c-5.53,1.29-10.7,2.71-10.7,2.71s1.8,3.69,4.78,4.2,7.49-.22,9.43.95,5.57,8.05,10.21,7.36A28.72,28.72,0,0,0,566.31,200.79Z"/>
                    <path class="cls-3" d="M537.38,199.17l12-2.14,1.23,3.27s-6.63,1.19-10.52.69C537.39,200.64,537.38,199.17,537.38,199.17Z"/>
                    <path class="cls-3" d="M552.78,182.05s2.67,5.39,4.24,6.41,5,9.58,5,9.58l-8.39-8s-1.94-3.8-1.78-5.39A5.34,5.34,0,0,1,552.78,182.05Z"/>
                    <path class="cls-3" d="M488.78,174.4s-1.45,1-3.88-1.46-3.14-7.17-3.14-7.17l-4.49-9.05,7.63-6.32s-3.73-7.52-4.21-10.61A15.07,15.07,0,0,1,481,134l10,17.82v8.54s.24-5,2.42-6l2.18-1-1.1,20Z"/>
                    <path class="cls-18" d="M574,528.91l-3.21-6.6a1.31,1.31,0,0,1,2-1.58l5.49,4.5,1.3-2.84a1.31,1.31,0,0,1,2.49.55h0l5.3-3.38a1.3,1.3,0,0,1,1.86,1.69l-3.93,7.66Z"/>
                    <path class="cls-18" d="M660.5,526.26l-1.2-4.34a1.38,1.38,0,0,1,2.3-1.36l2.45,2.38,10.24-6.46a1.39,1.39,0,0,1,2.06,1.62l-1.65,4.84H678a1.39,1.39,0,0,1,.79,2.53l-3.11,2.15H660.5Z"/>
                    <path class="cls-17" d="M570.4,528.91V543.8s-12,15.1-16.64,16-7,0-7,0L544.56,567h26.91s3.53-9.42,6.81-9.86,0,9.86,0,9.86h5.26s6.56-9.2,5.25-14.45a19.88,19.88,0,0,0-4.6-8.54l1.75-15.11Z"/>
                    <path class="cls-17" d="M661.19,527.62,667,545.38a8.48,8.48,0,0,0-2.91,4.52c-1,3.22.69,15.05.69,15.05h4.52l.88,2.06h24.14l-1.94-6.46a21,21,0,0,1-6.5-5.57,81.69,81.69,0,0,1-5.81-10.57l-3.71-16.79Z"/></g></g></mask>
                    <linearGradient id="Безымянный_градиент_131-4" x1="551.79" y1="317.62" x2="711.4" y2="317.62" xlink:href="#Безымянный_градиент_101"/>
                    <mask id="mask-5" x="378.73" y="0.04" width="165.22" height="290.68" maskUnits="userSpaceOnUse">
                    <g transform="translate(-87.59 -25.1)">
                    <path class="cls-3" d="M488.65,174.2s-1.45,1-3.87-1.45-3.15-7.18-3.15-7.18l-4.49-9,7.64-6.32s-3.74-7.52-4.22-10.61a15.1,15.1,0,0,1,.29-5.83l10,17.82v8.54s.24-5.05,2.42-6l2.18-1-1.1,20Z"/>
                    <path class="cls-15" d="M548,96.62c-.31-1-1.7-5.43-1.7-5.43s-1.84-8-.55-11.12A18.41,18.41,0,0,1,554,71.65c3.19-1.33,28.4,8.38,30.2,15.4s2,15.38,1.37,19.59c-.74,4.54-1.29,11.16.87,13.28,13.24,13,1.68,25.25.62,27.17s-8.36-10.48-8.36-10.48L540.2,150.2S537,139.66,543,130.93C550.5,119.92,548,96.62,548,96.62Z"/>
                    <path class="cls-3" d="M549.26,76.85l-3,14.34s-.23,12.23-.87,13.19a15.74,15.74,0,0,0-1.29,3.34l2.58,1.83,2.58,13s10.66,1.24,15.18-2.68,6.77-12.2,6.77-12.2,4.53-5,5.17-7.24.09-6.8-1.25-6.16a15.83,15.83,0,0,1-3.91,1s2.26-11.7-1-15.66-7.75-6.82-12.92-6.52A12.08,12.08,0,0,0,549.26,76.85Z"/>
                    <path class="cls-3" d="M535,165.57c-1.09,2.58-17.21,37.93-17.21,37.93L486,162.29V174s18.25,36.59,23.24,41.58c7.74,7.75,15.5,5,15.5,5L548,177.38Z"/>
                    <path class="cls-17" d="M550.5,200.11s-10.3,29.7-16.6,56.29c-5.34,22.52-9.17,59.41-9.17,59.41h106.8s-30.75-75.94-38.75-92-22.61-27-22.61-27Z"/><path class="cls-17" d="M524.73,174c0-.87,21.63-33.52,23.89-35.47S558,152.81,558,152.81l-10,29Z"/>
                    <path class="cls-7" d="M575.13,130.59s22.16,9.53,24.78,12.48-18.69,64.3-18.69,64.3l-33.26.08s-9.67-30.8-7.41-46.92,6.13-20.76,10.33-23.92,11.62-4.14,11.62-4.14Z"/>
                    <path class="cls-3" d="M605.12,156.52c2.55,3.26,15.79,52.95,15.79,52.95s-.58,11.76-15.94,11.1-49.55-17.07-49.55-17.07l10.76-2.91,38.41,6.86L592.28,174Z"/><path class="cls-15" d="M561.42,68.93c-3.29.34-9.9,2.78-11.83,5.88S548,83,548,83s4.73,2.36,10,9.14,15.17,4.12,15.17,4.12l11.09-7.07s-.39-12.67-6.24-16.1S565.67,68.48,561.42,68.93Z"/>
                    <path class="cls-17" d="M550.5,145.25l9.87-16.59s.29,2.67,4.92,2.27a34.13,34.13,0,0,0,9.06-2.27l5.76,4.12-8.25,12.9-8.71-10.52Z"/><path class="cls-17" d="M595.54,189.73s-7.56-21-8.23-32.93c-.74-13,5.32-24,13.43-13S621,189.73,621,189.73Z"/>
                    <path class="cls-3" d="M560.14,193.84c-1.07-2.38-2.42-5-3.25-5.57-1.57-1-4.24-6.42-4.24-6.42a5.51,5.51,0,0,0-1,2.61,10.25,10.25,0,0,0,1.08,3.87,36.12,36.12,0,0,0-9.58.64c-5.54,1.29-10.7,2.71-10.7,2.71s1.79,3.69,4.77,4.2,7.49-.22,9.43,1a4.4,4.4,0,0,1,.49.38L537.25,199s0,1.46,2.73,1.81c3.16.41,8.11-.29,9.87-.57,1.9,2.14,4.29,4.38,7,4a28.47,28.47,0,0,0,9.29-3.6Z"/></g></mask>
                    <linearGradient id="Безымянный_градиент_9" x1="378.73" y1="118.22" x2="511.02" y2="118.22" gradientUnits="userSpaceOnUse">
                    <stop offset="0" stop-color="#fffefe"/><stop offset="0.37" stop-color="#fffefe" stop-opacity="0.62"/>
                    <stop offset="1" stop-color="#fff" stop-opacity="0"/></linearGradient><mask id="mask-6" x="74.1" y="87.56" width="129.87" height="114.26" maskUnits="userSpaceOnUse">
                    <g class="cls-56"><g transform="translate(-87.59 -25.1)"><path class="cls-3" d="M246.5,203.36l9.65,6.76s17.57,3,21.2,0a120.55,120.55,0,0,0,9.56-9.77s-10.77.49-13.5,3-7.85-1.12-7.85-1.12l7.85-3.69s-6-2.39-10.54-.73-16.37.73-16.37.73Z"/>
                    <path class="cls-17" d="M188.43,116.2s-9.24,13.33-13.48,33.93-4.24,69.68-4.24,69.68l85.44-9.69V198.55s-45.21-3.58-51.87-3a36.83,36.83,0,0,0-11.57,3s10.25-44.69,6.19-62.86C195.59,120.89,188.43,116.2,188.43,116.2Z"/>
                    <path class="cls-5" d="M192.94,196s-23.66,8.51-25,13.44a57,57,0,0,0-1.57,6.72Z"/><path class="cls-5" d="M194.15,197.23l-25.54,24.86a8.89,8.89,0,0,0,6.72-2.28C178.24,217.05,194.15,197.23,194.15,197.23Z"/></g></g></mask>
                    <linearGradient id="Безымянный_градиент_131-5" x1="161.69" y1="169.79" x2="291.56" y2="169.79" xlink:href="#Безымянный_градиент_101"/>
                    <linearGradient id="Безымянный_градиент_94-2" x1="295.86" y1="233.17" x2="320.37" y2="233.17" xlink:href="#Безымянный_градиент_94"/>
                    <linearGradient id="Безымянный_градиент_94-3" x1="288.8" y1="239.02" x2="313.32" y2="239.02" xlink:href="#Безымянный_градиент_94"/>
                    <linearGradient id="Безымянный_градиент_94-4" x1="117.7" y1="277.96" x2="175.04" y2="277.96" gradientTransform="translate(3.16 -1.63) rotate(0.69)" xlink:href="#Безымянный_градиент_94"/>
        </defs>
        <title>а2</title>
        <g class="cls-19">
            <g id="Слой_1" data-name="Слой 1">
                <polygon class="cls-25" points="499.72 0 379.04 54.03 379.04 179.98 511.34 236.38 499.72 0"></polygon>
                <rect class="cls-35" x="486.02" y="102.46" width="140.63" height="89.98" rx="18.17"></rect><rect class="cls-36" x="522.92" y="24.36" width="70.24" height="30.01" rx="12.71"></rect>
                <path class="cls-36" d="M645.24,107.86H616.36l-9.79,2.73,3.44-8.52V96a6.09,6.09,0,0,1,6.35-5.78h28.88A6.08,6.08,0,0,1,651.59,96v6.1A6.09,6.09,0,0,1,645.24,107.86Z" transform="translate(-87.59 -25.1)"></path>
                <rect class="cls-37" x="591.65" y="68.04" width="47.22" height="60.56" rx="12.71"></rect><rect class="cls-38" x="581.9" y="79.81" width="48.06" height="59.48" rx="12.71"></rect>
                <rect class="cls-37" x="518.25" y="115.22" width="47.22" height="60.56" rx="12.71"></rect><rect class="cls-37" x="637.5" y="226.4" width="10.1" height="10.1" rx="5.05"></rect>
                <rect class="cls-37" x="578.19" y="209.42" width="69.41" height="4.2"></rect><rect class="cls-37" x="578.19" y="199.37" width="69.41" height="4.2"></rect>
                <rect class="cls-37" x="578.19" y="189.31" width="69.41" height="4.2"></rect><rect class="cls-37" x="578.19" y="179.25" width="69.41" height="4.2"></rect>
                <rect class="cls-37" x="578.19" y="169.2" width="69.41" height="4.2"></rect><rect class="cls-37" x="578.19" y="159.14" width="69.41" height="4.2"></rect>
                <rect class="cls-40" x="371.29" y="54.03" width="10.9" height="125.95" rx="3.15"></rect>
                <path class="cls-15" d="M548,96.72c-.31-1-1.7-5.42-1.7-5.42s-1.83-8-.54-11.12a18.43,18.43,0,0,1,8.33-8.43c3.18-1.33,28.4,8.38,30.19,15.4s2.05,15.38,1.37,19.6c-.73,4.53-1.28,11.15.87,13.28,13.25,13.05,1.68,25.24.63,27.17s-8.37-10.49-8.37-10.49L540.27,150.3s-3.16-10.54,2.79-19.26C550.56,120,548,96.72,548,96.72Z" transform="translate(-87.59 -25.1)"></path>
                <path class="cls-16" d="M557.3,117.63,560.44,131s4.54,6.37,8.58,3.47a38.25,38.25,0,0,1,6.18-3.81l-7.47-18.34Z" transform="translate(-87.59 -25.1)"></path>
                <path class="cls-3" d="M549.33,77l-3,14.34s-.22,12.22-.87,13.19a16.34,16.34,0,0,0-1.29,3.34l2.59,1.82,2.58,13.06S560,123.94,564.5,120s6.78-12.2,6.78-12.2,4.52-5,5.17-7.24.08-6.81-1.25-6.16a16.37,16.37,0,0,1-3.92.95s2.26-11.71-1-15.67-7.74-6.82-12.91-6.52A12.08,12.08,0,0,0,549.33,77Z" transform="translate(-87.59 -25.1)"></path>
                <path class="cls-3" d="M535.09,165.68c-1.1,2.57-17.22,37.92-17.22,37.92l-31.82-41.21v11.73s18.26,36.6,23.25,41.59c7.74,7.75,15.49,5,15.49,5L548,177.49Z" transform="translate(-87.59 -25.1)"></path>
                <g class="cls-41"><path class="cls-42" d="M480.92,133.87l7.76,24.18s-1.87,13.48,0,16.25S526.63,225,526.63,225L548,177.49l-23.23-3.37-1.53,17.66c-.91,2-2.61,4.8-4.6,4l-6.25-2.6-16.91-50Z" transform="translate(-87.59 -25.1)"></path></g>
                <path class="cls-3" d="M537.37,271.37c-1.2,3.43,16.06,121.89,16.06,121.89s20.5,135.28,21.23,132.87,8.27,0,8.27,0,5.22-92.88,3.24-109.69-11.51-35.21-11.51-35.21l8.94-109.89-8.94,20.89,44.25,108.16,45,125.75,8.51-3.24c-16.1-85-12.8-85.21-18.85-108.08-1.88-7.07-17.5-30.58-17.5-30.58S628.82,324,618.91,299s-45.77-77.85-45.77-77.85Z" transform="translate(-87.59 -25.1)"></path>
                <path class="cls-17" d="M550.56,200.21s-10.29,29.7-16.59,56.3c-5.34,22.52-9.18,59.41-9.18,59.41H631.6S600.85,240,592.85,224s-22.61-27-22.61-27Z" transform="translate(-87.59 -25.1)"></path>
                <path class="cls-17" d="M524.79,174.12c0-.87,21.64-33.52,23.89-35.46s9.37,14.26,9.37,14.26l-10,29Z" transform="translate(-87.59 -25.1)"></path>
                <path class="cls-7" d="M575.2,130.7s22.16,9.52,24.78,12.48-18.69,64.3-18.69,64.3l-33.27.08s-9.67-30.8-7.41-46.92,6.14-20.76,10.33-23.93,11.63-4.13,11.63-4.13Z" transform="translate(-87.59 -25.1)"></path>
                <g class="cls-43"><path class="cls-44" d="M587.31,159.36s-4.35,11.1-9.12,15.13-14.38,33.07-14.38,33.07l20.49,3.33,13.27-22.57Z" transform="translate(-87.59 -25.1)"></path></g>
                <path class="cls-3" d="M605.18,156.63c2.56,3.25,15.79,52.94,15.79,52.94s-.58,11.76-15.93,11.1-49.55-17.07-49.55-17.07l10.76-2.9,38.4,6.86-12.3-33.44Z" transform="translate(-87.59 -25.1)"></path>
                <path class="cls-15" d="M561.48,69c-3.28.34-9.89,2.78-11.83,5.88S548,83.08,548,83.08s4.74,2.36,10,9.14,15.17,4.12,15.17,4.12l11.08-7.06s-.38-12.68-6.24-16.11S565.73,68.59,561.48,69Z" transform="translate(-87.59 -25.1)"></path>
                <path class="cls-18" d="M524.79,323.57v1.3a4.53,4.53,0,0,0,7.74,3.2l.5-.5.47,2.21a4.52,4.52,0,0,0,7.38,2.49l7.14-6.15,19.21,9.63a4.52,4.52,0,0,0,5.32-.93l7.62-8.05,5.43,6.66a4.52,4.52,0,0,0,6.66.39l7.72-7.48,10.07,7.4a4.54,4.54,0,0,0,6.86-1.89c1.19-2.82,2.59-5.54,3.32-4.78.54.56,3.58,1.83,7.12,3.19a4.53,4.53,0,0,0,5.42-6.69h-108Z" transform="translate(-87.59 -25.1)"></path>
                <path class="cls-17" d="M550.56,145.35l9.88-16.58s.29,2.67,4.92,2.27a34.13,34.13,0,0,0,9-2.27l5.76,4.12-8.24,12.89-8.72-10.51Z" transform="translate(-87.59 -25.1)"></path>
                <path class="cls-17" d="M595.61,189.83s-7.56-21-8.24-32.93c-.74-13,5.33-24,13.44-13s20.25,45.89,20.25,45.89Z" transform="translate(-87.59 -25.1)"></path>
                <circle class="cls-17" cx="472.79" cy="121.72" r="1.47"></circle><circle class="cls-17" cx="469.37" cy="135.72" r="1.47"></circle><rect class="cls-17" x="437.2" y="294.6" width="107.97" height="3.87"></rect>
                <path class="cls-3" d="M560.21,193.94c-1.08-2.37-2.42-5-3.25-5.57-1.58-1-4.24-6.42-4.24-6.42a5.4,5.4,0,0,0-1,2.62,10.46,10.46,0,0,0,1.07,3.87,36.12,36.12,0,0,0-9.58.63c-5.53,1.29-10.7,2.71-10.7,2.71s1.8,3.69,4.77,4.21,7.5-.23,9.44.95a3.46,3.46,0,0,1,.48.37l-9.92,1.77s0,1.47,2.74,1.82c3.15.41,8.11-.3,9.87-.58,1.89,2.14,4.29,4.38,7,4a28.56,28.56,0,0,0,9.29-3.59Z" transform="translate(-87.59 -25.1)"></path>
                <path class="cls-18" d="M570.34,528.82l-.08-6.25c-.61-1.26.45-2.88,2.12-1.89l5.81,4.46,1.31-2.84a1.3,1.3,0,0,1,2.49.54h0l5.29-3.38a1.31,1.31,0,0,1,1.87,1.7l-3.94,7.66Z" transform="translate(-87.59 -25.1)"></path>
                <path class="cls-18" d="M660.44,526.17l-1.21-4.34a1.39,1.39,0,0,1,2.31-1.37l2.45,2.38,10.24-6.46a1.39,1.39,0,0,1,2,1.63l-1.64,4.83h3.29a1.39,1.39,0,0,1,.79,2.54l-3.11,2.15H660.44Z" transform="translate(-87.59 -25.1)"></path>
                <path class="cls-17" d="M570.34,528.82V543.7s-12.05,15.11-16.64,16-7,0-7,0l-2.19,7.22h26.91s3.52-9.41,6.81-9.85,0,9.85,0,9.85h5.25s6.57-9.19,5.26-14.45a20.08,20.08,0,0,0-4.6-8.54l1.75-15.1Z" transform="translate(-87.59 -25.1)"></path>
                <path class="cls-17" d="M661.12,527.53l5.81,17.75a8.5,8.5,0,0,0-2.9,4.52c-1,3.23.68,15.05.68,15.05h4.52l.89,2.06h24.13l-1.93-6.45a20.91,20.91,0,0,1-6.5-5.57A81.56,81.56,0,0,1,680,544.31l-3.71-16.78Z" transform="translate(-87.59 -25.1)"></path>
                <g class="cls-45"><path class="cls-46" d="M569.67,66.3s-1.91,29.21-3.44,36.25-8.83,20.21-8.83,20.21,5.46-.88,6.72.25c15.09,13.42,22.36,21.29,28.15,25.21,7.75,5.25,22.33,70.83,22.33,70.83-11.82,6.94-50.74-11.38-50.74-11.38L577.63,548l-25.84,25.78h57.59l-19.16-230s15.87-8.57,20.88-7.43,56.43,184.53,56.43,184.53,10.13,31.14,12.72,34.53,10.81,16.94,10.81,16.94l20.34-.48-77-457.81-56.8-52.62Z" transform="translate(-87.59 -25.1)"></path></g>
                <image class="cls-47" width="21" height="144" transform="translate(369.91 44.67)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAACQCAYAAADnaiD9AAAACXBIWXMAAAsSAAALEgHS3X78AAACHklEQVRoQ+2a0W7bMAxFj113aRd02P//5jC3Ttx4DyYrSpZsd+AjLyAYsugTkpLydLtlWfBWfxTwP/oOtJNxqOFgvQbS+SJjoxa0K0ZZ0YME3cBrUAt6ktGTZ/gAPmU8zHtgC7XAAXiWMZCyfQAzcJcxU4BbmT6xwi7Aizw1dgYm4EPmmxbUMtUsfwA/gas8nyXmDowSp62wPa5mqr28sMJ+AW8yhzXLQQDahp61v0AOtbttM30DfgOvEvcuzztrCwbgZr5dWuXbnl5ZwVeJGQT4V2LK09HcKNvXF1JvYS17lDU9FdkF2Tv89lhdSD29kx+zzdVtnVOF2gugsfZCKDS7zmfvvgIgB1V15l+q9nETCOeg31ZA/RVQfwXUXwH1V0D9FVB/BdRfAfVXQP0VUH8F1F8B9VdA/RVQfwXUXwH1V0D9FVB/BdRfAfVXQP0VUH8F1F8B9VdA/RVQfwXUXwE9VM25ueuEPbKLqatQXYZQuA1rKqHW96ggdW/OEmPdnKVlFGhnqlC1LU4kr+RE7ubcZFyDWuCN1bo4ksxso7y70QDXyteSNUO1L2r57/JOM9ZWVMu3vdEsR1LZarycgD+yptlmfa2Vr5lOpLJntv7TUWKsBRdol6+ZdjK/mVjrlK32tbVR2lNI0N7Mraf3kxMbBelD/YGeffdxdk67hve8K0Z5nXd90i3o1zpts+UGpjp79yEvf1dHUKtDmOofZaC+vU0h2ZYAAAAASUVORK5CYII="></image>
                <rect class="cls-48" x="379.04" y="54.03" width="3.15" height="125.95"></rect><g class="cls-49"><polygon class="cls-50" points="499.41 0.04 378.73 54.07 378.73 180.01 511.02 236.41 499.41 0.04"></polygon></g>
            </g>
        </g>
    </svg>
<?php }


/**
 * Обрезка текста (excerpt). Шоткоды вырезаются. Минимальное значение maxchar может быть 22.
 *
 * @param string/array $args Параметры.
 *
 * @return string HTML
 *
 * @ver 2.6.5
 */
function kama_excerpt( $args = '' ){
	global $post;

	if( is_string($args) )
		parse_str( $args, $args );

	$rg = (object) array_merge( array(
		'maxchar'     => 350,   // Макс. количество символов.
		'text'        => '',    // Какой текст обрезать (по умолчанию post_excerpt, если нет post_content.
								// Если в тексте есть `<!--more-->`, то `maxchar` игнорируется и берется
								// все до <!--more--> вместе с HTML.
		'autop'       => true,  // Заменить переносы строк на <p> и <br> или нет?
		'save_tags'   => '',    // Теги, которые нужно оставить в тексте, например '<strong><b><a>'.
		'more_text'   => 'Читать дальше...', // Текст ссылки `Читать дальше`.
		'ignore_more' => false, // нужно ли игнорировать <!--more--> в контенте
	), $args );

	$rg = apply_filters( 'kama_excerpt_args', $rg );

	if( ! $rg->text )
		$rg->text = $post->post_excerpt ?: $post->post_content;

	$text = $rg->text;
	// убираем блочные шорткоды: [foo]some data[/foo]. Учитывает markdown
	$text = preg_replace( '~\[([a-z0-9_-]+)[^\]]*\](?!\().*?\[/\1\]~is', '', $text );
	// убираем шоткоды: [singlepic id=3]. Учитывает markdown
	$text = preg_replace( '~\[/?[^\]]*\](?!\()~', '', $text );
	$text = trim( $text );

	// <!--more-->
	if( ! $rg->ignore_more  &&  strpos( $text, '<!--more-->') ){
		preg_match('/(.*)<!--more-->/s', $text, $mm );

		$text = trim( $mm[1] );

		$text_append = ' <a href="'. get_permalink( $post ) .'#more-'. $post->ID .'">'. $rg->more_text .'</a>';
	}
	// text, excerpt, content
	else {
		$text = trim( strip_tags($text, $rg->save_tags) );

		// Обрезаем
		if( mb_strlen($text) > $rg->maxchar ){
			$text = mb_substr( $text, 0, $rg->maxchar );
			$text = preg_replace( '~(.*)\s[^\s]*$~s', '\\1...', $text ); // кил последнее слово, оно 99% неполное
		}
	}

	// сохраняем переносы строк. Упрощенный аналог wpautop()
	if( $rg->autop ){
		$text = preg_replace(
			array("/\r/", "/\n{2,}/", "/\n/",   '~</p><br ?/?>~'),
			array('',     '</p><p>',  '<br />', '</p>'),
			$text
		);
	}

	$text = apply_filters( 'kama_excerpt', $text, $rg );

	if( isset($text_append) )
		$text .= $text_append;

	return ( $rg->autop && $text ) ? "<p>$text</p>" : $text;
}
/* Сhangelog:
 * 2.6.5 - Параметр ignore_more
 * 2.6.4 - Убрал пробел между словом и многоточием
 * 2.6.3 - Рефакторинг
 * 2.6.2 - Добавил регулярку для удаления блочных шорткодов вида: [foo]some data[/foo]
 * 2.6   - Удалил параметр 'save_format' и заменил его на два параметра 'autop' и 'save_tags'.
 *       - Немного изменил логику кода.
 */




function planer_nav_menu() {
    register_nav_menu( 'primary', 'header_nav_menu' );
    register_nav_menu('catalog', 'planer_catalog_nav');
    register_nav_menu('footer_menu', 'planer_footer_menu');
    register_nav_menu( 'popup', 'planer_popup_menu' );
}

function planer_menu_nav_item_args( $args ) {
    $icon  = get_template_directory_uri() . '/assets/img/icons/star.svg';
	if ( $args->theme_location == 'primary' ) {
		$args->link_before = '<img src="'.$icon.'" class="planer-icon-header" alt="icon">';
    }
    if ($args->theme_location == 'footer_menu') {
        $args->link_before = '<img src="'.$icon.'" class="planer-icon-header" alt="icon">';
    }
    return $args;
}

function planer_popup_item_wrap( $args ) {
    if ($args->theme_location == 'popup') {
        $args->link_before = '<i class="fas fa-star"></i>';
    }
    return $args;
}

function add_option_field_planer_tel() {
	$option_name = 'planer_tel_option';

	// регистрируем опцию
	register_setting( 'general', $option_name );

	// добавляем поле
	add_settings_field( 
		'tel_setting-id', 
		'Телефон Организации', 
		'planer_tel_callback_function', 
		'general', 
		'default', 
		array( 
			'id' => 'tel_setting-id', 
			'option_name' => 'planer_tel_option' 
		)
	);
}

function planer_tel_callback_function( $val ) {
	$id = $val['id'];
	$option_name = $val['option_name'];
	?>
	<input 
		type="text" 
		name="<? echo $option_name ?>" 
		id="<? echo $id ?>" 
		value="<? echo esc_attr( get_option($option_name) ) ?>" 
	/> 
	<?
}

function devise_sender_email( $original_email_address ) {
    return 'info@planer-studio.ru';
}

add_filter( 'wp_mail_content_type', function($content_type){
	return "text/html";
});
	// Функция для изменения имени отправителя

function devise_sender_name( $original_email_from ) {
	return 'Planer-studio';
}

add_filter( 'wp_mail_from', 'devise_sender_email' );
add_filter( 'wp_mail_from_name', 'devise_sender_name' );

function planer_call_me_callback() {

    $to = 'info@planer-studio.ru';
    $from = trim($_POST['client_email']);
    $message = 'Здравствуйте, оставлена заявка на вашем сайте'; 
    $message .= "<br>";
    if (!empty($_POST['planer_client'])) {
        $message .= 'Меня зовут '.trim($_POST['planer_client']);
        $message .= "<br>";
    }
    if (!empty($_POST['client_name'])) {
        $message .= 'Меня зовут '.trim($_POST['client_name']);
    }
    if (!empty($_POST['client_tel'])) {
        $message .= 'Вот мой номер для связи: '.trim($_POST['client_tel']);
        $message .= "<br>";
    }
    if (!empty($_POST['client_calls'])) {
        $message .= 'Мои данные для связи: '.trim($_POST['client_calls']);
        $message .= "<br>";
    }
    if (!empty($_POST['client_email'])) {
        $message .= 'А это электронная почта: '.trim($_POST['client_email']);
        $message .= "<br>";
    }
    $message .= $_POST['client_comment'];
    $tema = "=?utf-8?B?".base64_encode("Заявка")."?="; 
    $mail_to = wp_mail($to, $tema, $message, $from);
        
}

function add_option_field_planer_mail() {
	$option_name = 'planer_mail_option';

	// регистрируем опцию
	register_setting( 'general', $option_name );

	// добавляем поле
	add_settings_field( 
		'mail_setting-id', 
		'Эл. Почта Организации', 
		'planer_mail_callback_function', 
		'general', 
		'default', 
		array( 
			'id' => 'mail_setting-id', 
			'option_name' => 'planer_mail_option' 
		)
	);
}

function planer_mail_callback_function( $val ){
	$id = $val['id'];
	$option_name = $val['option_name'];
	?>
	<input 
		type="text" 
		name="<? echo $option_name ?>" 
		id="<? echo $id ?>" 
		value="<? echo esc_attr( get_option($option_name) ) ?>" 
	/> 
	<?
}

function planer_popup_menu() { ?>
    <div class="planer-popup-section">
        <button class="planer-popup-close"><i class="fa fa-times"></i></button>
        <div class="planer-popup-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/logo.png" alt="logo">
        </div>
        <div class="planer-popup-wrapper">
            <nav class="planer-navbar-popup">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'popup',
                        'container' => null,
                        'menu_class' => 'planer-nav-popup',
                        'menu_id' => 'planer_nav_popuper'
                    ));
                ?>
		    </nav>
        </div>
    </div>
<? }


add_action('wp_head', 'planer_show_slider');
add_action('wp_footer', 'planer_case_page_scrollify', 99);

function planer_show_slider() { 
        $option = get_option('setting_about_us_page'); ?>
        <style>
            <?php 
                if (isset($option['about_us_setting_check_slider_partners'])) {
                    $check = $option['about_us_setting_check_slider_partners'];
                    if ($check == 'on' OR !empty($check)) { ?>
                            .planer-main-content-allow .planer-partners-content {
                                display: block;
                            }
                    <?php } elseif ($check == '' OR $check == null) { ?>
                        .planer-main-content-allow .planer-partners-content {
                            display: none;
                        }
                    <?php }
                } else { ?>
                        .planer-main-content-allow .planer-partners-content {
                            display: none;
                        }
                <?php };

            ?>
        </style>
        <!-- Yandex.Metrika counter --> 
			<script type="text/javascript" >
				(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(53481190, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true }); 
			</script> 
			<noscript>
				<div><img src="https://mc.yandex.ru/watch/53481190" style="position:absolute; left:-9999px;" alt="" /></div>
			</noscript> 
		<!-- /Yandex.Metrika counter -->
    <?php
}

function planer_case_page_scrollify() { ?>

    <script type="text/javascript">
        $(document).ready(function ($) { 
            <?php if (is_singular('case') or is_singular('services')): ?>
            if ($(window).width() <= "768") {
                $.scrollify.disable();
                $('.planer-layout-section').css({'height': 'auto'});
            } else {
                $.scrollify.enable();
            }
            <?php endif; ?>
        });
    </script>

<?php

}


// /**
//  * Register Blocks
//  * @see https://www.billerickson.net/building-gutenberg-block-acf/#register-block
//  *
//  */
// function be_register_blocks() {
//     if( ! function_exists('acf_register_block') )
//         return;
//     acf_register_block( array(
//         'name'			=> 'team-member',
//         'title'			=> __( 'Team Member', 'clientname' ),
//         'render_template'	=> 'partials/block-team-member.php',
//         'category'		=> 'formatting',
//         'icon'			=> 'admin-users',
//         'mode'			=> 'preview',
//         'keywords'		=> array( 'profile', 'user', 'author' )
//     ));
// }
// add_action('acf/init', 'be_register_blocks' );