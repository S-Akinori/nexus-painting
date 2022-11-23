<?php 

function popular_posts($atts) {
  extract(shortcode_atts([
    'numberposts' => 4,
    'category_name' => 'favorites'
  ], $atts));
  $popular_posts = get_posts([
    'numberposts' => $numberposts,
    'category' => get_cat_ID($category_name)
  ]);
  ob_start();
?>
<div class="Posts">
  <?php foreach($popular_posts as $post): ?>
  <div class="Posts__item">
    <div class="Posts__item__image">
      <a href="<?= get_the_permalink($post); ?>">
        <img src="<?= has_post_thumbnail($post) ? get_the_post_thumbnail_url($post, 'full') : get_template_directory_uri() . '/assets/images/no-image.jpg' ?>" alt="<?= get_the_title($post) ?>">
      </a>
    </div>
    <div class="Posts__item__content">
      <div class="Posts__item__content__title"><a href="<?= get_the_permalink($post); ?>"><?= get_the_title($post) ?></a></div>
      <div class="Posts__item__content__text"><?= get_the_excerpt($post) ?></div>
    </div>
  </div>
  <?php endforeach; ?>
</div>
<?php
  $children = ob_get_contents();
  ob_end_clean();
  return $children;
}

add_shortcode('popular_posts', 'popular_posts');