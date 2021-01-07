<?php
// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

require_once ABSPATH . 'wp-admin/includes/media.php';
require_once ABSPATH . 'wp-admin/includes/file.php';
require_once ABSPATH . 'wp-admin/includes/image.php';

class PlanerAdminPage {
    
    function __construct()
    {
        add_action('admin_menu',array ($this, 'planer_add_menu_page')); 
        add_action('admin_menu', array($this, 'planer_footer_text'));
        add_action( 'admin_init', array( $this, 'planer_settings_init' ) );
        add_action('admin_enqueue_scripts', array($this, 'planer_home_style'));
        add_action( 'admin_enqueue_scripts', array($this,'true_include_myuploadscript') );
        // add_filter( 'gutenberg_can_edit_post_type', array($this,'planer_gutternberg_on'), 10, 2);
    }


    // function planer_gutternberg_on( $is_enabled, $post_type ){
    //     // if ($post_type == "case"):
    //     //     return true;
    //     // elseif ($post_type == "services") :
    //     //     return true;
    //     // endif;
    //     return $is_enabled;
    // }

    function planer_add_menu_page() {
        add_menu_page( 
            'Настройки главной страницы',
            'Опции Главной',
            'manage_options', 
            'home_setting', 
            array($this,'planer_home_setting_page'), 
            'dashicons-admin-home', 2 
        ); 
        add_menu_page( 
            'Настройки страницы О нас (преимущества)',
            'Опции "О нас"',
            'manage_options', 
            'about_planer_setting', 
            array($this,'planer_about_setting_page'), 
            'dashicons-groups', 3 
        ); 
        add_submenu_page( 
            'home_setting',
            'Настройки Контента Секции "Услуги"',
            'Услуги',
            'manage_options',
            'home_set_services',
            array($this,'planer_home_setting_page_services'), 1 
        );
        add_submenu_page( 
            'home_setting',
            'Настройки Контента Секции "Преимущества"',
            'Преимущества',
            'manage_options',
            'home_set_advantage',
            array($this,'planer_home_setting_page_advantage'), 2 
        );
        add_submenu_page( 
            'home_setting',
            'Настройки Контента Секции "Портфолио"',
            'Портфолио',
            'manage_options',
            'home_set_portfolio',
            array($this,'planer_home_setting_page_portfolio'), 3
        );
        add_submenu_page( 
            'home_setting',
            'Настройки Контента Секции "О нас"',
            'О нас',
            'manage_options',
            'home_set_about_us',
            array($this,'planer_home_setting_page_about_us'), 4
        );
    }

    function planer_home_setting_page_services() { ?>
        <div class="wrap">
            <h2><?php echo get_admin_page_title() ?></h2>
            <div class="planer-home-setting-wrapper">
            
                <?php
                // settings_errors() не срабатывает автоматом на страницах отличных от опций
                if( get_current_screen()->parent_base !== 'options-general' )
                    settings_errors('planer_options_home');
                ?>

                <form class="planer-form-setting-homepage" action="options.php" method="POST">
                    <?php
                        settings_fields("planer_options_home_services");     // скрытые защитные поля
                        do_settings_sections("planer_options_home_services"); // секции с настройками (опциями).
                        submit_button();                    
                    ?>
                </form>
            </div>
        </div>
        <?php

    }

    function planer_home_setting_page_about_us() { ?>
            <div class="wrap">
                <h2><?php echo get_admin_page_title() ?></h2>
                <div class="planer-setting-about-us planer-home-setting-wrapper">
                
                    <?php
                    // settings_errors() не срабатывает автоматом на страницах отличных от опций
                    if( get_current_screen()->parent_base !== 'options-general' )
                        settings_errors('planer_options_home_about_us');
                    ?>

                    <form class="planer-form-setting-homepage" action="options.php" method="POST">
                        <?php
                            settings_fields("planer_options_home_about_us");     // скрытые защитные поля
                            do_settings_sections("planer_options_home_about_us"); // секции с настройками (опциями).
                            submit_button();                    
                        ?>
                    </form>
                </div>
            </div>
        <?php
    }

    function planer_home_setting_page_portfolio() { ?>
            <div class="wrap">
                <h2><?php echo get_admin_page_title() ?></h2>
                <div class="planer-setting-portfolio planer-home-setting-wrapper">
                
                    <?php
                    // settings_errors() не срабатывает автоматом на страницах отличных от опций
                    if( get_current_screen()->parent_base !== 'options-general' )
                        settings_errors('planer_options_portfolio');
                    ?>

                    <form class="planer-form-setting-homepage" action="options.php" method="POST">
                        <?php
                            settings_fields("planer_options_portfolio");     // скрытые защитные поля
                            do_settings_sections("planer_options_portfolio"); // секции с настройками (опциями).
                            submit_button();
                        ?>
                    </form>
                </div>
            </div>
        <?php
    }

