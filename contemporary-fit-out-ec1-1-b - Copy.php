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
<!-- NAVBAR
================================================== -->
  <body>
<?php include 'nav.php';?>
<div class="container  gallery-hero-header ">
	<div class="row">
		
		
		<div class="col-sm-8 ">
		 <h1 class="gallery-title">Contemporary Fit Out EC1 1 </h1>
		 <div class="slider slider-for">
			<div><img class="img-slide" src="assets/images/contemporary-fit-out-ec1-1/Contemporary Fit Out EC1 1 b.jpg" alt="contemporary-fit-out-ec1-1" ></div>
			<div><img class="img-slide" src="assets/images/contemporary-fit-out-ec1-1/Contemporary Fit Out EC1 1 c.jpg" alt="contemporary-fit-out-ec1-1" ></div>
			<div><img class="img-slide" src="assets/images/contemporary-fit-out-ec1-1/Contemporary Fit Out EC1 1 d.jpg" alt="contemporary-fit-out-ec1-1" ></div>
			<div><img class="img-slide" src="assets/images/contemporary-fit-out-ec1-1/Contemporary Fit Out EC1 1 e.jpg" alt="contemporary-fit-out-ec1-1" ></div>
			<div><img class="img-slide" src="assets/images/contemporary-fit-out-ec1-1/Contemporary Fit Out EC1 1 f.jpg" alt="contemporary-fit-out-ec1-1" ></div>
		
		</div><!--</slider>-->
		</div>
		
		 <div class="col-sm-4">
		   <ul class="gallery-body-list">
			   <li>Complete fit out including custom joinery</li>
			   <li>Bespoke bathrooms </li>
			   <li>Floor tilling</li>
			   <li>Intelligent programmable lighting </li>
			   <li>Full AV and Audio system </li>
		   </ul>
	   </div>

		
		
		  <div class="slider  slider-nav col-sm-12 hidden-xs  ">
			<div><img class="img-slide" src="assets/images/contemporary-fit-out-ec1-1/Contemporary Fit Out EC1 1 b.jpg" alt="contemporary-fit-out-ec1-1" ></div>
			<div><img class="img-slide" src="assets/images/contemporary-fit-out-ec1-1/Contemporary Fit Out EC1 1 c.jpg" alt="contemporary-fit-out-ec1-1" ></div>
			<div><img class="img-slide" src="assets/images/contemporary-fit-out-ec1-1/Contemporary Fit Out EC1 1 d.jpg" alt="contemporary-fit-out-ec1-1" ></div>
			<div><img class="img-slide" src="assets/images/contemporary-fit-out-ec1-1/Contemporary Fit Out EC1 1 e.jpg" alt="contemporary-fit-out-ec1-1" ></div>
			<div><img class="img-slide" src="assets/images/contemporary-fit-out-ec1-1/Contemporary Fit Out EC1 1 f.jpg" alt="contemporary-fit-out-ec1-1" ></div>			  
		   </div><!--</slider-nav>-->
</div>	<!--</-slide container>-->
	   
	  	   
	   
   </div><!--</row>-->


    
<?php include 'footer.php';?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://assets/js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript" src="slick.min.js"></script>
    
    
    

	    <script type="text/javascript">

 $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots:false,
    asNavFor: '.slider-nav',
    adaptiveHeight: true
 });





$('.slider-nav').slick({
	slidesToShow: 8,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    centerMode: false,
    focusOnSelect: true,
    dots:false,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 8,
        slidesToScroll: 1,
        infinite: true
      }
    },
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 8,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1
      }
    }
  ]
      });
		
			</script>
		



    
  </body>
</html>
