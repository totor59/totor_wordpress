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



if( !function_exists( 'theme_pagination' ) ) {
	
    function theme_pagination() {
	
	global $wp_query, $wp_rewrite;
	$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
	
	$pagination = array(
		'base' => @add_query_arg('page','%#%'),
		'format' => '',
		'total' => $wp_query->max_num_pages,
		'current' => $current,
	        'show_all' => false,
	        'end_size'     => 1,
	        'mid_size'     => 2,
		'type' => 'list',
		'next_text' => '»',
		'prev_text' => '«'
	);
	
	if( $wp_rewrite->using_permalinks() )
		$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) , 'paged' );
	
	if( !empty($wp_query->query_vars['s']) )
		$pagination['add_args'] = array( 's' => str_replace( ' ' , '+', get_query_var( 's' ) ) );
		
	echo str_replace('page/1/','', paginate_links( $pagination ) );
    }	
}