    function planer_home_setting_page_advantage() { ?>
        <div class="wrap">
            <h2><?php echo get_admin_page_title() ?></h2>
            <div class="planer-setting-advantage planer-home-setting-wrapper">
            
                <?php
                // settings_errors() не срабатывает автоматом на страницах отличных от опций
                if( get_current_screen()->parent_base !== 'options-general' )
                    settings_errors('planer_options_home');
                ?>

                <form class="planer-form-setting-homepage" action="options.php" method="POST">
                    <?php
                        settings_fields("planer_options_home_advantage");     // скрытые защитные поля
                        do_settings_sections("planer_options_home_advantage"); // секции с настройками (опциями).
                        submit_button();
                    ?>
                </form>
            </div>
        </div>
        <?php
    }

    function planer_home_setting_page() { ?>
            <h2><?php echo get_admin_page_title(); ?></h2>
            <?php $pages = get_admin_url(null, 'admin.php?page=', null); ?>
        <div class="planer-home-setting-wrapper">
            <a class="planer-admin-page-link-home-option" href="<?php echo $pages.'home_set_services';?>">Настройки Секции Услуг</a>
            <a class="planer-admin-page-link-home-option" href="<?php echo $pages.'home_set_advantage';?>">Настройки Секции Преимущества</a>
            <a class="planer-admin-page-link-home-option" href="<?php echo $pages.'home_set_about_us';?>">Настройки Секции О нас</a>
            <a class="planer-admin-page-link-home-option" href="<?php echo $pages.'home_set_portfolio';?>">Настройки Секции Портфолио(Партнёры)</a>
        </div>
    <?php }

    function planer_about_setting_page() { ?>
        <div class="wrap">
            <h2><?php echo get_admin_page_title() ?></h2>
            <div class="planer-setting-advantage planer-home-setting-wrapper">
            
                <?php
                // settings_errors() не срабатывает автоматом на страницах отличных от опций
                if( get_current_screen()->parent_base !== 'options-general' )
                    settings_errors('planer_set_page_about_us');
                ?>

                <form class="planer-form-setting-homepage" action="options.php" method="POST">
                    <?php
                        settings_fields("planer_set_page_about_us");     // скрытые защитные поля
                        do_settings_sections("planer_set_page_about_us"); // секции с настройками (опциями).
                        submit_button();
                    ?>
                </form>
            </div>
        </div>
        <?php
    }

