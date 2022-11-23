<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php is_home() ? bloginfo() : the_title() ?></title>
  <meta property="og:title" content="<?php is_home() ? bloginfo() : the_title() ?>" />
  <meta property="og:description" content="<?php is_home() ? bloginfo() : the_excerpt() ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php home_url(); ?>" />
  <meta property="og:image" content="<?= get_template_directory_uri(); ?>/image.png" />
  <meta property="og:site_name" content="<?= bloginfo(); ?>" />
  <meta property="og:locale" content="ja_JP"  />
  <link rel="icon" href="/favicon.ico" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/styles/tw.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/index.css">
  <?php wp_enqueue_script('jquery'); ?>
	<?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <div class="flex justify-between items-center">
      <div class="c-logo"><a href="<?= home_url(); ?>">塗装のプロフェッショナル</a></div>
      <div class="flex items-center">
        <div class="px-2"><?= do_shortcode('[button bg="accent" href="'.home_url('form').'"]簡単見積もりスタート[/button]') ?></div>
        <div class="px-2"><a href="/">000-0000-000</a></div>
      </div>
    </div>
  </header>
  <main>