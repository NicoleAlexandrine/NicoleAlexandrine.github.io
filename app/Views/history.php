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
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/stylesheet.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Roboto:wght@900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
		integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

    <title>History</title>
</head>
<style>
    /* Timeline holder */
    ul.timeline {
        list-style-type: none;
        position: relative;
        padding-left: 1.5rem;
    }

    /* Timeline vertical line */
    ul.timeline:before {
        content: ' ';
        background: #388E3C;
        display: inline-block;
        position: absolute;
        left: 16px;
        width: 4px;
        height: 100%;
        z-index: 400;
        border-radius: 1rem;
    }

    li.timeline-item {
        margin: 15px;
        border-color: #388E3C !important;

    }

    /* Timeline item arrow */
    .timeline-arrow {
        border-top: 0.5rem solid transparent;
        border-right: 0.5rem solid #388E3C;
        border-bottom: 0.5rem solid transparent;
        display: block;
        position: absolute;
        left: 2rem;

    }

    /* Timeline item circle marker */
    li.timeline-item::before {
        content: ' ';
        background: #fff;
        display: inline-block;
        position: absolute;
        border-radius: 50%;
        border: 3px solid #66BB6A;
        left: 11px;
        width: 14px;
        height: 14px;
        z-index: 400;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    }

    body {
        font-family: "Poppins", sans-serif;
        color: #444444;

    }

    .text-gray {
        color: #999;
    }
</style>

<body>
    <!-- Header Start -->
    <header>
        <div class="header breadcrumbs d-flex align-items-center">
            <div class="container position-relative d-flex justify-content-between align-items-center" data-aos="fade">
                <h2>History</h2>
                <ol class="breadcrumb">
                    <li><a href="<?= base_url('/home') ?>">Home</a></li>
                    <li class="text-warning">History</li>
                </ol>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <div class="container py-5">


        <div class="row text-center text-white mb-3">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-4" style="color: #388E3C;">BIÑAN'S BEGINNINGS</h1>
                <p class="lead mb-0" style="color: #388E3C;">The History of Biñan</p>

            </div>
        </div>


        <div class="row">
            <div class="col-lg-7 mx-auto">

                <!-- Timeline -->
                <ul class="timeline">
                    <li class="timeline-item border border-3 rounded ml-3 p-4 shadow">
                        <div class="timeline-arrow"></div>
                        <div class="row ">
                            <a class="col-lg-9 col-md-9" style="text-decoration: none; color: black;">
                                <h2 class="h5 mb-0" style="color: #004600; font-size: 40px;">1571</h2>
                                <p class="text-small mt-2 font-weight-light" style="text-align: justify;">Captain Juan
                                    de Salcedo discovered ad
                                    founded Biñan at the end of June 1571, a month after Miguel Lopez de Legaspi
                                    established Manila when he explored the largest freshwater lake in the Philippines
                                    and second in Asia (Laguna de Bay)</p>
                                <a class="col-lg-3 col-md-3" style="text-decoration: none; color: black;">
                                    <img class="img-fluid center" src="assets/img/cap.webp" width="300"
                                        height="700">
                                </a>
                            </a> <!-- End Stats Item -->
                        </div>

                    </li>
                    <li class="timeline-item border border-3 rounded ml-3 p-4 shadow">
                        <div class="timeline-arrow"></div>
                        <div class="row ">
                            <a class="col-lg-9 col-md-9" style="text-decoration: none; color: black;">
                                <h2 class="h5 mb-0" style="color: #004600; font-size: 40px;">1688</h2>
                                <p class="text-small mt-2 font-weight-light" style="text-align: justify;">When the seat
                                    of the provincial government of the Provincia de Laguna de Bay was moved from Bay to
                                    Pagsanjan in 1688, Biñan separated from its mother town Tabuco (now known as the
                                    city of Cabuyao)</p>
                                <a class="col-lg-3 col-md-3" style="text-decoration: none; color: black;">
                                    <img class="img-fluid center" src="assets/img/oldbinan.jpg" width="300"
                                        height="800">
                                </a>
                            </a> <!-- End Stats Item -->
                        </div>
                    </li>
                    <li class="timeline-item border border-3 rounded ml-3 p-4 shadow">
                        <div class="row ">
                            <a class="col-lg-9 col-md-9" style="text-decoration: none; color: black;">
                                <h2 class="h5 mb-0" style="color: #004600; font-size: 40px;">1791</h2>
                                <p class="text-small mt-2 font-weight-light" style="text-align: justify;">In 1971,
                                    during the time of Pablo Faustino, Santa Rosa separated from Biñan. The following
                                    year, January 15 Sta. Rosa de Lima was established and became an independent town.
                                </p>
                                <a class="col-lg-3 col-md-3" style="text-decoration: none; color: black;">
                                    <img class="img-fluid center" src="assets/img/newbinan.jpg" width="300"
                                        height="600">
                                </a>
                            </a> <!-- End Stats Item -->
                        </div>
                    </li>
                    <li class="timeline-item border border-3 rounded ml-3 p-4 shadow">
                        <div class="row ">
                            <a class="col-lg-9 col-md-9" style="text-decoration: none; color: black;">
                                <h2 class="h5 mb-0" style="color: #004600; font-size: 40px;">1869</h2>
                                <p class="text-small mt-2 font-weight-light" style="text-align: justify;">Biñan is
                                    nationally recognized in the books related to the biography of Jose Rizal, the
                                    country's national hero. It was n June 1869 when Jose Rizal as a young boy went to
                                    Biñan wit his brother Paciano. They proceeded to his aunt's house near the town
                                    proper where they were to be lodged.</p>
                                <a class="col-lg-3 col-md-3" style="text-decoration: none; color: black;">
                                    <img class="img-fluid center" src="assets/img/rizal.jpg" width="500"
                                        height="700">
                                </a>
                            </a> <!-- End Stats Item -->
                        </div>
                    </li>
                    <li class="timeline-item border border-3 rounded ml-3 p-4 shadow">
                        <div class="row ">
                            <a class="col-lg-9 col-md-9" style="text-decoration: none; color: black;">
                                <h2 class="h5 mb-0" style="color: #004600; font-size: 40px;">1869</h2>
                                <p class="text-small mt-2 font-weight-light" style="text-align: justify;">Here, his
                                    first formal education was entrusted to Maestro Justiniano Aquino Cruz who after a
                                    year and a hald of tutelage advised young Rizal to continue hiher education in
                                    Mannila. In honor of Jose Rizal a plaque of recognition was bestowed on the house
                                    where he stayed at. A monument now stands at the center of Biñan's town plaza in
                                    recognition of Biñan's affiliation to Rizal.</p>
                                <a class="col-lg-3 col-md-3" style="text-decoration: none; color: black;">
                                    <img class="img-fluid center" src="assets/img/statue.jpg" width="500"
                                        height="1000">
                                </a>
                            </a> <!-- End Stats Item -->
                        </div>
                    </li>
                    
                </ul><!-- End -->

            </div>
        </div>
    </div>


    <?php
    include "footer.php"
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

</body>

</html>