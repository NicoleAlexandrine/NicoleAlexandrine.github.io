<?php

include "navbar.php"

    ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>News and Events</title>


    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/stylesheet.css">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Roboto:wght@900&display=swap" rel="stylesheet">

    <style>
        .body {
            background-color: #eff2f8 !important;
        }

        .section-title {
            margin-bottom: 15px;
            padding: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #FFF;
            border: 1px solid #dee2e6;
            border-left: 5px solid #388E3C;
            font-family: Roboto;
        }

        @media (min-width: 768px) {
            .d-md-flex {
                display: flex !important;
            }
        }

        .post-entry-2 {
            border-color: #388E3C !important;
            border-radius: 20px;
            padding: 10px;
            border-left: 10px solid #388E3C !important;
            overflow: hidden;
            display: flex;
        }

        @media (max-width: 767px) {
            .post-entry-2 {
                flex-direction: column;
                height: auto;
                padding: 20px;
            }
        }

        .newsimg {
            border-radius: 20px;
        }

        .custom-pagination a.active {
            background-color: black;
            color: white;
        }

        .custom-pagination a {
            display: inline-block;
            width: 40px !important;
            height: 40px !important;
            line-height: 40px;
            text-align: center;
            border-radius: 50%;
            font-family: Poppins;
            margin: 5px;
            transition: 0.3s all ease;
            text-decoration: none;
            color: black;
        }

        .custom-pagination a.prev,
        .custom-pagination a.next {
            width: auto !important;
            border-radius: 4px;
            padding: 0 10px;
        }
    </style>


</head>

<body>
    <!-- Header Start -->
    <header>
        <div class="header breadcrumbs d-flex align-items-center">
            <div class="container position-relative d-flex justify-content-between align-items-center" data-aos="fade">
                <h2>News and Events</h2>
                <ol class="breadcrumb">
                    <li><a href="<?= base_url('/home') ?>">Home</a></li>
                    <li class="text-warning">News and Events</li>
                </ol>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- News List Start -->
    <!-- <div class="container-fluid pt-5 mb-3">
        <div class="container">
            <div class="section-title">
                <h4 class="text-uppercase" style="margin: 0">News and Events</h4>
            </div>
        </div>
    </div> -->

    <div class="container my-5">
        <div class="row">
            <div class="col-md-12 my-2">
                <div class="d-md-flex post-entry-2 border border-3 d-flex justify-content-center">
                    <a href="<?= base_url('/newseventscontent') ?>" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                        <img src="assets/img/newsimage.png" class="img-fluid newsimg"></a>
                    <div>
                        <div class="post-meta" style="font-size: 11px">
                            <span class="date text-muted">BIÑAN | JAN 1 '23</span>
                        </div>
                        <h3><a href="<?= base_url('/newseventscontent') ?>" class="text-dark"
                                style="text-decoration: none; font-family: 'Roboto', sans-serif"><b>26 reformees
                                    nagtapos sa
                                    reformation program ng Biñan LGU</b></a></h3>
                        <p class="mb-4 d-block fw-light" style="font-size: 14px">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ""
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 my-2">
                <div class="d-md-flex post-entry-2 border border-3 d-flex justify-content-center">
                    <a href="<?= base_url('/newseventscontent') ?>" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                        <img src="assets/img/newsimage.png" class="img-fluid newsimg"></a>
                    <div>
                        <div class="post-meta" style="font-size: 11px">
                            <span class="date text-muted">BIÑAN | JAN 1 '23</span>
                        </div>
                        <h3><a href="<?= base_url('/newseventscontent') ?>" class="text-dark"
                                style="text-decoration: none; font-family: 'Roboto', sans-serif"><b>26 reformees
                                    nagtapos sa
                                    reformation program ng Biñan LGU</b></a></h3>
                        <p class="mb-4 d-block fw-light" style="font-size: 14px">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ""
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 my-2">
                <div class="d-md-flex post-entry-2 border border-3 d-flex justify-content-center">
                    <a href="<?= base_url('/newseventscontent') ?>" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                        <img src="assets/img/newsimage.png" class="img-fluid newsimg"></a>
                    <div>
                        <div class="post-meta" style="font-size: 11px">
                            <span class="date text-muted">BIÑAN | JAN 1 '23</span>
                        </div>
                        <h3><a href="<?= base_url('/newseventscontent') ?>" class="text-dark"
                                style="text-decoration: none; font-family: 'Roboto', sans-serif"><b>26 reformees
                                    nagtapos sa
                                    reformation program ng Biñan LGU</b></a></h3>
                        <p class="mb-4 d-block fw-light" style="font-size: 14px">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ""
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 my-2">
                <div class="d-md-flex post-entry-2 border border-3 d-flex justify-content-center">
                    <a href="<?= base_url('/newseventscontent') ?>" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                        <img src="assets/img/newsimage.png" class="img-fluid newsimg"></a>
                    <div>
                        <div class="post-meta" style="font-size: 11px">
                            <span class="date text-muted">BIÑAN | JAN 1 '23</span>
                        </div>
                        <h3><a href="<?= base_url('/newseventscontent') ?>" class="text-dark"
                                style="text-decoration: none; font-family: 'Roboto', sans-serif"><b>26 reformees
                                    nagtapos sa
                                    reformation program ng Biñan LGU</b></a></h3>
                        <p class="mb-4 d-block fw-light" style="font-size: 14px">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ""
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </div>
            </div>
            <div class="text-start py-4">
                <div class="custom-pagination">
                    <a href="" class="prev">Previous</a>
                    <a href="" class="active">1</a>
                    <a href="">2</a>
                    <a href="">3</a>
                    <a href="">4</a>
                    <a href="">5</a>
                    <a href="" class="next">Next</a>
                </div>

            </div>
        </div>
    </div>

    <!-- News List End -->
    <?php

include "footer.php"

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>