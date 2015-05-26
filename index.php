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

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="http://assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href="slick.css" rel="stylesheet">  
<link href="carousel.css" rel="stylesheet">
  </head>
  <body>
  
  
<?php include 'nav.php';?>
<!-- Slider ================================================== -->
<div class="container-fluid hero-slider">
    
<div class="row hero-row">
    <div class="col-xs-8 col-xs-offset-2">
    <h1 class="hero-strap noselect">a London based building contractors,
    specialising in high-end fit outs &amp;
     refurbishments for both private clients 
     &amp; developers.</h1>
    </div>
</div>
  
    <div class="slider single-item">
        <div class="img-slide home-slider slide-1"></div>
        <div class="img-slide home-slider slide-2"></div>
        <div class="img-slide home-slider slide-3"></div>
        <div class="img-slide home-slider slide-4"></div>
        <div class="img-slide home-slider slide-5"></div>
    </div><!-- /.carousel -->
    
</div>
<!-- End Slider ================================================== -->


<!-- Projects ================================================== --> 
<?php include 'projects.php';?>
<!-- End Projects ================================================== -->

<!-- About ================================================== --> 
<?php include 'about.php';?>     
<!-- End About ================================================== -->

<!-- Services ================================================== -->   
<?php include 'services.php';?>   
<!-- End Services ================================================== -->

<?php include 'footer.php';?>
  


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
     <script type="text/javascript" src="slick.min.js"></script>
     
      <script type="text/javascript">

 $('.single-item').slick({
 adaptiveHeight:false, 
 fade: true,
 cssEase:'ease-out',
 speed:500,
 arrows:false,
 autoplay:true,
 autoplaySpeed: 3000
 });
 
</script>
  </body>
</html>