    function planer_settings_init() {
        register_setting('planer_options_home_services', 'home_settings_services');
        register_setting('planer_options_home_advantage', 'home_setting_advantages');
        register_setting('planer_options_portfolio','home_setting_portfolio');
        register_setting('planer_options_home_about_us', 'home_setting_about_us');

        /* Settings page about us */
            register_setting( 'planer_set_page_about_us', 'setting_about_us_page' );
            add_settings_section( 'setting_about_planer_section', '', array($this, 'set_about_planer_desc_section'), 'planer_set_page_about_us' );
            add_settings_field('about_us_setting_planer_editor','Коротко о Планере:', array($this, 'input_editor_planer_about'), 'planer_set_page_about_us', 'setting_about_planer_section');
            add_settings_field('about_us_setting_advant_editor','Наши преимущества:', array($this, 'input_editor_advantage_about'), 'planer_set_page_about_us', 'setting_about_planer_section');
            add_settings_field('about_us_setting_partners_editor','Наши партнёры:', array($this, 'input_editor_partners_about'), 'planer_set_page_about_us', 'setting_about_planer_section');
            add_settings_field('about_us_setting_check_slider_partners','Включить слайдер партнёров', array($this, 'input_check_partners_about'), 'planer_set_page_about_us', 'setting_about_planer_section');
        /* Settings page about us */

        //Section advantage as option
        add_settings_section('home_setting_advantage_section','', array($this, 'planer_desc_advant_section'),'planer_options_home_advantage');
        add_settings_field('home_setting_advant_first_rocket_text','Текст внутри 1-ой ракеты', array($this,'input_advant_first'),'planer_options_home_advantage', 'home_setting_advantage_section');
        add_settings_field('home_setting_advant_second_rocket_text','Текст внутри 2-ой ракеты', array($this,'input_advant_second'),'planer_options_home_advantage', 'home_setting_advantage_section');
        add_settings_field('home_setting_advant_third_rocket_text','Текст внутри 3-ей ракеты', array($this,'input_advant_third'),'planer_options_home_advantage', 'home_setting_advantage_section');


        //Section portfolio as options
        add_settings_section('home_setting_portfolio_section','', array($this,'planer_desc_portfolio_section'),'planer_options_portfolio');
        add_settings_field('home_setting_portfolio_first_logo','Логотип 1-ого партнёра', array($this,'input_logo_first'),'planer_options_portfolio','home_setting_portfolio_section');
        add_settings_field('home_setting_portfolio_second_logo','Логотип 2-ого партнёра', array($this,'input_logo_second'),'planer_options_portfolio','home_setting_portfolio_section');
        add_settings_field('home_setting_portfolio_third_logo','Логотип 3-ого партнёра', array($this,'input_logo_third'),'planer_options_portfolio','home_setting_portfolio_section');
        add_settings_field('home_setting_portfolio_four_logo','Логотип 4-ого партнёра', array($this,'input_logo_four'),'planer_options_portfolio','home_setting_portfolio_section');
        add_settings_field('home_setting_portfolio_first_back','background-image для 1-ого партнёра', array($this,'input_portfolio_back_first'),'planer_options_portfolio','home_setting_portfolio_section');
        add_settings_field('home_setting_portfolio_second_back','background-image для 2-ого партнёра', array($this,'input_portfolio_back_second'),'planer_options_portfolio','home_setting_portfolio_section');
        add_settings_field('home_setting_portfolio_third_back','background-image для 3-ого партнёра', array($this,'input_portfolio_back_third'),'planer_options_portfolio','home_setting_portfolio_section');
        add_settings_field('home_setting_portfolio_four_back','background-image для 4-ого партнёра', array($this,'input_portfolio_back_four'),'planer_options_portfolio','home_setting_portfolio_section');
        add_settings_field('home_setting_portfolio_first_link','Ссылка на 1-ого партнёра', array($this,'input_portfolio_link_first'),'planer_options_portfolio','home_setting_portfolio_section');
        add_settings_field('home_setting_portfolio_second_link','Ссылка на 2-ого партнёра', array($this,'input_portfolio_link_second'),'planer_options_portfolio','home_setting_portfolio_section');
        add_settings_field('home_setting_portfolio_third_link','Ссылка на 3-ого партнёра', array($this,'input_portfolio_link_third'),'planer_options_portfolio','home_setting_portfolio_section');
        add_settings_field('home_setting_portfolio_four_link','Ссылка на 4-ого партнёра', array($this,'input_portfolio_link_four'),'planer_options_portfolio','home_setting_portfolio_section');

        //Section about us options
        add_settings_section('home_setting_about_us_section','',array($this,'planer_desc_section_ab_us'),'planer_options_home_about_us');
        add_settings_field('home_setting_ab_us_title','Заголовок секции', array($this, 'input_site_ab_us'),'planer_options_home_about_us','home_setting_about_us_section');
        add_settings_field('home_setting_ab_us_desc','Описание секции', array($this, 'input_site_ab_us_desc'),'planer_options_home_about_us','home_setting_about_us_section');

        // параметры: $id, $title, $callback, $page
        add_settings_section( 'home_setting_services_visited', '', array($this,'planer_desc_section_home_opt'), 'planer_options_home_services' ); 
        // параметры: $id, $title, $callback, $page, $section, $args
        add_settings_field('home_setting_site_visited_title', 'Название Услуги (1-ый слайд)', array($this, 'input_site_visited'), 'planer_options_home_services', 'home_setting_services_visited');
        add_settings_field('home_setting_site_visited_cost', 'Цена Услуги (1-ый слайд)', array($this, 'input_site_visited_cost'), 'planer_options_home_services', 'home_setting_services_visited');
        add_settings_field('home_setting_site_visited_desc', 'Описание услуги (1-ый слайд)', array($this,'input_site_visited_desc'), 'planer_options_home_services', 'home_setting_services_visited');
        add_settings_field('home_setting_site_catalog_title', 'Название Услуги (2-ой слайд)', array($this, 'input_site_catalog'), 'planer_options_home_services', 'home_setting_services_visited');
        add_settings_field('home_setting_site_catalog_cost', 'Цена Услуги (2-ой слайд)', array($this, 'input_site_catalog_cost'), 'planer_options_home_services', 'home_setting_services_visited');
        add_settings_field('home_setting_site_catalog_desc', 'Описание услуги (2-ой слайд)', array($this,'input_site_catalog_desc'), 'planer_options_home_services', 'home_setting_services_visited');
        add_settings_field('home_setting_site_store_title', 'Название Услуги (3-ий слайд)', array($this, 'input_site_store'), 'planer_options_home_services', 'home_setting_services_visited');
        add_settings_field('home_setting_site_store_cost', 'Цена Услуги (3-ий слайд)', array($this, 'input_site_store_cost'), 'planer_options_home_services', 'home_setting_services_visited');
        add_settings_field('home_setting_site_store_desc', 'Описание услуги (3-ий слайд)', array($this,'input_site_store_desc'), 'planer_options_home_services', 'home_setting_services_visited');
        add_settings_field('home_setting_site_corporate_title', 'Название Услуги (4-ый слайд)', array($this, 'input_site_corporate'), 'planer_options_home_services', 'home_setting_services_visited');
        add_settings_field('home_setting_site_corporate_cost', 'Цена Услуги (4-ый слайд)', array($this, 'input_site_corporate_cost'), 'planer_options_home_services', 'home_setting_services_visited');
        add_settings_field('home_setting_site_corporate_desc', 'Описание услуги (4-ый слайд)', array($this,'input_site_corporate_desc'), 'planer_options_home_services', 'home_setting_services_visited');
        add_settings_field('home_setting_site_landing_title', 'Название Услуги (5-ый слайд)', array($this, 'input_site_landing'), 'planer_options_home_services', 'home_setting_services_visited');
        add_settings_field('home_setting_site_landing_cost', 'Цена Услуги (5-ый слайд)', array($this, 'input_site_landing_cost'), 'planer_options_home_services', 'home_setting_services_visited');
        add_settings_field('home_setting_site_landing_desc', 'Описание услуги (5-ый слайд)', array($this,'input_site_landing_desc'), 'planer_options_home_services', 'home_setting_services_visited');
        add_settings_field('home_setting_site_promotion_title', 'Название Услуги (6-ой слайд)', array($this, 'input_site_promotion'), 'planer_options_home_services', 'home_setting_services_visited');
        add_settings_field('home_setting_site_promotion_cost', 'Цена Услуги (6-ой слайд)', array($this, 'input_site_promotion_cost'), 'planer_options_home_services', 'home_setting_services_visited');
        add_settings_field('home_setting_site_promotion_desc', 'Описание услуги (6-ой слайд)', array($this,'input_site_promotion_desc'), 'planer_options_home_services', 'home_setting_services_visited');
    }

