<?php 

// Add the main stylesheet to the theme
function enqueue_theme_styles() {  
  wp_enqueue_style( 'style-index', get_template_directory_uri() . '/build/style-index.css', array(), wp_get_theme()->get('Version'));
}
add_action( 'wp_enqueue_scripts', 'enqueue_theme_styles');

// Add post thumbail support to the theme
add_theme_support('post-thumbnails');

// Add menus to the theme
register_nav_menus(array(
  'primary'    => 'Primary', 
  'footer_one' => 'Footer Menu One',
  'footer_two' => 'Footer Menu Two',
));