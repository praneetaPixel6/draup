<?php
/**
 * Twenty Fifteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Twenty Fifteen 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

/**
 * Twenty Fifteen only works in WordPress 4.1 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.1-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twentyfifteen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Twenty Fifteen 1.0
 */
function twentyfifteen_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyfifteen
	 * If you're building a theme based on twentyfifteen, use a find and replace
	 * to change 'twentyfifteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'twentyfifteen' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );
	add_image_size( 'blog-thumbnail',685,454 );
	add_image_size( 'user-thumbnail', 0, 37 );


	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'twentyfifteen' ),
	'footer' => __( 'Footer Menu',      'twentyfifteen' ),
		'social'  => __( 'Social Links Menu', 'twentyfifteen' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	/*
	 * Enable support for custom logo.
	 *
	 * @since Twenty Fifteen 1.5
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 248,
		'width'       => 248,
		'flex-height' => true,
	) );

	$color_scheme  = twentyfifteen_get_color_scheme();
	$default_color = trim( $color_scheme[0], '#' );

	// Setup the WordPress core custom background feature.

	/**
	 * Filter Twenty Fifteen custom-header support arguments.
	 *
	 * @since Twenty Fifteen 1.0
	 *
	 * @param array $args {
	 *     An array of custom-header support arguments.
	 *
	 *     @type string $default-color     		Default color of the header.
	 *     @type string $default-attachment     Default attachment of the header.
	 * }
	 */
	add_theme_support( 'custom-background', apply_filters( 'twentyfifteen_custom_background_args', array(
		'default-color'      => $default_color,
		'default-attachment' => 'fixed',
	) ) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css', twentyfifteen_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // twentyfifteen_setup
add_action( 'after_setup_theme', 'twentyfifteen_setup' );

/**
 * Register widget area.
 *
 * @since Twenty Fifteen 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function twentyfifteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'twentyfifteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentyfifteen_widgets_init' );

if ( ! function_exists( 'twentyfifteen_fonts_url' ) ) :
/**
 * Register Google fonts for Twenty Fifteen.
 *
 * @since Twenty Fifteen 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function twentyfifteen_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Sans, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Noto Sans font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Noto Sans:400italic,700italic,400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Serif, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Noto Serif font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Noto Serif:400italic,700italic,400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Inconsolata, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Inconsolata:400,700';
	}

	/*
	 * Translators: To add an additional character subset specific to your language,
	 * translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language.
	 */
	$subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'twentyfifteen' );

	if ( 'cyrillic' == $subset ) {
		$subsets .= ',cyrillic,cyrillic-ext';
	} elseif ( 'greek' == $subset ) {
		$subsets .= ',greek,greek-ext';
	} elseif ( 'devanagari' == $subset ) {
		$subsets .= ',devanagari';
	} elseif ( 'vietnamese' == $subset ) {
		$subsets .= ',vietnamese';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * JavaScript Detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Fifteen 1.1
 */
function twentyfifteen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentyfifteen_javascript_detection', 0 );

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Fifteen 1.0
 */
function twentyfifteen_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'twentyfifteen-fonts', twentyfifteen_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.2' );

	// Load our main stylesheet.
	wp_enqueue_style( 'twentyfifteen-style', get_stylesheet_uri() );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'twentyfifteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentyfifteen-style' ), '20141010' );
	wp_style_add_data( 'twentyfifteen-ie', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'twentyfifteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentyfifteen-style' ), '20141010' );
	wp_style_add_data( 'twentyfifteen-ie7', 'conditional', 'lt IE 8' );
	//Added Stylesheet of
	wp_enqueue_style('css-draup-2style', get_bloginfo('stylesheet_directory'). '/css/css-draup/ie.css');
	wp_enqueue_style('css-draup-ie7-2style', get_bloginfo('stylesheet_directory'). '/css/css-draup/ie7.css');
	//wp_enqueue_style('css-draup-editior-2style', get_bloginfo('stylesheet_directory'). '/css/css-draup/editior-style.css');
	wp_enqueue_style('css-draup-style', get_bloginfo('stylesheet_directory'). '/css/css-draup/style.css');
	wp_enqueue_style('css-draup-widget', get_bloginfo('stylesheet_directory'). '/css/css-draup/widget.css');
	wp_enqueue_style('css-draup-main2-style', get_bloginfo('stylesheet_directory'). '/css/main2.css');
	wp_enqueue_style('css-draup-pixel6', get_bloginfo('stylesheet_directory'). '/css/pixel6.css');
	wp_enqueue_style('css-draup-p62', get_bloginfo('stylesheet_directory'). '/css/p62.css');
	wp_enqueue_script( 'twentyfifteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20141010', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'twentyfifteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20141010' );
	}

	wp_enqueue_script( 'twentyfifteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150330', true );
	wp_localize_script( 'twentyfifteen-script', 'screenReaderText', array(
		'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'twentyfifteen' ) . '</span>',
		'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'twentyfifteen' ) . '</span>',
	) );
}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_scripts' );

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Fifteen 1.7
 *
 * @param array   $urls          URLs to print for resource hints.
 * @param string  $relation_type The relation type the URLs are printed.
 * @return array URLs to print for resource hints.
 */
