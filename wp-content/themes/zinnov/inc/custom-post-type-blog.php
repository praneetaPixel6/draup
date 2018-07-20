<?php
/*
Custom post type : blog
*/
add_action( 'init', 'create_post_type_blog' );
function create_post_type_blog() {
  register_post_type( 'blog',
    array(
      'labels' => array(
        'name' => __( 'blog' ),
        'singular_name' => __( 'blog' ),
    'add_new_item' => __( 'Add New blog' ),
    'all_items' => __( 'All blog' ),
    'edit_item' => __( 'Edit blog' ),
    'new_item' => __( 'New blog' ),
    'search_item' => __( 'Search blog' ),
      ),
    'menu_position'  => 5,
    'public' => true,
    'has_archive' => true,
    'taxonomies' => array('post_tag','post'),
    'supports' => array('editor','title','thumbnail','custom-fields'/*'page-attributes',*/),
    )
  );
}