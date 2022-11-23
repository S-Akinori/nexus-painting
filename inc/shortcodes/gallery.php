<?php 

function gallery($atts) {
  extract(shortcode_atts([
    'numberposts' => 3,
  ], $atts));
  $gallery_posts = get_posts([
    'numberposts' => $numberposts,
    'post_type' => 'gallery'
  ]);
  ob_start();
?>
<div class="Gallery">
  <?php foreach($gallery_posts as $post): ?>
  <div class="Gallery__item">
    <div class="Gallery__item__image">
      <div class="Gallery__item__image__before"><img src="<?php the_field('before_image', $post->ID); ?>" alt="<?= get_the_title($post); ?>"></div>
      <div class="Gallery__item__image__after"><img src="<?= has_post_thumbnail($post) ? get_the_post_thumbnail_url($post, 'full') : get_template_directory_uri() . '/assets/images/no-image.jpg' ?>" alt="<?= get_the_title($post); ?>"></div>
    </div>
    <div class="Gallery__item__content">
      <div class="Gallery__item__content__price"><span style="font-size:50%;">&yen;</span><?php the_field('price', $post->ID); ?></div>
      <div class="Gallery__item__content__info">
        <div class="Gallery__item__content__info__item">
          <div class="Gallery__item__content__info__item__title">施工面積</div>
          <div class="Gallery__item__content__info__item__content"><?php the_field('area', $post->ID); ?></div>
        </div>
        <div class="Gallery__item__content__info__item">
          <div class="Gallery__item__content__info__item__title">築年数</div>
          <div class="Gallery__item__content__info__item__content"><?php the_field('age', $post->ID); ?></div>
        </div>
        <div class="Gallery__item__content__info__item">
          <div class="Gallery__item__content__info__item__title">工期</div>
          <div class="Gallery__item__content__info__item__content"><?php the_field('time', $post->ID); ?></div>
        </div>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>
<?php
  $children = ob_get_contents();
  ob_end_clean();
  return $children;
}

add_shortcode('gallery', 'gallery');