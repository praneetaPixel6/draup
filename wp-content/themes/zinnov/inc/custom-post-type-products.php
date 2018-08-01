<?php
/*
Custom post type : products
*/
add_action( 'init', 'create_post_type_products' );
function create_post_type_products() {
  register_post_type( 'products',
    array(
      'labels' => array(
        'name' => __( 'products' ),
        'singular_name' => __( 'products' ),
    'add_new_item' => __( 'Add New products' ),
    'all_items' => __( 'All products' ),
    'edit_item' => __( 'Edit products' ),
    'new_item' => __( 'New products' ),
    'search_item' => __( 'Search products' ),
      ),
    'menu_position'  => 5,
    'public' => true,
    'has_archive' => true,
    'taxonomies' => array('post_tag','post'),
    'supports' => array('editor','title','thumbnail','custom-fields'/*'page-attributes',*/),
    )
  );
}