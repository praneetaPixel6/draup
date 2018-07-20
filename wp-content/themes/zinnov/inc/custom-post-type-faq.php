<?php
/*
Custom post type : faq
*/
add_action( 'init', 'create_post_type_faq' );
function create_post_type_faq() {
  register_post_type( 'faq',
    array(
      'labels' => array(
        'name' => __( 'faq' ),
        'singular_name' => __( 'faq' ),
    'add_new_item' => __( 'Add New faq' ),
    'all_items' => __( 'All faq' ),
    'edit_item' => __( 'Edit faq' ),
    'new_item' => __( 'New faq' ),
    'search_item' => __( 'Search faq' ),
      ),
    'menu_position'  => 5,
    'public' => true,
    'has_archive' => true,
    'taxonomies' => array('post_tag','post'),
    'supports' => array('editor','title','thumbnail','custom-fields'/*'page-attributes',*/),
    )
  );
}