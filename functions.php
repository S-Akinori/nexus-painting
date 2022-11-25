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