    function set_about_planer_desc_section() {
        echo '<span>Здесь будут настройки всей страницы "О нас" (Наши преимущества)</span>';
    }

    function planer_options_callback($options) {
        return $options['val'];
    }

    function input_editor_planer_about($options) {
        $options = get_option('setting_about_us_page');
        $val = $options['about_us_setting_planer_editor'];
        $id = 'about_us_setting_planer_editor';
        wp_editor( $val, $id, array(
            'wpautop' => true,
            'media_buttons' => 0,
            'textarea_name' => 'setting_about_us_page[about_us_setting_planer_editor]',
            'textarea_rows' => 10,
            'tabindex'      => null,
            'editor_css'    => '',
            'editor_class'  => '',
            'tinymce'       => 1,
            'dfw'           => 1,
            'quicktags'     => 1,
        ) );
    }
    function input_editor_advantage_about($options) {
        $options = get_option('setting_about_us_page');
        $val = $options['about_us_setting_advant_editor'];
        $id = 'about_us_setting_advant_editor';
        wp_editor( $val, $id, array(
            'wpautop' => true,
            'media_buttons' => 0,
            'textarea_name' => 'setting_about_us_page[about_us_setting_advant_editor]',
            'textarea_rows' => 10,
            'tabindex'      => null,
            'editor_css'    => '',
            'editor_class'  => '',
            'tinymce'       => 1,
            'dfw'           => 1,
            'quicktags'     => 1,
        ) );
    }
    
    function input_editor_partners_about($options) {
        $options = get_option('setting_about_us_page');
        $val = $options['about_us_setting_partners_editor'];
        $id = 'about_us_setting_partners_editor';
        wp_editor( $val, $id, array(
            'wpautop' => true,
            'media_buttons' => 0,
            'textarea_name' => 'setting_about_us_page[about_us_setting_partners_editor]',
            'textarea_rows' => 10,
            'tabindex'      => null,
            'editor_css'    => '',
            'editor_class'  => '',
            'teeny' => 0,
            'tinymce'       => 1,
            'dfw'           => 1,
            'quicktags'     => 1,
        ) );
    }
    function input_check_partners_about($options) {
        $options = get_option( 'setting_about_us_page' );
        if (isset($options['about_us_setting_check_slider_partners'])) {
        $val = $options['about_us_setting_check_slider_partners']; } else { $val = 'off';} ?>
        <span style=" display: block; padding-bottom: 10px; width: 100%; margin-right: auto;">Чтобы изменить слайдер (добавить/удалить партнёра) Зайдите в страницу Партнёры</span>
        <input type="checkbox" name="setting_about_us_page[about_us_setting_check_slider_partners]" 
        <?php if ($val == 'on') {echo 'checked="checked"';} else { echo ''; $options['about_us_setting_check_slider_partners'] = 'off';}; ?> 
        />
        <label for="setting_about_us_page[about_us_setting_check_slider_partners]">Включить</label>
        <?php
    }

    function input_advant_first($options) {
        $options = get_option('home_setting_advantages');
        $val = $options['home_setting_advant_first_rocket_text'];
        ?>
        <input type="text" name="home_setting_advantages[home_setting_advant_first_rocket_text]" value="<?php echo $val; ?>" />
        <?php
    }
    function input_advant_second($options) {
        $options = get_option('home_setting_advantages');
        $val = $options['home_setting_advant_second_rocket_text'];
        ?>
        <input type="text" name="home_setting_advantages[home_setting_advant_second_rocket_text]" value="<?php echo $val; ?>" />
        <?php
    }
    function input_advant_third($options) {
        $options = get_option('home_setting_advantages');
        $val = $options['home_setting_advant_third_rocket_text'];
        ?>
        <input type="text" name="home_setting_advantages[home_setting_advant_third_rocket_text]" value="<?php echo $val; ?>" />
        <?php
    }

