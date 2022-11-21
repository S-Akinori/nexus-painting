<?php
  $title = '[title]オススメ記事[/title]';
  $posts = '[popular_posts]'
?>

<div class="Popular-posts">
  <?= do_shortcode($title); ?>
  <div>
    <?= do_shortcode($posts); ?>
  </div>
</div>