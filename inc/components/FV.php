<?php 
  ob_start();
?>
<div>
  <div class="text-accent text-center text-xl font-bold mb-4">＼たった1分！無料でできる！／</div>
  <div class="text-center">
    <?= do_shortcode('[button href="'.home_url('form').'" bg="accent"]調査を依頼[/button]') ?>
  </div>
</div>
<?php
  $children = ob_get_contents();
  ob_end_clean();
?>

<div class="FV">
  <div class="FV__image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-fv.png" alt="お客様に最適な塗装会社を-塗装のプロフェッショナル-" /></div>
  <div class="FV__text-container">
    <div>
      <div class="FV__text-container__title mb-4">
        <div class="Label text-center">
          関西限定！地域に密着
        </div>
        <span class="text-accent text-shadow">お客様に最適な塗装会社を</span>
        <div class="w-96 mx-auto"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="お客様に最適な塗装会社を-塗装のプロフェッショナル-" /></div>
        <!-- <span>塗装のプロフェッショナル</span> -->
      </div>
      <div class="FV__text-container__action">
        <?php get_template_part('./inc/components/parts/Box', null, ['children' => $children]) ?>
      </div>
    </div>
  </div>
</div>