    function input_site_ab_us_desc($options) {
        $options = get_option('home_setting_about_us');
        $val = $options['home_setting_ab_us_desc'];
        $id = 'home_setting_ab_us_desc';
        wp_editor( $val, $id, array(
            'wpautop' => true,
            'media_buttons' => 0,
            'textarea_name' => 'home_setting_about_us[home_setting_ab_us_desc]',
            'textarea_rows' => 10,
            'tabindex'      => null,
            'editor_css'    => '',
            'editor_class'  => '',
            'teeny' => 1,
            'tinymce'       => 1,
            'dfw'           => 1,
            'quicktags'     => 1,
        ) );
    }
    function input_site_ab_us($options) {
        $options = get_option('home_setting_about_us');
        $val = $options['home_setting_ab_us_title'];
        ?>
        <input type="text" name="home_setting_about_us[home_setting_ab_us_title]" value="<?php echo $val; ?>" />
        <?php
    }
    
    function input_logo_first($options, $val = '') {
        $options = get_option('home_setting_portfolio');
        $val = $options['home_setting_portfolio_first_logo'];
        if ( isset( $_REQUEST['saved'] ) ){
            echo '<div class="updated"><p>Сохранено.</p></div>';
        }
        $default = '';
        if( $val ) {
            $image_attributes = wp_get_attachment_image_src( $val);
            $src = $image_attributes[0];
            $default = $src;
        } else {
            $src = $default;
        }
        echo '
        <div class="wrap-logo-partner-admin">
            <img class="planer-admin-logo" data-src="' . $default . '" src="' . $src . '" />
            <div>
                <input type="hidden" name="home_setting_portfolio[home_setting_portfolio_first_logo]" id="home_setting_portfolio[home_setting_portfolio_first_logo]" value="' . $val . '" />
                <button type="submit" class="upload_image_button button">Загрузить</button>
                <button type="submit" class="remove_image_button button">×</button>
            </div>
        </div>';
    }
    function input_logo_second($options, $val = '') {
        $options = get_option('home_setting_portfolio');
        $val = $options['home_setting_portfolio_second_logo'];
        if ( isset( $_REQUEST['saved'] ) ){
            echo '<div class="updated"><p>Сохранено.</p></div>';
        }
        $default = '';
        if( $val ) {
            $image_attributes = wp_get_attachment_image_src( $val );
            $src = $image_attributes[0];
            $default = $src;
        } else {
            $src = $default;
        }
        echo '
        <div class="wrap-logo-partner-admin">
            <img class="planer-admin-logo" data-src="' . $default . '" src="' . $src . '" />
            <div>
                <input type="hidden" name="home_setting_portfolio[home_setting_portfolio_second_logo]" id="home_setting_portfolio[home_setting_portfolio_second_logo]" value="' . $val . '" />
                <button type="submit" class="upload_image_button button">Загрузить</button>
                <button type="submit" class="remove_image_button button">×</button>
            </div>
        </div>';
    }
    function input_logo_third($options, $val = '') {
        $options = get_option('home_setting_portfolio');
        $val = $options['home_setting_portfolio_third_logo'];
        if ( isset( $_REQUEST['saved'] ) ){
            echo '<div class="updated"><p>Сохранено.</p></div>';
        }
        $default = '';
        if( $val ) {
            $image_attributes = wp_get_attachment_image_src( $val );
            $src = $image_attributes[0];
            $default = $src;
        } else {
            $src = $default;
        }
        echo '
        <div class="wrap-logo-partner-admin">
            <img class="planer-admin-logo" data-src="' . $default . '" src="' . $src . '" />
            <div>
                <input type="hidden" name="home_setting_portfolio[home_setting_portfolio_third_logo]" id="home_setting_portfolio[home_setting_portfolio_fthird_logo]" value="' . $val . '" />
                <button type="submit" class="upload_image_button button">Загрузить</button>
                <button type="submit" class="remove_image_button button">×</button>
            </div>
        </div>';
    }
    function input_logo_four($options, $val = '') {
        $options = get_option('home_setting_portfolio');
        $val = $options['home_setting_portfolio_four_logo'];
        if ( isset( $_REQUEST['saved'] ) ){
            echo '<div class="updated"><p>Сохранено.</p></div>';
        }
        $default = '';
        if( $val ) {
            $image_attributes = wp_get_attachment_image_src( $val );
            $src = $image_attributes[0];
            $default = $src;
        } else {
            $src = $default;
        }
        echo '
        <div class="wrap-logo-partner-admin">
            <img class="planer-admin-logo" data-src="' . $default . '" src="' . $src . '" />
            <div>
                <input type="hidden" name="home_setting_portfolio[home_setting_portfolio_four_logo]" id="home_setting_portfolio[home_setting_portfolio_four_logo]" value="' . $val . '" />
                <button type="submit" class="upload_image_button button">Загрузить</button>
                <button type="submit" class="remove_image_button button">×</button>
            </div>
        </div>';
    }

