<?php

require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index1.php');
}
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>RAECS Official Website</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="raecs official website" />
	<meta name="keywords" content="races,raecs.org,raecs website,raeces official,login,raeces login,free login,education society,learn,knowledge," />
	
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

    <link rel="shortcut icon" href="images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/style.css">

	<script src="js/modernizr-2.6.2.min.js"></script>
	
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="num">Call: +91 6393947770</p>
						<ul class="fh5co-social">
							<li><a href=""><i class="icon-twitter"></i></a></li>
							<li><a href="https://www.facebook.com/raecesk"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
							<li><a href="https://in.linkedin.com/company/raeces"><i class="icon-youtube"></i></a></li>
							<li><a href="https://instagram.com/renu_raeces?igshid=mx8ej9a8gwke"><i class="icon-instagram"></i></a></li>
							<li><a href="#"><i class="icon-youtube"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-1">
						<!-- <div id="fh5co-logo"><a href="index.html">RAECES<span>.ORG</span></a></div> -->
					</div>
					<div class="col-xs-11 text-right menu-1">
						<?php
        				include 'includes/header.php';
        				?>
					</div>
				</div>
				
			</div>
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/retina.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>All Courses</h1>
							<h2>RAECES has sorted their courses here.<a href="courses.html" target="_blank"> See all the courses</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

		<div id="fh5co-project">
		<div class="container">
			<div class="row animate-box">
				<div class="text-center fh5co-heading col-md-offset-0 col-md-12">
					<h2>Our Courses </h2>
					<p>Here is a list of courses RAECES that will help you to choose where to enlarge your domain of knowledeg , We have a variety of courses in our site , formed by experienced teachers and faculties from universities.Register yourself after choosing your favourite subject.</p>
				</div>
			</div>
		</div>
		<div class="container-fluid proj-bottom">
			<div class="row">
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="raeces_java.html"><img src="images/java.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>JAVA</h3>
						<span>View Course</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="raeces_c.html"><img src="images/c.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>C Language</h3>
						<span>View Course</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="raeces_javascript.html"><img src="images/js.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>JAVA Script</h3>
						<span>View Course</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/html1.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>HTML</h3>
						<span>View Course</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="raeces_css.html"><img src="images/css3.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>CSS</h3>
						<span>View Course</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="raeces_python.html"><img src="images/python1.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>Python</h3>
						<span>View Course</span>
					</a>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="features">
					<div class="col-md-4 animate-box">
						<h4>We have coolest features of this course</h4>
						<p>raeces give good and quality features
						</p>
					</div>
					<div class="col-md-4 animate-box">
						<h4>Great teachers that we have</h4>
						<p>raeces team are good.  </p>
					</div>
					<div class="col-md-4 animate-box">
						<h4>Steps by steps turorial session</h4>
						<p>Join our courses  </p>
					</div>
				</div>
				<div class="col-md-12 text-center animate-box">
					<p><a class="btn btn-primary btn-lg btn-learn" href="#">Start A Free Course</a></p>
				</div>
			</div>
		</div>
	</div>

		<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h4>About Learning</h4>
					<p>Learning is essential to our existence. Just like food nourishes our bodies, information and continued learning nourishes our minds.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<h4>Learning</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Course</a></li>
						<li><a href="#">Achivement</a></li>
						<li><a href="#">Progress</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Subject</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<h4>Learn &amp; Grow</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Certificate</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<h4>Engage us</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Marketing</a></li>
						<li><a href="#">Visual Assistant</a></li>
						<li><a href="#">System Analysis</a></li>
						<li><a href="#">Advertise</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<h4>Legal</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">internship</a></li>
						<li><a href="#">Projects</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
			</div>


			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2019 RAECES. All Rights Reserved.</small> 
						<small class="block">Follow Us</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
							<li><a href="#"><i class="icon-youtube"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

