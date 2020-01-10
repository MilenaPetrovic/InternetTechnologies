<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Tapkanje.rs</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Favicon -->
	<link href="img/exchange.png" rel="shortcut icon" />

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/owl.carousel.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/animate.css" />

</head>

<body>
	<!-- Preloader -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<?php
	// include 'login-modal.php';
	include 'konekcija.php';
	include 'header.php'; 
	include 'registracija.php';
	include 'izmena.php';
	include 'brisanje.php';
	// include 'dodavanje.php';
	?>

	<!-- Slider pocetne -->
	<section class="hero-section set-bg" data-setbg="img/bg.jpg">
		<div class="hero-slider owl-carousel">
			<div class="hs-item">
				<div class="hs-left"><img src="img/exchange.png" alt="" id="logo"></div>
				<div class="hs-right">
					<div class="hs-content">
						<div class="naslov"></div>
						<h2><span>Najveće</span> <br>mesto razmene!</h2>
					</div>
				</div>
			</div>

			<!-- mogu se dodavati na slider druge slike (za proizvode sve i za kolekcionare) -->

			<!-- <div class="hs-item">
				<div class="hs-left"><img src="img/slider-img.png" alt=""></div>
				<div class="hs-right">
					<div class="hs-content">
						<div class="price">from $19.90</div>
						<h2><span>2018</span> <br>summer collection</h2>
						<a href="" class="site-btn">Shop NOW!</a>
					</div>	
				</div>
			</div> -->

		</div>
	</section>
	<!-- Slider pocetne kraj -->

	<!-- Podela -->
	<div class="podela-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="podela-item">
						<img src="img/razmene/glavna.jpg" alt="">
						<a href="razmena.php" class="site-btn">Razmena</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="podela-item">
						<img src="img/kolekcije/glavna.jpg" alt="">
						<a href="kolekcionari.php" class="site-btn">Kolekcionari</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Podela end -->

	<!-- Footer -->
	<footer class="footer">
		<div class="container">
			<p class="copyright">
				&copy; Copyright Tapkanje.rs | tapkanje.rs@gmail.com</a>
			</p>
		</div>
	</footer>
	<!-- Footer kraj -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/sly.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>