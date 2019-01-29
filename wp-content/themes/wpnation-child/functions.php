<?php


add_action( 'wp_enqueue_scripts', 'nation_scripts' );

function nation_scripts() {
    wp_enqueue_style( 'font-awesome',get_stylesheet_directory_uri().'/css/font-awesome.min.css' );
    wp_enqueue_style( 'jquery-ui', get_stylesheet_directory_uri(). '/css/jquery-ui.min.css' );
    wp_enqueue_style( 'bootstrap-datepicker', get_stylesheet_directory_uri(). '/css/bootstrap-datepicker.css' );
    wp_enqueue_style( 'vikbooking_styles', get_stylesheet_directory_uri(). '/css/vikbooking_styles.css' );
    wp_enqueue_style( 'style-main', get_stylesheet_directory_uri(). '/css/main.css' );
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri(). '/js/bootstrap.min.js', array('jquery'));
     wp_enqueue_script('scripts-js', get_stylesheet_directory_uri(). '/js/scripts.js', array('jquery'));
    wp_enqueue_script('jquery-ui-js', get_stylesheet_directory_uri(). '/js/jquery-ui.min.js', array('jquery'));
    wp_enqueue_script('main-js', get_stylesheet_directory_uri(). '/js/main.js', array('jquery'));
   
   
   
}



















?>