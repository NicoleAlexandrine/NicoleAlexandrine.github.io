<?php

include "navbar.php"

    ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/stylesheet.css">
    <link href='https://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>

    <title>Barangay Contents</title>
</head>

<body>
      <!-- Header Start -->
  <header>
    <div class="header d-flex align-items-center"
      style="background-image: url('assets/img/hero1.jpg'); min-height: 200px;">
      <div class="container position-relative d-flex justify-content-between align-items-center" data-aos="fade">
        <div class="align-items-center">
          <h2 style="font-family: 'Yellowtail'">About</h2>
        </div>
        <div class="align-items-center">
          <ol class="breadcrumb">
            <li><a href="<?= base_url('/home') ?>">Home</a></li>
            <li class="text-warning">About</li>
          </ol>
        </div>
      </div>
    </div>
  </header>
  <!-- Header End -->

  <section id="about" class="py-5">
    <div class="main text-center">
      <h1 class="text-center" style="font-family: 'Yellowtail'; color: #388E3C; font-size: 64px">“Trading and Commerce
        Center of the South”</h1>
      <hr class="wp-block-seperator">
    </div>
    <div class="container-fluid px-4">
      <div class="row rounded">
        <div class="row my-5 d-flex">
          <section id="stats-counter" class="stats-counter section-bg">
            <div class="container" style="padding-bottom: 20px">
              <header class="section-header">
                <h3 style="color:black"><strong>Mission and Vision</strong></h3>
              </header>
              <div class="row gy-4 justify-content-center">
                <div class="col-lg-12 col-md-6">
                  <div class="box border border-3" style="border-color: #004600 !important; ">
                    <h2 class="text-left" style="color:#004600"><strong>MISSION</strong></h2>
                    <p class="text-left" style="color:#0A0A0A">
                      The leadership of the City Biñan is committed to exercise its power to: <br>
                      • Promote social order and ensure public safety; <br>
                      • Enhance economic prosperity through job generation, manpower and skills development, encourage
                      and support local industries, and expansion; <br>
                      • Promote social justice by way of ensuring basic services, equal opportunities and full
                      protection and dispensation of law; <br>
                      • Promote and prioritize opportunities for learning experiences to prepare our youth to be
                      globally competitive; and <br>
                      • Provide modern and needed infrastructure facilities.
                    </p>
                  </div>
                </div>
                <!-- End Stats Item -->
                <div class="col-lg-12 col-md-6">
                  <div class="box border border-3" style="border-color: #F05E16 !important">
                    <h2 class="text-left" style="color:#F05E16"><strong>VISION</strong></h2>
                    <p class="text-left" style="color:#0A0A0A"> A modern humanely developed City of Biñan, where it's
                      people enjoy peace and
                      security, economic stability, social justice, a well-preserved education, responsive social
                      services, modernized infrastructure facilities all anchored on good governance.</p>
                  </div>
                </div>
                <!-- End Stats Item -->
              </div>
            </div>
            <div class="container">
              <header class="section-header">
                <h3 style="color:black"><strong>Quality Policy</strong></h3>
              </header>
              <div class="row gy-4 justify-content-center">
                <div class="col-lg-12 col-md-7">
                  <div class="box border border-3" style="border-color: #FBC101 !important">
                    <h2 class="has-text-align-center has-text-color" id="quality" style="color:#FBC101"><strong>QUALITY
                        POLICY</strong></h2>
                    <p class="has-text-align-center" style="color:#0A0A0A">We are committed to implement the Quality
                      Management System and together with the stakeholders are committed to empower the people to
                      develop sustainable and economic enterprises.</p>
                    <p style="color:#0A0A0A">We visualize a modern humanely developed City of Biñan, where its people
                      enjoy peace and security, economic stability, social justice, a well-preserved environment,
                      accessible quality education, responsive social services and modernized infrastructure facilities
                      all anchored on good governance.</P>
                    <p style="color:#0A0A0A">To achieve all these, the management of the City Government of Biñan shall:
                    </p>
                    <ul>
                      <li>Empower our personnel to resolve problems and initiate improvements;</li>
                      <li>Comply with all the applicable legal and other statutory requirements;</li>
                      <li>Initiate dynamic and systematic reponse/s to our internal and external customer's needs;</li>
                      <li>Conduct periodic reviews by the management on the quality objectives and targets to monitor
                        and keep track of the progress of the programs and ensure continued suitability of the
                        established QMS in relation to our quality process performance</li>
                    </ul>
                    <p>The City Government of Biñan shall ensure the effective implementation and maintenance of the
                      Quality Management System and compliance to the requirements of ISO 9001:2015, as well as ensuring
                      its sustainability and availability to all interested parties within the confines of applicable
                      laws.</p>
                  </div>
                </div>
                <!-- End Stats Item -->
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
  <!-- Page Content End -->
    <!-- Footer -->
    <section id="footers" class="footers">
    <div class="container">
      <div class="row d-flex justify-content-between">
        <div class="col-lg-2 col-md-4 col-6"><img src="assets/img/presidential.png" class="img-fluid" alt="..."></div>
        <div class="col-lg-2 col-md-4 col-6"><img src="assets/img/transparency.png" class="img-fluid" alt="..."></div>
        <div class="col-lg-2 col-md-4 col-6"><img src="assets/img/republic.png" class="img-fluid" alt="..."></div>
      </div>
    </div>
  </section>
  <footer id="footer" class="footer pt-0 pb-0">
    <div class="container-fluid text-light footer pt-2 mt-0 wow fadeIn" style="background-color:#388e3c !important">
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-2 col-md-3">
            <div class="d-lg-block d-none">
              <img class="img img-fluid w-100" src="assets/img/binanlogo.png">
            </div>
            <div class="d-lg-none d-md-none d-sm-block">
              <img class="img img-fluid w-100" src="assets/img/binanlogo.png">
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <p class="text-light mb-3 fs-3">Home</p>
            <p class="mb-2"><i class="fas fa-map-marker-alt"></i>&nbsp;838H+3V2, San Pablo St., Biñan, Laguna</p>
            <p class="mb-2"><i class="fas fa-phone-alt"></i>&nbsp;Local Number: +639 12 3456 789</p>
            <p class="mb-2"><i class="fas fa-phone-alt"></i>&nbsp;Phone Number: (049) 123 4567</p>
          </div>
          <div class="col-lg-3 col-md-6">
            <p class="text-light mb-3 fs-3">Department</p>
            <p class="mb-2"><a class="btn btn-link footerlink"></i>ICTO</a></p>
            <p class="mb-2"><a class="btn btn-link footerlink"></i>CENRO</a></p>
            <p class="mb-2"><a class="btn btn-link footerlink"></i>YASDO</a></p>
          </div>
          <div class="col-lg-3 col-md-6" style="">
            <p class="text-light mb-3 fs-3">Links</p>
            <p class="mb-2"><a class="btn btn-link footerlink"></i>Home</a></p>
            <p class="mb-2"><a class="btn btn-link footerlink"></i>Events</a></p>
            <p class="mb-2"><a class="btn btn-link footerlink"></i>City Officials</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>


