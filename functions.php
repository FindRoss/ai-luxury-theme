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

// Add chevron to menu items with sub-menus in mobile menu only
function add_chevron_to_menu_items($item_output, $item, $depth, $args) {
  if (in_array('menu-item-has-children', $item->classes) && strpos($args->menu_class, 'mobile-menu') !== false) {
    $chevron = '<div class="chevron">' . file_get_contents(get_template_directory() . '/template-parts/svg/chevron-down.php') . '</div>';
    $item_output = str_replace('</a>', '</a>' . $chevron, $item_output);
  }
  return $item_output;
}
add_filter('walker_nav_menu_start_el', 'add_chevron_to_menu_items', 10, 4);