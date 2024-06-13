<?php

include "navbar.php"

    ?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Mayor's Corner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="../public/stylesheet.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Roboto:wght@900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
		integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
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
    }

    /*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
    section {
        padding: 20px 0;
    }

    .section-bg {
        background-color: #f6f9fd;
    }

    .section-title h2 {
        font-size: 14px;
        font-weight: 500;
        padding: 0;
        line-height: 1px;
        margin: 0 0 20px 0;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: #aaaaaa;
        font-family: "Roboto", sans-serif;
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
        font-size: 36px;
        font-weight: 700;
        text-transform: uppercase;
        font-family: "Roboto", sans-serif;
        color: #388E3C;
    }

    /*------------ mayor --------------*/
    .mayor .content h3 {
        font-weight: 600;
        font-size: 26px;
    }

    .mayor .content ul {
        list-style: none;
        padding: 0;
    }

    .mayor .content ul li {
        padding-left: 28px;
        position: relative;
    }

    .mayor .content ul li+li {
        margin-top: 10px;
    }

    .mayor .content ul i {
        position: absolute;
        left: 0;
        top: 2px;
        font-size: 20px;
        color: #ed502e;
        line-height: 1;
    }

    .mayor .content p:last-child {
        margin-bottom: 0;
    }

    .mayor .content .btn-learn-more {
        font-family: "Roboto", sans-serif;
        font-weight: 600;
        font-size: 14px;
        letter-spacing: 1px;
        display: inline-block;
        padding: 12px 32px;
        border-radius: 5px;
        transition: 0.3s;
        line-height: 1;
        color: #ed502e;
        animation-delay: 0.8s;
        margin-top: 6px;
        border: 2px solid #ed502e;
    }

    .mayor .content .btn-learn-more:hover {
        background: #ed502e;
        color: #fff;
        text-decoration: none;
    }

    /*--------------------------------------------------------------
# gallery Section
--------------------------------------------------------------*/
    #gallery {
        width: 100%;
        height: 100vh;
        background-color: rgba(4, 12, 21, 0.8);
        overflow: hidden;
        position: relative;
    }

    #gallery .carousel,
    #gallery .carousel-inner,
    #gallery .carousel-item,
    #gallery .carousel-item::before {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
    }

    #gallery .carousel-item {
        background-size: cover;
        background-position: top center;
        background-repeat: no-repeat;
    }

    #gallery .carousel-item::before {
        content: "";
    }

    #gallery .carousel-container {
        display: flex;
        align-items: center;
        position: absolute;
        bottom: 0;
        top: 82px;
        left: 50px;
        right: 50px;
    }

    #gallery h2 {
        color: #fff;
        margin: 0;
        font-size: 48px;
        font-weight: 700;
    }

    #gallery p {
        animation-delay: 0.4s;
        color: #fff;
        margin-top: 10px;
    }

    @media (min-width: 1200px) {
        #gallery p {
            width: 50%;
        }
    }

    #gallery .carousel-inner .carousel-item {
        transition-property: opacity;
        background-position: center top;
    }

    #gallery .carousel-inner .carousel-item,
    #gallery .carousel-inner .active.carousel-item-start,
    #gallery .carousel-inner .active.carousel-item-end {
        opacity: 0;
    }

    #gallery .carousel-inner .active,
    #gallery .carousel-inner .carousel-item-next.carousel-item-start,
    #gallery .carousel-inner .carousel-item-prev.carousel-item-end {
        opacity: 1;
        transition: 0.5s;
    }

    #gallery .carousel-inner .carousel-item-next,
    #gallery .carousel-inner .carousel-item-prev,
    #gallery .carousel-inner .active.carousel-item-start,
    #gallery .carousel-inner .active.carousel-item-end {
        left: 0;
        transform: translate3d(0, 0, 0);
    }

    #gallery .carousel-control-next-icon,
    #gallery .carousel-control-prev-icon {
        background: none;
        font-size: 30px;
        line-height: 0;
        width: auto;
        height: auto;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50px;
        transition: 0.3s;
        color: rgba(255, 255, 255, 0.5);
        width: 54px;
        height: 54px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #gallery .carousel-control-next-icon:hover,
    #gallery .carousel-control-prev-icon:hover {
        background: rgba(255, 255, 255, 0.3);
        color: rgba(255, 255, 255, 0.8);
    }

    #gallery .carousel-indicators li {
        cursor: pointer;
        background: #fff;
        overflow: hidden;
        border: 0;
        width: 12px;
        height: 12px;
        border-radius: 50px;
        opacity: 0.6;
        transition: 0.3s;
    }

    #gallery .carousel-indicators li.active {
        opacity: 1;
        background: #ed502e;
    }

    #gallery .btn-get-started {
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-size: 14px;
        letter-spacing: 1px;
        display: inline-block;
        padding: 14px 32px;
        border-radius: 4px;
        transition: 0.5s;
        line-height: 1;
        color: #fff;
        animation-delay: 0.8s;
        background: #ed502e;
        margin-top: 15px;
    }

    #gallery .btn-get-started:hover {
        background: #ef6445;
    }

    @media (max-width: 992px) {
        #gallery {
            height: 100vh;
        }

        #gallery .carousel-container {
            text-align: center;
            top: 74px;
        }
    }

    @media (max-width: 768px) {
        #gallery h2 {
            font-size: 30px;
        }
    }

    @media (min-width: 1024px) {

        #gallery .carousel-control-prev,
        #gallery .carousel-control-next {
            width: 5%;
        }
    }

    @media (max-height: 500px) {
        #gallery {
            height: 120vh;
        }
    }
