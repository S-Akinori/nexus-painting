<?php 

function gallery($atts) {
  ob_start();
?>
<div class="Gallery">
  <?php for($i=0; $i<3; $i++): ?>
  <div class="Gallery__item">
    <div class="Gallery__item__image">
      <div class="Gallery__item__image__before"><img src="<?= get_template_directory_uri() ?>/assets/images/image-gallery-before.jpg" alt=""></div>
      <div class="Gallery__item__image__after"><img src="<?= get_template_directory_uri() ?>/assets/images/image-gallery-after.jpg" alt=""></div>
    </div>
    <div class="Gallery__item__content">
      <div class="Gallery__item__content__price"><span style="font-size:50%;">&yen;</span>800,000</div>
      <div class="Gallery__item__content__info">
        <div class="Gallery__item__content__info__item">
          <div class="Gallery__item__content__info__item__title">施工面積</div>
          <div class="Gallery__item__content__info__item__content">140平米</div>
        </div>
        <div class="Gallery__item__content__info__item">
          <div class="Gallery__item__content__info__item__title">築年数</div>
          <div class="Gallery__item__content__info__item__content">15年</div>
        </div>
        <div class="Gallery__item__content__info__item">
          <div class="Gallery__item__content__info__item__title">工期</div>
          <div class="Gallery__item__content__info__item__content">11日</div>
        </div>
      </div>
    </div>
  </div>
  <?php endfor; ?>
</div>
<?php
  $children = ob_get_contents();
  ob_end_clean();
  return $children;
}

add_shortcode('gallery', 'gallery');