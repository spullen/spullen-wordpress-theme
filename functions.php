<?php

add_action( 'init', 'register_my_menu' );
 
//Register area for custom menu
function register_my_menu() {
    register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
}

//Some simple code for our widget-enabled sidebar
if ( function_exists('register_sidebar') )
    register_sidebar();

// Enable post thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(250, 250, true);

?>