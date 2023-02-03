<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Bolby - Portfolio/CV/Resume HTML Template</title>
	<meta name="description" content="Bolby - Portfolio/CV/Resume HTML Template">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="https://via.placeholder.com/32x32">

	<!-- STYLESHEETS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/all.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/simple-line-icons.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/slick.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/animate.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<!-- Preloader -->
	<div id="preloader">
		<div class="outer">
			<!-- Google Chrome -->
			<div class="infinityChrome">
				<div></div>
				<div></div>
				<div></div>
			</div>

			<!-- Safari and others -->
			<div class="infinity">
				<div>
					<span></span>
				</div>
				<div>
					<span></span>
				</div>
				<div>
					<span></span>
				</div>
			</div>
			<!-- Stuff -->
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo-outer">
				<defs>
					<filter id="goo">
						<feGaussianBlur in="SourceGraphic" stdDeviation="6" result="blur" />
						<feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
						<feBlend in="SourceGraphic" in2="goo" />
					</filter>
				</defs>
			</svg>
		</div>
	</div>

	<!-- desktop header -->
	<header class="desktop-header-3 fixed-top">

		<div class="container">

			<nav class="navbar navbar-expand-lg navbar-dark">
				<!-- <a class="navbar-brand" href="index-3.html"><img src="images/logo.svg" alt="Bolby" /></a> <button
					aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"
					class="navbar-toggler" data-target="#navbarNavDropdown" data-toggle="collapse" type="button"><span
						class="navbar-toggler-icon"></span></button> -->
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav ml-auto scrollspy">
						<li class="nav-item"><a class="nav-link" href="index.php#home">Home</a></li>
						<li class="nav-item"><a href="index.php#about" class="nav-link">About</a></li>
						<!-- <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
						<li class="nav-item"><a href="#experience" class="nav-link">Experience</a></li>
						<li class="nav-item"><a href="#works" class="nav-link">Works</a></li>
						<li class="nav-item"><a href="#blog" class="nav-link">Blog</a></li> -->
						<li class="nav-item"><a href="index.php#contact" class="nav-link">FAQ</a></li>
					</ul>
				</div>
			</nav>

		</div>

	</header>

	<?php
		include_once("config.php");

		$no = 1;
		$result = mysqli_query($mysqli, "SELECT * FROM messages ORDER BY id DESC limit 10");
	?>
	<!-- main layout -->
	<main class="content-3">

		<!-- section home -->
		<section id="home" class="home d-flex align-items-center">
			<div class="container">

				<!-- section title -->
				<h2 class="section-title wow text-light">Data List FAQ</h2>

				<div class="spacer" data-height="60"></div>

				<div class="row">
					<div class="col-md-12 triangle-left-md triangle-top-sm">
						<div class="rounded bg-white shadow-dark padding-30">
							<div class="row">
								<div class="col-md-12">
									<!-- about text -->
									<table class="table table-hover">
										<thead>
											<tr>
												<th scope="col">No</th>
												<th scope="col">Name</th>
												<th scope="col">Email</th>
												<th scope="col">Message</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($result as $key => $value) : ?>
												<tr>
													<th scope="row"><?php echo $no++;?></th>
													<td><?php echo $value['name']; ?></td>
													<td><?php echo $value['email']; ?></td>
													<td><?php echo $value['message']; ?></td>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
									<div class="spacer d-md-none d-lg-none" data-height="30"></div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- row end -->

				<div class="spacer" data-height="70"></div>
			</div>
		</section>
		<footer class="footer" style="background-color: white;">
			<div class="container">
				<span class="copyright">© 2020 Dharma Negara.</span>
			</div>
		</footer>

	</main>

	<!-- Go to top button -->
	<a href="javascript:" id="return-to-top"><i class="fas fa-arrow-up"></i></a>

	<!-- SCRIPTS -->
	<script src="js/jquery-1.12.3.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/infinite-scroll.min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/contact.js"></script>
	<script src="js/validator.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/morphext.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/custom.js"></script>

</body>

</html>