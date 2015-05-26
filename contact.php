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
    <link href="carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>

<?php include 'nav.php';?>

    <!-- HEADER
    ================================================== -->
    
    
<div class="container-fluid full-width-hero services_bg hero-header">
	<div class="container text-center"><!-- container to push content inline with main body-->
	<div class="row">
	 <div class="col-md-8 col-md-offset-2">
	 <h1 class="white-text" >CONTACT US</h1>
	 
	  
	  <h4 class="white-text contact-title">KWB building Services Limited</h4>
	 
	 <p class="white-text contact-text">
		
		 

38 Arthaus<br>
205 Richmond Road<br>
London<br>
E8 3FF<br>
<br>
Email us: info@kwbservices.co.uk
<br><br><br>
Call us: <a class="white-text tel" href="tel:02088175230"> 020 8817 5230</a>
</p>

<p class="white-text" >
	Fill in the form below and someone will get back to you shortly
</p>


	
   </div>
  </div>
 </div>
</div>


<style> 
	.contact-text{
		font-size: 18px;
		padding-top: 10px;
	}
	
	
</style>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
<div class="col-xs-12 text-center">
<h3>SAY HELLO</h3>
</div>



<hr class="featurette-divider"></hr>
 <form class="form-horizontal" role="form" action="" >
	 
  <div class="form-group">
    <div class="col-sm-8 col-sm-offset-2">
      <input type="name" name="name" class="form-control" id="inputName" placeholder="Name">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-8 col-sm-offset-2">
      <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
  </div>

<div class="form-group">
	<div class="col-sm-8 col-sm-offset-2">
	<textarea  type="text" name="message" class="form-control"  rows="5" id="inputMessage" placeholder="Message"></textarea>
	</div>
	
</div>



  <div class="form-group">
    <div class="col-sm-offset-2 text-center col-sm-8">
      <button type="submit" class="btn btn-default" value="submit">Submit</button>
    </div>
  </div>
</form>


       </div><!-- /.container -->
      <!-- /END THE FEATURETTES -->


<?php include 'footer.php';?>



  
<?php 

    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo ""; 
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message sent using your contact form"; 
        mail("david@2-digits.com", $subject, $message, $from); 
        echo "Email sent!"; 
        } 

?> 




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
