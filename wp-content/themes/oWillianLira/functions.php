<?php
    // Cleaning the Header
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wlwmanifest_link');
        remove_action('wp_head', 'start_post_rel_link', 10, 0 );
        remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
        remove_action('wp_head', 'feed_links_extra', 3);
        remove_action('wp_head', 'wp_generator');
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('admin_print_scripts', 'print_emoji_detection_script');
        remove_action('wp_print_styles', 'print_emoji_styles');
        remove_action('admin_print_styles', 'print_emoji_styles');
    // Cleaning the Header

    // Registering Scripts e Styles
    function owillianlira_scripts() {
        // Atualizando o jQuery
        wp_deregister_script('jquery');
        wp_register_script( 
            'jquery', 
            get_template_directory_uri() . '/assets/jquery/jquery.min.js', 
            array(), '3.5.1', true 
        );
        wp_enqueue_script( 'jquery' );

        // Importando Bootstrap
        wp_enqueue_script( 
            'bootstrap', 
            get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', 
            array(), '4.5.x', true 
        );
        wp_enqueue_style( 
            'bootstrap', 
            get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css'
        );
        
        // Importando Lightbox
        wp_enqueue_script( 
            'Lightbox', 
            get_template_directory_uri() . '/assets/lightbox/js/lightbox.js', 
            array(), '2', true
        );
        wp_enqueue_style( 
            'Lightbox', 
            get_template_directory_uri() . '/assets/lightbox/css/lightbox.css'
        );
        
        // Ativando o style.css
        wp_enqueue_style( 
            'owl_css', 
            get_template_directory_uri() . '/style.css'
        );
        
        // Importando .JS owl
        wp_enqueue_script( 
            'owl_js', 
            get_template_directory_uri() . '/assets/js/script.js', 
            array(), '1.0.0', true 
        );

        
    }
    add_action( 'wp_enqueue_scripts', 'owillianlira_scripts' );

    // Enable 'Logo from panel'
    function theme_setup(){
        add_theme_support( 'custom-logo', array(
            'height'      => 80,
            'width'       => 220,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array( 'site-title', 'site-description' ),
        ) );
        
        add_theme_support( 'post-thumbnails' );
    }
    add_action('after_setup_theme','theme_setup');
    // Enable 'Logo from panel'

    // Enable Menus
        add_theme_support('menus');

        function register_menu() {
            register_nav_menu('personal-menu',__( 'myMenu' ));
        }
        add_action( 'init', 'register_menu' );
    // Enable Menus

    // Cleaning the phone number for links
    function cleaning($value){
        $value = trim($value);
        $value = str_replace(" ", "", $value);
        $value = str_replace(".", "", $value);
        $value = str_replace(",", "", $value);
        $value = str_replace("-", "", $value);
        $value = str_replace("_", "", $value);
        $value = str_replace("/", "", $value);
        return $value;
    }
    // Cleaning the phone number for links

    // OWL Custom Fields
    require_once get_template_directory() . '/assets/cmb2/load.php';
    // OWL Custom Fields
?>