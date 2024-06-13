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
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Roboto:wght@900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
		integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

    <title>Barangay Contents</title>
</head>
<style>
    /*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
    body {
        font-family: "Poppins", sans-serif;
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
        color: #388E3C;
    }

    p {
        font-family: "Poppins", sans-serif;
    }

    /*--------------------------------------------------------------
# barangays
--------------------------------------------------------------*/
    .barangays .barangay-wrap {
        justify-content: center;
    }

    .barangays .barangay-item {
        /* box-sizing: content-box; */
        padding: 30px 30px 30px 60px;
        margin: 5px 10px;
        min-height: 200px;
        /* box-shadow: 0px 0px 20px 0px rgba(11, 35, 65, 0.1); */
        position: relative;
        /* background: #ffffff; */

    }

    .box {
        /* margin: 0 10px 10px 10px; */
        margin: 0 10px 10px 10px;
        padding: 30px;
        flex: 1 0 50%;
        box-sizing: border-box;
        border-radius: 10px;
        background: #fff;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
    }

    .barangays .barangay-item .barangay-img {
        width: 90px;
        border-radius: 10px;
        border: 6px solid #fff;
        position: absolute;
        left: -45px;
    }

    .barangays .barangay-item h3 {
        margin: 0;
        font-weight: 700;
        font-family: 'Bebas Neue';
        font-size: 40px;
        color: #004600;
    }

    .barangays .barangay-item h4 {
        font-size: 14px;
        margin: 0;
        color: #004600;

    }

    .barangays .barangay-item p {
        margin: 15px auto 15px auto;
        font-size: 20px;
        color: #004600;
        font-family: "Poppins", sans-serif;
    }

    .barangays .swiper-pagination {
        margin-top: 20px;
        position: relative;
    }

    .barangays .swiper-pagination .swiper-pagination-bullet {
        width: 12px;
        height: 12px;
        background-color: #fff;
        opacity: 1;
        border: 1px solid #ed502e;
    }

    .barangays .swiper-pagination .swiper-pagination-bullet-active {
        background-color: #ed502e;
    }

    .logo-wrap {
        border-radius: var(--border-radius-medium);
        display: block;
        width: 112px;
        height: 112px;
        object-fit: cover;
    }

    .brgyinfo {
        display: block;
        padding: 10px 10px;
        padding-bottom: 0;
    }

    .brgycontent {
        position: relative;
        z-index: 8;
        text-align: center;
        background-color: rgba(0, 32, 74, 0.05);
        padding: 20px 0;
    }

    .box-feature {
        flex: 1 !important;
        background-color: #fff;
        border-radius: 15px;
        padding: 30px;
        border-color: #004600 !important;
        text-align: left;
        margin: 10px;
        height: 350px;
        /* box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2); */
    }

    @media (max-width: 767px) {
        .box-feature {
            flex-direction: column;
            height: auto;
            padding: 20px;
        }
    }

    .box-feature h3 {
        color: #388E3C;
        font-family: 'Roboto';
        font-size: 30px
    }

    .service-item {
        position: relative;
        text-align: center;
    }

    .service-item .service-text {
        background-color: #fff;
        box-shadow: 0 0 45px rgba(0, 0, 0, .08);
        transition: 0.3s
    }

    .service-item a {
        background-color: #388E3C;
        color: #fff;
        border-radius: 15px;
    }
</style>

<body>
    <!-- Header Start -->
    <header>
        <div class="header breadcrumbs d-flex align-items-center">
            <div class="container position-relative d-flex justify-content-between align-items-center" data-aos="fade">
                <h2><b>Barangay<b></h2>
                <ol class="breadcrumb">
                    <li><a href="<?= base_url('/home') ?>">Barangays</a></li>
                    <li class="text-warning">Barangay</li>
                </ol>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <section id="barangays" class="barangays section-bg">
        <div data-aos="fade-up" data-aos-delay="100">
            <div class="container d-flex justify-content-center" style="padding: 10px; margin: 0; color: #388E3C;">
                <div class="col-4 logo-wrap">
                    <div>
                    <img class="dept-logo" src="assets/img/binanlogo.png" width="150" height="150">
                    </div>
                </div>
                <div class="col-8 brgyinfo">
                    <h3 style="font-size: 40px">Barangay Canlalay</h3>
                    <p style="font-size: 20px; font-family: Roboto;">Barangay Captain: Hon. Ramon B. Morales</p>
                </div>
            </div>
        </div>
    </section>
    <section class="brgycontent">
        <div class="container" style="display: flex !important; justify-content: center; align-items: center;">
        <div class="col-lg-6 col-md-6">
        <div class="box-feature">
                <h3>Mission</h3>
                <p>The leadership of the City Biñan is committed to exercise its power to:<br>
                    • Promote social order and ensure public safety;<br>
                    • Enhance economic prosperity through job generation, manpower and skills development,
                    encourage and support local industries, and expansion;<br>
                    • Promote social justice by way of ensuring basic services, equal opportunities and full
                    protection and dispensation of law;<br>
                    • Promote and prioritize opportunities for learning experiences to prepare our youth to be
                    globally competitive; and<br>
                    • Provide modern and needed infrastructure facilities.</p>
            </div>
            </div>
            <div class="col-lg-6 col-md-6">
            <div class="box-feature">
                <h3>Vision</h3>
                <p>
                    A modern humanely developed City of Biñan, where its people enjoy peace and security,
                    economic stability, social justice, a well-preserved education, responsive social
                    services,
                    modernized infrastructure facilities all anchored on good governance.
                </p>
            </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="text-center mx-auto">
                <h1>Services</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-text rounded p-5">
                            <h4 class="mb-3">Service</h4>
                            <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet
                                diam sed stet.</p>
                            <a class="btn btn-sm" href="<?= base_url('/servicescontent') ?>">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-text rounded p-5">
                            <h4 class="mb-3">Service</h4>
                            <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet
                                diam sed stet.</p>
                            <a class="btn btn-sm" href="<?= base_url('/servicescontent') ?>">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-text rounded p-5">
                            <h4 class="mb-3">Service</h4>
                            <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet
                                diam sed stet.</p>
                            <a class="btn btn-sm" href="<?= base_url('/servicescontent') ?>">Read more</a>
                        </div>
                    </div>
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
</body>

</html>