<!-- connect to view info of post -->
	<script type="text/javascript" src="<?php echo home_url(); ?>/../jquery-1.11.1.js"></script>	
	<link href="<?php echo home_url(); ?>/../dist/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo home_url(); ?>/../dist/css/bootstrap-theme.css" rel="stylesheet">
	<script src="<?php echo home_url(); ?>/../dist/js/bootstrap.min.js"></script>     	
	<link rel="stylesheet" id="wonderplugin-slider-admin-style-css" href="<?php echo home_url(); ?>/wp-content/plugins/wonderplugin-slider/wonderpluginslider.css?ver=4.0" type="text/css" media="all">   
	<script type="text/javascript" src="<?php echo home_url(); ?>/wp-content/plugins/wonderplugin-slider/app/wonderplugin-slider-creator.js?ver=2.9"></script>
	
<?php 
	$option =  get_option('trt_options'); 
	get_header();
	
?>
    <!-- Custom styles for this template -->
	<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href="<?php echo home_url(); ?>/../carousel.css" rel="stylesheet">
	<link href="<?php echo home_url(); ?>/../dist/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo home_url(); ?>/../dist/css/bootstrap-theme.css" rel="stylesheet">	
	<div class="navbar-wrapper">
	  <div class="container">
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		  <div class="container">
			<div class="text-center hidden-xs"> <img class="nav-logo-lrg" src="<?php echo get_template_directory_uri();?>/images/KWB-LOGO.png"> </div>
			<div class="navbar-header ">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			  <a class="navbar-brand visible-xs-inline" href="../"><img class="nav-logo-sm" src="<?php echo get_template_directory_uri();?>/images/KWB-LOGO-sm.png"> </a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
			  <ul class="nav nav-justified">
				<li><a href="../index.php">HOME</a> </li>
				<li><a href="../index.php#projects">PROJECTS</a> </li>
				<li><a href="../about-us.php">ABOUT US</a> </li>
				<li><a href="../kwb-services.php">SERVICES</a> </li>
				<li><a href="../contact.php">CONTACT US</a> </li>
			  </ul>
			</div>
		  </div>
		</nav>
	  </div>
	</div>
<!--CONTENT-->
<div class="container">
	<div class="row">
              <!--THE POST-->
                <?php if(have_posts()): ?><?php while(have_posts()): ?><?php the_post(); ?>
                    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
						<br/>
                       <div class="project-title">
                        <h1 class="gallery-title"><?php the_title(); ?></h1>           
                    
						</div>                    
                        <?php the_content(); ?>
                    
                    </div>                    
    
                    <?php endwhile ?>
                    
                <?php endif ?>
                
	</div>
</div>
<div style="float:left;padding-top:100px;">
      <div class="col-xs-6 col-xs-offset-3 col-sm-10 col-sm-offset-1  text-center"> 
      
      <a href="https://www.facebook.com/kwbbuildingservices">
      <img class="footer-icons" src="<?php echo get_template_directory_uri();?>/images/fb-@2x.png" alt="Facebook-icon"> 
      </a>
      
      <img class="footer-icons" src="<?php echo get_template_directory_uri();?>/images/tw@2x.png" alt="Twitter-icon">
       <img class="footer-icons" src="<?php echo get_template_directory_uri();?>/images/in@2x.png" alt="LinkedIn-icon">
        <h4>KWB Building Services Limited</h4>
        <p> 38 Arthaus
          <br> 205 Richmond Road
          <br> London
          <br> E8 3FF</p>
        <p>&copy; 2014 KWB Services Ltd. </p>
        
        <p class="back-to-top"><a href="#">Back to top</a> </p>
      </div>
      
</div>
<?php wp_footer(); ?>
