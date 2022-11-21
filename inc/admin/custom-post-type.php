<?php

function create_post_type() {
  register_post_type('gallery', [
    'labels' => [
      'name'          => 'ギャラリー', // 管理画面上で表示する投稿タイプ名
      'singular_name' => 'gallery',    // カスタム投稿の識別名
    ],
    'public' => true,
    'has_archive' => true,
    'menu_position' => 5,
    'supports' => ['title', 'editor', 'author', 'thumbnail', 'excerpt']
  ]);
}
add_action( 'init', 'create_post_type' );