<?php

include "navbar.php"

	?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="icon" type="image/png" href="../public/favicon-32x32.png" sizes="32x32">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet'>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Roboto:wght@900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="../public/stylesheet.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
		integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<style>
		body {
			font-family: 'Poppins';
		}

		.sec {
			width: 100%;
			padding: 60px 0;
		}

		.card {
			border-radius: 20px !important;
			border: none;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3)
		}

		.card-img-top {
			padding: 10px;
			border-radius: 10px;
		}

		.rounded-img {
			border-radius: 30px;
		}

		.card-body {
			position: relative;
		}

		.mayorbox {
			width: 80%;
			height: 600px;
			margin: 50px 10%;
			box-shadow: 0 27px 87px rgba(0, 0, 0, 0.2);
			border-radius: 15px;
			overflow: hidden;
			display: flex;
			border-color: #388e3c !important;
		}

		.mayor {
			width: 100%;
			height: 100%;
		}


		@media (max-width: 767px) {
			.mayorbox {
				flex-direction: column;
				height: auto;
				padding: 0 20px;

			}
		}

		@media(min-width: 992px) {
			.order-lg-2 {
				order: 2 !important;
			}
		}

		.custom-border {
			border-color: #F05E16 !important;
		}

		/* .seeall:hover {
			background-color: #F05E16;
			color: white !important;
			border-color: #F05E16 !important;
			text-decoration: none !important;
		} */

		.hotlinesec {
			background-color: #F05E16;
			padding: 10px;
			border-radius: 20px;
			margin: 30px;
			box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
		}

		.hotlinehdr {
			font-family: 'Roboto';
			font-size: 300%;
		}

		.knowmore {
			position: relative;
			background-color: #004600;
		}

		.findjobs {
			position: relative;
			background-image: url('../public/assets/img/jobfair.jpg');
			background-size: cover;
		}

		.box-item {
			position: relative;
			background-color: #ffc107;
		}

		.knowmore h1 {
			font-family: Roboto;
			font-weight: 900;
			color: #ffc107
		}

		.findjobs h1 {
			font-family: Roboto;
			font-weight: 900;
			color: #ffc107
		}


		.box-item h1 {
			font-family: Roboto;
			font-weight: 900;
			color: #004600
		}

		.knowmore a {
			/* display: flex; */
			margin-top: 20px !important;
			border-radius: 30px;
			padding: 10px 25px;
			background-color: #FFFFFF;
			text-align: center;
			text-decoration: none;
			color: #0f0f0f;
			width: 50%;
			box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1);
		}

		.findjobs a {
			/* display: flex; */
			margin-top: 20px !important;
			border-radius: 30px;
			padding: 10px 25px;
			background-color: #FFFFFF;
			text-align: center;
			text-decoration: none;
			color: #0f0f0f;
			width: 50%;
			box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1);
		}

		.info-card {
			padding: 40px;
			border-radius: 1rem;

		}

		.info-card-title {
			font-family: Roboto;
			font-weight: 900;
			color: #004600
		}

		.home-cont {
			overflow: hidden;
		}

		.home-btn {
			margin-top: 20px;
			border-radius: 30px;
			padding: 10px 25px;
			font-weight: 600;
			background-color: #FFFFFF;
			color: #004600;
			cursor: pointer;
			text-align: center;
			box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);

		}

		.home-btn a {
			text-decoration: none;
			color: #004600;
			font-size: 75%;
		}
	</style>
</head>

