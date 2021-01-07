<?php


class PlanerAssets {
    function __construct()
    {
        add_action( 'wp_enqueue_scripts', array( $this, 'planer_enqueue_style' ));
        add_action('wp_enqueue_scripts', array( $this,'planer_enqueue_script'), 20);
    }

    function planer_enqueue_style() {
        $suffix = (WP_DEBUG === true) ? '' : '.min';
        wp_enqueue_style('slick', get_template_directory_uri() . '/assets/lib/slick/slick'. $suffix .'.css', array(),wp_get_theme()->get( 'Version' ));
        wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/lib/slick/slick-theme.css', array(),wp_get_theme()->get( 'Version' ));
        wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/lib/fontawesome/css/all'. $suffix .'.css', array(),wp_get_theme()->get( 'Version' ));
        wp_enqueue_style('layout', get_template_directory_uri() . '/assets/css/layout'. $suffix .'.css', array(),wp_get_theme()->get( 'Version' ));
        wp_enqueue_style('header', get_template_directory_uri() . '/assets/css/header'. $suffix .'.css', array(),wp_get_theme()->get( 'Version' ));
        wp_enqueue_style('footer', get_template_directory_uri() . '/assets/css/footer'. $suffix .'.css', array(),wp_get_theme()->get( 'Version' ));
        wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style'. $suffix .'.css', array(),wp_get_theme()->get( 'Version' ));
    }
    
    function planer_enqueue_script() {
        $suffix = (WP_DEBUG === true) ? '' : '.min';
        wp_enqueue_script('planer-jquery', get_template_directory_uri() . '/assets/lib/jquery.min.js', array(),wp_get_theme()->get( 'Version' ), true );
        wp_enqueue_script('planer-scroll', get_template_directory_uri() . '/assets/lib/jquery-scrollify' . $suffix . '.js', array( 'jquery' ),wp_get_theme()->get( 'Version' ), true );
        wp_enqueue_script('planer-slick', get_template_directory_uri() . '/assets/lib/slick/slick' . $suffix . '.js', array( 'jquery' ),wp_get_theme()->get( 'Version' ), true );
        wp_enqueue_script('planer-common', get_template_directory_uri() .'/assets/js/common' . $suffix . '.js', array('jquery'),wp_get_theme()->get( 'Version' ), true);
        wp_localize_script('planer-common', 'common', array('url' => admin_url('admin-ajax.php')));  
    }
}