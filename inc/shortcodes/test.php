<?php

function test($atts, $content = null ) {
  return '★★★' . $content . '☆☆☆';
}
add_shortcode('test', 'test');