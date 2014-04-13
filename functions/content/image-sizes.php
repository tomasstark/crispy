<?php
    /**
     * See http://codex.wordpress.org/Function_Reference/add_image_size
     */

    function set_custom_image_sizes() {
        // square thumbnail
        add_image_size( 'center-img', 720, 0, false );
        add_image_size( 'thumb-img', 460, 0, false );
    }

    add_action( 'after_setup_theme', 'set_custom_image_sizes' );

    add_filter( 'image_size_names_choose', 'crispy_custom_sizes' );

    function crispy_custom_sizes() {
        return array(
            'thumb-img' => __('Floating'),
            'center-img' => __('Big'),
            'full' => __('Full Size')
        );
    }
?>