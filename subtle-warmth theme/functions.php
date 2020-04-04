<?php

if( ! function_exists ('subtlewarmth_setup')) :

    function subtlewarmth_setup() {
      // let WordPress handle the title tags
      add_theme_support( 'title-tag' );
      add_theme_support( 'post-thumbnails' );
    }

endif;
add_action('after_setup_theme', 'subtlewarmth_setup');

/* register menus */

function register_subtlewarmth_menus() {
    register_nav_menus(
      array(
        'primary' => __('Primary Menu')
      )
    );
}
add_action('init', 'register_subtlewarmth_menus');

/* add stylesheets */

function subtlewarmth_scripts() {
    // enqueue the main stylesheet
    wp_enqueue_style('subtlewarmth_styles', get_stylesheet_uri());
    // enqueue google fonts Lora & Garamound
    wp_enqueue_style('subtlewarmth_google_fonts', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond&family=Lora&family=Nunito+Sans:wght@300;400&display=swap');
}

add_action('wp_enqueue_scripts', 'subtlewarmth_scripts');

function wpb_adding_scripts() {
wp_register_script('my_amazing_script', get_template_directory_uri() . '/js/index.js', array('jquery'),'1.1', true);
wp_enqueue_script('my_amazing_script');
}

add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );
