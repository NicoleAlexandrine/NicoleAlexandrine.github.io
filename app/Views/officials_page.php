<?php
include "navbar.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Elected Officials</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <!-- Favicons -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="../public/stylesheet.css">

  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Roboto:wght@900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
</head>

<body>

  <main id="main">
    <!-- Header Start -->
    <header>
      <div class="header breadcrumbs d-flex align-items-center">
        <div class="container position-relative d-flex justify-content-between align-items-center" data-aos="fade">
          <h2>City Officials</h2>
          <ol class="breadcrumb">
            <li><a href="<?= base_url('/home') ?>">Home</a></li>
            <li class="text-warning">City Officials</li>
          </ol>
        </div>
      </div>
    </header>
    <!-- Header End -->
    <!-- ======= Team Section ======= -->                                                              <!-- OLD -->
    <!-- <section id="officials" class="officials section-bg">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title py-2">
              <h2>Congresswoman</h2>
            </div>
            <div class="d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="100">
              <div class="member d-flex align-items-center border border-3">
                <div class="pic"><img src="assets/img/team/HonMarlyn.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Hon. Marlyn "Len" B. Alonte-Naguiat</h4>
                  <span>Representative - Lone District of Biñan</span>
                  <p>Intelco: 513-8884</p>
                </div>
              </div>
            </div>
          </div>

          <div class="section-title py-2 mt-5">
            <h2>City Mayor</h2>
          </div>
          <div class="d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="200">
            <div class="member d-flex align-items-center border border-3">
              <div class="pic"><img src="assets/img/team/mayor.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Atty. Walfredo "Arman" R. Dimaguila Jr.</h4>
                <span>City Mayor</span>
                <p>PLDT: 523-5419 | Intelco: 513-5001</p>
              </div>
            </div>
          </div>

          <div class="section-title py-2 mt-5">
            <h2>City Vice Mayor</h2>
          </div>
          <div class="d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="300">
            <div class="member d-flex align-items-center border border-3">
              <div class="pic"><img src="assets/img/team/vicemayor.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Hon. Angelo "Gel" B. Alonte</h4>
                <span>City Vice Mayor</span>
                <p>PLDT: 523-5431 | Intelco: 513-5006/513-5007</p>
              </div>
            </div>
          </div>

          <div class="section-title py-2 mt-5">
            <h2>City Councilors</h2>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-center border border-3">
              <div class="pic"><img src="assets/img/team/Dada.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Hon. Jonalina "Dada" A. Reyes</h4>
                <span>City Councilor</span>
                <p>PLDT: 523-5423 | Intelco: 513-5061</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-center border border-3">
              <div class="pic"><img src="assets/img/team/jedi.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Hon. Libunero "Jedi" O. Alatiit</h4>
                <span>City Councilor</span>
                <p>Intelco: 513-5054</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-center border border-3">
              <div class="pic"><img src="assets/img/team/mel.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Hon. Rommel "Mel" R. Dicdican</h4>
                <span>City Councilor</span>
                <p>Intelco: 513-5088</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-center border border-3">
              <div class="pic"><img src="assets/img/team/jigcy.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Hon. Flaviano "Jigcy" D. Pecaña Jr.</h4>
                <span>City Councilor</span>
                <p>PLDT: 523-5427 | Intelco: 513-5077</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-center border border-3">
              <div class="pic"><img src="assets/img/team/toppe.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Hon. Christopher "Toppe" A. Alba</h4>
                <span>City Councilor</span>
                <p>PLDT: 523-5426 | Intelco: 513-5056</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-center border border-3">
              <div class="pic"><img src="assets/img/team/jay.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Hon. Jayson "Jay" A. Souza</h4>
                <span>City Councilor</span>
                <p>PLDT: 523-5429 | Intelco: 513-5057</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-center border border-3">
              <div class="pic"><img src="assets/img/team/bing.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Hon. Victor "Bing" L. Cariño</h4>
                <span>City Councilor</span>
                <p>Intelco: 513-5119</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-center border border-3">
              <div class="pic"><img src="assets/img/team/elmer.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Hon. Elmario "Elmer" B. Dimaranan</h4>
                <span>City Councilor</span>
                <p>PLDT: 523-5424 | Intelco: 513-5060</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-center border border-3">
              <div class="pic"><img src="assets/img/team/raffy.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Hon. Rafael Jr. "Raffy" L. Cardeño</h4>
                <span>City Councilor</span>
                <p>Intelco: 513-5055</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-center border border-3">
              <div class="pic"><img src="assets/img/team/mangkok.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Hon. Alvin "Mangkok" Z. Garcia</h4>
                <span>City Councilor</span>
                <p>PLDT: 523-5428 | Intelco: 513-5059</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-center border border-3">
              <div class="pic"><img src="assets/img/team/elvis.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Hon. Dr. "Elvis" L. Bedia</h4>
                <span>City Councilor</span>
                <p>Intelco: 513-5045</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-center border border-3">
              <div class="pic"><img src="assets/img/team/cookie.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Hon. Jose Francisco Ruben P. Yatco</h4>
                <span>City Councilor</span>
                <p>Intelco: 513-5018</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="section-title py-3">
              <h2>ABC President</h2>
            </div>
            <div class="d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="400">
              <div class="member d-flex align-items-center border border-3">
                <div class="pic"><img src="assets/img/team/popit.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Hon. Rodolfo "Popit" C. Montañez Jr.</h4>
                  <span>ABC President</span>
                  <p>PLDT: 523-5435 | Intelco: 513-5065</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="section-title py-3">
              <h2>SK Federation President</h2>
            </div>
            <div class="d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="400">
              <div class="member d-flex align-items-center border border-3">
                <div class="pic"><img src="assets/img/team/aika.jpg" class="img-fluid"></div>
                <div class="member-info">
                  <h4>Hon. Ma. Angelica Querubin "Aika" A. Alonte</h4>
                  <span>SK Federation President</span>
                  <p>PLDT: 523-5435 | Intelco: 513-5065</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- End Team Section -->

                                                                                                            <!-- NEW -->
    <section id="officials" class="officials section-bg">
      <div class="container" data-aos="fade-up">
        <div class="row">

          <div class="section-title py-2">
            <h2>Congresswoman</h2>
          </div>
          <div class="col-lg-12">
            <div class="cookie-card">
              <div class="row">
                <div class="col-lg-4">
                  <div class="pic"><img src="assets/img/team/HonMarlyn.jpg" class="img-fluid" alt=""></div>
                </div>
                <div class="col-lg-8 d-flex align-items-center">
                  <div class="description">
                    <h4>Hon. Marlyn "Len" B. Alonte-Naguiat</h4>
                    <span>Representative - Lone District of Biñan</span>
                    <p>Intelco: 513-8884</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="section-title py-2 mt-5">
            <h2>City Mayor</h2>
          </div>
          <div class="col-lg-12">
            <div class="cookie-card">
              <div class="row">
                <div class="col-lg-4">
                  <div class="pic"><img src="assets/img/team/mayor.jpg" class="img-fluid" alt=""></div>
                </div>
                <div class="col-lg-8 d-flex align-items-center">
                  <div class="description">
                    <h4>Atty. Walfredo "Arman" R. Dimaguila Jr.</h4>
                    <span>City Mayor</span>
                    <p>PLDT: 523-5419 | Intelco: 513-5001</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="section-title py-2 mt-5">
            <h2>City Vice Mayor</h2>
          </div>
          <div class="col-lg-12">
            <div class="cookie-card">
              <div class="row">
                <div class="col-lg-4">
                  <div class="pic"><img src="assets/img/team/vicemayor.jpg" class="img-fluid" alt=""></div>
                </div>
                <div class="col-lg-8 d-flex align-items-center" id="descDiv">
                  <div class="description">
                    <h4>Hon. Angelo "Gel" B. Alonte</h4>
                    <span>City Vice Mayor</span>
                    <p>PLDT: 523-5431 | Intelco: 513-5006/513-5007</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="section-title py-2 mt-5">
            <h2>City Councilors</h2>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="cookie-card">
              <div class="row">
                <div class="col-lg-4">
                  <div class="pic"><img src="assets/img/team/Dada.jpg" class="img-fluid" alt=""></div>
                </div>
                <div class="col-lg-8 d-flex align-items-center">
                  <div class="description">
                    <h4>Hon. Jonalina "Dada" A. Reyes</h4>
                    <span>City Councilor</span>
                    <p>PLDT: 523-5423 | Intelco: 513-5061</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="cookie-card">
              <div class="row">
                <div class="col-lg-4">
                  <div class="pic"><img src="assets/img/team/jedi.jpg" class="img-fluid" alt=""></div>
                </div>
                <div class="col-lg-8 d-flex align-items-center">
                  <div class="description">
                    <h4>Hon. Libunero "Jedi" O. Alatiit</h4>
                    <span>City Councilor</span>
                    <p>Intelco: 513-5054</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="cookie-card">
              <div class="row">
                <div class="col-lg-4">
                  <div class="pic"><img src="assets/img/team/mel.jpg" class="img-fluid" alt=""></div>
                </div>
                <div class="col-lg-8 d-flex align-items-center">
                  <div class="description">
                    <h4>Hon. Rommel "Mel" R. Dicdican</h4>
                    <span>City Councilor</span>
                    <p>Intelco: 513-5088</p>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-6 mt-4">
            <div class="cookie-card">
              <div class="row">
                <div class="col-lg-4">
                  <div class="pic"><img src="assets/img/team/jigcy.jpg" class="img-fluid" alt=""></div>
                </div>
                <div class="col-lg-8 d-flex align-items-center">
                  <div class="description">
                    <h4>Hon. Flaviano "Jigcy" D. Pecaña Jr.</h4>
                    <span>City Councilor</span>
                    <p>PLDT: 523-5427 | Intelco: 513-5077</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="cookie-card">
              <div class="row">
                <div class="col-lg-4">
                  <div class="pic"><img src="assets/img/team/toppe.jpg" class="img-fluid" alt=""></div>
                </div>
                <div class="col-lg-8 d-flex align-items-center">
                  <div class="description">
                    <h4>Hon. Christopher "Toppe" A. Alba</h4>
                    <span>City Councilor</span>
                    <p>PLDT: 523-5426 | Intelco: 513-5056</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="cookie-card">
              <div class="row">
                <div class="col-lg-4">
                  <div class="pic"><img src="assets/img/team/jay.jpg" class="img-fluid" alt=""></div>
                </div>
                <div class="col-lg-8 d-flex align-items-center">
                  <div class="description">
                    <h4>Hon. Jayson "Jay" A. Souza</h4>
                    <span>City Councilor</span>
                    <p>PLDT: 523-5429 | Intelco: 513-5057</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="cookie-card">
              <div class="row">
                <div class="col-lg-4">
                  <div class="pic"><img src="assets/img/team/bing.jpg" class="img-fluid" alt=""></div>
                </div>
                <div class="col-lg-8 d-flex align-items-center">
                  <div class="description">
                    <h4>Hon. Victor "Bing" L. Cariño</h4>
                    <span>City Councilor</span>
                    <p>Intelco: 513-5119</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="cookie-card">
              <div class="row">
                <div class="col-lg-4">
                  <div class="pic"><img src="assets/img/team/elmer.jpg" class="img-fluid" alt=""></div>
                </div>
                <div class="col-lg-8 d-flex align-items-center">
                  <div class="description">
                    <h4>Hon. Elmario "Elmer" B. Dimaranan</h4>
                    <span>City Councilor</span>
                    <p>PLDT: 523-5424 | Intelco: 513-5060</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="cookie-card">
              <div class="row">
                <div class="col-lg-4">
                  <div class="pic"><img src="assets/img/team/raffy.jpg" class="img-fluid" alt=""></div>
                </div>
                <div class="col-lg-8 d-flex align-items-center">
                  <div class="description">
                    <h4>Hon. Rafael Jr. "Raffy" L. Cardeño</h4>
                    <span>City Councilor</span>
                    <p>Intelco: 513-5055</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="cookie-card">
              <div class="row">
                <div class="col-lg-4">
                  <div class="pic"><img src="assets/img/team/mangkok.jpg" class="img-fluid" alt=""></div>
                </div>
                <div class="col-lg-8 d-flex align-items-center">
                  <div class="description">
                    <h4>Hon. Alvin "Mangkok" Z. Garcia</h4>
                    <span>City Councilor</span>
                    <p>PLDT: 523-5428 | Intelco: 513-5059</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="cookie-card">
              <div class="row">
                <div class="col-lg-4">
                  <div class="pic"><img src="assets/img/team/elvis.jpg" class="img-fluid" alt=""></div>
                </div>
                <div class="col-lg-8 d-flex align-items-center">
                  <div class="description">
                    <h4>Hon. Dr. "Elvis" L. Bedia</h4>
                    <span>City Councilor</span>
                    <p>Intelco: 513-5045</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="cookie-card">
              <div class="row">
                <div class="col-lg-4">
                  <div class="pic"><img src="assets/img/team/cookie.jpg" class="img-fluid" alt=""></div>
                </div>
                <div class="col-lg-8 d-flex align-items-center">
                  <div class="description">
                    <h4>Hon. Jose Francisco Ruben P. Yatco</h4>
                    <span>City Councilor</span>
                    <p>Intelco: 513-5018</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="section-title py-3">
              <h2>ABC President</h2>
            </div>
            <div class="cookie-card">
              <div class="row">
                <div class="col-lg-4">
                  <div class="pic"><img src="assets/img/team/popit.jpg" class="img-fluid" alt=""></div>
                </div>
                <div class="col-lg-8 d-flex align-items-center">
                  <div class="description">
                    <h4>Hon. Rodolfo "Popit" C. Montañez Jr.</h4>
                    <span>ABC President</span>
                    <p>PLDT: 523-5435 | Intelco: 513-5065</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="section-title py-3">
              <h2>SK Federation President</h2>
            </div>
            <div class="cookie-card">
              <div class="row">
                <div class="col-lg-4">
                  <div class="pic"><img src="assets/img/team/aika.jpg" class="img-fluid"></div>
                </div>
                <div class="col-lg-8 d-flex align-items-center">
                  <div class="description">
                    <h4>Hon. Ma. Angelica Querubin "Aika" A. Alonte</h4>
                    <span>SK Federation President</span>
                    <p>PLDT: 523-5435 | Intelco: 513-5065</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php

    include "footer.php"

    ?>
  </main><!-- End #main -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>