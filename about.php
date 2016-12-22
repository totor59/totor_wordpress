
<?php include("header.php"); 

/**
 * Template Name: About
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
	  <main class="about">
	  <section class="left">
		  <figure class="wiki">
			  <figcaption>Totor --- Wiki</figcaption>
			  <h3 class="job">Web/Mobile Development</h3>
			  <p>Boucher en reconversion professionnelle, je cherche un <span>stage en développement web</span> pour compléter la formation de 6 mois que j'ai reçu a <span>SIMPLON Roubaix</span>.<br> Je suis passionné par les nouvelles technologies, le hack et le DIY.<br>Je suis <span>disponible à partir de Janvier 2017</span> pour travailler avec vous. N'hésitez pas à consulter mon <a href="cv_victormarechal.pdf" target="_blank">CV</a>!</p>
			  <p class="wikilinks"><a href="http://luluswallow.tumblr.com/">Lulu Swallow </a>-
			  <a href="http://simplon.co/roubaix/">Simplon </a>- 
			  <a href="https://fr.wikipedia.org/wiki/Roubaix">Roubaix</a>
			  </p>
			  </figure>
			  <figure class="skillfigure">
				  <figcaption>Skills</figcaption>
				  <div class="skillflexcontent">
					  <ul class="skill development">
						  <h3>Development</h3>
						  <li class="item shell">Shell [+++]</li>
						  <li class="item mysql">MySQL [++]</li>
						  <li class="item php">PHP5 [++]</li>
						  <li class="item html">HTML [+++]</li>
						  <li class="item css">CSS [+++]</li>
						  <li class="item javascript">Javascript [+]</li>
						  <li class="item wordpress">Wordpress [+++]</li>				
					  </ul>
					  <div class="ulwrapper skill">
					  <ul class="network">
						  <h3>Network</h3>
						  <li class="item nginx">Nginx</li>
						  <li class="item apache">Apache2</li>
						  <li class="item iptables">&nbsp;&nbsp;iptables</li>
					  </ul> 
					  <ul class="tools">
						  <h3>Tools</h3>
						  <li class="item debian">Debian</li>
						  <li class="item vim">Vim</li>
						  <li class="item git">Git</li>
					  </ul>
					</div>
					<a style="width:100%; text-align:center;" href="cv_victormarechal.pdf" target="_blank" class="cvbutton">&nbsp;Consultez mon CV&nbsp;</a>
				  </div>
			  </figure>
				  </section>

	  <aside class="right">
		  <figure class="img-container">
		  <img src=<?php echo get_template_directory_uri() . '/img/toto.png'; ?> alt="portrait" class="portrait">
		  <ul>
			  <li><img src=<?php echo get_template_directory_uri() . '/icon/user.png'; ?>><span style="font-weight: bold">&nbsp;Victor Marechal</span></li>
			  <li><img src=<?php echo get_template_directory_uri() . '/icon/france.png'; ?>><span style="font-weight: bold">&nbsp;Roubaix</span></li>
		  </ul>
		  </figure>

<figure class="twitter">
				<figcaption><h2>Tweets</h2> <span>by --- <a href="https://twitter.com/TotorSystem">@TotorSystem</a></span></figcaption>
		 <a class="twitter-timeline"  href="https://twitter.com/TotorSystem" height="100" width="100%" data-chrome="transparent nofooter noheader">Tweets sur @TotorSystem</a>
		  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		  </figure>
		
		<figure class="mobilelinks">
		<figcaption>Contact/Follow</figcaption>
		<ul>
			<li><a href="https://twitter.com/TotorSystem"><img src="<?php echo get_template_directory_uri() . '/icon/twitter.png'; ?>">  https://twitter.com/TotorSystem</a></li>
			<li><a href="https://github.com/totor59"><img src="<?php echo get_template_directory_uri() . '/icon/github.png'; ?>">  https://github.com/totor59</a></li>
			<li><a href="mailto:victormarechal59@gmail.com"><img src="<?php echo get_template_directory_uri() . '/icon/mail.png'; ?>">  victormarechal59@gmail.com</a></li>
		</ul>		
		</figure>
	  </aside>
	 
	 </main>


<?php include("footer.php"); ?>
