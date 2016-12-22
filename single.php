<?php

/**
 ** The template for displaying all single posts and attachments
 **
 ** @link https://codex.wordpress.org/Template_Hierarchy
 ** @package WordPress
 ** @subpackage totor
 ** @since totor 1.0 beta
 **
 **/

include("header.php"); ?>

<!-- HEADER -->
<header>
		<nav class="subnav">
			<a href="#"><img src=<?php echo get_template_directory_uri() . '/img/logo.gif'; ?>></a>
<!-- Menu Desktop -->
<?php
$defaults = array(
	'container' => false,
	'theme_location' => 'desktop-menu',
	'menu_class' => 'desktop-menu'
);
wp_nav_menu( $defaults );
?>

	<!--	<ul class="navmenu" id="desktop-menu">
			<li><a href="index.php" class="active">ABOUT</a></li>
			<li><a href="blog.php">BLOG</a></li>
		</ul> -->

<!-- /Menu Desktop -->

		<ul class="links">
			<li><a href="https://twitter.com/TotorSystem"><img src=<?php echo get_template_directory_uri() . '/icon/twitter.png'; ?>></a></li>
			<li><a href="https://github.com/totor59"><img src=<?php echo get_template_directory_uri() . '/icon/github.png'; ?>></a></li>
			<li><a href="mailto:victormarechal59@gmail.com"><img src=<?php echo get_template_directory_uri() . '/icon/mail.png'; ?>></a></li>
		</ul>	
		</nav>
</header>

<!-- /HEADER -->

 <!-- Main content -->
<?php if (have_posts()) : ?>
		<main class="blog">
<?php while (have_posts()) : the_post(); ?>
		<figure class="blogarticle">

<!-- THE LOOP -->

		<!-- Article preview -->
			<figcaption><?php the_title(); ?></figcaption>
		<br>
		<p class="content"><?php the_content(); ?></p>
		<hr>
	        <p class="tags postmetadata">Posted in <?php the_category(', '); ?></p> | <?php the_time('F jS, Y'); ?></p><br>  
		<!-- /Article preview -->
			
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>		

		</figure>

</main>
	  <!-- /Main content -->








<?php include('footer.php');?>

