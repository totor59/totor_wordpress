<?php



// Call the CSS stylesheets.
function wpt_theme_styles() {
	wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'flexbox_css', get_template_directory_uri() . '/css/flexbox.css' );
}
add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );
// Call the Javascript
function add_my_script() {
	wp_enqueue_script(
		'custom-script', get_template_directory_uri() . '/js/main.js',
		array('jquery')
	);
}
add_action( 'wp_enqueue_scripts', 'add_my_script' );


// Register menus
function register_theme_menus() {
	register_nav_menus (
		array (
			'mobile-menu' => __( 'Menu Mobile' ),  
			'desktop-menu' => __( 'Menu Desktop' ), 
			)
);
} 
add_action( 'init', 'register_theme_menus' );




