<?php 

function popular_posts($atts) {
  ob_start();
?>
<div class="Posts">
  <?php for($i=0; $i<3; $i++): ?>
  <div class="Posts__item">
    <div class="Posts__item__image"><a href="/"><img src="<?= get_template_directory_uri() ?>/assets/images/image-gallery-after.jpg" alt=""></a></div>
    <div class="Posts__item__content">
      <div class="Posts__item__content__title"><a href="/">タイトル</a></div>
      <div class="Posts__item__content__text">テキストテキストテキストテキストテキストテキスト</div>
    </div>
  </div>
  <?php endfor; ?>
</div>
<?php
  $children = ob_get_contents();
  ob_end_clean();
  return $children;
}

add_shortcode('popular_posts', 'popular_posts');