<?php

include "navbar.php"

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/stylesheet.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

    <title>Hotlines</title>
</head>
<style>
    /* hotlines Section - Home Page
------------------------------*/


    @media (max-width: 575px) {
        .hotlines .hotlines-filters li {
            font-size: 14px;
            margin: 0 0 10px 0;
        }
    }

    .hotlines .hotlines-item {
        position: relative;
        overflow: hidden;
    }

    .hotlines .hotlines-item .hotlines-info {
        opacity: 10;
        position: absolute;
        left: 12px;
        right: 12px;
        bottom: -100%;
        z-index: 7;
        transition: all ease-in-out 0.5s;
        background: #ffffffcf;
        padding: 15px;
    }

    .hotlines p {
        font-size: 36px;
        font-weight: 700;
        text-transform: uppercase;
        font-family: "Roboto", sans-serif;
        color: #388E3C;
        text-align: left;
    }

    .hotlines h4 {
        font-size: 24px;
        font-weight: 700;
        text-transform: uppercase;
        font-family: "Roboto", sans-serif;
        color: white;
        text-align: left;
    }

    .hotlines .hotlines-item .hotlines-info p {
        color: black;
        font-size: 20px;
        margin-bottom: 0;
        padding-right: 50px;
    }

    .hotlines .hotlines-item .hotlines-bg {
        background-color: green;
        /* box-shadow: 0px 0 30px rgba(82, 86, 94, 0.05); */
        padding: 30px;
        border-color: #004600;
        border-width: 10px 10px 10px 10px;
        border-radius: 15px;
    }


    .hotlines .hotlines-item:hover .hotlines-info {
        opacity: 1;
        bottom: 0;
    }
</style>

<body>

    <!-- Header Start -->
    <header>
        <div class="header breadcrumbs d-flex align-items-center">
            <div class="container position-relative d-flex justify-content-between align-items-center" data-aos="fade">
                <h2>Hotlines</h2>
                <ol class="breadcrumb">
                    <li><a href="<?= base_url('/home') ?>">Home</a></li>
                    <li class="text-warning">Hotlines</li>
                </ol>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <section class="hotlines">

        <div class="container">
            <div class="content-title section-title">
                <p>IMPORTANT HOTLINES</p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 hotlines-item isotope-item filter-app">
                    <div class="hotlines-bg">
                        <h4>Serbisyong Arman Hall </h4>
                    </div>
                    <div class="hotlines-info">
                        <p>INTELCO: 513-5033 </p>
                        <p>PLDT: 523-5033 </p>
                    </div>
                </div><!-- End hotlines Item -->

                <div class="col-lg-4 col-md-6 hotlines-item isotope-item filter-app">
                    <div class="hotlines-bg">
                        <h4>Bureau of Fire and Protection Deparment (BFP)	 </h4>
                    </div>
                    <div class="hotlines-info">
                        <p>INTELCO: 511-9111 </p>
                        <p>PLDT:  </p>
                    </div>
                </div><!-- End hotlines Item -->

                <div class="col-lg-4 col-md-6 hotlines-item isotope-item filter-app">
                    <div class="hotlines-bg">
                        <h4>Philippine National Police (PNP) </h4>
                    </div>
                    <div class="hotlines-info">
                        <p>INTELCO: 513-5111 </p>
                        <p>PLDT: </p>
                    </div>
                </div><!-- End hotlines Item -->
            </div><!-- End hotlines Container -->

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