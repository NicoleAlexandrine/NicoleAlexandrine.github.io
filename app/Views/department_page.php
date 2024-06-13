<?php

include "navbar.php"

  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Department</title>
  <meta name="robots" content="noindex, nofollow">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

  <link rel="stylesheet" href="../public/stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Roboto:wght@900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
		integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

  <style>
    /*--------------------------------------------------------------
# departments
--------------------------------------------------------------*/
    .departments .icon-box {
      text-align: center;
      padding: 20px 20px 20px 20px;
      max-width: 380px;
      transition: all ease-in-out 0.3s;
      background: #fff;
      box-shadow: 0px 5px 90px 0px rgba(110, 123, 131, 0.1);
      border-radius: 15px;
      border-color: #388E3C !important;
    }
    .departments .icon-box:hover {
        transform: translateY(-5px);
        }

    .departments .icon-box .icon {
      margin: 0 auto;
      width: 150px;
      height: 150px;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: ease-in-out 0.4s;
      position: relative;
    }

    .departments .icon-box .icon i {
      font-size: 36px;
      transition: 0.5s;
      position: relative;
    }

    .departments .icon-box h4 {
      font-weight: 600;
      margin: 10px 0 15px 0;
      font-size: 22px;
    }

    .departments .icon-box h4 a {
      color: #222222;
      transition: ease-in-out 0.4s;
      text-decoration: none;
    }

    .departments .icon-box p {
      line-height: 24px;
      font-size: 14px;
      margin-bottom: 0;
    }
    @media (max-width: 767px) {
  .departments .icon-box {
    padding: 15px;
  }
}

@media (min-width: 768px) and (max-width: 991px) {
  .departments .icon-box {
    padding: 20px;
  }
}

@media (min-width: 992px) and (max-width: 1199px) {
  .departments .icon-box {
    padding: 25px;
  }
}

@media (min-width: 1200px) {
  .departments .icon-box {
    padding: 30px;
  }
}
  </style>

<body>

  <!-- Header Start -->
  <header>
    <div class="header breadcrumbs d-flex align-items-center">
      <div class="container position-relative d-flex justify-content-between align-items-center" data-aos="fade">
          <h2><b>Departments<b></h2>
          <ol class="breadcrumb">
            <li><a href="<?= base_url('/home') ?>">Home</a></li>
            <li class="text-warning">Departments</li>
          </ol>
      </div>
    </div>
  </header>
  <!-- Header End -->

  <!-- ======= departments Section ======= -->
  <section id="departments" class="departments">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch " data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box iconbox-blue border border-3">
            <div class="icon">
              <img class="dept-logo img-fluid" src="assets/img/binanlogo.png"></img>
              <i class="bx bxl-dribbble"></i>
            </div>
            <h4><a href="<?= base_url('/departmentcontent') ?>">Office of the City Administrator </a></h4>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-orange border border-3" >
            <div class="icon">
              <img class="dept-logo img-fluid" src="assets/img/binanlogo.png"></img>

              <i class="bx bx-file"></i>
            </div>
            <h4><a href="<?= base_url('/departmentcontent') ?>">Office of the City Accountant Officer </a></h4>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box iconbox-pink border border-3">
            <div class="icon">
              <img class="dept-logo img-fluid" src="assets/img/binanlogo.png"></img>

              <i class="bx bx-tachometer"></i>
            </div>
            <h4><a href="<?= base_url('/departmentcontent') ?>">Office of the City Agriculture Officer </a></h4>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box iconbox-yellow border border-3">
            <div class="icon">
              <img class="dept-logo img-fluid" src="assets/img/binanlogo.png"></img>

              <i class="bx bx-layer"></i>
            </div>
            <h4><a href="<?= base_url('/departmentcontent') ?>">Office of the City Assessor Officer </a></h4>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-red border border-3">
            <div class="icon">
              <img class="dept-logo img-fluid" src="assets/img/binanlogo.png"></img>

              <i class="bx bx-slideshow"></i>
            </div>
            <h4><a href="<?= base_url('/departmentcontent') ?>">Office of the City Auditor Officer </a></h4>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box iconbox-teal border border-3">
            <div class="icon">
              <img class="dept-logo img-fluid" src="assets/img/binanlogo.png"></img>

              <i class="bx bx-arch"></i>
            </div>
            <h4><a href="<?= base_url('/departmentcontent') ?>">Office of the City Business Permit and Licensing Officer </a></h4>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box iconbox-yellow border border-3">
            <div class="icon">
              <img class="dept-logo img-fluid" src="assets/img/binanlogo.png"></img>

              <i class="bx bx-slideshow"></i>
            </div>
            <h4><a href="<?= base_url('/departmentcontent') ?>">Office of the City Auditor Officer </a></h4>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box iconbox-teal border border-3">
            <div class="icon">
              <img class="dept-logo img-fluid" src="assets/img/binanlogo.png"></img>

              <i class="bx bx-arch"></i>
            </div>
            <h4><a href="<?= base_url('/departmentcontent') ?>">Office of the City Business Permit and Licensing Officer </a></h4>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box iconbox-yellow border border-3">
            <div class="icon">
              <img class="dept-logo img-fluid" src="assets/img/binanlogo.png"></img>

              <i class="bx bx-layer"></i>
            </div>
            <h4><a href="<?= base_url('/departmentcontent') ?>">Office of the City Assessor Officer </a></h4>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-red border border-3">
            <div class="icon">
              <img class="dept-logo img-fluid" src="assets/img/binanlogo.png"></img>

              <i class="bx bx-slideshow"></i>
            </div>
            <h4><a href="<?= base_url('/departmentcontent') ?>">Office of the City Auditor Officer </a></h4>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box iconbox-teal border border-3">
            <div class="icon">
              <img class="dept-logo img-fluid" src="assets/img/binanlogo.png"></img>

              <i class="bx bx-arch"></i>
            </div>
            <h4><a href="<?= base_url('/departmentcontent') ?>">Office of the City Business Permit and Licensing Officer </a></h4>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box iconbox-teal border border-3">
            <div class="icon">
              <img class="dept-logo img-fluid" src="assets/img/binanlogo.png"></img>

              <i class="bx bx-arch"></i>
            </div>
            <h4><a href="<?= base_url('/departmentcontent') ?>">Office of the City Business Permit and Licensing Officer </a></h4>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End departments Section -->
  <?php

    include "footer.php"

        ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>