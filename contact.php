<?php
// Free Bootstrap Themes : www.Html5xCss3.com

$text = "<span class='fail'>Error! Please try again.</span>";

if(isset($_POST['submitcontact']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];

	$to = "youremail@gmail.com";
	$subject = "Html5xCss3 - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Html5xCss3.com";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span class='success'>Your Message was sent successfully !</span>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by Html5xCss3 dot com - Free Responsive Html5 Templates">
    <meta name="author" content="http://www.Html5xCss3.com">
	
    <title>ChokoCake | Free Bootstrap Chocolate Templates</title>
	
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	
	<!-- Custom CSS -->
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/lightbox.css">
	
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <!-- <link href="owl-carousel/owl.theme.css" rel="stylesheet"> -->
	
	<!-- jQuery and Plugin-->
	<script src="js/jquery-3.2.1.min.js"></script>
	
	
	<script src="js/bootstrap.min.js"></script>

	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="sub-page">
	<header class="main-header">
		
		<!-- Static Header -->
		<div class="header-text">
			<div class="col-xs-12">
				<center><a href="index.html"><img src="images/logo.png" class="img-responsive" alt=""></a></center>
			</div>
		</div><!-- /header-text -->
		
	</header>
	<!-- /Section: intro -->
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="success text-center">
					<div class="success-insite">
						<!--Warning-->
						<?php echo $text;?>
						<!---->
						<a class="btn btn-skin" href="index.html#box-map" data-anchor="contact">Back To Homepage</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- /////////////////////////////////////////Footer -->
	<footer>
		
		<div class="wrap-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<p>Copyright 20xx - Designed by <a href="https://www.html5xcss3.com">HTML5xCSS3</a></p>
					</div>
					<div class="col-md-6">
						<ul class="list-inline social-link">
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="list-inline quicklinks">
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Terms of Use</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer -->
	
	<!-- JS -->
	<script src="js/lightbox-plus-jquery.min.js"></script>
	<script src="js/plugin.js"></script>
	<script src="js/main.js"></script>
	
	<!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7V-mAjEzzmP6PCQda8To0ZW_o3UOCVCE&callback=initMap" async defer></script>
	
	<!-- carousel -->
	<script src="owl-carousel/owl.carousel.js"></script>
    <script>
		$(document).ready(function() {
		  var b2_box = $("#owl-slide");
		  
		  b2_box.owlCarousel({
			autoPlay: false,
			items : 1,
			itemsDesktop : [1199,1],
			itemsDesktopSmall : [979,1],
			itemsTablet : [768, 1],
			itemsMobile : [479, 1],
			pagination: false
		  });
		  
		  // Custom Navigation Events 1
		  $(".next-b_2-slide").click(function(){
			b2_box.trigger('owl.next');
		  });
		  $(".prev-b_2-slide").click(function(){
			b2_box.trigger('owl.prev');
		  });
		  
		});
	</script>
</body>
</html>