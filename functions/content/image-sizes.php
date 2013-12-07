<?php
    /**
     * See http://codex.wordpress.org/Function_Reference/add_image_size
     */

    function set_custom_image_sizes() {
        // square thumbnail
        add_image_size( 'square', 300, 300, true );
    }

    add_action( 'after_setup_theme', 'set_custom_image_sizes' );
?>