    function input_portfolio_back_first($options){
        $options = get_option('home_setting_portfolio');
        $val = $options['home_setting_portfolio_first_back'];
        if ( isset( $_REQUEST['saved'] ) ){
            echo '<div class="updated"><p>Сохранено.</p></div>';
        }
        $default = '';
        if( $val ) {
            $image_attributes = wp_get_attachment_image_src( $val );
            $src = $image_attributes[0];
            $default = $src;
        } else {
            $src = $default;
        }
        echo '
        <div class="wrap-back-img-partner-admin">
            <img class="planer-admin-logo" data-src="' . $default . '" src="' . $src . '" />
            <div>
                <input type="hidden" name="home_setting_portfolio[home_setting_portfolio_first_back]" id="home_setting_portfolio[home_setting_portfolio_first_back]" value="' . $val . '" />
                <button type="submit" class="upload_image_button button">Загрузить</button>
                <button type="submit" class="remove_image_button button">×</button>
            </div>
        </div>';
    }
    function input_portfolio_back_second($options){
        $options = get_option('home_setting_portfolio');
        $val = $options['home_setting_portfolio_second_back'];
        if ( isset( $_REQUEST['saved'] ) ){
            echo '<div class="updated"><p>Сохранено.</p></div>';
        }
        $default = '';
        if( $val ) {
            $image_attributes = wp_get_attachment_image_src( $val );
            $src = $image_attributes[0];
            $default = $src;
        } else {
            $src = $default;
        }
        echo '
        <div class="wrap-back-img-partner-admin">
            <img class="planer-admin-logo" data-src="' . $default . '" src="' . $src . '" />
            <div>
                <input type="hidden" name="home_setting_portfolio[home_setting_portfolio_second_back]" id="home_setting_portfolio[home_setting_portfolio_second_back]" value="' . $val . '" />
                <button type="submit" class="upload_image_button button">Загрузить</button>
                <button type="submit" class="remove_image_button button">×</button>
            </div>
        </div>';
    }
    function input_portfolio_back_third($options){
        $options = get_option('home_setting_portfolio');
        $val = $options['home_setting_portfolio_third_back'];
        if ( isset( $_REQUEST['saved'] ) ){
            echo '<div class="updated"><p>Сохранено.</p></div>';
        }
        $default = '';
        if( $val ) {
            $image_attributes = wp_get_attachment_image_src( $val );
            $src = $image_attributes[0];
            $default = $src;
        } else {
            $src = $default;
        }
        echo '
        <div class="wrap-back-img-partner-admin">
            <img class="planer-admin-logo" data-src="' . $default . '" src="' . $src . '" />
            <div>
                <input type="hidden" name="home_setting_portfolio[home_setting_portfolio_third_back]" id="home_setting_portfolio[home_setting_portfolio_third_back]" value="' . $val . '" />
                <button type="submit" class="upload_image_button button">Загрузить</button>
                <button type="submit" class="remove_image_button button">×</button>
            </div>
        </div>';
    }
    function input_portfolio_back_four($options){
        $options = get_option('home_setting_portfolio');
        $val = $options['home_setting_portfolio_four_back'];
        if ( isset( $_REQUEST['saved'] ) ){
            echo '<div class="updated"><p>Сохранено.</p></div>';
        }
        $default = '';
        if( $val ) {
            $image_attributes = wp_get_attachment_image_src( $val );
            $src = $image_attributes[0];
            $default = $src;
        } else {
            $src = $default;
        }
        echo '
        <div class="wrap-back-img-partner-admin">
            <img class="planer-admin-logo" data-src="' . $default . '" src="' . $src . '" />
            <div>
                <input type="hidden" name="home_setting_portfolio[home_setting_portfolio_four_back]" id="home_setting_portfolio[home_setting_portfolio_four_back]" value="' . $val . '" />
                <button type="submit" class="upload_image_button button">Загрузить</button>
                <button type="submit" class="remove_image_button button">×</button>
            </div>
        </div>';
    }

    function input_portfolio_link_first($options) {
        $options = get_option('home_setting_portfolio');
        $val = $options['home_setting_portfolio_first_link'];
        ?>
        <input type="text" name="home_setting_portfolio[home_setting_portfolio_first_link]" value="<?php echo $val; ?>" />
        <?php
    }
    function input_portfolio_link_second($options) {
        $options = get_option('home_setting_portfolio');
        $val = $options['home_setting_portfolio_second_link'];
        ?>
        <input type="text" name="home_setting_portfolio[home_setting_portfolio_second_link]" value="<?php echo $val; ?>" />
        <?php
    }
    function input_portfolio_link_third($options) {
        $options = get_option('home_setting_portfolio');
        $val = $options['home_setting_portfolio_third_link'];
        ?>
        <input type="text" name="home_setting_portfolio[home_setting_portfolio_third_link]" value="<?php echo $val; ?>" />
        <?php
    }
    function input_portfolio_link_four($options) {
        $options = get_option('home_setting_portfolio');
        $val = $options['home_setting_portfolio_four_link'];
        ?>
        <input type="text" name="home_setting_portfolio[home_setting_portfolio_four_link]" value="<?php echo $val; ?>" />
        <?php
    }

