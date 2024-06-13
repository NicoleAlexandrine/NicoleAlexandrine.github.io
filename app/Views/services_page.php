<?php

include "navbar.php"

    ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/stylesheet.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Roboto:wght@900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <title>Services</title>
</head>
<style>
    /*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
    body {
        color: #444444;
    }

    a {
        color: #ed502e;
        text-decoration: none;
    }

    a:hover {
        color: #f1775d;
        text-decoration: none;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Roboto", sans-serif;
    }

    /*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
    section {
        padding: 60px 0;
    }

    .section-bg {
        background-color: #f6f9fd;
    }

    .section-title {
        padding-bottom: 40px;

    }

    .section-title h2 {
        font-size: 14px;
        font-weight: 500;
        padding: 0;
        line-height: 1px;
        margin: 0 0 5px 0;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: #aaaaaa;
        font-family: "Poppins", sans-serif;
    }

    .section-title h2::after {
        content: "";
        width: 120px;
        height: 1px;
        display: inline-block;
        background: #f38b74;
        margin: 4px 10px;
    }

    .section-title p {
        margin: 0;
        margin: 0;
        font-size: 36px;
        text-transform: uppercase;
        font-family: "Poppins", sans-serif;
        color: #0f2f57;
    }

    .section-title h3 {
        font-size: 20px;
        color: #999;
        margin: 0;
    }

    .section-title h4 {
        font-size: 30px;
        color: #666;
        margin: 0;
    }

    /*--------------------------------------------------------------
# services
--------------------------------------------------------------*/
    .services {
        padding-top: 60px;
    }

    .services .service-box {
        box-shadow: 0px 0px 10px 0px rgba(11, 35, 65, 0.1);
        padding: 30px;
        background-color: #fff;
        border-radius: 10px;
        border-width: 10px;
        border-bottom: 6px solid #F58F29;

    }


    .services .service-box span {
        font-size: 42px;
        line-height: 24px;
        display: block;
        font-weight: 700;
        color: #388e3c;
        margin-left: 50px;
    }

    .services .service-box h3 {
        padding: 30px 0 0 0;
        margin: 0;
        font-family: "Poppins", sans-serif;
        font-size: 25px;
        color: #388e3c;
        font-weight: bolder !important;
    }

    .services .service-box a {
        padding: 0;
        font-weight: 500;
        display: block;
        margin: 0;
        color: #388e3c;
        font-size: 15px;
        font-family: "Lora", sans-serif;
        transition: ease-in-out 0.3s;
    }

    .services .service-box a:hover {
        color: #2169c4;
    }

    .services .padd {
        padding-top: 30px;
    }

    .services .service-box .servicebtn {
        background-color: #388e3c;
        color: white;
        border-radius: 20px
    }

    /* .service-box img {
  width: 100%;
  height: auto;
  object-fit: cover;
  max-height: 200px; /* adjust as needed */
    }
</style>

