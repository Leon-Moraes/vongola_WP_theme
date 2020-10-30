<?php

    function vongola_enqueue_scripts () 
    {
        $version = time();
        wp_enqueue_script('vongola-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1', 'true');
        wp_enqueue_script('vongola-responsive-menu', get_template_directory_uri() . '/js/navbar.js', array('jquery'), '1', 'true');
        
        wp_enqueue_style('vongola-style', get_template_directory_uri() . "/style.css", array(), '1' , 'all');
    };
    function vongola_enqueue_style () {
            
        wp_enqueue_style('font','https://fonts.googleapis.com/css?family=Orbitron',  array(), '1' ,'all');
        
        wp_enqueue_style('font', 'https://fonts.googleapis.com/css?family=Share', array(), '1', 'all');
        
    };
    add_action('wp_enqueue_scripts', 'vongola_enqueue_scripts');
    add_action('wp_enqueue_style', 'vongola_enqueue_style');

    add_action( 'after_setup_theme', function() {
        add_theme_support('title-tag');
        add_theme_support( 'post-thumbnails' );
    });

    add_action( 'init', function(){
        register_nav_menu('header-menu',__( 'Menu Principal' ));
    });
    
    add_filter('body_class', function($classes){
        return array_merge( $classes, array(str_replace(array('.','-'), '_', str_replace(array('https://', 'http://', 'www.', '/', '.com', '.br'), '', get_site_url()))) );
    });
?>