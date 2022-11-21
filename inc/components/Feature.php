<?php
  $title = '[title]強み、他社比較[/title]';
  $theme_url = get_template_directory_uri();
  $features = [
    [
      'title' => 'お客様に最適な会社選び',
      'text' => '年間数1000件以上の塗装工事や、施工方法を現場で直接確認、施工した知識とノウハウを塗装業者目線ではなく、お客様目線で塗装業者以上のアドバイスをする事が出来ます。また、現地調査を行い、職人界でも得意不得意のある分野を踏まえて、お客様の希望120%以上の施工をお届けします。',
      'image' => "$theme_url/assets/images/image-feature1.png",
    ],
    [
      'title' => 'アフター保証',
      'text' => '弊社にて、ご紹介又はご契約されたお客様については、大手保険会社様の協力のもと、施工後10年間の施工保証に加え、定期的に弊社メンテナンス部がメンテナンスにお伺いさせていただき、施工箇所をしっかりとケア、点検させて頂きます。そうする事により、大切な住まいの寿命をさらに伸ばし、資産価値をさらに向上させる事が可能です。',
      'image' => "$theme_url/assets/images/image-feature1.png",
    ],
    [
      'title' => '戸建て住宅だけではない',
      'text' => '弊社協力会社の中には、マンションやアパート、ハイツなどをメインに施工している業者も多数いらっしゃいます。そのため、通常では対応範囲外のマンションやハイツ、はアパートまで安心してご依頼いただく事が可能です。',
      'image' => "$theme_url/assets/images/image-feature1.png",
    ],
    [
      'title' => 'お客様は完全無料です！',
      'text' => '弊社は、外壁塗装や屋根塗装でなどで使用する塗料に加え、養生資材、その他塗装工事に使用する資材などを、塗装会社様へ販売させて頂いております。さらに、足場工事については、弊社で請け負いますので、協力頂いている塗装会社様からも紹介料や、月額費用などは頂いておりません。よくある紹介料10%や20%、たさらに月額費用などがかからないため、塗装会社様も上乗せする事なく、最安値でのご提供が可能となっております。',
      'image' => "$theme_url/assets/images/image-feature1.png",
    ],
  ]
?>

<div class="Feature">
  <?= do_shortcode($title); ?>
  <div>
    <?php $i=1; foreach($features as $feature):
      $code = '
        <div class="mb-28">
          [box bg="none" border="accent"]
            <div class="Feature__num">0'.$i.'</div>
            <h3 class="text-xl text-center text-accent font-bold mb-4">'.$feature['title'].'</h3>
            <div class="md:flex">
              <div class="md:w-1/2 md:p-4 mb-4 md:mb-0"><img src="'.$feature['image'].'" alt="'.$feature['title'].'" /></div>
              <div class="md:w-1/2 md:p-4">'.$feature['text'].'</div>
            </div>
          [/box]
        </div>
      ';
    ?>
      <?= do_shortcode($code, true); ?>
    <?php $i++; endforeach; ?>
  </div>
</div>