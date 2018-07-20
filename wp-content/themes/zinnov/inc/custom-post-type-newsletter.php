<?php
/*
Custom post type : newsletter
*/
add_action( 'init', 'create_post_type_newsletter' );
function create_post_type_newsletter() {
  register_post_type( 'newsletter',
    array(
      'labels' => array(
        'name' => __( 'newsletter' ),
        'singular_name' => __( 'newsletter' ),
    'add_new_item' => __( 'Add New newsletter' ),
    'all_items' => __( 'All newsletter' ),
    'edit_item' => __( 'Edit newsletter' ),
    'new_item' => __( 'New newsletter' ),
    'search_item' => __( 'Search newsletter' ),
      ),
    'menu_position'  => 5,
    'public' => true,
    'has_archive' => true,
    'taxonomies' => array('post_tag','post'),
    'supports' => array('editor','title','thumbnail','custom-fields'/*'page-attributes',*/),
    )
  );
}