    function planer_desc_advant_section() {
        echo '<span>Укажите или измените 3 качества компании для главной страницы</span>';
    }
    function planer_desc_section_home_opt() {
        echo '<span>Здесь вы можете изменить контент для слайдера услуг на главной странице</span>';
    }
    function planer_desc_portfolio_section() {
        echo '<span>Пожалуйста, укажите логотипы и background-изображения для партнёров(портфолио) на гланой странице</span>';
    }
    function planer_desc_section_ab_us(){
        echo '<span>Расскажите о компании в нескольких предложениях</span>';
    }


    function input_site_visited_desc($options) {
        $options = get_option('home_settings_services');
        $val = $options['home_setting_site_visited_desc'];
        $id = 'home_setting_site_visited_desc';
        wp_editor( $val, $id, array(
            'wpautop' => true,
            'media_buttons' => 0,
            'textarea_name' => 'home_settings_services[home_setting_site_visited_desc]',
            'textarea_rows' => 10,
            'tabindex'      => null,
            'editor_css'    => '',
            'editor_class'  => '',
            'tinymce'       => 1,
            'dfw'           => 1,
            'quicktags'     => 1,
        ) );
    }
    function input_site_visited($options) {
        $options = get_option('home_settings_services');
        ?>
        <input 
            type="text" 
            name="home_settings_services[home_setting_site_visited_title]" 
            value="<?php echo $options['home_setting_site_visited_title']; ?>" 
        /> 
        <?
    }
    function input_site_visited_cost($options) {
        $options = get_option('home_settings_services');
        ?>
        <input 
            type="number" 
            name="home_settings_services[home_setting_site_visited_cost]" 
            value="<?php echo $options['home_setting_site_visited_cost']; ?>" 
        /> 
        <?
    }

    function input_site_catalog($options) {
        $options = get_option('home_settings_services');
        $val = $options['home_setting_site_catalog_title'];
        ?>
        <input 
            type="text" 
            name="home_settings_services[home_setting_site_catalog_title]" 
            value="<?php echo $val; ?>" 
        /> 
        <?
    }
    function input_site_catalog_cost($options) {
        $options = get_option('home_settings_services');
        $val = $options['home_setting_site_catalog_cost'];
        ?>
        <input 
            type="number" 
            name="home_settings_services[home_setting_site_catalog_cost]" 
            value="<?php echo $val; ?>" 
        /> 
        <?
    }
    function input_site_catalog_desc($options) {
        $options = get_option('home_settings_services');
        $val = $options['home_setting_site_catalog_desc'];
        $id = 'home_setting_site_catalog_desc';
        wp_editor( $val, $id, array(
            'wpautop' => true,
            'media_buttons' => 0,
            'textarea_name' => 'home_settings_services[home_setting_site_catalog_desc]',
            'textarea_rows' => 10,
            'tabindex'      => null,
            'editor_css'    => '',
            'editor_class'  => '',
            'tinymce'       => 1,
            'dfw'           => 1,
            'quicktags'     => 1,
        ) );
    }

    function input_site_store($options) {
        $options = get_option('home_settings_services');
        $val = $options['home_setting_site_store_title'];
        ?>
        <input 
            type="text" 
            name="home_settings_services[home_setting_site_store_title]" 
            value="<?php echo $val; ?>" 
        /> 
        <?
    }
    function input_site_store_cost($options) {
        $options = get_option('home_settings_services');
        $val = $options['home_setting_site_store_cost'];
        ?>
        <input 
            type="number" 
            name="home_settings_services[home_setting_site_store_cost]" 
            value="<?php echo $val; ?>" 
        /> 
        <?
    }
    function input_site_store_desc($options) {
        $options = get_option('home_settings_services');
        $val = $options['home_setting_site_store_desc'];
        $id = 'home_setting_site_store_desc';
        wp_editor( $val, $id, array(
            'wpautop' => true,
            'media_buttons' => 0,
            'textarea_name' => 'home_settings_services[home_setting_site_store_desc]',
            'textarea_rows' => 10,
            'tabindex'      => null,
            'editor_css'    => '',
            'editor_class'  => '',
            'tinymce'       => 1,
            'dfw'           => 1,
            'quicktags'     => 1,
        ) );
    }

