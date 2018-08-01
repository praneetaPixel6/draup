<?php
/*
Custom post type : careers
*/
add_action( 'init', 'create_post_type_careers' );
function create_post_type_careers() {
  register_post_type( 'careers',
    array(
      'labels' => array(
        'name' => __( 'careers' ),
        'singular_name' => __( 'careers' ),
    'add_new_item' => __( 'Add New careers' ),
    'all_items' => __( 'All careers' ),
    'edit_item' => __( 'Edit careers' ),
    'new_item' => __( 'New careers' ),
    'search_item' => __( 'Search careers' ),
      ),
    'menu_position'  => 5,
    'public' => true,
    'has_archive' => true,
    'taxonomies' => array('post_tag','post'),
    'supports' => array('editor','title','thumbnail','custom-fields'/*'page-attributes',*/),
    )
  );
}