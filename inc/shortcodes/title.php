<?php

function title($atts, $content = null) {
  // extract(shortcode_atts([

  // ], $atts));
  return "<h2 class='Title'>$content</h2>";
}
add_shortcode('title', 'title');