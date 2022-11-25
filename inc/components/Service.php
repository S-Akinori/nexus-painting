<?php
  $title = '[title]お客様のご自宅にあった塗装会社様をご紹介[/title]';
  $theme_url = get_template_directory_uri();
  $service1 = <<<EOL
    [box border="main" bg="none"]
      <h3 class="text-accent text-center font-bold text-xl">通常の比較サイト</h3>
      <div class="md:flex items-center">
        <div class="md:w-1/2">お客様が問い合わせをし、地域に合わせて自動で業者を紹介するという簡易的なサービス</div>
        <div class="md:w-1/2"><img src="$theme_url/assets/images/image-service1.png" alt="お客様が問い合わせをし、地域に合わせて自動で業者を紹介するという簡易的なサービス" /></div>
      </div>
    [/box]
  EOL;
  $service2 = <<<EOL
    [box border="none" bg="main"]
      <h3 class="text-center font-bold text-xl text-accent">「塗装のプロフェッショナル」</h3>
      <div class="md:flex items-center">
        <div class="md:w-1/2">
          <p>弊社サービスではコンサルタントが現地調査にお伺いし、お写真、修復する必要箇所など、また、使用する塗料なども決めた上で会社様をご紹介させていただきます。ですので、従来の比較サイトのように、会社紹介のみではなく、お客様のご自宅にあった塗装会社様を紹介することができます。</p>
          <p>さらに、塗装会社様からきた見積もりを踏まえ、担当者の顔写真も掲載された塗装会社のプロフィール、お見積書を確認し、納得頂いた上で契約を弊社にて代行して行います。</p>
          <p>そのため、今は近畿地方のみの対応となります。</p>
        </div>
        <div class="md:w-1/2"><img src="$theme_url/assets/images/image-service2.png" alt="「塗装のプロフェッショナル」" /></div>
      </div>
    [/box]
  EOL;

?>

<div class="Service">
  <?= do_shortcode($title); ?>
  <div class="mb-8 w-full max-w-screen-md mx-auto">
    <?= do_shortcode($service1, true); ?>
  </div>
  <div class="mb-8">
    <?= do_shortcode($service2, true); ?>
  </div>
</div>