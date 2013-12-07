<?php
  /**
   * All theme functions includes goes here
   */

  include 'functions/config.php';

  /**
   * Theme Supports
   */
  include 'functions/core/theme-support.php';

  /**
   * Styles & scripts
   */
  include 'functions/bootstrap.php';

  /**
   * Menus
   */
  include 'functions/core/menus.php';

  /*********************************************
   **** CUSTOM CONTENT
   *********************************************/

  /**
   * Content related - post types, taxonomies, ...
   */
  // sidebars
  if( $use_sidebars ) {
    include 'functions/content/sidebars.php';
  }

  // post types
  if( $use_custom_post_types ) {
    include 'functions/content/post-types.php';
  }

  // taxonomies
  if( $use_custom_taxonomies ) {
    include 'functions/content/taxonomies.php';
  }

  // custom image size
  if( $use_custom_image_sizes ) {
    include 'functions/content/image-sizes.php';
  }

  /**
   * Theme Options
   */
  if( $use_theme_options ) {
    include 'functions/theme-options/options.php';
  }
?>