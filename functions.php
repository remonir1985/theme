<?php
require_once get_template_directory() . '/inc/tgm.php';

if ( ! function_exists( 'TAIBA_setup' ) ) :
	
	function TAIBA_setup() {
		load_theme_textdomain( 'TAIBA', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus( array(
			'mainmenu' => esc_html__( 'Primary', 'TAIBA' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-background', apply_filters( 'theme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'TAIBA_setup' );

function TAIBA_content_width() {

	$GLOBALS['content_width'] = apply_filters( 'TAIBAcontent_width', 640 );
}
add_action( 'after_setup_theme', 'TAIBA_content_width', 0 );

// sidebar
function TAIBA_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'TAIBA' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'TAIBA' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'TAIBA_widgets_init' );


// add css and js
function TAIBA_scripts() {
    wp_enqueue_style( 'TAIBA-skelcss', get_template_directory_uri() . '/assets/css/skel.css', '215', true );
    wp_enqueue_style( 'TAIBA-styleaacss', get_template_directory_uri() . '/assets/css/style.css', '215', true );
    wp_enqueue_style( 'TAIBA-xlargestyle', get_template_directory_uri() . '/assets/css/style-xlarge.css', '215', true );
    
	wp_enqueue_style( 'TAIBA-style', get_stylesheet_uri() );

    wp_enqueue_script( 'TAIBA-jqueryminjs', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), '1215', true );
    wp_enqueue_script( 'TAIBA-skelminjs', get_template_directory_uri() . '/assets/js/skel.min.js', array('jquery'), '1215', true );
    wp_enqueue_script( 'TAIBA-skellayersjs', get_template_directory_uri() . '/assets/js/skel-layers.min.js', array('jquery'), '1215', true );
    wp_enqueue_script( 'TAIBA-initjs', get_template_directory_uri() . '/assets/js/init.js', array('jquery'), '1215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'TAIBA_scripts' );
if ( !class_exists( 'redux-framework' ) && file_exists( dirname( __FILE__ ) . '/redux-framework/ReduxCore/framework.php' ) ) {
    require_once( dirname( __FILE__ ) . '/redux-framework/ReduxCore/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/redux-framework/sample/function-config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/redux-framework/sample/function-config.php' );
}


?>