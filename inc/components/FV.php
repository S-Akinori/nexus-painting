<?php 
  ob_start();
?>
<div>
  <div class="text-accent text-center text-xl font-bold mb-4">＼たった1分！無料でできる！／</div>
  <div class="text-center">
    <?= do_shortcode('[button href="/" bg="accent"]簡単お見積もり[/button]') ?>
  </div>
</div>
<?php
  $children = ob_get_contents();
  ob_end_clean();
?>

<div class="FV">
  <div class="FV__image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/fv-top.jpg" alt="" /></div>
  <div class="FV__text-container">
    <div>
      <div class="FV__text-container__title mb-4">
        <span class="text-accent text-shadow">お客様に最適な塗装会社を</span><br />
        <span>塗装のプロフェッショナル</span>
      </div>
      <div class="FV__text-container__action">
        <?php get_template_part('./inc/components/parts/Box', null, ['children' => $children]) ?>
      </div>
    </div>
  </div>
</div>