<body>

    <!-- Header Start -->
    <header>
        <div class="header d-flex align-items-center"
            style="background-image: url('assets/img/hero1.jpg'); min-height: 300px;">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h2 style="font-family: 'Yellowtail'">Services</h2>
                <ol>
                    <li><a href="<?= base_url('/home') ?>">Barangays</a></li>
                    <li class="text-warning">Services</li>
                </ol>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!--CONTENT-TITLE -->
    <div class="container" style="">
        <div class="content-title section-title" style="padding: 25px; ">
            <h2 style="color: black">Services</h2>
            <p style="color: black">CITY SERVICES</p>
        </div>
    </div>
    <!-- ======= services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <!-- ======= row start ======= -->
            <div class="row no-gutters padd">

                <div class="col-lg-2 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="service-box">
                        <img src="assets/img/bplo.png" class="d-block w-100 img-fluid" alt="...">
                        <h3><b>Building Permit</b></h3>
                        <a href="#" class="btn servicebtn">Find out more »</a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="service-box">
                        <img src="assets/img/onbLOGO.jpg" class="d-block w-100 img-fluid" alt="...">
                        <h3><strong>Health Certificate</strong></h3>
                        <a href="#">Find out more »</a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="service-box">
                        <img src="assets/img/depedLOGO.png" class="d-block w-100 img-fluid" alt="...">
                        <h3><strong>Complaint Form</strong></h3>
                        <a href="#">Find out more »</a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="service-box">
                        <img src="assets/img/dilgLOGO.png" class="d-block w-100 img-fluid" alt="...">
                        <h3><strong>Demolition Permit</strong></h3>
                        <a href="#">Find out more »</a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="service-box">
                        <img src="assets/img/dilgLOGO.png" class="d-block w-100 img-fluid" alt="...">
                        <h3><strong>Demolition Permit</strong></h3>
                        <a href="#">Find out more »</a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="service-box">
                        <img src="assets/img/dilgLOGO.png" class="d-block w-100 img-fluid" alt="...">
                        <h3><strong>Demolition Permit</strong></h3>
                        <a href="#">Find out more »</a>
                    </div>
                </div>

            </div>
            <!-- ======= row end ======= -->

            <!-- ======= row start ======= -->
            <div class="row no-gutters padd">

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="service-box">
                        <img src="assets/img/bplo.png" class="d-block w-100 img-fluid" alt="...">
                        <h3><strong>Building Permit</strong></h3>
                        <a href="#" class="btn servicebtn">Find out more »</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="service-box">
                        <img src="assets/img/onbLOGO.jpg" class="d-block w-100 img-fluid" alt="...">
                        <h3><strong>Health Certificate</strong></h3>
                        <a href="#" class="btn servicebtn">Find out more »</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="service-box">
                        <img src="assets/img/depedLOGO.png" class="d-block w-100 img-fluid" alt="...">
                        <h3><strong>Complaint Form</strong></h3>
                        <a href="#" class="btn servicebtn">Find out more »</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="service-box">
                        <img src="assets/img/dilgLOGO.png" class="d-block w-100 img-fluid" alt="...">
                        <h3><strong>Demolition Permit</strong></h3>
                        <a href="#" class="btn servicebtn">Find out more »</a>
                    </div>
                </div>
            </div>
            <!-- ======= row end ======= -->

            <!-- ======= row start ======= -->
            <div class="row no-gutters padd">

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="service-box">
                        <img src="assets/img/bplo.png" class="d-block w-100 img-fluid" alt="...">
                        <h3><strong>Building Permit</strong></h3>
                        <a href="#" class="btn servicebtn">Find out more »</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="service-box">
                        <img src="assets/img/onbLOGO.jpg" class="d-block w-100 img-fluid" alt="...">
                        <h3><strong>Health Certificate</strong></h3>
                        <a href="#" class="btn servicebtn">Find out more »</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="service-box">
                        <img src="assets/img/depedLOGO.png" class="d-block w-100 img-fluid" alt="...">
                        <h3><strong>Complaint Form</strong></h3>
                        <a href="#" class="btn servicebtn">Find out more »</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="service-box">
                        <img src="assets/img/dilgLOGO.png" class="d-block w-100 img-fluid" alt="...">
                        <h3><strong>Demolition Permit</strong></h3>
                        <a href="#" class="btn servicebtn" class="btn servicebtn">Find out more »</a>
                    </div>
                </div>
            </div>
            <!-- ======= row end ======= -->

            <!-- ======= row start ======= -->
            <div class="row no-gutters padd">

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="service-box">
                        <img src="assets/img/bplo.png" class="d-block w-100 img-fluid" alt="...">
                        <h3><strong>Building Permit</strong></h3>
                        <a href="#" class="btn servicebtn">Find out more »</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="service-box">
                        <img src="assets/img/onbLOGO.jpg" class="d-block w-100 img-fluid" alt="...">
                        <h3><strong>Health Certificate</strong></h3>
                        <a href="#" class="btn servicebtn">Find out more »</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="service-box">
                        <img src="assets/img/depedLOGO.png" class="d-block w-100 img-fluid" alt="...">
                        <h3><strong>Complaint Form</strong></h3>
                        <a href="#" class="btn servicebtn">Find out more »</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="service-box">
                        <img src="assets/img/dilgLOGO.png" class="d-block w-100 img-fluid" alt="...">
                        <h3><strong>Demolition Permit</strong></h3>
                        <a href="#" class="btn servicebtn">Find out more »</a>
                    </div>
                </div>
            </div>
            <!-- ======= row end ======= -->

        </div>
    </section><!-- End services Section -->
    <?php

    include "footer.php"

        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>



</body>

</html>