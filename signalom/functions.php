<?php

//after setup theme
function _tk_setup() {

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'custom-background', apply_filters( '_tk_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	
/*
	add_theme_support( 'post-formats', array(
		'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
	) );
*/
    
	load_theme_textdomain( '_tk', get_template_directory() . '/languages' );

    /* Logo */
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
	) );
    
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
    
	/**
	 * Register Menus
	*/
	register_nav_menus( array(
		'primary'  => __( 'Primary Menu', '_tk' ),
	) );

    
    /* Theme Images Size */
    //add_image_size( 'slider-size', 1170, 530, true );
    
    
}

add_action( 'after_setup_theme', '_tk_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function _tk_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer', '_tk' ),
		'id'            => 'nsflogo',
        'description'   => __( 'Footer NSF Logo.', '_tk' ),
		'before_widget' => '<div class="nsf-right text-right">',
		'after_widget'  => '</div>',
		'before_title'  => '<div>',
		'after_title'   => '</div>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer', '_tk' ),
		'id'            => 'footer1',
        'description'   => __( 'Footer Menu.', '_tk' ),
		'before_widget' => '<div class="copyright-text text-center">',
		'after_widget'  => '</div>',
		'before_title'  => '<div>',
		'after_title'   => '</div>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer', '_tk' ),
		'id'            => 'footersocial',
        'description'   => __( 'Footer Social.', '_tk' ),
		'before_widget' => '<div class="footer-left">',
		'after_widget'  => '</div>',
		'before_title'  => '<div>',
		'after_title'   => '</div>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer', '_tk' ),
		'id'            => 'footercopy',
        'description'   => __( 'Footer Copyright & Menu.', '_tk' ),
		'before_widget' => '<div class="footer-middle">',
		'after_widget'  => '</div>',
		'before_title'  => '<div>',
		'after_title'   => '</div>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer', '_tk' ),
		'id'            => 'canada',
        'description'   => __( 'Made in Canada.', '_tk' ),
		'before_widget' => '<div class="footer-right">',
		'after_widget'  => '</div>',
		'before_title'  => '<div>',
		'after_title'   => '</div>',
	) );
	
}
add_action( 'widgets_init', '_tk_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function _tk_scripts() {


	// load Theme styles
	wp_enqueue_style( '_tk-style', get_stylesheet_uri() );
    
    // load Theme script
    //wp_enqueue_script('jquery');


}
add_action( 'wp_enqueue_scripts', '_tk_scripts' );



/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/includes/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';


/* Post Type Require Files */
require get_template_directory() . '/includes/post-type.php';


add_theme_support( 'woocommerce' );


add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	ob_start(); ?>
	<a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"> View Cart ( <?php echo sprintf (_n( '%d', '%d', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?> )</a>
	
	<?php    
	$fragments['a.cart-contents'] = ob_get_clean();
	
	return $fragments;
}

add_filter( 'woocommerce_price_trim_zeros', '__return_true' );

    function hex2rgb($hex) {
        $hex = str_replace("#", "", $hex);

        if(strlen($hex) == 3) {
        $r = hexdec(substr($hex,0,1).substr($hex,0,1));
        $g = hexdec(substr($hex,1,1).substr($hex,1,1));
        $b = hexdec(substr($hex,2,1).substr($hex,2,1));
        } else {
        $r = hexdec(substr($hex,0,2));
        $g = hexdec(substr($hex,2,2));
        $b = hexdec(substr($hex,4,2));
        }
        $rgb = array($r, $g, $b);

        return $rgb; // returns an array with the rgb values
    }