    function input_site_corporate($options) {
        $options = get_option('home_settings_services');
        $val = $options['home_setting_site_corporate_title'];
        ?>
        <input 
            type="text" 
            name="home_settings_services[home_setting_site_corporate_title]" 
            value="<?php echo $val; ?>" 
        /> 
        <?
    }
    function input_site_corporate_cost($options) {
        $options = get_option('home_settings_services');
        $val = $options['home_setting_site_corporate_cost'];
        ?>
        <input 
            type="number" 
            name="home_settings_services[home_setting_site_corporate_cost]" 
            value="<?php echo $val; ?>" 
        /> 
        <?
    }
    function input_site_corporate_desc($options) {
        $options = get_option('home_settings_services');
        $val = $options['home_setting_site_corporate_desc'];
        $id = 'home_setting_site_corporate_desc';
        wp_editor( $val, $id, array(
            'wpautop' => true,
            'media_buttons' => 0,
            'textarea_name' => 'home_settings_services[home_setting_site_corporate_desc]',
            'textarea_rows' => 10,
            'tabindex'      => null,
            'editor_css'    => '',
            'editor_class'  => '',
            'tinymce'       => 1,
            'dfw'           => 1,
            'quicktags'     => 1,
        ) );
    }

    function input_site_landing($options) {
        $options = get_option('home_settings_services');
        $val = $options['home_setting_site_landing_title'];
        ?>
        <input 
            type="text" 
            name="home_settings_services[home_setting_site_landing_title]" 
            value="<?php echo $val; ?>" 
        /> 
        <?
    }
    function input_site_landing_cost($options) {
        $options = get_option('home_settings_services');
        $val = $options['home_setting_site_landing_cost'];
        ?>
        <input 
            type="number" 
            name="home_settings_services[home_setting_site_landing_cost]" 
            value="<?php echo $val; ?>" 
        /> 
        <?
    }
    function input_site_landing_desc($options) {
        $options = get_option('home_settings_services');
        $val = $options['home_setting_site_landing_desc'];
        $id = 'home_setting_site_landing_desc';
        wp_editor( $val, $id, array(
            'wpautop' => true,
            'media_buttons' => 0,
            'textarea_name' => 'home_settings_services[home_setting_site_landing_desc]',
            'textarea_rows' => 10,
            'tabindex'      => null,
            'editor_css'    => '',
            'editor_class'  => '',
            'tinymce'       => 1,
            'dfw'           => 1,
            'quicktags'     => 1,
        ) );
    }

    function input_site_promotion($options) {
        $options = get_option('home_settings_services');
        $val = $options['home_setting_site_promotion_title'];
        ?>
        <input 
            type="text" 
            name="home_settings_services[home_setting_site_promotion_title]" 
            value="<?php echo $val; ?>" 
        /> 
        <?
    }
    function input_site_promotion_cost($options) {
        $options = get_option('home_settings_services');
        $val = $options['home_setting_site_promotion_cost'];
        ?>
        <input 
            type="number" 
            name="home_settings_services[home_setting_site_promotion_cost]" 
            value="<?php echo $val; ?>" 
        /> 
        <?
    }
    function input_site_promotion_desc($options) {
        $options = get_option('home_settings_services');
        $val = $options['home_setting_site_promotion_desc'];
        $id = 'home_setting_site_promotion_desc';
        wp_editor( $val, $id, array(
            'wpautop' => true,
            'media_buttons' => 0,
            'textarea_name' => 'home_settings_services[home_setting_site_promotion_desc]',
            'textarea_rows' => 10,
            'tabindex'      => null,
            'editor_css'    => '',
            'editor_class'  => '',
            'tinymce'       => 1,
            'dfw'           => 1,
            'quicktags'     => 1,
        ) );
    }

    function planer_home_style($suffix) { 
        $ssufix = '';
        $suffix = (WP_DEBUG === true) ? '' : '.min';
        wp_enqueue_style('admin-styles', get_template_directory_uri().'/assets/css/admin'. $ssufix . '.css');
    }

    function true_include_myuploadscript() {
        // у вас в админке уже должен быть подключен jQuery, если нет - раскомментируйте следующую строку:
        // wp_enqueue_script('jquery');
        // дальше у нас идут скрипты и стили загрузчика изображений WordPress
        if ( ! did_action( 'wp_enqueue_media' ) ) {
            wp_enqueue_media();
        }
        // само собой - меняем admin.js на название своего файла
         wp_enqueue_script( 'myuploadscript', get_template_directory_uri() . '/assets/js/admin.js', array('jquery'), null, false );
    }


    function planer_footer_text() {
        $option_name = 'footer_text';
        // регистрируем опцию
        register_setting( 'general', $option_name );
        add_settings_field('footer_text_down', 'Текст в подвале сайта', array($this, 'input_footer_text'), 'general', 'default');
    }

    function input_footer_text($options) {
        $options = get_option('footer_text');
        $val = $options['footer_text_down'];
        $id = 'footer_text';
        wp_editor( $val, $id, array(
            'wpautop' => true,
            'media_buttons' => 0,
            'textarea_name' => 'footer_text[footer_text_down]',
            'textarea_rows' => 10,
            'tabindex'      => null,
            'editor_css'    => '',
            'editor_class'  => '',
            'tinymce'       => 1,
            'dfw'           => 1,
            'quicktags'     => 1,
        ) );
    }


}