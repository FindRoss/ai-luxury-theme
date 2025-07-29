<?php 

// Add the main stylesheet to the theme
function enqueue_theme_styles() {  
  wp_enqueue_style( 'style-index', get_template_directory_uri() . '/build/style-index.css', array(), wp_get_theme()->get('Version'));
}
add_action( 'wp_enqueue_scripts', 'enqueue_theme_styles');

// Add the main JavaScript file to the theme
function enqueue_theme_scripts() {
  wp_enqueue_script( 'main-js', get_template_directory_uri() . '/build/index.js', array(), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'enqueue_theme_scripts');

// Add post thumbail support to the theme
add_theme_support('post-thumbnails');

// Add menus to the theme
register_nav_menus(array(
  'primary'    => 'Primary', 
  'footer_one' => 'Footer Menu One',
  'footer_two' => 'Footer Menu Two',
));

/**
 * Custom Nav Walker
 */
require get_template_directory() . '/inc/custom-nav-walker.php';

/**
 * Custom Excerpt Length and More Text
 */
function custom_excerpt_length($length) {
    return 20; // Set this to the number of words you want
}
add_filter('excerpt_length', 'custom_excerpt_length');

function custom_excerpt_more($more) {
    return '...'; // Or add a link: return '... <a href="' . get_permalink() . '">Read more</a>';
}
add_filter('excerpt_more', 'custom_excerpt_more');

/**
 * Add support for document title tag
 */

add_theme_support( 'title-tag' );