function twentyfifteen_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'twentyfifteen-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '>=' ) ) {
			$urls[] = array(
				'href' => 'https://fonts.gstatic.com',
				'crossorigin',
			);
		} else {
			$urls[] = 'https://fonts.gstatic.com';
		}
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'twentyfifteen_resource_hints', 10, 2 );

/**
 * Add featured image as background image to post navigation elements.
 *
 * @since Twenty Fifteen 1.0
 *
 * @see wp_add_inline_style()
 */
function twentyfifteen_post_nav_background() {
	if ( ! is_single() ) {
		return;
	}

	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );
	$css      = '';

	if ( is_attachment() && 'attachment' == $previous->post_type ) {
		return;
	}

	if ( $previous &&  has_post_thumbnail( $previous->ID ) ) {
		$prevthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $previous->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-previous { background-image: url(' . esc_url( $prevthumb[0] ) . '); }
			.post-navigation .nav-previous .post-title, .post-navigation .nav-previous a:hover .post-title, .post-navigation .nav-previous .meta-nav { color: #fff; }
			.post-navigation .nav-previous a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	if ( $next && has_post_thumbnail( $next->ID ) ) {
		$nextthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $next->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-next { background-image: url(' . esc_url( $nextthumb[0] ) . '); border-top: 0; }
			.post-navigation .nav-next .post-title, .post-navigation .nav-next a:hover .post-title, .post-navigation .nav-next .meta-nav { color: #fff; }
			.post-navigation .nav-next a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	wp_add_inline_style( 'twentyfifteen-style', $css );
}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_post_nav_background' );

/**
 * Display descriptions in main navigation.
 *
 * @since Twenty Fifteen 1.0
 *
 * @param string  $item_output The menu item output.
 * @param WP_Post $item        Menu item object.
 * @param int     $depth       Depth of the menu.
 * @param array   $args        wp_nav_menu() arguments.
 * @return string Menu item with possible description.
 */
function twentyfifteen_nav_description( $item_output, $item, $depth, $args ) {
	if ( 'primary' == $args->theme_location && $item->description ) {
		$item_output = str_replace( $args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );
	}

	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'twentyfifteen_nav_description', 10, 4 );

/**
 * Add a `screen-reader-text` class to the search form's submit button.
 *
 * @since Twenty Fifteen 1.0
 *
 * @param string $html Search form HTML.
 * @return string Modified search form HTML.
 */
function twentyfifteen_search_form_modify( $html ) {
	return str_replace( 'class="search-submit"', 'class="search-submit screen-reader-text"', $html );
}
add_filter( 'get_search_form', 'twentyfifteen_search_form_modify' );

/**
 * Implement the Custom Header feature.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/customizer.php';




/*
 * custom pagination with bootstrap .pagination class
 */
/*
function zinnov_pagination()
{
	global $wp_query;
    $big = 999999999;
    $pages = paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?page=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'prev_next' => false,
        'type' => 'array',
        'prev_next' => TRUE,
        'prev_text' => '&larr; Previous',
        'next_text' => 'Next &rarr;',
            ));
    if (is_array($pages)) {
        $current_page = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<ul class="pagination pagination-menu">';
        foreach ($pages as $i => $page) {
            if ($current_page == 1 && $i == 0) {
                echo "<li class='active'>$page</li>";
            } else {
                if ($current_page != 1 && $current_page == $i) {
                    echo "<li class='active'>$page</li>";
                } else {
                    echo "<li>$page</li>";
                }
            }
        }
        echo '</ul>';
    }
}

*/

add_action( 'init', 'create_whitepapers_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_whitepapers_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
			'name'              => _x( 'Categories', 'zinnov' ),
			'singular_name'     => _x( 'Category', 'zinnov' ),
			'search_items'      => __( 'Search Category', 'zinnov' ),
			'all_items'         => __( 'All Category', 'zinnov' ),
			'parent_item'       => __( 'Parent Category', 'zinnov' ),
			'parent_item_colon' => __( 'Parent Category:', 'zinnov' ),
			'edit_item'         => __( 'Edit Category', 'zinnov' ),
			'update_item'       => __( 'Update Category', 'zinnov' ),
			'add_new_item'      => __( 'Add New Category', 'zinnov' ),
			'new_item_name'     => __( 'New Category Name', 'zinnov' ),
			'menu_name'         => __( 'Category', 'zinnov' ),
	);

	$rewrite = array(
			'slug'                       => 'whitepapers-category',
			'with_front'                 => true,
			'hierarchical'               => false,
	);
	$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
	);

	register_taxonomy( 'list_whitepapers', array( 'whitepapers' ) , $args );
}

add_action( 'init', 'create_blog_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_blog_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
			'name'              => _x( 'Categories', 'zinnov' ),
			'singular_name'     => _x( 'Category', 'zinnov' ),
			'search_items'      => __( 'Search Category', 'zinnov' ),
			'all_items'         => __( 'All Category', 'zinnov' ),
			'parent_item'       => __( 'Parent Category', 'zinnov' ),
			'parent_item_colon' => __( 'Parent Category:', 'zinnov' ),
			'edit_item'         => __( 'Edit Category', 'zinnov' ),
			'update_item'       => __( 'Update Category', 'zinnov' ),
			'add_new_item'      => __( 'Add New Category', 'zinnov' ),
			'new_item_name'     => __( 'New Category Name', 'zinnov' ),
			'menu_name'         => __( 'Category', 'zinnov' ),
	);

	$rewrite = array(
			'slug'                       => 'blog-category',
			'with_front'                 => true,
			'hierarchical'               => false,
	);
	$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
	);

	register_taxonomy( 'list_blog', array( 'blog' ) , $args );
}



