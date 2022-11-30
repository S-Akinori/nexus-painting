<?php
require_once __DIR__ . '/inc/shortcode.php';
require_once __DIR__ . '/inc/admin.php';

add_theme_support('post-thumbnails');

function register_my_menus() {
  register_nav_menus(
    array(
      'header' => __( 'ヘッダーメニュー' ),
      'sidebar' => __( 'サイドメニュー' ),
      'footer' => __( 'フッターメニュー' ),
     )
   );
 }
add_action( 'init', 'register_my_menus' );

function my_enqueue_styles() { 
  wp_enqueue_style( 'tw', get_template_directory_uri() . '/assets/styles/tw.css', '', '');
  wp_enqueue_style( 'my-style', get_template_directory_uri() . '/assets/styles/index.css', '', '');
}
function my_enqueue_scripts() { 
  wp_enqueue_script( 'smart-script', get_template_directory_uri() . '/assets/scripts/main.js', ['jquery'], '', true );
  // wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');