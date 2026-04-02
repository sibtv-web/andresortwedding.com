<?php
function theme_scripts() {
  wp_enqueue_script( 'common-script', get_theme_file_uri( 'assets/js/common.js' ), array(), filemtime( get_theme_file_path( 'assets/js/common.js' ) ), true );
  wp_enqueue_script( 'gsap-script', 'https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/gsap.min.js', array(), '3.14.1', false );
  wp_enqueue_script( 'gsap-scrollTrigger-script', 'https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/ScrollTrigger.min.js', array(), '3.14.1', false );
  wp_enqueue_script( 'gsap-splitText-script', 'https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/SplitText.min.js', array(), '3.14.1', false );
  if ( !is_admin() ) {
    wp_deregister_script('jquery');
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '3.3.1', false );
    wp_enqueue_script('jquery');
  }
  if ( is_home() || is_front_page() ) {
    wp_enqueue_script( 'idx-script', get_theme_file_uri( 'assets/js/idx.js' ), array(), filemtime( get_theme_file_path( 'assets/js/idx.js' ) ), true );
    wp_enqueue_script( 'splide-script', get_theme_file_uri( 'assets/js/splide.min.js' ), array(), filemtime( get_theme_file_path( 'assets/js/splide.min.js' ) ), false );
    wp_enqueue_script( 'splide-autoscroll-script', get_theme_file_uri( 'assets/js/splide-extension-auto-scroll.min.js' ), array(), filemtime( get_theme_file_path( 'assets/js/splide-extension-auto-scroll.min.js' ) ), false );
    } else {
    wp_enqueue_script( 'splide-script', get_theme_file_uri( 'assets/js/splide.min.js' ), array(), filemtime( get_theme_file_path( 'assets/js/splide.min.js' ) ), false );
    wp_enqueue_script( 'splide-autoscroll-script', get_theme_file_uri( 'assets/js/splide-extension-auto-scroll.min.js' ), array(), filemtime( get_theme_file_path( 'assets/js/splide-extension-auto-scroll.min.js' ) ), false );
    wp_enqueue_script( 'pg-script', get_theme_file_uri( 'assets/js/pg.js' ), array(), filemtime( get_theme_file_path( 'assets/js/pg.js' ) ), true );
  }
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );