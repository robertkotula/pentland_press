<?php

// load style and js
function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
   
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');

    wp_enqueue_style( 'header', get_template_directory_uri() . '/css/header.css', array(), false, 'all');

    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');

    wp_enqueue_style( 'gallery', get_template_directory_uri() . '/css/gallery.css', array(), false, 'all');

    wp_enqueue_style( 'media_queries', get_template_directory_uri() . '/css/media_queries.css', array(), false, 'all');
   
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array ( 'jquery' ), false, true);
   
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
}
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );



// Theme Options 
add_theme_support('menus');
add_theme_support('custom-logo', array('header-text' => array('site-title', 'site-description')));

// Register Nav Walker class_alias 
require_once('wp_bootstrap_navwalker.php');


// Menus
register_nav_menus(

  array(
    'main-menu' => 'Main Menu Location',
    'mobile-menu' => 'Mobile Menu Location'
  )

);

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}
