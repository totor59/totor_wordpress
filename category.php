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
		<figcaption>Catégorie: <?php single_cat_title(); ?></figcaption>

<!-- THE LOOP -->

<?php
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
if (have_posts() ) : while (have_posts() ) : the_post(); ?>
		<!-- Article preview -->
		<br>
		<a href="<?php the_permalink(); ?>">
		<h3 class="articletitle"><?php the_title(); ?></h3>
		<p class="excerpt"><?php echo the_excerpt(); ?></p>
		</a>
		<p class="tags postmetadata">Posté dans <?php the_category(', '); ?> | le <?php the_time('j F Y'); ?></p>  
		<hr>
		<!-- /Article preview -->

<?php endwhile;?>

<!-- END OF THE LOOP -->

<!-- Pagination -->

<div class="pagination">
<?php
$postCount = $wp_query->found_posts; // On récupère le nombre de post matchés par wp_query 
$big = 999999999; // need an unlikely integer
$catID = get_query_var("cat"); // On récupère l'ID de la catégorie
$args = array(
		'post_type' => 'post',
		'posts_per_page' => 5,
		'paged' => $paged,
		'category' => $catID
			);
$my_query = new WP_Query($args);
if ($postCount > 5) { // Si $postCount > 5 on echo la pagination
echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $my_query->max_num_pages
) );
}
?>
</div>
<!-- /Pagination -->

<?php  else: ?>

<p><?php _e('Désolé, aucun post ne correspond à votre recherche.'); ?></p>
<?php endif; ?>	
		</figure>

</main>
	  <!-- /Main content -->

<?php include("footer.php"); ?>
