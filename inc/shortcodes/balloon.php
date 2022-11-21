<?php

function balloon($atts, $content = null) {
  extract(shortcode_atts([
    'border' => 'none',
    'bg' => 'base'
  ], $atts));

  $border_classes = [
    'none' => 'border-none',
    'base' => 'border border-main',
    'main' => 'border border-main',
    'accent' => 'border border-accent',
  ];
  $bg_classes = [
    'none' => 'bg-none',
    'base' => 'bg-base text-base-cont',
    'main' => 'bg-main text-main-cont',
    'accent' => 'bg-accent text-accent-cont',
  ];
  $border_class = $border_classes[$border];
  $bg_class = $bg_classes[$bg];
  return "<div class='Balloon $border_class $bg_class'><div>$content</div></div>";
}
add_shortcode('balloon', 'balloon');