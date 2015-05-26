 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://favicon.ico">

    <title> KWB SERVICES</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
     <link href="dist/css/bootstrap-theme.css" rel="stylesheet">
     

    <!-- Custom styles for this template -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="slick.css" rel="stylesheet">  
    <link href="carousel.css" rel="stylesheet">

 
  </head>
<!-- NAVBAR
================================================== -->
  <body>
<?php include 'nav.php';?>

<div class="container  gallery-hero-header ">
	<div class="row">
	<?php


	define( 'ABSPATH', dirname(__FILE__) . '/../wordpress/' );
		
		//error_reporting( E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING | E_RECOVERABLE_ERROR );

		if ( file_exists( ABSPATH . 'wp-config.php') ) {
			/** The config file resides in ABSPATH */
			require_once( ABSPATH . 'wp-config.php' );

		} elseif ( file_exists( dirname(ABSPATH) . '/wp-config.php' ) && ! file_exists( dirname(ABSPATH) . '/wp-settings.php' ) ) {

			/** The config file resides one level above ABSPATH but is not part of another install */
			require_once( dirname(ABSPATH) . '/wp-config.php' );

		} else {

			// A config file doesn't exist

			define( 'WPINC', 'wp-includes' );
			require_once( ABSPATH . WPINC . '/load.php' );

			// Standardize $_SERVER variables across setups.
			wp_fix_server_vars();

			require_once( ABSPATH . WPINC . '/functions.php' );

			$path = wp_guess_url() . '/wp-admin/setup-config.php';

			/*
			 * We're going to redirect to setup-config.php. While this shouldn't result
			 * in an infinite loop, that's a silly thing to assume, don't you think? If
			 * we're traveling in circles, our last-ditch effort is "Need more help?"
			 */
			if ( false === strpos( $_SERVER['REQUEST_URI'], 'setup-config' ) ) {
				header( 'Location: ' . $path );
				exit;
			}

			define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
			require_once( ABSPATH . WPINC . '/version.php' );

			wp_check_php_mysql_versions();
			wp_load_translations_early();

			// Die with an error message
			$die  = __( "There doesn't seem to be a <code>wp-config.php</code> file. I need this before we can get started." ) . '</p>';
			$die .= '<p>' . __( "Need more help? <a href='http://codex.wordpress.org/Editing_wp-config.php'>We got it</a>." ) . '</p>';
			$die .= '<p>' . __( "You can create a <code>wp-config.php</code> file through a web interface, but this doesn't work for all server setups. The safest way is to manually create the file." ) . '</p>';
			$die .= '<p><a href="' . $path . '" class="button button-large">' . __( "Create a Configuration File" ) . '</a>';

			wp_die( $die, __( 'WordPress &rsaquo; Error' ) );
		}
		define('WP_USE_THEMES', true);
		wp();		
		
		$template = get_single_template();
		if ( $template = apply_filters( 'template_include', $template ) )
			include( $template );
			

	?>
	<?php $option =  get_option('trt_options'); ?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<?php wp_enqueue_style('triton_customfont',get_template_directory_uri().'/fonts/'.$option['trt_fonts'].'.css'); ?>
	<?php get_template_part('colors');?>
		
	  	   
	   
   </div><!--</row>-->
    
<?php include 'footer.php';?>
  </body>
  
	<link rel="stylesheet" id="slideshow-jquery-image-gallery-stylesheet_functional-css" href="../wordpress/wp-content/plugins/slideshow-jquery-image-gallery/style/SlideshowPlugin/functional.css?ver=2.2.21" type="text/css" media="all">
	<link rel="stylesheet" id="slideshow-jquery-image-gallery-ajax-stylesheet_style-light-css" href="../wordpress/wp-admin/admin-ajax.php?action=slideshow_jquery_image_gallery_load_stylesheet&amp;style=style-light&amp;ver=2.2.21" type="text/css" media="all">
	<script type="text/javascript">
	/* <![CDATA[ */
	var SlideshowPluginSettings_0 = {"animation":"slide","slideSpeed":"1","descriptionSpeed":"0.4","intervalSpeed":"5","slidesPerView":"1","maxWidth":"0","aspectRatio":"3:1","height":"200","imageBehaviour":"natural","showDescription":"true","hideDescription":"true","preserveSlideshowDimensions":"false","enableResponsiveness":"true","play":"true","loop":"true","pauseOnHover":"true","controllable":"true","hideNavigationButtons":"false","showPagination":"true","hidePagination":"true","controlPanel":"false","hideControlPanel":"true","waitUntilLoaded":"true","showLoadingIcon":"true","random":"false","avoidFilter":"true"};
	var slideshow_jquery_image_gallery_script_adminURL = "..\/wordpress\/wp-admin\/";
	/* ]]> */
	</script>
	<script type="text/javascript" src="../wordpress/wp-content/plugins/slideshow-jquery-image-gallery/js/min/all.frontend.min.js?ver=2.2.21"></script>



<div id="fancybox-tmp"></div><div id="fancybox-loading"><div></div></div><div id="fancybox-overlay"></div><div id="fancybox-wrap"><div id="fancybox-outer"><div class="fancybox-bg" id="fancybox-bg-n"></div><div class="fancybox-bg" id="fancybox-bg-ne"></div><div class="fancybox-bg" id="fancybox-bg-e"></div><div class="fancybox-bg" id="fancybox-bg-se"></div><div class="fancybox-bg" id="fancybox-bg-s"></div><div class="fancybox-bg" id="fancybox-bg-sw"></div><div class="fancybox-bg" id="fancybox-bg-w"></div><div class="fancybox-bg" id="fancybox-bg-nw"></div><div id="fancybox-content"></div><a id="fancybox-close"></a><div id="fancybox-title"></div><a href="javascript:;" id="fancybox-left"><span class="fancy-ico" id="fancybox-left-ico"></span></a><a href="javascript:;" id="fancybox-right"><span class="fancy-ico" id="fancybox-right-ico"></span></a></div></div>  
</html>
