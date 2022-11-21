<?php

function button($atts, $content = null) {
  extract(shortcode_atts([
    'border' => 'none',
    'bg' => 'accent',
    'href' => null
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
    'base-cont' => 'bg-base-cont text-base',
    'main' => 'bg-main text-main-cont',
    'main-cont' => 'bg-main-cont text-main',
    'accent' => 'bg-accent text-accent-cont',
    'accent-cont' => 'bg-accent-cont text-accent',
  ];
  $border_class = $border_classes[$border];
  $bg_class = $bg_classes[$bg];

  if($href !== null) return "<a href='$href' class='Button $border_class $bg_class'>$content</a>";
  else return "<button href='$href' class='Button $border_class $bg_class'>$content</button>";
}
add_shortcode('button', 'button');