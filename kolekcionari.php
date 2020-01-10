<?php
include_once 'konekcija.php';
$sql = "SELECT * FROM proizvodi WHERE kategorija=\"kolekcionari\"";
$kolekcionari = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html>

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
	<!-- Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section header-normal">
		<div class="container-fluid">
			<!-- logo -->
			<div class="site-logo">
				<h3>Tapkanje.rs</p>
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- site menu -->
			<ul class="main-menu">
				<li><a href="index.php">Početna</a></li>
				<li><a href="razmena.php">Razmena</a></li>
				<li><a href="kolekcionari.php">Kolekcionari</a></li>				
				<li><a href="vlasnici.php">Vlasnici</a></li>
			</ul>
		</div>
	</header>
	<!-- Header section end -->

	<!-- Page Info -->
	<div class="page-info-section page-info-big">
		<div class="container">
			<h2>Kolekcionari</h2>
			<div class="site-breadcrumb">
				<a href="index.php">Početna</a> /
				<span>Kolekcionari</span>
			</div>
		</div>
	</div>
	<!-- Page Info end -->

	<!-- Page -->
	<div class="page-area categorie-page spad">
		<div class="container">
			<!-- Proizvodi -->
			<div class="row">
				<?php
				while ($proizvod = mysqli_fetch_assoc($kolekcionari)) :
					$sql2 = "SELECT * FROM vlasnik WHERE idVlasnika=" . $proizvod['idVlasnika'];
					$vlasnici = $mysqli->query($sql2);
					$vlasnikk = mysqli_fetch_assoc($vlasnici);
				?>
					<div class="col-lg-3">
						<div class="product-item">
							<figure>
								<img src="<?= $proizvod['slika']; ?>" alt="" class="product-picture">
							</figure>
							<div class="product-info">
								<h6><?= $proizvod['naziv']; ?></h6>
								<p><?= $proizvod['cena']; ?> RSD</p>
								<a class="site-btn btn-line" data-toggle="popover" data-placement="bottom" title="<?= $vlasnikk['ime']; ?> <?= $vlasnikk['prezime'] ?>" data-content="<?= $vlasnikk['kontakt'] ?>">Kontakt vlasnika</a>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
	<!-- Page -->

	<!-- Footer -->
	<footer class="footer">
		<div class="container">
			<p class="copyright">
				&copy; Copyright Tapkanje.rs | tapkanje.rs@gmail.com</a>
			</p>
		</div>
	</footer>
	<!-- Footer kraj -->

	<script>
		$(document).ready(function() {
			$('[data-toggle="popover"]').popover();
		});
	</script>

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/sly.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/main.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>