add_action( 'init', 'create_faq_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_faq_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
			'name'              => _x( 'Categories', 'zinnov' ),
			'singular_name'     => _x( 'Category', 'zinnov' ),
			'search_items'      => __( 'Search Category', 'zinnov' ),
			'all_items'         => __( 'All Category', 'zinnov' ),
			'parent_item'       => __( 'Parent Category', 'zinnov' ),
			'parent_item_colon' => __( 'Parent Category:', 'zinnov' ),
			'edit_item'         => __( 'Edit Category', 'zinnov' ),
			'update_item'       => __( 'Update Category', 'zinnov' ),
			'add_new_item'      => __( 'Add New Category', 'zinnov' ),
			'new_item_name'     => __( 'New Category Name', 'zinnov' ),
			'menu_name'         => __( 'Category', 'zinnov' ),
	);

	$rewrite = array(
			'slug'                       => 'faq-category',
			'with_front'                 => true,
			'hierarchical'               => false,
	);
	$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
	);

	register_taxonomy( 'list_faq', array( 'faq' ) , $args );
}
function wpb_tag_cloud() {
$tags = get_tags();
$args = array(
    'smallest'                  => 10,
    'largest'                   => 22,
    'unit'                      => 'px',
    'number'                    => 10,
    'format'                    => 'flat',
    'separator'                 => " ",
    'orderby'                   => 'count',
    'order'                     => 'DESC',
    'show_count'                => 1,
    'echo'                      => false
);

$tag_string = wp_generate_tag_cloud( $tags, $args );

return $tag_string;

}

add_filter( 'ot_show_pages','__return_false' );
add_filter( 'ot_show_new_layout','__return_false' );
add_filter( 'ot_theme_mode','__return_true' );
include_once( 'inc/Theme-control/ot-loader.php' );
include_once( 'inc/Theme-control/assets/theme-mode/theme-options.php' );

include_once( 'inc/custom-post-type-blog.php' );
include_once( 'inc/custom-post-type-users.php' );
//include_once( 'inc/custom-post-type-whitepapersusers.php' );
include_once( 'inc/custom-post-type-whitepapers.php' );
include_once( 'inc/custom-post-type-faq.php' );

include_once( 'inc/custom-post-type-careers.php' );
include_once( 'inc/custom-post-type-events.php' );
include_once( 'inc/custom-post-type-newsletter.php' );
include_once( 'inc/custom-post-type-products.php' );
include_once( 'inc/custom-post-type-testimonials.php' );




