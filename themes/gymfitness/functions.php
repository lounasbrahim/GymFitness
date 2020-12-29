<?php
require (get_template_directory() . "/inc/queries.php");
require_once( get_template_directory() . '/classes/recent-posts.php' );
require_once( get_template_directory() . '/classes/about-me.php' );

// creates The Menus
function gymfitness_menus(){
    register_nav_menus(array(
        'main-menu' => "Menu"      
    ));
    }
// Hook
add_action( "init", "gymfitness_menus" );

// Adds Stylesheets and Js
function gymfitness_scripts(){
    // Google fonts
    wp_enqueue_style( "googlefont", "https://fonts.googleapis.com/css2?familyOpen+Sans&family=Raleway:wght@400;500;600;700;800;900&family=Staatliches&display=swap", array(), '1.0.0' );
     // Normalize Css
     wp_enqueue_style( 'normalize' , get_template_directory_uri() . "/css/normalize.css" , array(), "8.0.1" );

    // Bootstrap Css
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
    
    // Main style
    wp_enqueue_style( 'style' , get_stylesheet_uri() , array("normalize","googlefont"), "1.0.0" );

    // Slicknav css
    wp_enqueue_style( "slicknav.min" , get_template_directory_uri() . "/css/slicknav.min.css", array(), "1.0.0" ); 

    // Load slicknav Js files
    wp_enqueue_script( "jquery.slicknav.min" , get_template_directory_uri() . "/js/jquery.slicknav.min.js" , array("jquery" ), "1.0.0" , true );

    // Load Jquery
    wp_enqueue_script( "jquery" );
    
    if ( get_page_template_slug(  ) ==  "gallery.php" ) :       
        // Lighbox css
        wp_enqueue_style( "lightbox.min" , get_template_directory_uri() . "/css/lightbox.min.css", array(), "2.1.11" ); 
        
        // Lighbox js
        wp_enqueue_script( "lightbox.min" , get_template_directory_uri() . "/js/lightbox.min.js" , array("jquery" ), "1.0.0" , true );
    endif;

    // Load font-awesome
    wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

    // Load scripts Js files
    wp_enqueue_script( "scripts.js" ,  get_template_directory_uri() . "/js/scripts.js" , array(), "1.0.0" , true );

    if ( is_front_page(  ) ):
        // Load Owlcarousel CSS
        wp_enqueue_style( "owl.carousel.min" , get_template_directory_uri() . "/css/owl.carousel.min.css", array(), "1.0.0" ); 
        
        // Load Owltheme
        wp_enqueue_style( "owl.theme.default.min" , get_template_directory_uri() . "/css/owl.theme.default.min.css", array(), "1.0.0" ); 


        // Load Owlcarousel Js
        wp_enqueue_script( "owl.carousel.min.js" ,    get_template_directory_uri() . "/js/owl.carousel.min.js"    , array("jquery"), "1.0.0" , true );
    endif;
}
    
// Adds Feature Image AND Image sizes
function gymfitness_setup(){
    add_theme_support( "post-thumbnails" );
    add_image_size( "gallery-box" , 445,335, true );
    add_image_size( "small-gallery-box" , 445,298, true );
    add_image_size( "blog-single-box" , 845,563, true );
    add_image_size( "portrait-gallery-box" , 445,668, true );
    add_image_size( "header-banner" , 1100,733, true );
}

// Creates Sidebar
function gymfitness_widgets(){
    $args = array(
    "name" => "Sidebar",
    "id" => "sidebar",
    "before_widget" => "<div class='widget'>",
    "after_widget" => "</dib>",
    "before_title" => "<h2 class='widget-title'>",
    "after-title" => "</h2>"
    );

    $args2 = array(
        "name" => "Blog Sidebar",
        "id" => "blog-sidebar",
        "before_widget" => "<div class='widget'>",
        "after_widget" => "</dib>",
        "before_title" => "<h2 class='widget-title'>",
        "after-title" => "</h2>"
        );
    register_sidebar( $args );
    register_sidebar( $args2 );
}

function register_my_recents_posts_custom_widgets() {
    register_widget( 'My_Recent_Posts' );
}
function register_about_me_custom_widgets() {
    register_widget( 'About_Me' );
}
// Hook  functions with Wordpress Hooks
add_action( "wp_enqueue_scripts" , "gymfitness_scripts" );
add_action( "after_setup_theme" , "gymfitness_setup" );
add_action( "widgets_init" , "gymfitness_widgets" );
add_action( 'widgets_init', 'register_my_recents_posts_custom_widgets' );
add_action( 'widgets_init', 'register_about_me_custom_widgets' );




