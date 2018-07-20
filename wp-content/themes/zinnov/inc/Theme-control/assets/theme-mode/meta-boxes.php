<?php
/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'custom_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */
function custom_meta_boxes() {
  
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
  $custom_page_managemant = array(
    'id'          => 'custom_page_managemant',
    'title'       => __( 'Custom Page Management', 'theme-text-domain' ),
    'desc'        => '',
    'pages'       => array( 'page' ),
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
	  	'id'          => 'inner_custom_description',
      'label'       => __( 'Custom Description', 'theme-text-domain' ),
		  'desc'        => 'Enter Your Custom Description text',
      'type'        => 'textarea'
      ),
	  
      
    )
  );
  
  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $custom_page_managemant );

}