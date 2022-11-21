<?php

function accordion($atts, $content = null) {
  return '<div class="Accordion">'.do_shortcode($content, true).'</div>';
}

function accordion_item($atts, $content = null) {
  extract(shortcode_atts([
    'title' => '',
  ], $atts));

  return '
    <div class="Accordion__item">
      <div class="Accordion__item__title">'.$title.'</div>
      <div class="Accordion__item__content">'.$content.'</div>
    </div>
  ';
}

add_shortcode('accordion', 'accordion');
add_shortcode('accordion_item', 'accordion_item');