<?php include("header.php"); 

/**
 * Template Name: Blog
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package totor
 **/
?>

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
		<main class="blog">
		<figure class="blogindex">
		<figcaption>Mon blog</figcaption>

<!-- THE LOOP -->

<?php
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
	'post_type' => 'post',
	'posts_per_page' => 5,
	'paged' => $paged
);
$actu = new WP_Query( $args);
if ($actu->have_posts() ) : while ($actu->have_posts() ) : $actu->the_post(); ?>
		<!-- Article preview -->
		<br>
		<h3><a class="job articletitle" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<p class="excerpt"><?php echo the_excerpt(); ?></p>
		<p class="tags postmetadata">Posté dans <?php the_category(', '); ?> | le <?php the_time('j F Y'); ?></p>  
		<hr>
		<!-- /Article preview -->

<?php endwhile;?>
<?php if ($actu->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
  <nav class="prev-next-posts paginationwrap">
    <div class="prev-posts-link older">
     <a href="<?php echo get_next_posts_link('', $actu->max_num_pages ); // display older posts link ?>">Older</a>
    </div>
    <div class="next-posts-link older">
     <a href="<?php echo get_previous_posts_link( 'Newer' ); // display newer posts link ?>">Newer</a>
    </div>
  </nav>
<?php } ?>	

<?php  else: ?>

<p><?php _e('Désolé, aucun post ne correspond à votre recherche.'); ?></p>
<?php endif; ?>	
		</figure>

</main>
	  <!-- /Main content -->

<?php include("footer.php"); ?>
