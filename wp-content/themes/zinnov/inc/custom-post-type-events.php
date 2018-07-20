<?php
/*
Custom post type : events
*/
add_action( 'init', 'create_post_type_events' );
function create_post_type_events() {
  register_post_type( 'events',
    array(
      'labels' => array(
        'name' => __( 'events' ),
        'singular_name' => __( 'events' ),
    'add_new_item' => __( 'Add New events' ),
    'all_items' => __( 'All events' ),
    'edit_item' => __( 'Edit events' ),
    'new_item' => __( 'New events' ),
    'search_item' => __( 'Search events' ),
      ),
    'menu_position'  => 5,
    'public' => true,
    'has_archive' => true,
    'taxonomies' => array('post_tag','post'),
    'supports' => array('editor','title','thumbnail','custom-fields'/*'page-attributes',*/),
    )
  );
}