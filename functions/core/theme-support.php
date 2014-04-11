<?php
    /**
     * http://codex.wordpress.org/Function_Reference/add_theme_support
     */

    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );
    add_theme_support( 'custom-header', array(
        'width' => 150,
        'height' => 150,
        'header-text' => false
    ) );
?>