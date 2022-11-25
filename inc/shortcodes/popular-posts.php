<?php 

function popular_posts($atts) {
  extract(shortcode_atts([
    'numberposts' => 4,
    'category_name' => 'favorites',
    'flex' => '1',
    'type' => 'row'
  ], $atts));
  $popular_posts = get_posts([
    'numberposts' => $numberposts,
    'category' => get_cat_ID($category_name)
  ]);
  ob_start();
?>
<div class="Posts <?= ($flex === '1') ? '' : '!block'?>">
  <?php foreach($popular_posts as $post): ?>
    <div class="<?= ($flex === '1') ? 'md:w-1/2 px-4' : 'w-full'?>">
      <a class="Posts__item " href="<?= get_the_permalink($post); ?>">
        <div class="Posts__item__image">
          <img src="<?= has_post_thumbnail($post) ? get_the_post_thumbnail_url($post, 'full') : get_template_directory_uri() . '/assets/images/no-image.jpg' ?>" alt="<?= get_the_title($post) ?>">
        </div>
        <div class="Posts__item__content">
          <div class="Posts__item__content__title"><?= get_the_title($post) ?></div>
          <div class="Posts__item__content__text"><?= get_the_excerpt($post) ?></div>
        </div>
      </a>
    </div>
  <?php endforeach; ?>
</div>
<?php
  $children = ob_get_contents();
  ob_end_clean();
  return $children;
}

add_shortcode('popular_posts', 'popular_posts');