</style>

<body>
    <!-- Header Start -->
    <header>
        <div class="header breadcrumbs d-flex align-items-center">
            <div class="container position-relative d-flex justify-content-between align-items-center" data-aos="fade">
                <h2>Mayor</h2>
                <ol class="breadcrumb">
                    <li><a href="<?= base_url('/home') ?>">Home</a></li>
                    <li class="text-warning">Mayor</li>
                </ol>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- ======= Mayor Section ======= -->
    <section id="mayor" class="mayor">
        <div class="container">
            <div class="content-title section-title">
                <h3>Atty. Walfredo "Arman" R. Dimaguila Jr.</h3>
                <p>City of Binan Mayor</p>
            </div>
        </div>
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Mayor's Corner</h2>

            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <div class="img">
                        <img src="assets/img/mayor.jpg" alt="" class="img-thumbnail img-responsive">
                    </div>

                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <div class="section-title">
                        <p>PERSONAL DATA</p>
                    </div>

                    <li> Ullamco laboris nisi ut aliquip ex ea commodoconsequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                        quiofficia deserunt mollit anim id est laborum.
                    </li>
                    <li></i> Duis aute irure dolor in reprehenderit in voluptate
                        velit</li>
                    <li></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat
                    </li>



                </div>
            </div>
            <!----Mayor's Gallery---->
            <div class="row content pt-3">
                <div class="col-lg-12 ">
                    <div class="section-title">
                        <p>MAYOR'S GALLERY</p>
                    </div>


                    <div id="galleryCarousel" data-bs-interval="5000" class="carousel slide carousel-fade"
                        data-bs-ride="carousel">

                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>

                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active ">
                                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                                    <img src="assets/img/mayorevent.jpg" alt="">
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="assets/img/mayor.jpg" class="d-block w-100" alt="...">
                            </div>

                            <div class="carousel-item">
                                <img src="assets/img/newsimage.png" class="d-block w-100" alt="...">

                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="section-title pt-3">
                <p>YEARS OF SERVICE</p>
            </div>

            <div class="row content">
                <div class="col-lg-12">
                    <ul>
                        <li> Ullamco laboris nisi ut aliquip ex ea commodoconsequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                            quiofficia deserunt mollit anim id est laborum.
                        </li>
                        <li></i> Duis aute irure dolor in reprehenderit in voluptate
                            velit</li>
                        <li></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat
                        </li>
                    </ul>
                </div>
            </div>

            <div class="section-title pt-3">
                <p>AWARDS RECEIVED</p>
            </div>
            <div class="row content">
                <div class="col-lg-12">
                    <ul>
                            <li> Ullamco laboris nisi ut aliquip ex ea commodoconsequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                quiofficia deserunt mollit anim id est laborum.
                            </li>
                            <li></i> Duis aute irure dolor in reprehenderit in voluptate
                                velit</li>
                            <li></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat
                            </li>
                    </ul>
                </div>
            </div>

        </div>
    </section><!-- End mayor Section -->
    <?php

include "footer.php"

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>



</body>

</html>