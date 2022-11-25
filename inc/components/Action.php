<?php
$size = $args['size'] ?? 'lg';
$button = '[button href="'.home_url('form').'" bg="accent"]簡単見積もりスタート[/button]';
$balloon = '[balloon size="'.$size.'"]1分で<br>無料比較[/balloon]'
?>

<div class="Action Action--<?= $size; ?>">
  <div class="md:flex items-center">
    <div class="md:w-1/2 text-center mb-12 md:mb-0">
      <p class="Action__title Action__title--<?= $size; ?>">お客様のご自宅にあった<br>塗装会社様をご紹介！</p>
      <div>
        <?= do_shortcode($button) ?>
      </div>
    </div>
    <div class="md:w-1/2 relative pt-20 md:pt-0">
      <div class="absolute top-0 left-0"><?= do_shortcode($balloon, true) ?></div>
      <div class="Action__image Action__image--<?= $size; ?>"><img src="<?= get_template_directory_uri()?>/assets/images/image-action.png" alt="お客様のご自宅にあった塗装会社様をご紹介！"></div>
    </div>
  </div>
</div>