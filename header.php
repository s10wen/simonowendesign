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
		<link rel="author" href="https://plus.google.com/114327931745086514706/posts" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<!--
			Viewport and Media Queries The Complete Idiot's Guide
			http://t.co/dKP3o1e
		-->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="format-detection" content="telephone=no" />
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-title" content="Simon Owen">

		<!--
			Home screen icons and startup screens
			http://mathiasbynens.be/notes/touch-icons
			http://stuffandnonsense.co.uk/blog/about/home-screen-icons-and-startup-screens
		-->
		<link rel="shortcut icon" href="http://simonowendesign.appspot.com/favicon.ico">
		<link rel="shortcut icon" href="http://simonowendesign.appspot.com/img/favicon.png">
		<!-- 57x57 (precomposed) for iPhone 3GS, 2011 iPod Touch and older Android devices -->
		<link rel="apple-touch-icon-precomposed" href="http://simonowendesign.appspot.com/img/apple-touch-icon-precomposed.png">
		<!-- 72x72 (precomposed) for 1st generation iPad, iPad 2 and iPad mini -->
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://simonowendesign.appspot.com/img/apple-touch-icon-72x72-precomposed.png">
		<!-- 114x114 (precomposed) for iPhone 4, 4S, 5 and 2012 iPod Touch -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://simonowendesign.appspot.com/img/apple-touch-icon-114x114-precomposed.png">
		<!-- 144x144 (precomposed) for iPad 3rd and 4th generation -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://simonowendesign.appspot.com/img/apple-touch-icon-144x144-precomposed.png">

		<!-- iPhone 3GS, pre-2011 iPod Touch -->
		<link rel="apple-touch-startup-image" href="http://simonowendesign.appspot.com/img/startup-320x460.png" media="screen and (max-device-width : 320px)">
		<!-- iPhone 4, 4S and 2011 iPod Touch-->
		<link rel="apple-touch-startup-image" href="http://simonowendesign.appspot.com/img/startup-640x920.png" media="(max-device-width : 480px) and (-webkit-min-device-pixel-ratio : 2)">
		<!-- iPhone 5 and 2012 iPod Touch -->
		<link rel="apple-touch-startup-image" href="http://simonowendesign.appspot.com/img/startup-640x1096.png" media="(max-device-width : 548px) and (-webkit-min-device-pixel-ratio : 2)">
		<!-- iPad landscape -->
		<link rel="apple-touch-startup-image" sizes="1024x748" href="http://simonowendesign.appspot.com/img/startup-1024x748.png" media="screen and (min-device-width : 481px) and (max-device-width : 1024px) and (orientation : landscape)">
		<!-- iPad Portrait -->
		<link rel="apple-touch-startup-image" sizes="768x1004" href="http://simonowendesign.appspot.com/img/startup-768x1004.png" media="screen and (min-device-width : 481px) and (max-device-width : 1024px) and (orientation : portrait)">

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