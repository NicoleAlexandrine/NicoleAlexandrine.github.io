<?php

echo view('Views/navbar');

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
	<link href='https://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Roboto:wght@900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="../public/stylesheet.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
		integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
		integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
		crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.4.js"
		integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
	<style>
    </style>
</head>
<body>
  <!-- Header Start -->
  <header>
    <div class="header breadcrumbs d-flex align-items-center">
      <div class="container position-relative d-flex justify-content-between align-items-center" data-aos="fade">
          <h2><b>Barangays<b></h2>
          <ol class="breadcrumb">
            <li><a href="<?= base_url('/home') ?>">Home</a></li>
            <li class="text-warning">Barangays</li>
          </ol>
      </div>
    </div>
  </header>
  <!-- Header End -->
  
  <!-- Page Content Start-->
  <section class="barangay-list">
        <div class="container-fluid px-4">
            <div class="row my-3 p-3">
                <div class="row my-3 d-flex">
                    <section id="stats-counter" class="stats-counter">
                        <div class="container">
                            <div class="row gy-4 justify-content-center">
                                <a class="col-lg-3 col-md-6" href="<?= base_url('/barangaycontent') ?>" style="text-decoration: none; color: black">
                                    <div class="stats-item d-flex align-items-center dept-box" style="background-color: #efefef">
                                        <img class="dept-logo img-fluid" src="assets/img/binanlogo.png" width="50" height="150">
                                        <div class="container-fluid">
                                            <p class="text-center mx-4">BARANGAY POBLACION</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="col-lg-3 col-md-6" href="<?= base_url('/barangaycontent') ?>" style="text-decoration: none; color: black">
                                    <div class="stats-item d-flex align-items-center dept-box" style="background-color: #efefef;">
                                        <img class="dept-logo img-fluid" src="assets/img/binanlogo.png" width="50" height="150">
                                        <div class="">
                                            <p class="text-center mx-4">BARANGAY BUNGAHAN</p>
                                        </div>
                                    </div>
                                </a> <!-- End Stats Item -->
                                <a class="col-lg-3 col-md-6" href="<?= base_url('/barangaycontent') ?>" style="text-decoration: none; color: black">
                                    <div class="stats-item d-flex align-items-center dept-box" style="background-color: #efefef;">
                                        <img class="dept-logo img-fluid" src="assets/img/binanlogo.png" width="50" height="150">
                                        <div class="">
                                            <p class="text-center mx-4">BARANGAY SANTO TOMAS</p>
                                        </div>
                                    </div>
                                </a> <!-- End Stats Item -->
                                <a class="col-lg-3 col-md-6" href="<?= base_url('/barangaycontent') ?>" style="text-decoration: none; color: black">
                                    <div class="stats-item d-flex align-items-center dept-box" style="background-color: #efefef;">
                                        <img class="dept-logo img-fluid" src="assets/img/binanlogo.png" width="50" height="150">
                                        <div class="">
                                            <p class="text-uppercase text-center mx-4">BARANGAY CANLALAY</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="col-lg-3 col-md-6" href="<?= base_url('/barangaycontent') ?>" style="text-decoration: none; color: black">
                                    <div class="stats-item d-flex align-items-center dept-box" style="background-color: #efefef;">
                                        <img class="dept-logo img-fluid" src="assets/img/binanlogo.png" width="50" height="150">
                                        <div class="">
                                            <p class="text-uppercase text-center mx-4">Barangay Casile</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="col-lg-3 col-md-6" href="<?= base_url('/barangaycontent') ?>" style="text-decoration: none; color: black">
                                    <div class="stats-item d-flex align-items-center dept-box" style="background-color: #efefef;">
                                        <img class="dept-logo img-fluid" src="assets/img/binanlogo.png" width="50" height="150">
                                        <div class="">
                                            <p class="text-uppercase text-center mx-4">Barangay Dela Paz</p>
                                        </div>
                                    </div>
                                </a> <!-- End Stats Item -->
                                <a class="col-lg-3 col-md-6" href="<?= base_url('/barangaycontent') ?>" style="text-decoration: none; color: black">
                                    <div class="stats-item d-flex align-items-center dept-box" style="background-color: #efefef;">
                                        <img class="dept-logo img-fluid" src="assets/img/binanlogo.png" width="50" height="150">
                                        <div class="">
                                            <p class="text-uppercase text-center mx-4">Barangay Ganado</p>
                                        </div>
                                    </div>
                                </a> <!-- End Stats Item -->
                                <a class="col-lg-3 col-md-6" href="<?= base_url('/barangaycontent') ?>" style="text-decoration: none; color: black">
                                    <div class="stats-item d-flex align-items-center dept-box" style="background-color: #efefef;">
                                        <img class="dept-logo img-fluid" src="assets/img/binanlogo.png" width="50" height="150">
                                        <div class="">
                                            <p class="text-uppercase text-center mx-4">Barangay San Francisco</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="col-lg-3 col-md-6" href="<?= base_url('/barangaycontent') ?>" style="text-decoration: none; color: black">
                                    <div class="stats-item d-flex align-items-center dept-box" style="background-color: #efefef;">
                                        <img class="dept-logo img-fluid" src="assets/img/binanlogo.png" width="50" height="150">
                                        <div class="">
                                            <p class="text-uppercase text-center mx-4">Barangay Langkiwa</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="col-lg-3 col-md-6" href="<?= base_url('/barangaycontent') ?>" style="text-decoration: none; color: black">
                                    <div class="stats-item d-flex align-items-center dept-box" style="background-color: #efefef;">
                                        <img class="dept-logo img-fluid" src="assets/img/binanlogo.png" width="50" height="150">
                                        <div class="">
                                            <p class="text-uppercase text-center mx-4">Barangay Loma</p>
                                        </div>
                                    </div>
                                </a> <!-- End Stats Item -->
                                <a class="col-lg-3 col-md-6" href="<?= base_url('/barangaycontent') ?>" style="text-decoration: none; color: black">
                                    <div class="stats-item d-flex align-items-center dept-box" style="background-color: #efefef;">
                                        <img class="dept-logo img-fluid" src="assets/img/binanlogo.png" width="50" height="150">
                                        <div class="">
                                            <p class="text-uppercase text-center mx-4">Barangay Malaban</p>
                                        </div>
                                    </div>
                                </a> <!-- End Stats Item -->
                                <a class="col-lg-3 col-md-6" href="<?= base_url('/barangaycontent') ?>" style="text-decoration: none; color: black">
                                    <div class="stats-item d-flex align-items-center dept-box" style="background-color: #efefef;">
                                        <img class="dept-logo img-fluid" src="assets/img/binanlogo.png" width="50" height="150">
                                        <div class="">
                                            <p class="text-uppercase text-center mx-4">Barangay Malamig</p>
                                        </div>
                                    </div>
                                </a>
                                
                                
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Content End -->
    <?php

    include "footer.php"

        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
		crossorigin="anonymous"></script>
</body>
</html>