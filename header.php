<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
  <title><?php is_front_page() ? bloginfo('name') - bloginfo('description') : the_title() ?></title>
  <meta property="og:title" content="<?php is_front_page() ? bloginfo('name') : the_title() ?>" />
  <meta property="og:description" content="<?php is_front_page() ? bloginfo('description') : the_excerpt() ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php home_url(); ?>" />
  <meta property="og:image" content="<?= get_template_directory_uri(); ?>/image.png" />
  <meta property="og:site_name" content="<?= bloginfo(); ?>" />
  <meta property="og:locale" content="ja_JP"  />
  <link rel="icon" href="/favicon.ico" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <div class="flex justify-between items-center">
      <div class="px-4 Logo"><a href="<?= home_url(); ?>"><img src="<?= get_template_directory_uri()?>/assets/images/logo.png" alt="<?= bloginfo(); ?>"></a></div>
      <div class="hidden md:flex items-center p-4">
        <div class="px-2">
          <a class="Button Button--accent !p-0 !flex items-center" href="<?= home_url('form'); ?>">
            <span class="bg-main inline-block p-2 text-base-cont text-sm" style="border-radius: .5rem 0 0 .5rem;">無料で<br />カンタン</span>
            <span class="p-2">調査を依頼する</span>
          </a>
        </div>
        <div class="px-2">
          <a class="font-bold text-lg flex" href="tel:072-442-2869"><span class="material-icons">call</span><span>072-442-2869</span></a>
          <div class="text-xs">平日10:00~19:00</div>
        </div>
      </div>
      <div class="flex md:hidden shrink-0">
        <a class="bg-accent p-2 text-accent-cont text-center font-bold" href="<?= home_url('form'); ?>">
          <span class="text-sm">＼カンタン／</span><br>
          調査を依頼
        </a>
        <a class="font-bold bg-main inline-block h-full p-4" href="tel:072-442-2869"><span class="material-icons">call</span></a>
      </div>
    </div>
  </header>
  <main>