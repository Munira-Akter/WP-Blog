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


function admin_scripts(){

    wp_enqueue_script( 'custom', get_template_directory_uri(  ).'/js/custom.js');

}


add_action('admin_enqueue_scripts' , 'admin_scripts');

// Register Nav Menu
register_nav_menus( [
    'primary_menu' =>'Primary Menu',
    'footer_menu'  => 'Footer Menu',

]);


// Register Custom Post Type
register_post_type( 'topic', [
    'public' => true,
    'labels' => [
        'name' => 'Topic',
        'add_new_item' => 'Add new topic',
        'add_new' => 'Add new topics',
        'featured_image' => 'Topic Thumbnail',
        'all_items'  => 'All Topic'
    ],

    'menu_icon' => 'dashicons-buddicons-topics',
    'supports' => ['title','thumbnail','editor']
]);


// Create Widgets



add_action( 'widgets_init', 'widget_custom' );

function widget_custom(){

    register_sidebar( [
        'name' => 'Footer One',
        'id'   => 'footer_one,'
    ] );

    register_sidebar( [
        'name' => 'Footer Two',
        'id'  => 'footer_two',
    ] );

    register_widget('FooterOne');

    register_widget('FooterTwo');

};


class FooterOne extends WP_Widget{

    public function __construct(){
        parent::__construct('FooterOne' , 'Quick Link One' , [
            'description' => 'This widget is for Footer Quick Link'
        ]);
    }


    public function widget($x , $y){ 
        $head = $y['ht'];
        $list = $y['list']
        
        ?>

    <?php echo $x['before_widget'] ?>

    <?php echo $x['before_title'] ?><?php echo $head ?><?php echo $x['after_title'] ?>
        <div class="inner">
            <ul class="ft-menu-list">
                <li><a href="#"><?php echo $head ?></a></li>
                <li><a href="#"><?php echo $list?></a></li>
                <li><a href="#">Terrorism</a></li>
                <li><a href="#">Disasters</a></li>
                <li><a href="#">Global Economy</a></li>
                <li><a href="#">Environment</a></li>
                <li><a href="#">Religion</a></li>
                <li><a href="#">Scandals</a></li>
            </ul>
        </div>

        <?php echo $x['after_widget'] ?>

    <?php }


    public function form($y){
        $head = $y['ht'];
        $list = $y['list']?>

        <p>
            <label>Head Title</label>
            <input class="widefat" type="editor" name="<?php echo $this -> get_field_name('ht') ?>" value="<?php echo $head?>">
        </p>

        <p>
            <label>Photo</label>
            <input class="widefat" type="text" id="blog_cpinput" value="">
        </p>

    <p>
        <button class="btn btn-primary" id="ccblog_btn" type="button">Add Photo</button>
        <img id="blog_photo" src="" width="100%">
    </p>



   <?php }


}


Class FooterTwo extends WP_Widget{

    public function __construct(){
        parent::__construct('FooterTwo','Quick Link Two',[
            'description' => 'This widget is for Footer Quick Link Two'
        ]);
    }
}




// redux framework install

require_once("redux/ReduxCore/framework.php");
require_once("redux/sample/config.php");


// CMB2 framework install
require_once("cmb2/init.php");
require_once("cmb2/config.php");














?>