<?php
function theme_styles() {
  wp_enqueue_style('style', get_theme_file_uri('assets/css/style.css'), '', filemtime(get_theme_file_path('assets/css/style.css')));
  if ( is_home() || is_front_page() ) {
    wp_enqueue_style('splide-core', get_theme_file_uri('assets/css/splide.min.css'), '', '');
  }
}
add_action('wp_enqueue_scripts', 'theme_styles');
