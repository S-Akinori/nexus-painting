<?php
require_once __DIR__ . '/inc/shortcode.php';
require_once __DIR__ . '/inc/admin.php';

add_theme_support('post-thumbnails');

// function twpp_enqueue_scripts() {
//   wp_enqueue_script( 
//     'main-script',
//     get_template_directory_uri() . '/assets/scripts/main.js' ,
//     [],
//     false,
//     true
//   );
// }

// add_action( 'wp_enqueue_scripts', 'twpp_enqueue_scripts' );