<?php
/*
Custom post type : users
*/
add_action( 'init', 'create_post_type_users' );
function create_post_type_users() {
  register_post_type( 'users',
    array(
      'labels' => array(
        'name' => __( 'users' ),
        'singular_name' => __( 'users' ),
    'add_new_item' => __( 'Add New users' ),
    'all_items' => __( 'All users' ),
    'edit_item' => __( 'Edit users' ),
    'new_item' => __( 'New users' ),
    'search_item' => __( 'Search users' ),
      ),
    'menu_position'  => 5,
    'public' => true,
    'has_archive' => true,
    'taxonomies' => array('post_tag','post'),
    'supports' => array('editor','title','thumbnail','custom-fields'/*'page-attributes',*/),
    )
  );
}