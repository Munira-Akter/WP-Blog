<?php

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



?>