function zinnov_pagination()
{
	global $wp_query;
    $big = 999999999;
    $pages = paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?page=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'prev_next' => false,
        'type' => 'array',
        'prev_next' => TRUE,
        'prev_text' => '&larr; Previous',
        'next_text' => 'Next &rarr;',
            ));
    if (is_array($pages)) {
        $current_page = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<ul class="pagination">';
        foreach ($pages as $i => $page) {
            if ($current_page == 1 && $i == 0) {
                echo "<li class='active'>$page</li>";
            } else {
                if ($current_page != 1 && $current_page == $i) {
                    echo "<li class='active'>$page</li>";
                } else {
                    echo "<li>$page</li>";
                }
            }
        }
        echo '</ul>';
    }
}

add_action( 'pre_get_posts' ,'wpse222471_query_post_type_blog', 1, 1 );
function wpse222471_query_post_type_blog( $query )
{
    if ( ! is_admin() && is_post_type_archive( 'blog' ) && $query->is_main_query() )
    {
        $query->set( 'posts_per_page', 6 ); //set query arg ( key, value )
    }
}


add_action( 'pre_get_posts' ,'wpse222471_query_post_type_whitepapers', 1, 1 );
function wpse222471_query_post_type_whitepapers( $query )
{
    if ( ! is_admin() && is_post_type_archive( 'whitepapers' ) && $query->is_main_query() )
    {
        $query->set( 'posts_per_page', 3 ); //set query arg ( key, value )
    }
}


function pagination($pages = '', $range = 4)
{
     $showitems = ($range * 2)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $the_query;
         $pages = $the_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }

     if(1 != $pages)
     {

         echo "<div class=\"pagination \"><span>Page ".$paged." of ".$pages."</span> ";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";

         for ($i=1; $i < $pages; $i++)
         {

             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}

add_action( 'init', 'create_events_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_events_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
			'name'              => _x( 'Categories', 'draup' ),
			'singular_name'     => _x( 'Category', 'draup' ),
			'search_items'      => __( 'Search Category', 'draup' ),
			'all_items'         => __( 'All Category', 'draup' ),
			'parent_item'       => __( 'Parent Category', 'draup' ),
			'parent_item_colon' => __( 'Parent Category:', 'draup' ),
			'edit_item'         => __( 'Edit Category', 'draup' ),
			'update_item'       => __( 'Update Category', 'draup' ),
			'add_new_item'      => __( 'Add New Category', 'draup' ),
			'new_item_name'     => __( 'New Category Name', 'draup' ),
			'menu_name'         => __( 'Category', 'draup' ),
	);

	$rewrite = array(
			'slug'                       => 'events-category',
			'with_front'                 => true,
			'hierarchical'               => false,
	);
	$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
	);

	register_taxonomy( 'list_events', array( 'events' ) , $args );
}

add_action( 'init', 'create_careers_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_careers_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
			'name'              => _x( 'Categories', 'draup' ),
			'singular_name'     => _x( 'Category', 'draup' ),
			'search_items'      => __( 'Search Category', 'draup' ),
			'all_items'         => __( 'All Category', 'draup' ),
			'parent_item'       => __( 'Parent Category', 'draup' ),
			'parent_item_colon' => __( 'Parent Category:', 'draup' ),
			'edit_item'         => __( 'Edit Category', 'draup' ),
			'update_item'       => __( 'Update Category', 'draup' ),
			'add_new_item'      => __( 'Add New Category', 'draup' ),
			'new_item_name'     => __( 'New Category Name', 'draup' ),
			'menu_name'         => __( 'Category', 'draup' ),
	);

	$rewrite = array(
			'slug'                       => 'careers-category',
			'with_front'                 => true,
			'hierarchical'               => false,
	);
	$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
	);

	register_taxonomy( 'list_careers', array( 'careers' ) , $args );
}

/*add_action( 'wp_ajax_downloadCount', 'downloadCount' );
function downloadCount(){
  global $wpdb;

  //$mydb = new wpdb(root, root, codeba8q_cms_zinnov, localhost);
   // $mydb -> show_errors();

  $post_id=$_POST["post_id"];
  $count=$_POST["count"];
  $count++;
  //$count = (int) get_field($post_id);$count++;
  update_field($post_id, $count);
  echo $count;
  wp_die();

}*/
