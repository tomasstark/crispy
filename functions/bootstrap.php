<?php
  function enqueue_styles() {
    // main css file
    wp_register_style( 'main-css', get_bloginfo( 'stylesheet_url' ) );
    wp_enqueue_style( 'main-css' );
  }

  function enqueue_scripts() {
    wp_enqueue_script( 'jquery', '', '', '', true );

    // modernizr
    wp_enqueue_script( 'plugins', get_bloginfo( 'template_url' ) . '/js/html5shiv.min.js', '', '', false );

    // build script
    wp_enqueue_script( 'plugins', get_bloginfo( 'template_url' ) . '/js/build.min.js', 'jquery', '', true );
  }

  add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
  add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
?>