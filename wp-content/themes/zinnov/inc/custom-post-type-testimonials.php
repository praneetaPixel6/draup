<?php
/*
Custom post type : testimonials
*/
add_action( 'init', 'create_post_type_testimonials' );
function create_post_type_testimonials() {
  register_post_type( 'testimonials',
    array(
      'labels' => array(
        'name' => __( 'testimonials' ),
        'singular_name' => __( 'testimonials' ),
    'add_new_item' => __( 'Add New testimonials' ),
    'all_items' => __( 'All testimonials' ),
    'edit_item' => __( 'Edit testimonials' ),
    'new_item' => __( 'New testimonials' ),
    'search_item' => __( 'Search testimonials' ),
      ),
    'menu_position'  => 5,
    'public' => true,
    'has_archive' => true,
    'taxonomies' => array('post_tag','post'),
    'supports' => array('editor','title','thumbnail','custom-fields'/*'page-attributes',*/),
    )
  );
}