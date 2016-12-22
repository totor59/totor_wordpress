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

function pagination($query) {  
	
	$baseURL="http://".$_SERVER['HTTP_HOST'];
	if($_SERVER['REQUEST_URI'] != "/"){
		$baseURL = $baseURL.$_SERVER['REQUEST_URI'];
	}
 
	// Suppression de '/page' de l'URL
	$sep = strrpos($baseURL, '/page/');
	if($sep != FALSE){
		$baseURL = substr($baseURL, 0, $sep);
	}
 
  // Suppression des paramètres de l'URL
	$sep = strrpos($baseURL, '?');
	if($sep != FALSE){
	// On supprime le caractère avant qui est un '/'
		$baseURL = substr($baseURL, 0, ($sep-1));
	}	
	
	$page = $query->query_vars["paged"];  
	if ( !$page ) $page = 1;  
	$qs = $_SERVER["QUERY_STRING"] ? "?".$_SERVER["QUERY_STRING"] : "";  
	
	// Nécessaire uniquement si on a plus de posts que de posts par page admis 
	if ( $query->found_posts > $query->query_vars["posts_per_page"] ) {  
		echo '<ul class="pagination">'; 
		// lien précédent si besoin
		if ( $page > 1 ) { 
			echo '<li class="next_prev prev"><a title="Revenir à la page précédente (vous êtes à la page '.$page.')" href="'.$baseURL.'/page/'.($page-1).'/'.$qs.'">« précédente</a></li>'; 
		} 
		// la boucle pour les pages
		for ( $i=1; $i <= $query->max_num_pages; $i++ ) { 
			// ajout de la classe active pour la page en cours de visualisation
			if ( $i == $page ) { 
				echo '<li class="active"><a href="#pagination" title="Vous êtes sur cette page '.$i.'">'.$i.'</a></li>'; 
			} else { 
				echo '<li><a title="Rejoindre la page '.$i.'" href="'.$baseURL.'/page/'.$i.'/'.$qs.'">'.$i.'</a></li>'; 
			} 
		} 
		// le lien next si besoin
		if ( $page < $query->max_num_pages ) { 
			echo '<li class="next_prev next"><a title="Passer à la page suivante (vous êtes à la page '.$page.')" href="'.$baseURL.'/page/'.($page+1).'/'.$qs.'">suivante »</a></li>'; 
		} 
		echo '</ul>';  
	}  
} 