<body style="background-color: #FFFFFF">

	<!--MAIN-->
	<section id="hero" class="hero">
		<div class="info d-flex align-items-center">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<h2>Welcome to Biñan!</h2>
						<h1>The City of Life</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
							incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
							exercitation ullamco
							laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
			</div>
		</div>
		<div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" style="display: flex;">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="assets/img/hero1.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="assets/img/hero2.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="assets/img/hero3.jpg" class="d-block w-100" alt="...">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev"
				style="position: absolute; top: 0; bottom: 0; margin: auto 0; z-index: 2;">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next"
				style="position: absolute; top: 0; bottom: 0; margin: auto 0; z-index: 2;">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>

	</section>

	<!--News/Events/Announcements-->
	<section class="newsevents">
		<div class="container ">
			<div class="newsheader col-lg-12 border-bottom border-5 d-flex justify-content-between align-items-center mb-2"
				style="border-color: #F05E16 !important; font-family: 'Roboto'; z-index: 0">
				<h2 style=" font-size:45px"><b>NEWS & EVENTS<b></h2>
				<div class="text-center">
					<a href="<?= base_url('/newsevents') ?>" class=" border border-3"
						style="text-decoration: none; border-color: #388e3c !important;  border-radius: 15px; padding: 5px; color: #388e3c; z-index: 0">
						SEE ALL</a>
				</div>
			</div>
			<div class="row g-5">
				<!--First Column-->
				<div class="col-lg-6">
					<div class="post-entry-1 lg">
						<a href="<?= base_url('/newseventscontent') ?>"
							class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
							<img src="assets/img/newsimage.png" class="img-fluid" style="padding-bottom: 10px">
						</a>
						<div class="post-meta" style="font-size: 11px">
							<span class="date text-muted">BIÑAN | JAN 1 '23</span>
						</div>
						<h3><a href="<?= base_url('/newseventscontent') ?>" class="text-dark"
								style="text-decoration: none; font-family: 'Roboto', sans-serif"><b>26 reformees
									nagtapos sa
									reformation program ng Biñan LGU</b></a></h3>
						<p class="mb-4 d-block fw-light" style="font-size: 14px">Lorem ipsum dolor sit amet, consectetur
							adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ""
							Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
							commodo consequat. Duis aute irure dolor
							in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					</div>

				</div>

				<div class="col-lg-6">
					<div class="row">
						<!--Second Column-->
						<div class="col-lg-6 border-start custom-border">
							<div class="post-entry-1">
								<a href="<?= base_url('/newseventscontent') ?>"><img src="assets/img/newsimage.png"
										class="img-fluid" style="padding-bottom: 10px"></a>
								<div class="post-meta" style="font-size: 11px">
									<span class="date text-muted">BIÑAN | JAN 1 '23</span>
								</div>
								<h5><a href="<?= base_url('/newseventscontent') ?>" class="text-dark"
										style="text-decoration: none; font-family: 'Roboto', sans-serif"><b>26
											reformees nagtapos sa
											reformation program ng Biñan LGU</b></a></h5>
							</div>
							<div class="post-entry-1">
								<a href="<?= base_url('/newseventscontent') ?>"><img src="assets/img/newsimage.png"
										class="img-fluid" style="padding-bottom: 10px"></a>
								<div class="post-meta" style="font-size: 11px">
									<span class="date text-muted">BIÑAN | JAN 1 '23</span>
								</div>
								<h5><a href="<?= base_url('/newseventscontent') ?>" class="text-dark"
										style="text-decoration: none; font-family: 'Roboto', sans-serif"><b>26
											reformees nagtapos sa
											reformation program ng Biñan LGU</b></a></h5>
							</div>
						</div>
						<!--Third Column-->
						<!-- <div class="col-lg-6 border-start custom-border">
							<h3 class="text-center" style="text-decoration: none; font-family: 'Raleway';">
								<b>ANNOUNCEMENTS</b>
							</h3>
							<div class="container  d-flex justify-content-center" id="announce"
								style="padding: 10px; border-radius: 20px;">
								<div class="card border border-3 mb-3"
									style="max-width: 18rem; border-color: #388e3c !important">
									<div class="card-body">
										<h5 class="card-title" style="font-family: 'Raleway', sans-serif"><b>Primary
												card title</b></h5>
										<p class="card-text fw-light">Lorem ipsum dolor sit amet, consectetur adipiscing
											elit</p>
									</div>
								</div>
								<div class="card border border-3 mb-3"
									style="max-width: 18rem; border-color: #388e3c !important">
									<div class="card-body">
										<h5 class="card-title" style="font-family: 'Raleway', sans-serif"><b>Primary
												card title</b></h5>
										<p class="card-text fw-light">Lorem ipsum dolor sit amet, consectetur adipiscing
											elit</p>
									</div>
								</div>
								<div class="card border border-3 mb-3"
									style="max-width: 18rem; border-color: #388e3c !important">
									<div class="card-body">
										<h5 class="card-title" style="font-family: 'Raleway', sans-serif"><b>Primary
												card title</b></h5>
										<p class="card-text fw-light">Lorem ipsum dolor sit amet, consectetur adipiscing
											elit</p>
									</div>
								</div>
							</div>
						</div> -->
						<div class="col-lg-6 border-start custom-border">
							<h3 class="text-center" style="text-decoration: none; font-family: 'Roboto';">
								<b>ANNOUNCEMENTS</b>
							</h3>
							<div class="container d-flex justify-content-center" id="announce"
								style="padding: 10px; border-radius: 20px;">
								<a href="<?= base_url('/newseventscontent') ?>" class="card border border-3 mb-3"
									style="max-width: 18rem; border-color: #388e3c !important; text-decoration: none !important">
									<div class="card-body" style="color: #000">
										<h5 class="card-title" style="font-family: 'Roboto', sans-serif; color: #000"><b>Primary
												card title</b></h5>
										<p class="card-text fw-light">Lorem ipsum dolor sit amet, consectetur adipiscing
											elit</p>
									</div>
								</a>
								<a href="<?= base_url('/newseventscontent') ?>" class="card border border-3 mb-3"
									style="max-width: 18rem; border-color: #388e3c !important; text-decoration: none !important">
									<div class="card-body" style="color: #000">
										<h5 class="card-title" style="font-family: 'Roboto', sans-serif;"><b>Primary
												card title</b></h5>
										<p class="card-text fw-light">Lorem ipsum dolor sit amet, consectetur adipiscing
											elit</p>
									</div>
								</a>
								<a href="<?= base_url('/newseventscontent') ?>" class="card border border-3 mb-3"
									style="max-width: 18rem; border-color: #388e3c !important; text-decoration: none !important">
									<div class="card-body" style="color: #000">
										<h5 class="card-title" style="font-family: 'Roboto', sans-serif; color: #000"><b>Primary
												card title</b></h5>
										<p class="card-text fw-light">Lorem ipsum dolor sit amet, consectetur adipiscing
											elit</p>
									</div>
								</a>
							</div>
						</div>

					</div>
				</div>
			</div>

		</div>
	</section>

	<!--Mayor's Message-->
	<section class="sec mayorsec" id="mayorsec">
		<div class="container-fluid mayorbox border border-5">
			<div class="row">
				<div class="col-md-8 order-lg-2 d-flex flex-column align-items-center justify-content-center my-2 "
					style="">
					<h1 class="mayorheader text-center"
						style="font-family: 'Roboto'; font-size: 72px; color: #388E3C;">
						<b>Mayor's Corner</b>
					</h1>
					<div class="container-fluid">
						<p style="font-size: 16px; color:#004600; margin: 0 20px !important;">Lorem ipsum dolor sit
							amet, consectetur
							adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
							commodo
							consequat. Duis aute irure dolor
							in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
							sint
							occaecat cupidatat non proident,
							sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
					<div class="text-center">
						<a href="<?= base_url('/mayor') ?>" class="btn"
							style="background-color: #388e3c; color: white; border-radius: 20px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);">Go
							to Mayor's
							Profile</a>
					</div>
				</div>
				<div class="col-md-4 order-lg-1 d-flex align-items-center justify-content-center">
					<img src="assets/img/mayor.png" class="img-fluid" alt="..." style="">
				</div>


			</div>
		</div>
	</section>
	<!--Mayor's Message End-->

	<!--Know More-->
	<section id="knowmore" class="knowmore">
		<div class="row justify-content-center m-0">

			<div class=" col-lg-6 text-center p-5">
				<i class="fas fa-info-circle text-white mb-3" style="font-size: 50px"></i>
				<h1 class="display-2 mb-0">Biñan City</h1>
				<p class=" text-white">Lorem ipsum dolor sit amet, consectetur
					adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
					commodo
					consequat. Duis aute irure dolor</p>
				<div class="morebutton text-uppercase mx-auto d-block">
					<a href="<?= base_url('/history') ?>">Know more about Biñan</a>
				</div>
			</div>

		</div>
	</section>
	<!--Know More End-->

	<!--Barangays and Dept -->
	<section id="brgydept">
		<div class="container info-card home-cont mt-5">
			<div class="row banner-holder">
				<div class="col-lg-6 mb-4">
					<div class="info-card d-flex"
						style="background-color: #388E3C; box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);">
						<div class="d-flex align-items-center flex-column m-auto">
							<div class="d-flex align-items-center flex-column text-white info-card-title">
								<h1 class="display-2 mb-0">Barangays</h1>
							</div>
							<div class="home-btn text-uppercase mx-auto d-block">
								<a href="<?= base_url('/barangays') ?>">SEE MORE</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mb-4">
					<div class="info-card d-flex"
						style="background-color: #388E3C; box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);">
						<div class="d-flex align-items-center flex-column m-auto">
							<div class="d-flex align-items-center flex-column text-white info-card-title">
								<h1 class="display-2 mb-0">Departments</h1>
							</div>
							<div class="home-btn text-uppercase mx-auto d-block">
								<a href="<?= base_url('/departments') ?>">SEE MORE</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Barangays and Dept End-->

	<!--Find Jobs Start-->
	<section id="findjobs" class="my-5">
		<div class="container-fluid findjobs p-5">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center p-5">
					<div class="my-3">
						<i class="fas fa-search text-white mb-3" style="font-size: 50px"></i>
						<h1 class="display-2 mb-0">Find Jobs</h1>
					</div>
					<div class="morebutton text-uppercase mx-auto d-block">
						<a href="<?= base_url('/history') ?>">Know more about Biñan</a>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!--Find Jobs End-->

	<!--Hotlines-->
	<section class="hotlinesec my-5 border">
		<div class="container my-5">
			<div class="row mb-3">
				<div class="col-lg-12 col-12 d-flex justify-content-between align-items-center">
					<h2 class="text-white mb-lg-0 hotlinehdr">Hotlines</h2>
					<div class="home-btn text-uppercase d-block">
								<a href="<?= base_url('/hotlines') ?>">SEE ALL</a>
							</div>
				</div>
			</div>
			<div class="row py-2">
				<div class="col-lg-6 col-12 d-flex align-items-center">
					<span class="cdrrmo-wrap" style="position: relative; font-weight: normal">
						<i class="fas fa-house-damage me-2 text-white"></i>
						<span class="text-white me-5">City Disaster Risk Reduction Management Office (Smart)</span>
						<label class="text-white">0912345678</label>
					</span>
				</div>
				<div class="col-lg-6 col-12 d-flex align-items-center">
					<span class="cdrrmo-wrap" style="position: relative; font-weight: normal">
						<i class="fas fa-house-damage me-2 text-white"></i>
						<span class="text-white me-5">City Disaster Risk Reduction Management Office (Smart)</span>
						<label class="text-white">0912345678</label>
					</span>
				</div>
			</div>
			<div class="row py-2">
				<div class="col-lg-6 col-12 d-flex align-items-center">
					<span class="cdrrmo-wrap" style="position: relative; font-weight: normal">
						<i class="fas fa-house-damage me-2 text-white"></i>
						<span class="text-white me-5">City Disaster Risk Reduction Management Office (Smart)</span>
						<label class="text-white">0912345678</label>
					</span>
				</div>
				<div class="col-lg-6 col-12 d-flex align-items-center">
					<span class="cdrrmo-wrap" style="position: relative; font-weight: normal">
						<i class="fas fa-house-damage me-2 text-white"></i>
						<span class="text-white me-5">City Disaster Risk Reduction Management Office (Smart)</span>
						<label class="text-white">0912345678</label>
					</span>
				</div>
			</div>
		</div>
	</section>


	<?php

	include "footer.php"

		?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
		crossorigin="anonymous"></script>
	</div>
</body>

</html>