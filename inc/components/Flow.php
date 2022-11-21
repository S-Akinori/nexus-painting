<?php
  $title = '[title]流れ[/title]';
  $flows = [
    'お電話やメール、フォームよりお問い合わせ',
    '弊社担当よりおご連絡',
    '弊社担当が実際にお伺いし、現地調査兼お打ち合わせ',
    '3の内容を塗装会社へ送信し、お見積り',
    '届いたお見積りを弊社担当がプロフィールシートと共にお持ちします。',
    '塗装工事',
    ' 塗装工事が終了すれば、弊社担当が施工確認を行います。問題がなければ、お引き渡しさせていただきます。',
    '施工後も2年に一度定期的にアフターメンテナンスを実施',
  ]
?>

<div class="Flow">
  <?= do_shortcode($title); ?>
  <div class="md:flex justify-between flex-wrap">
    <?php $i=1; foreach($flows as $flow):
      $code = '
        <div class="Flow__item relative">
          [box bg="none" border="accent" class="!p-4 md:h-full"]
            <div class="flex md:block items-center">
              <div class="Flow__num text-main font-bold text-center shrink-0 px-4 md:px-0">STEP<br><span class="text-2x">'.$i.'</span></div>
              <div class="px-4 md:px-0 font-bold text-lg">'.$flow.'</div>
            </div>
          [/box]
        </div>
      ';
    ?>
      <?= do_shortcode($code, true); ?>
    <?php $i++; endforeach; ?>
  </div>
</div>