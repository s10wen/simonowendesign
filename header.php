<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		
		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" href="http://simonowendesign.appspot.com/style.css" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<?php wp_head(); ?>

		<meta name="description" content="Front End Web Developer from Manchester, UK currently building websites for @absoluteagency" />
		<meta name="keywords" content="simon owen design, simon owen, front end, workflow, xhtml, html5, css, css3, jquery, javascript" />
		<meta name="author" content="Simon Owen Design" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="format-detection" content="telephone=no" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<link rel="author" href="https://plus.google.com/114327931745086514706/posts" />

		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-28329112-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>

	</head>
	<body <?php body_class(); ?>>
		<div id="top" class="wrap">
			<section id="content" class="col-six nmr" role="main">
				<?php if ( is_home() ) {?>
					<h1 id="title">
						<a href="/">Simon Owen Design</a>
					</h1>
					<div id="tagline">Front End Web Developer</div>
				<?php }?>
				<?php if ( ! is_home() ) {?>
					<div id="logo">
						<a href="/">Simon Owen Design</a>
					</div>
				<?php }?>
				<nav id="access" class="t" role="navigation">
				  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
					<a id="skip" class="hidden" href="#content" title="<?php esc_attr_e( 'Skip to content', 'boilerplate' ); ?>"><?php _e( 'Skip to content', 'boilerplate' ); ?></a>
					<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
					<?php wp_nav_menu( array( 'menu' => 'primary' ) ); ?>
				</nav><!-- #access -->