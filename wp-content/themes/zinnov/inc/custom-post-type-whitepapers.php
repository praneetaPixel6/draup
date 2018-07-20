<?php
/*
Custom post type : whitepapers
*/
add_action( 'init', 'create_post_type_whitepapers' );
function create_post_type_whitepapers() {
  register_post_type( 'whitepapers',
    array(
      'labels' => array(
        'name' => __( 'whitepapers' ),
        'singular_name' => __( 'whitepapers' ),
    'add_new_item' => __( 'Add New whitepapers' ),
    'all_items' => __( 'All whitepapers' ),
    'edit_item' => __( 'Edit whitepapers' ),
    'new_item' => __( 'New whitepapers' ),
    'search_item' => __( 'Search whitepapers' ),
      ),
    'menu_position'  => 5,
    'public' => true,
    'has_archive' => true,
    'taxonomies' => array('post_tag','post'),
    'supports' => array('editor','title','thumbnail','custom-fields'/*'page-attributes',*/),
    )
  );
}