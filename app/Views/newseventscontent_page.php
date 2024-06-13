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

    .titlebg {
        position: relative;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .postbtn {
        border-color: #444444 !important;
        padding: 5px;
        border-radius: 25px;
        font-size: 10px;
        color: #444444
    }

    .card-title {
        color: #388E3C;
    }

    .section-title p {
        font-size: 36px;
        font-weight: 700;
        text-transform: uppercase;
        font-family: "Roboto", sans-serif;
        color: #388E3C;
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
</style>

<body>

    <!-- Header Start -->
    <header>
        <div class="header breadcrumbs d-flex align-items-center">
            <div class="container position-relative d-flex justify-content-between align-items-center" data-aos="fade">
                <h2>Biñan News</h2>
                <ol class="breadcrumb">
                    <li><a href="<?= base_url('/home') ?>">Home</a></li>
                    <li class="text-warning">Biñan News</li>
                </ol>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!--CONTENT-TITLE -->
    <!-- <div class="d-flex align-items-center" style="background-image: url('assets/img/hero1.jpg'); min-height: 300px !important; 
  background-size: cover; padding-top: 0">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade"
            style="padding: 30px">
            <h2 style="color: white"></h2>
            <p style="color: white">June 30, 2023</p>
        </div>
    </div> -->
    <div class="container mt-5">
        <div class="content-title section-title">
            <h3>Author Name</h3>
            <p>P10K voucher ipinamahagi ng Biñan LGU sa incoming SHS students</p>
        </div>
    </div>
    <div class="container">
        <div class="section-title">
            <h2>JANUARY 1, 2023</h2>
        </div>
    </div>
    <!---->
    <div class="page-content-wrap d-flex justify-content-center">
        <img src="assets/img/hero1.jpg" alt="" class="img-fluid">
    </div>
    <!--CONTENT -->
    <div class="page-content-wrap py-5" style="position: relative;">
        <div class="container" style="width: 98%; display: flex; justify-content: center; align-items: center;">
            <p class="text-left" style="line-height: 1.8 !important">Minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum.
                Sed ut perspiciatis unde omnis iste natus error sit.<br><br>
                Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                veritatis et quasi
                architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                aut odit aut fugit,
                sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,
                qui dolorem ipsum
                quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                labore et dolore magnam
                aliquam quaerat voluptatem. Aliquam bibendum lacus quis nulla dignissim faucibus. Sed mauris enim,
                bibendum at purus aliquet,
                maximus molestie tortor. Sed faucibus et tellus eu sollicitudin. Sed fringilla malesuada luctus.</p>
        </div>
    </div>

    <!-- Related Post -->

    <section id="blog">
        <hr style="width:90%; margin: auto">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <div class="relatedtitle">
                        <h5>Related News</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 98%;">
                        <img src="assets/img/hero2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title pb-2">Post Title</h6>
                            <a href="<?= base_url('/home') ?>" class="postbtn border border-light border-1">Read
                                More...</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 98%;">
                        <img src="assets/img/hero2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title pb-2">Post Title</h6>
                            <a href="<?= base_url('/home') ?>" class="postbtn border border-light border-1">Read
                                More...</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 98%;">
                        <img src="assets/img/hero2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title pb-2">Post Title</h6>
                            <a href="<?= base_url('/home') ?>" class="postbtn border border-light border-1">Read
                                More...</a>
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