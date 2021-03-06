<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- FontAwesome CSS -->
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="css/custom.css">


	<title>OSMS</title>
</head>
<body>
<!-- start Navigation -->
<nav class="navbar navbar-expand-sm navbar-dark bg-success pl-5 fixed-top">
	<a href="index.php" class="navbar-brand">OSMS</a>
	<span class="navbar-text">Customer's Happiness is our Aim</span>
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
	<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="myMenu">
	<ul class="navbar-nav pl-5 custom-nav">
	  <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	  <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
	  <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
	  <li class="nav-item"><a href="Requester/requesterlogin.php" class="nav-link">Login</a></li>
	  <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
	 
	</ul>
</div>
</nav> <!-- End Navigation -->

<!-- Start Header Jumbotron-->
<header class="jumbotron back-image" style="background-image: url(Images/back.png)">
	
	<div class="myclass mainHeading">
		<h1 class="text-uppercase font-weight-bold">Welcome to OSMS</h1>
		<p class="font-italic">Customer's Happiness is our Aim</p>
		<a href="Requester/requesterlogin.php" class="btn btn-success mr-4">Login</a>
		<a href="#registration" class="btn btn-danger mr-4">Sign Up</a>
	</div>
</header><!-- End Header Jumbotron-->

<!-- Start introduction Section -->
<div class="container">
	<div class="jumbotron">
		<h3 class="text-center">OSMS Services</h3>
		<p>
OSMS is Bangladesh’s leading chain of multi-brand electronics and electrical
service workshops offering wide array of services. We focus on enhancing your
uses experience by offering world-class electronic appliances maintenance
services. Our sole mission is “To provide electronic appliances care services to
keep the devices fit and healthy and customers happy and smiling.” With wellequipped electronic appliances service centers and fully trained mechanics, we provide quality service with excellent packages that are designed to offer you
great savings. Our state of art workshops are conveniently located in many cities
across the country.
Today’s customers don’t just expect high quality and excellent service at a fair
price, they demand it. Luckily, today we know far more about how to provide
people with the experience they want. And it all begins with online service
management system.
		</p>
	</div>
</div><!-- End introduction Section -->

<!--start services section -->
<div class="container text-center border-bottom" id="Services">
	<h2>Our Services</h2>
	<div class="row mt-4">
		<div class="col-sm-4 mb-4">
		<a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
		<h4 class="mt-4">Electronic Appliances</h4>
		</div>
		<div class="col-sm-4 mb-4">
		<a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
		<h4 class="mt-4">Preventing Maintenance</h4>
		</div>
		<div class="col-sm-4 mb-4">
		<a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
		<h4 class="mt-4">Fault Repair</h4>
		</div>
			
		
	</div>
</div><!--End services section -->

<!--start Registration form --> 
<?php include('userregistration.php') ?>
<!--End Registration form -->

<!--start Happy customer -->
<div class="jumbotron bg-success">
	<div class="container">
		<h2 class="text-center text-white">Happy Customer</h2>
		<div class="row mt-5" >
			<div class="col-lg-3 col-sm-6">
				<div class="card shadow-lg mb-2">
					<div class="card-body text-center"><img src="Images/obama.webp" class="img-fluid" style="border-radius: 100px; height: 100px; width: 100px;" alt="obama">
					<h4 class="card-title">Barack Obama</h4>
					<p class="card-text">The service of this company is good so far. i really happy with their service. hope will take more service from them.</p>	
					</div>
					
				</div>
				
			</div>
			<div class="col-lg-3 col-sm-6" >
				<div class="card shadow-lg mb-2">
					<div class="card-body text-center"><img src="Images/trump.jpg" class="img-fluid" style="border-radius: 100px; height: 100px; width: 100px;" alt="trump">
					<h4 class="card-title">Donald Trump</h4>
					<p class="card-text">The service of this company is good so far. i really happy with their service. hope will take more service from them.</p>	
					</div>
					
				</div>
				
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="card shadow-lg mb-2">
					<div class="card-body text-center"><img src="Images/hillary.jpg" class="img-fluid" style="border-radius: 100px; height: 100px; width: 100px;" alt="hillary" >
					<h4 class="card-title">Hillary Clinton</h4>
					<p class="card-text">The service of this company is good so far. i really happy with their service. hope will take more service from them.</p>	
					</div>
					
				</div>
				
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="card shadow-lg mb-2">
					<div class="card-body text-center"><img src="Images/jill.jpg" class="img-fluid" style="border-radius: 100px;height: 100px; width: 100px;" alt="jill">
					<h4 class="card-title">Jill Biden</h4>
					<p class="card-text">The service of this company is good so far. i really happy with their service. hope will take more service from them.</p>	
					</div>
					
				</div>
				
			</div>
			
		</div>
	</div>
</div><!--End Happy customer -->
<!--start Contact Us -->
<?php include('contactform.php')?>
<!-- End contact us -->
<!-- start footer -->
<footer class="container-fluid bg-dark mt-5 text-white">
	<div class="container">
		<div class="row py-3">
			<div class="col-md-6"><!-- start 1st column -->
			<span class="pr-2">Follow us:</span>	
			<a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
			<a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
			<a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
			<a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
			<a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>

			</div><!-- end 1st column -->
		<div class="col-md-6 text-right"><!-- start 2nd column -->
			<small>Designed by AtqiahReesha &copy; 2020</small>
			<small class="ml-2"><a href="#">Admin Login</a></small>
		</div>	<!-- end 2nd column -->
		</div>
		
	</div>
</footer>



<!-- JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>