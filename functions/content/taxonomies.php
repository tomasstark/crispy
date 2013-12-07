<?php
  function create_taxonomies() {
    /**
     * Book Genre
     */
    register_taxonomy(
      'genre', // slug
      'book', // post type
      array(
        'label' => __( 'Genre' ),
        'rewrite' => array( 'slug' => 'genre' ),
        'hierarchical' => true,
      )
    );
  }

  add_action( 'init', 'create_taxonomies' );
?>