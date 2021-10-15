<?php

// add theme support

function theme_support(){ 
    add_theme_support('menus');
    add_theme_support('widgets');
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats');
    add_theme_support('title-tag');
    add_theme_support('custom-header');
    add_theme_support('custom-background');
    add_theme_support('custom-logo');
    
    }
    
    add_action('after_setup_theme','theme_support');


// Add Style & Script file through 

function style_script(){ 

    wp_enqueue_style('bootstrap', get_template_directory_uri(  ).'/assets/css/vendor/bootstrap.min.css');
    wp_enqueue_style('fontawsome',get_template_directory_uri(  ).'/assets/css/vendor/font-awesome.css');
    wp_enqueue_style('slick',get_template_directory_uri(  ).'/assets/css/vendor/slick.css');
    wp_enqueue_style('slicktheme',get_template_directory_uri(  ).'/assets/css/vendor/slick-theme.css');
    wp_enqueue_style('base',get_template_directory_uri(  ).'/assets/css/vendor/base.css');
    wp_enqueue_style('plugin',get_template_directory_uri(  ).'/assets/css/plugins/plugins.css');
    wp_enqueue_style('stylesheet',get_stylesheet_uri(  ));

    wp_enqueue_script("jQuery");
    wp_enqueue_script('modernizr' ,get_template_directory_uri(  ).'/assets/js/vendor/modernizr.min.js', array('jquery') );
    wp_enqueue_script('bootstrap' ,get_template_directory_uri(  ).'/assets/js/vendor/bootstrap.min.js', array('jquery') );
    wp_enqueue_script('slick' ,get_template_directory_uri(  ).'/assets/js/vendor/slick.min.js', array('jquery') );
    wp_enqueue_script('tweenmax' ,get_template_directory_uri(  ).'/assets/js/vendor/tweenmax.min.js', array('jquery') );
    wp_enqueue_script('cookie' ,get_template_directory_uri(  ).'/assets/js/vendor/js.cookie.js', array('jquery') );
    wp_enqueue_script('switcher' ,get_template_directory_uri(  ).'/assets/js/vendor/jquery.style.switcher.js', array('jquery') );
    wp_enqueue_script('mainscript' ,get_theme_file_uri().'/assets/js/main.js', array('jquery') );

  
}  

add_action('wp_enqueue_scripts','style_script');




?>