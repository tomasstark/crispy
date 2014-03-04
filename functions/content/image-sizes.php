<?php
    /**
     * See http://codex.wordpress.org/Function_Reference/add_image_size
     */

    function set_custom_image_sizes() {
        // square thumbnail
        add_image_size( 'center-img', 720, 0, false );
        add_image_size( 'thumb-img', 300, 0, false );
    }

    add_action( 'after_setup_theme', 'set_custom_image_sizes' );
?>