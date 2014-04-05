<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/


// Various clean up functions
require_once('library/cleanup.php');

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walker
require_once('library/menu-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

add_filter( 'woocommerce_enqueue_styles', '__return_false' );


function my_wp_nav_menu_args( $args = '' ) {

if( is_user_logged_in() ) {
  $args['menu'] = 'Logged In';
} else {
 	$args['menu'] = 'Logged Out';
}
  return $args;
}
add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );




?>