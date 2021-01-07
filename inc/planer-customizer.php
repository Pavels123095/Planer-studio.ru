<?php


class PlanerCustomizer {
    function __construct()
    {
        add_action( 'customize_register', array( $this, 'planer_costomizer' ));
    }

    function planer_costomizer($wp_customize) {

        $wp_customize->add_setting('main_logo', array(
            'default' => '',
            'sanitize_callback' => 'absint',
        ));
        $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'main_logo', array(
            'section' => 'title_tagline',
            'label' => 'Логотип'
        )));
        $wp_customize->add_setting('footer_logo', array(
            'default' => '',
            'sanitize_callback' => 'absint',
        ));
        $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'footer_logo', array(
            'section' => 'title_tagline',
            'label' => 'Логотип подвала'
        )));
    
        // $wp_customize->add_panel('planer_cost_catalog', array (
        //     'title' => 'Услуги',
        //     'priority' => 20,
        // ));
    
        // $wp_customize->add_section('planer_site_visited', array('title' => 'Сайт-Визитка','panel' => 'planer_cost_catalog',));
        // $wp_customize->add_setting('planer_site_visited_title', array('default' => '','transport' => 'refresh',));
        // $wp_customize->add_control( 'planer_site_visited_title', array('section' => 'planer_site_visited','label' => 'Название услуги','type' => 'text',));
        // $wp_customize->add_setting('planer_site_visited_description', array( 'default' => '','transport' => 'refresh',));
        // $wp_customize->add_control( 'planer_site_visited_description', array('section' => 'planer_site_visited','label' => 'Описание услуги', 'type' => 'textarea',));
        // $wp_customize->add_setting('planer_site_visited_cost', array('default' => '','transport' => 'refresh',));
        // $wp_customize->add_control( 'planer_site_visited_cost', array('section' => 'planer_site_visited','label' => 'Цена Услуги','type' => 'number',));
    
        // $wp_customize->add_section('planer_site_catalog', array('title' => 'Сайт-каталог','panel' => 'planer_cost_catalog',));
        // $wp_customize->add_setting('planer_site_catalog_name', array('default' => '','transport' => 'refresh',));
        // $wp_customize->add_control('planer_site_catalog_name', array('section' => 'planer_site_catalog','label' => 'Название Услуги','type' => 'text',));
        // $wp_customize->add_setting('planer_site_catalog_description', array('default' => '','transport' => 'refresh',));
        // $wp_customize->add_control( 'planer_site_catalog_description', array('section' => 'planer_site_catalog','label' => 'Описание Услуги','type' => 'textarea',));
        // $wp_customize->add_setting( 'planer_site_catalog_cost', array( 'default' => '','transport' => 'refresh',));
        // $wp_customize->add_control( 'planer_site_catalog_cost', array('section' => 'planer_site_catalog','label' => 'Цена Услуги','type' => 'number',));
    
        // $wp_customize->add_section('planer_online_store', array('title' => 'Интернет-магазин','panel' => 'planer_cost_catalog',));
        // $wp_customize->add_setting('planer_online_store_title', array('default' => '','transport' => 'refresh',));
        // $wp_customize->add_control('planer_online_store_title', array('section' => 'planer_online_store','label' => 'Название услуги','type' => 'text',));
        // $wp_customize->add_setting('planer_online_store_description', array('default' => '','transport' => 'refresh',));
        // $wp_customize->add_control('planer_online_store_description', array('section' => 'planer_online_store','label' => 'Описание услуги','type' => 'textarea',));
        // $wp_customize->add_setting('planer_online_store_cost', array('default' => '','transport' => 'refresh',));
        // $wp_customize->add_control('planer_online_store_cost', array('section' => 'planer_online_store','label' => 'Цена Услуги','type' => 'number',));
    
        // $wp_customize->add_section('planer_corporate_site', array('title' => 'Корпоративный сайт','panel' => 'planer_cost_catalog',));
        // $wp_customize->add_setting('planer_corporate_site_title', array('default' => '','transport' => 'refresh',));
        // $wp_customize->add_control('planer_corporate_site_title', array('section' => 'planer_corporate_site','label' => 'Название услуги','type' => 'text',));
        // $wp_customize->add_setting('planer_corporate_site_description', array('default' => '','transport' => 'refresh',));
        // $wp_customize->add_control('planer_corporate_site_description', array('section' => 'planer_corporate_site','label' => 'Описание услуги','type' => 'textarea',));
        // $wp_customize->add_setting('planer_corporate_site_cost', array('default' => '','transport' => 'refresh',));
        // $wp_customize->add_control('planer_corporate_site_cost', array('section' => 'planer_corporate_site','label' => 'Цена Услуги','type' => 'number',));
    
        // $wp_customize->add_section('planer_landing_site', array('title' => 'Landing page','panel' => 'planer_cost_catalog',));
        // $wp_customize->add_setting('planer_landing_site_title', array('default' => '','transport' => 'refresh',));
        // $wp_customize->add_control('planer_landing_site_title', array('section' => 'planer_landing_site','label' => 'Название услуги','type' => 'text',));
        // $wp_customize->add_setting('planer_landing_site_description', array('default' => '','transport' => 'refresh',));
        // $wp_customize->add_control('planer_landing_site_description', array('section' => 'planer_landing_site','label' => 'Описание услуги','type' => 'textarea',));
        // $wp_customize->add_setting('planer_landing_site_cost', array('default' => '','transport' => 'refresh',));
        // $wp_customize->add_control('planer_landing_site_cost', array('section' => 'planer_landing_site','label' => 'Цена Услуги','type' => 'number',));
    
        // $wp_customize->add_section('planer_promotion_site', array('title' => 'Продвижение Сайтов','panel' => 'planer_cost_catalog',));
        // $wp_customize->add_setting('planer_promotion_site_title', array('default' => '','transport' => 'refresh',));
        // $wp_customize->add_control('planer_promotion_site_title', array('section' => 'planer_promotion_site','label' => 'Название услуги','type' => 'text',));
        // $wp_customize->add_setting('planer_promotion_site_description', array('default' => '','transport' => 'refresh',));
        // $wp_customize->add_control('planer_promotion_site_description', array('section' => 'planer_promotion_site','label' => 'Описание услуги','type' => 'textarea',));
        // $wp_customize->add_setting('planer_promotion_site_cost', array('default' => '','transport' => 'refresh',));
        // $wp_customize->add_control('planer_promotion_site_cost', array('section' => 'planer_promotion_site','label' => 'Цена Услуги','type' => 'number',));
    
        // $wp_customize->add_panel('planer_portfolio', array ('title' => 'Портфолио','priority' => 20,));
    
        // $wp_customize->add_section('planer_portfolio_link_add', array('title' => 'Ссылки на партнёров','panel' => 'planer_portfolio',));
        // $wp_customize->add_setting('planer_portfolio_link_one', array('default' => '','transport' => 'postMessage',));
        // $wp_customize->add_control('planer_portfolio_link_one', array ('section' => 'planer_portfolio_link_add','label' => 'Ссылка на 1-ого партнёра','type' => 'text',));
        // $wp_customize->add_setting('planer_portfolio_link_two', array('default' => '','transport' => 'postMessage',));
        // $wp_customize->add_control('planer_portfolio_link_two', array ( 'section' => 'planer_portfolio_link_add','label' => 'Ссылка на 2-ого партнёра','type' => 'text',));
        // $wp_customize->add_setting('planer_portfolio_link_three', array( 'default' => '','transport' => 'postMessage',));
        // $wp_customize->add_control('planer_portfolio_link_three', array ('section' => 'planer_portfolio_link_add','label' => 'Ссылка на 3-ого партнёра','type' => 'text',));
        // $wp_customize->add_setting('planer_portfolio_link_four', array( 'default' => '','transport' => 'postMessage',));
        // $wp_customize->add_control('planer_portfolio_link_four', array ('section' => 'planer_portfolio_link_add','label' => 'Ссылка на 4-ого партнёра','type' => 'text',));
    
        // $wp_customize->add_section('planer_porfolio_image_back', array('title' => 'Картинки партнёров','panel' => 'planer_portfolio',));
        // $wp_customize->add_setting('planer_porfolio_image_back_one', array('default' => '','transport' => 'refresh',));
        // $wp_customize->add_control('planer_porfolio_image_back_one', array ('section' => 'planer_porfolio_image_back','label' => 'Картинка 1-ого партнёра','type' => 'text',));
        // $wp_customize->add_setting('planer_porfolio_image_back_two', array('default' => '','transport' => 'refresh',));
        // $wp_customize->add_control('planer_porfolio_image_back_two', array ('section' => 'planer_porfolio_image_back','label' => 'Картинка 2-ого партнёра','type' => 'text',));
        // $wp_customize->add_setting('planer_porfolio_image_back_three', array('default' => '','transport' => 'refresh',));
        // $wp_customize->add_control('planer_porfolio_image_back_three', array ('section' => 'planer_porfolio_image_back','label' => 'Картинка 3-ого партнёра','type' => 'text',));
        // $wp_customize->add_setting('planer_porfolio_image_back_four', array('default' => '','transport' => 'refresh',));
        // $wp_customize->add_control('planer_porfolio_image_back_four', array ('section' => 'planer_porfolio_image_back','label' => 'Картинка 4-ого партнёра','type' => 'text',));
    
        // $wp_customize->add_section('planer_porfolio_image_logo', array('title' => 'Логотипы партнёров','panel' => 'planer_portfolio',));
        // $wp_customize->add_setting('planer_porfolio_image_logo_one', array('default' => '','transport' => 'refresh',));
        // $wp_customize->add_control('planer_porfolio_image_logo_one', array ('section' => 'planer_porfolio_image_logo','label' => 'Логотип 1-ого партнёра','type' => 'text',));
        // $wp_customize->add_setting('planer_porfolio_image_logo_two', array('default' => '','transport' => 'refresh',));
        // $wp_customize->add_control('planer_porfolio_image_logo_two', array ('section' => 'planer_porfolio_image_logo','label' => 'Логотип 2-ого партнёра','type' => 'text',));
        // $wp_customize->add_setting('planer_porfolio_image_logo_three', array('default' => '','transport' => 'refresh',));
        // $wp_customize->add_control('planer_porfolio_image_logo_three', array ('section' => 'planer_porfolio_image_logo','label' => 'Логотип 3-ого партнёра','type' => 'text',));
        // $wp_customize->add_setting('planer_porfolio_image_logo_four', array('default' => '','transport' => 'refresh',));
        // $wp_customize->add_control('planer_porfolio_image_logo_four', array ('section' => 'planer_porfolio_image_logo','label' => 'Логотип 4-ого партнёра','type' => 'text',));
    

        
    
        $wp_customize->selective_refresh->add_partial('footer_logo', array(
            'selector' => '.footer-logo',
            'render_callback' => function() {
                $logo = get_theme_mod('footer_logo');
                $img = wp_get_attachment_image_src($logo, 'full');
                if ($img) {
                    return '<img src="' . $img[0] . '" alt="">';
                } else {
                    return '';
                }
            }
        ));
    
        $wp_customize->selective_refresh->add_partial('main_logo', array(
            'selector' => '.main-logo',
            'render_callback' => function() {
                $logo = get_theme_mod('main_logo');
                $img = wp_get_attachment_image_src($logo, 'full');
                if ($img) {
                    return '<img src="' . $img[0] . '" alt="">';
                } else {
                    return '';
                }
            }
        ));
    }
}