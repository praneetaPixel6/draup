<?php
/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'custom_meta_boxes_post' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */
function custom_meta_boxes_post() {
  
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
  $post_managemant = array(
    'id'          => 'post_managemant',
    'title'       => __( 'Custom Post Management', 'theme-text-domain' ),
    'desc'        => '',
    'pages'       => array( 'post' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
	  	'id'          => 'inner_custom_heading',
        'label'       => __( 'Custom Heading', 'theme-text-domain' ),
		'desc'        => 'Enter Your Custom Heading text',
        'type'        => 'text'
      ),
	  
	   array(
	  	'id'          => 'inner_custom_drescription',
        'label'       => __( 'Custom Drescription', 'theme-text-domain' ),
		'desc'        => 'Enter Your Custom Drescription text',
        'type'        => 'textarea'
      ),
	  
      
    )
  );
  
  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $post_managemant );

}