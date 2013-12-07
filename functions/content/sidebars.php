<?php
    /**
     * http://codex.wordpress.org/Function_Reference/register_sidebar
     */

    /**
     * Main Sidebar
     */
    $args = array(
        'name'          => 'Sidebar',
        'id'            => 'main_sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>'
    );

    register_sidebar( $args );
?>