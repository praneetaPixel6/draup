<?php
/**
 * Initialize the custom Theme Options.
 */
add_action( 'init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 *
 * @return    void
 * @since     2.0
 */
function custom_theme_options() {

  /* OptionTree is not loaded yet, or this is not an admin request */
  if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
    return false;

  /**
   * Get a copy of the saved settings array.
   */
  $saved_settings = get_option( ot_settings_id(), array() );

  /**
   * Custom settings array that will eventually be
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array(
    'contextual_help' => array(
      'content'       => array(
        array(
          'id'        => 'option_types_help',
          'title'     => __( 'Option Types', 'zinnov' ),
          'content'   => '<p>' . __( 'Help content goes here!', 'zinnov' ) . '</p>'
        )
      ),
      'sidebar'       => '<p>' . __( 'Sidebar content goes here!', 'zinnov' ) . '</p>'
    ),

	//Option Section

    'sections'        => array(

	/*Header*/
     array(
        'id'          => 'header',
        'title'       => __( 'Header Section', 'zinnov' ),
      ),

    	 /*	array(
    				'id'          => 'blogs',
    				'title'       => __( 'Bolgs Settings', 'zinnov' ),
    		),


      array(
        'id'          => 'footer',
        'title'       => __( 'Footer Section', 'zinnov' ),
      ),
       */

      array(
        'id'          => 'blog',
      'title'       => __( 'Careers Section', 'draup' ),
        ),
        
        array(
            'id'          => 'events',
            'title'       => __( 'Events Section', 'draup' ),
        ),


    ),

	//Option Settings

    'settings'        => array(



	  //header menu


     array(
    'id' => 'header_menu',
    'label' => 'Header Menus',
    'type' => 'tab',
    'section' => 'header'
    ),
    array(
       'id'          => 'about_text',
       'label'       => __( 'About Menu Text', 'zinnov' ),
       'type'        => 'text',
       'section'     => 'header',

    ),
   array(
   'id'          => 'solution_text',
   'label'       => __( 'Solution Menu Text', 'zinnov' ),
   'type'        => 'text',
   'section'     => 'header',

  ),
       array(
       'id'          => 'resources_text',
       'label'       => __( 'Resources Menu Text', 'zinnov' ),
       'type'        => 'text',
       'section'     => 'header',

    ),
      array(
       'id'          => 'event_text',
       'label'       => __( 'Event Menu Text', 'zinnov' ),
       'type'        => 'text',
       'section'     => 'header',

    ),
     array(
       'id'          => 'career_text',
       'label'       => __( 'Career Menu Text', 'zinnov' ),
       'type'        => 'text',
       'section'     => 'header',

    ),

     array(
       'id'          => 'requestdemo_text',
       'label'       => __( 'Request A demo Menu Text', 'zinnov' ),
       'type'        => 'text',
       'section'     => 'header',

    ),

    array(
       'id'          => 'login_text',
       'label'       => __( 'Login Text', 'zinnov' ),
       'type'        => 'text',
       'section'     => 'header',

    ),

  array(
        'id' => 'header',
        'label' => 'Menu 1',
        'type' => 'tab',
        'section' => 'header'
    ),  
    array(
        'id' => 'about',
        'label' => 'Enter Main Menu Name',
        'type' => 'text',
        'section' => 'header'
    ),
    array(
        'id' => 'menu1',
        'label' => 'Enter Name of the Menu',
        'type' => 'text',
        'section' => 'header'
    ),   
    array(
        'id' => 'menu1_content',
        'label' => 'Enter Info',
        'type' => 'text',
        'section' => 'header'
    ),    
    array(
        'id' => 'menu1_link',
        'label' => 'Enter link',
        'type' => 'text',
        'section' => 'header'
    ),
    array(
        'id' => 'menu2',
        'label' => 'Enter Name of the Menu',
        'type' => 'text',
        'section' => 'header'
    ),   
    array(
        'id' => 'menu2_content',
        'label' => 'Enter Info',
        'type' => 'text',
        'section' => 'header'
    ),    
    array(
        'id' => 'menu2_link',
        'label' => 'Enter link',
        'type' => 'text',
        'section' => 'header'
    ),
    array(
        'id' => 'menu3',
        'label' => 'Enter Name of the Menu',
        'type' => 'text',
        'section' => 'header'
    ),
    array(
        'id' => 'menu3_content',
        'label' => 'Enter Info',
        'type' => 'text',
        'section' => 'header'
    ),
    array(
        'id' => 'menu3_link',
        'label' => 'Enter link',
        'type' => 'text',
        'section' => 'header'
    ),
      
      //Menu 2      
      
    array(
        'id' => 'header1',
        'label' => 'Menu2',
        'type' => 'tab',
        'section' => 'header'
    ),
    
    
    array(
        'id' => 'solutions',
        'label' => 'Enter Main Menu Name',
        'type' => 'text',
        'section' => 'header'
    ),
    
     array(
        'id' => 'menu4',
        'label' => 'Enter Name of the Menu',
        'type' => 'text',
        'section' => 'header'
    ),
    
    array(
        'id' => 'menu4_content',
        'label' => 'Enter Info',
        'type' => 'text',
        'section' => 'header'
    ),
    
   
    
    array(
        'id' => 'menu4_link1',
        'label' => 'Enter link',
        'type' => 'text',
        'section' => 'header'
    ),
    
    array(
        'id' => 'menu4_link2',
        'label' => 'Enter link',
        'type' => 'text',
        'section' => 'header'
    ),
     array(
        'id' => 'menu5',
        'label' => 'Enter Name of the Menu',
        'type' => 'text',
        'section' => 'header'
    ),

    array(
        'id' => 'menu5_content',
        'label' => 'Enter Info',
        'type' => 'text',
        'section' => 'header'
    ),
    
   array(
        'id' => 'menu5_link',
        'label' => 'Enter link',
        'type' => 'text',
        'section' => 'header'
    ),
   array(
        'id' => 'menu5_link2',
        'label' => 'Enter link',
        'type' => 'text',
        'section' => 'header'
    ),

    
    array(
        'id' => 'menu6',
        'label' => 'Enter Name of the Menu',
        'type' => 'text',
        'section' => 'header'
    ),
    
    array(
        'id' => 'menu6_content',
        'label' => 'Enter Info',
        'type' => 'text',
        'section' => 'header'
    ),
    
    array(
        'id' => 'menu6_link',
        'label' => 'Enter link',
        'type' => 'text',
        'section' => 'header'
    ),
      
      
    //Menu 3  
    array(
        'id' => 'header2',
        'label' => 'Menu3',
        'type' => 'tab',
        'section' => 'header'
    ),
    
    
    array(
        'id' => 'resources',
        'label' => 'Enter Main Menu Name',
        'type' => 'text',
        'section' => 'header'
    ),
    
    
    
    array(
        'id' => 'menu7',
        'label' => 'Enter Name of the Menu',
        'type' => 'text',
        'section' => 'header'
    ),
    
    array(
        'id' => 'menu7_content',
        'label' => 'Enter Info',
        'type' => 'text',
        'section' => 'header'
    ),
    
    array(
        'id' => 'menu7_link',
        'label' => 'Enter link',
        'type' => 'text',
        'section' => 'header'
    ),
    

    array(
        'id' => 'menu8',
        'label' => 'Enter Name of the Menu',
        'type' => 'text',
        'section' => 'header'
    ),
    
    array(
        'id' => 'menu8_content',
        'label' => 'Enter Info',
        'type' => 'text',
        'section' => 'header'
    ),
    
    array(
        'id' => 'menu8_link',
        'label' => 'Enter link',
        'type' => 'text',
        'section' => 'header'
    ),
    
    array(
        'id' => 'menu9',
        'label' => 'Enter Name of the Menu',
        'type' => 'text',
        'section' => 'header'
    ),
    
    array(
        'id' => 'menu9_content',
        'label' => 'Enter Info',
        'type' => 'text',
        'section' => 'header'
    ),
    
    array(
        'id' => 'menu9_link',
        'label' => 'Enter link',
        'type' => 'text',
        'section' => 'header'
    ),

    array(
        'id' => 'menu10',
        'label' => 'Enter Name of the Menu',
        'type' => 'text',
        'section' => 'header'
    ),
    
    array(
        'id' => 'menu10_content',
        'label' => 'Enter Info',
        'type' => 'text',
        'section' => 'header'
    ),
    
    array(
        'id' => 'menu10_link',
        'label' => 'Enter link',
        'type' => 'text',
        'section' => 'header'
    ),
    
    
    //Menu 4
    array(
        'id' => 'header3',
        'label' => 'Menu4',
        'type' => 'tab',
        'section' => 'header'
    ),
    
    
    array(
        'id' => 'event',
        'label' => 'Enter Name of the Menu',
        'type' => 'text',
        'section' => 'header'
    ),
    array(
        'id' => 'event_link',
        'label' => 'Enter link',
        'type' => 'text',
        'section' => 'header'
    ),
    array(
        'id' => 'header4',
        'label' => 'Menu5',
        'type' => 'tab',
        'section' => 'header'
    ),
    array(
        'id' => 'careers',
        'label' => 'Enter Name of the Menu',
        'type' => 'text',
        'section' => 'header'
    ),
    array(
        'id' => 'careers_link',
        'label' => 'Enter link',
        'type' => 'text',
        'section' => 'header'
    ), 
    array(
        'id' => 'header5',
        'label' => 'Menu6',
        'type' => 'tab',
        'section' => 'header'
    ),
    array(
        'id' => 'request',
        'label' => 'Enter Name of the Menu',
        'type' => 'text',
        'section' => 'header'
    ),
    array(
        'id' => 'request_link',
        'label' => 'Enter link',
        'type' => 'text',
        'section' => 'header'
    ),
    array(
        'id' => 'header6',
        'label' => 'Menu7',
        'type' => 'tab',
        'section' => 'header'
    ),
    array(
        'id' => 'contact',
        'label' => 'Enter Name of the Menu',
        'type' => 'text',
        'section' => 'header'
    ),
    array(
        'id' => 'contact_link',
        'label' => 'Enter link',
        'type' => 'text',
        'section' => 'header'
    ), 

    //blog section
  array(
      'id' => 'blog_id',
      'label' => 'Blog',
      'type' => 'tab',
      'section' => 'blog'
  ),
  
  array(
      'id' => 'blog_title',
      'label' => 'Enter Title',
      'type' => 'text',
      'section' => 'blog'
  ),
     

  
  
  array(
      'id' => 'blog_text1',
      'label' => 'Enter Content',
      'type' => 'text',
      'section' => 'blog'
  ),
  
  array(
      'id' => 'blog_text2',
      'label' => 'Enter Content',
      'type' => 'text',
      'section' => 'blog'
  ),
  
  array(
      'id' => 'careerjoin_title',
      'label' => 'Enter Why Join Us Title',
      'type' => 'text',
      'section' => 'blog'
  ),
  array(
      'id' => 'careerjoin_desc',
      'label' => 'Enter Why Why Join Us Description',
      'type' => 'textarea',
      'section' => 'blog'
  ),
   
  array(
      'id' => 'section_title',
      'label' => 'Enter Section Title',
      'type' => 'text',
      'section' => 'blog'
  ),
  
  
  array(
      'id' => 'section_career',
      'label' => 'Enter Section Title',
      'type' => 'text',
      'section' => 'blog'
  ),
  
  
  array(
      'id'          => 'careers_pics',
      'label'       => __( 'Images', 'draup' ),
  
      'type'        => 'list-item',
      'section'     => 'blog',
      'settings'    => array(
          //Body Icon details
          array(
              'id'          => 'careers_image',
              'label'       => __( 'Upload Image', 'draup' ),
              'type'        => 'upload',
              'section'     => 'gallery_pics',
          ),
      )
  ),

  
  array(
      'id' => 'careerdrup_title',
      'label' => 'Enter Why Draup Life Section Title',
      'type' => 'text',
      'section' => 'blog'
  ),
  array(
      'id' => 'careerdrup_description',
      'label' => 'Enter Why Draup Life Section Description',
      'type' => 'textarea',
      'section' => 'blog'
  ),
  
  
  array(
      'id'          => 'careersdrup_list',
      'label'       => __( 'List Description', 'draup' ),
  
      'type'        => 'list-item',
      'section'     => 'blog',
      'settings'    => array(
          //Body Icon details
          array(
            'id' => 'careersdrup_desc',
            'label' => 'Description',
            'type' => 'text',
            'section' => 'blog'
        ),        

      )
  ),

  //Event Section
  array(
      'id' => 'section_event',
      'label' => 'Enter Section Title',
      'type' => 'text',
      'section' => 'events'
  ),
  
      array(
      'id'          => 'gallery_pics',
      'label'       => __( 'Images', 'draup' ),
      
      'type'        => 'list-item',
      'section'     => 'events',
      'settings'    => array(
          //Body Icon details
          array(
              'id'          => 'gallery_image',
              'label'       => __( 'Upload Image', 'draup' ),
              'type'        => 'upload',
              'section'     => 'gallery_pics',
          ),
      )
  ),


 /*

       array(
       'id'          => 'login_text',
       'label'       => __( 'Login Menu Text', 'zinnov' ),
       'type'        => 'text',
       'section'     => 'header',

    ),

 array(
      'id'          => 'blog_menulink',
      'label'       => __( 'Blog Menu Link', 'zinnov' ),
      'type'        => 'text',
      'section'     => 'header',

      ),


array(
      'id'          => 'login_menulink',
      'label'       => __( 'Login Menu Link', 'zinnov' ),
      'type'        => 'text',
      'section'     => 'header',

      ),

      array(
      'id'          => 'about_menulink',
      'label'       => __( 'About Menu Link', 'zinnov' ),
      'type'        => 'text',
      'section'     => 'header',

      ),

      array(
      'id'          => 'requestdemo_menulink',
      'label'       => __( 'Request A demo Menu Link', 'zinnov' ),
      'type'        => 'text',
      'section'     => 'header',

      ),

      array(
      'id'          => 'contact_menulink',
      'label'       => __( 'contact Menu Link', 'zinnov' ),
      'type'        => 'text',
      'section'     => 'header',

      ),

    array(
      'id'          => 'faq_menulink',
      'label'       => __( 'FAQ Menu Link', 'zinnov' ),
      'type'        => 'text',
      'section'     => 'header',

      ),

      array(
      'id'          => 'whitepapers_menulink',
      'label'       => __( 'whitepapers Menu Link', 'zinnov' ),
      'type'        => 'text',
      'section'     => 'header',

      ),



	   //Footer menu


     array(
    'id' => 'footer_menu',
    'label' => 'Footer Menus',
    'type' => 'tab',
    'section' => 'footer'
    ),

   array(
       'id'          => 'home_text',
       'label'       => __( 'Home Menu Text', 'zinnov' ),
       'type'        => 'text',
       'section'     => 'footer',

    ),

array(
      'id'          => 'home_menulink',
      'label'       => __( 'Home Menu Link', 'zinnov' ),
      'type'        => 'text',
      'section'     => 'footer',

      ),


      array(
       'id'          => 'about_text',
       'label'       => __( 'About Menu Text', 'zinnov' ),
       'type'        => 'text',
       'section'     => 'footer',

    ),

array(
      'id'          => 'about_menulink',
      'label'       => __( 'About Menu Link', 'zinnov' ),
      'type'        => 'text',
      'section'     => 'footer',

      ),

       array(
       'id'          => 'blog_text',
       'label'       => __( 'Blog Menu Text', 'zinnov' ),
       'type'        => 'text',
       'section'     => 'footer',

    ),

array(
      'id'          => 'blog_menulink',
      'label'       => __( 'Blog Menu Link', 'zinnov' ),
      'type'        => 'text',
      'section'     => 'footer',

      ),


       array(
       'id'          => 'whitepapers_text',
       'label'       => __( 'whitepapers Menu Text', 'zinnov' ),
       'type'        => 'text',
       'section'     => 'footer',

    ),

array(
      'id'          => 'whitepapers_menulink',
      'label'       => __( 'whitepapers Menu Link', 'zinnov' ),
      'type'        => 'text',
      'section'     => 'footer',

      ),


       array(
       'id'          => 'faq_text',
       'label'       => __( 'FAQ Menu Text', 'zinnov' ),
       'type'        => 'text',
       'section'     => 'footer',

    ),

array(
      'id'          => 'faq_menulink',
      'label'       => __( 'FAQ Menu Link', 'zinnov' ),
      'type'        => 'text',
      'section'     => 'footer',

      ),

       array(
       'id'          => 'contact_text',
       'label'       => __( 'contact Menu Text', 'zinnov' ),
       'type'        => 'text',
       'section'     => 'header',

    ),

array(
      'id'          => 'contact_menulink',
      'label'       => __( 'contact Menu Link', 'zinnov' ),
      'type'        => 'text',
      'section'     => 'header',

      ),

        array(
       'id'          => 'disclaimer_text',
       'label'       => __( 'Disclaimer Menu Text', 'zinnov' ),
       'type'        => 'text',
       'section'     => 'footer',

    ),

array(
      'id'          => 'disclaimer_menulink',
      'label'       => __( 'Disclaimer Menu Link', 'zinnov' ),
      'type'        => 'text',
      'section'     => 'footer',

      ),



        array(
       'id'          => 'privacy_text',
       'label'       => __( 'Privacy Menu Text', 'zinnov' ),
       'type'        => 'text',
       'section'     => 'footer',

    ),

array(
      'id'          => 'privacy_menulink',
      'label'       => __( 'Privacy Menu Link', 'zinnov' ),
      'type'        => 'text',
      'section'     => 'footer',

      ),
      	*/
      	  )





  );





  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );

  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings );
  }

  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;

}
