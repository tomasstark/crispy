<?php
  function enqueue_styles() {
    // main css file
    wp_register_style( 'main-css', get_bloginfo( 'stylesheet_url' ) );
    wp_enqueue_style( 'main-css' );
  }

  function enqueue_scripts() {
    wp_enqueue_script( 'jquery', '', '', '', true );

    // jquery plugins
    wp_enqueue_script( 'plugins', get_bloginfo( 'template_url' ) . '/js/plugins.min.js', 'jquery', '1', true );

    // site wide scripts
    wp_enqueue_script( 'scripts', get_bloginfo( 'template_url' ) . '/js/main.min.js', 'jquery', '1', true );
  }

  add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
  add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
?>