<?php

// add theme support

function theme_suppport(){ 
    add_theme_support('menus');
    add_theme_support('widgets');
    add_theme_support('custom_header');
    add_theme_support('custom_background');
    add_theme_support('custom logo');
    add_theme_support('title_tag');
    add_theme_support('post_formats',['Standard','Video','Gellary','Link','Aside','Image','Audio']);
    add_theme_support('post_thumbnails');

}

add_action('after_setup_theme','theme_support');


// Add Style & Script file through 

function style_script(){ 

    wp_enqueue_style('bootstrap', get_template_directory_uri(  ).'/assets/css/vendor/bootstrap.min.css');
    wp_enqueue_style('fontawsome',get_template_directory_uri(  ).'assets/css/vendor/font-awesome.css');
    wp_enqueue_style('slick',get_template_directory_uri(  ).'assets/css/vendor/slick.css');
    wp_enqueue_style('slicktheme',get_template_directory_uri(  ).'assets/css/vendor/slick-theme.css');
    wp_enqueue_style('base',get_template_directory_uri(  ).'assets/css/vendor/base.css');
    wp_enqueue_style('plugin',get_template_directory_uri(  ).'assets/css/plugins/plugins.css');
    wp_enqueue_style('style',get_template_directory_uri(  ).'assets/css/style.css');
    wp_enqueue_style('stylesheet',get_template_directory_uri(  ));

    wp_enqueue_script('modernizr' ,get_template_directory_uri(  ).'assets/js/vendor/modernizr.min.js');
    wp_enqueue_script('jquery' ,get_template_directory_uri(  ).'assets/js/vendor/jquery.js');
    wp_enqueue_script('bootstrap' ,get_template_directory_uri(  ).'assets/js/vendor/bootstrap.min.js');
    wp_enqueue_script('slick' ,get_template_directory_uri(  ).'assets/js/vendor/slick.min.js');
    wp_enqueue_script('tweenmax' ,get_template_directory_uri(  ).'assets/js/vendor/tweenmax.min.js');
    wp_enqueue_script('cookie' ,get_template_directory_uri(  ).'assets/js/vendor/js.cookie.js');
    wp_enqueue_script('switcher' ,get_template_directory_uri(  ).'assets/js/vendor/jquery.style.switcher.js');
    wp_enqueue_script('main' ,get_template_directory_uri(  ).'assets/js/main.js');

  
}  

add_action('wp_enqueue_scripts','style_script');




?>0