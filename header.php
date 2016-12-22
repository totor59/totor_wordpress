<!doctype html>
<html class="no-js" lang="fr" style="background-image:url(<?php echo get_template_directory_uri() . '/img/green.jpg'; ?>);">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<!-- Don't forget the title -->
		<title><?php bloginfo('name');?></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Place favicon.ico in the root directory -->
		<link rel="icon" type="image/gif" href="favicon.gif">
		<!-- CSS links -->
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/flexbox.css">
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css"> 
		<script src="js/vendor/modernizr-2.8.3.min.js"></script>
		<?php wp_head();?>
	</head>

	<body>
		<!--[if lt IE 8]>
	  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	  <![endif]-->

	  <!-- Add your site or application content here -->


	  <!-- Header -->

		<menu class="mobilemenu">
		<img src=<?php echo get_template_directory_uri() . '/img/logo.gif'; ?>>
	<a class="btn btn-navbar" id="btnMenu">
		<img src=<?php echo get_template_directory_uri() . '/icon/menu.png'; ?>>
	</a>	
	<nav id="nav" class="navmobile">
	
<!-- Menu Mobile -->
<?php
$defaults = array(
	'container' => false,
	'theme_location' => 'mobile-menu',
	'menu_class' => 'mobile-menu'
);
wp_nav_menu( $defaults );
?>
<!--	<ul id="mobile-menu">
			<li><a href="index.php">ABOUT</a></li>
			<li><a href="blog.php">BLOG</a></li>
		</ul>  -->

<!-- /Menu Mobile -->
	</nav>
	</menu>


	  <!-- /Header -->
