<?php

include "navbar.php"

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="assets/css/main.css" rel="stylesheet">
    <title>Document</title>
</head>

<style>
    /* Cards */
    /* Font */
    @import url('https://fonts.googleapis.com/css?family=Quicksand:400,700');

    /* Design */
    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    html {
        background-color: #ecf9ff;
    }

    .main {
        max-width: 1200px;
        margin: 0 auto;
    }

    img {
        height: auto;
        max-width: 100%;
        vertical-align: middle;
    }

    .btn {
        background-color: #a83b3b;
        padding: 0.8rem;
        font-size: 14px;
        text-transform: uppercase;
        border-radius: 4px;
        font-weight: 400;
        display: block;
        width: 100%;
        cursor: pointer;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .btn:hover {
        background-color: #ad3737;
    }

    .cards {
        display: flex;
        flex-wrap: wrap;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .cards_item {
        display: flex;
        padding: 1rem;
    }

    @media (min-width: 40rem) {
        .cards_item {
            width: 50%;
        }
    }

    @media (min-width: 56rem) {
        .cards_item {
            width: 33.3333%;
        }
    }

    .card {
        background-color: white;
        border-radius: 0.25rem;
        box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }

    .card_content {
        padding: 1rem;
        background: #fbf4e0;
    }

    .card_title {
        color: #ad3737;
        font-size: 1.1rem;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: capitalize;
        margin: 0px;
    }

    .card_text {
        color: #ad3737;
        font-size: 0.875rem;
        line-height: 1.5;
        margin-bottom: 1.25rem;
        font-weight: 400;
    }

    .made_by {
        font-weight: 400;
        font-size: 13px;
        margin-top: 35px;
        text-align: center;
    }

    /*--------------------------------------------------------------
# Stats Counter Section
--------------------------------------------------------------*/
    .stats-counter .stats-item {
        background: #fff;
        box-shadow: 0px 0 30px rgba(82, 86, 94, 0.05);
        padding: 30px;
    }

    .stats-counter .stats-item i {
        font-size: 42px;
        line-height: 0;
        margin-right: 20px;
        color: var(--color-primary);
    }

    .stats-counter .stats-item span {
        font-size: 36px;
        display: block;
        font-weight: 600;
        color: var(--color-secondary);
    }

    .stats-counter .stats-item p {
        padding: 0;
        margin: 0;
        font-family: var(--font-primary);
        font-size: 20px;
    }

    .container {
        display: flex;
        flex-wrap: wrap;
    }

    .box {
        flex: 1 0 50%;
        max-width: 50%;
        padding: 20px;
        box-sizing: border-box;
        border: 1px solid black;
    }

    @media (max-width: 600px) {
        .box {
            flex-basis: 100%;
            max-width: 100%;
        }
    }

    /*--------------------------------------------------------------
# Department Box
--------------------------------------------------------------*/
    .dept-box {
        background: #efefef;
        border: 1px solid #ccc;
        padding: 15px 10px 20px;
        border-radius: 0px;
        min-height: 150px;
        margin: 10px 0;
        border-bottom: 2px solid #115272;
        transition: height 5s;
    }

    .dept-logo {
        width: 80%;
        max-width: 105px;
        max-height: 105px;
        object-fit: cover;
    }


    @media (min-width: 768px) {
        .dept-box:hover {
            height: 100%;
        }
    }


    .flip-card {
        background-color: transparent;
        width: 300px;
        height: 300px;
        perspective: 1000px;
    }

    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.6s;
        transform-style: preserve-3d;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }

    .flip-card-front,
    .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .flip-card-front {
        background-color: #bbb;
        color: black;
    }

    .flip-card-back {
        background-color: #efefef;
        ;
        color: black;
        transform: rotateY(180deg);
    }

    /*--------------------------------------------------------------
# Breadcrumbs
--------------------------------------------------------------*/
/* .breadcrumbs {
  padding: 140px 0 60px 0;
  min-height: 30vh;
  position: relative;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

.breadcrumbs:before {
  content: "";
  background-color: rgba(0, 0, 0, 0.6);
  position: absolute;
  inset: 0;
}

.breadcrumbs h2 {
  font-size: 56px;
  font-weight: 500;
  color: #fff;
  font-family: var(--font-secondary);
}

.breadcrumbs ol {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0 0 10px 0;
  margin: 0;
  font-size: 16px;
  font-weight: 600;
  color: var(--color-primary);
}

.breadcrumbs ol a {
  color: rgba(255, 255, 255, 0.8);
  transition: 0.3s;
}

.breadcrumbs ol a:hover {
  text-decoration: underline;
}

.breadcrumbs ol li+li {
  padding-left: 10px;
}

.breadcrumbs ol li+li::before {
  display: inline-block;
  padding-right: 10px;
  color: #fff;
  content: "/";
} */

/*--------------------------------------------------------------
# Sections & Section Header
--------------------------------------------------------------*/
section {
  padding: 80px 0;
  overflow: hidden;
}

.section-bg {
  background-color: #f5f6f7;
}

.section-header {
  text-align: center;
  padding-bottom: 70px;
}

.section-header h2 {
  font-size: 32px;
  font-weight: 700;
  position: relative;
  color: #2e3135;
}

.section-header h2:before,
.section-header h2:after {
  content: "";
  width: 50px;
  height: 2px;
  background: var(--color-primary);
  display: inline-block;
}

.section-header h2:before {
  margin: 0 15px 10px 0;
}

.section-header h2:after {
  margin: 0 0 10px 15px;
}

.section-header p {
  margin: 0 auto 0 auto;
}

@media (min-width: 1199px) {
  .section-header p {
    max-width: 60%;
  }
}
</style>

<body>

    <!-- Header Start -->
    <header>
		<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/binan.jpg'); min-height: 300px;">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                
                <h2>Barangays</h2>
                <ol>
                    <li><a href="<?= base_url('/home') ?>">Home</a></li>
                    <li class="text-warning">Barangay</li>
                </ol>
            </div>
        </div>
    </header>
	<!-- Header End -->

    <!-- Page Content Start-->
    <section class="py-5">
        <div class="main">
            <h2>BARANGAYS</h2>
            <hr class="wp-block-seperator">
        </div>
        <div class="container-fluid px-4">
            <div class="row my-3 p-3 bg-white shadow-sm rounded">
                <div class="row my-3 d-flex">
                    <section id="stats-counter" class="stats-counter section-bg">
                        <div class="container">
                            <div class="row gy-4 justify-content-center">
                                <div class="col-lg-3 col-md-6">
                                    <div class="stats-item d-flex align-items-center dept-box" style="background-color: #efefef;">
                                        <img class="dept-logo" src="assets/img/binanlogo.png" width="50" height="150">
                                        <div class="">
                                            <p class="text-center mx-4">Barangay Binan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="stats-item d-flex align-items-center dept-box" style="background-color: #efefef;">
                                        <img class="dept-logo" src="assets/img/binanlogo.png" width="50" height="150">
                                        <div class="">
                                            <p class="text-center mx-4">Barangay Canlalay</p>
                                        </div>
                                    </div>
                                </div> <!-- End Stats Item -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="stats-item d-flex align-items-center dept-box" style="background-color: #efefef;">
                                        <img class="dept-logo" src="assets/img/binanlogo.png" width="50" height="150">
                                        <div class="">
                                            <p class="text-center mx-4">Barangay Zapote</p>
                                        </div>
                                    </div>
                                </div> <!-- End Stats Item -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="stats-item d-flex align-items-center dept-box" style="background-color: #efefef;">
                                        <img class="dept-logo" src="assets/img/binanlogo.png" width="50" height="150">
                                        <div class="">
                                            <p class="text-center mx-4">Barangay Binan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="stats-item d-flex align-items-center dept-box" style="background-color: #efefef;">
                                        <img class="dept-logo" src="assets/img/binanlogo.png" width="50" height="150">
                                        <div class="">
                                            <p class="text-center mx-4">Barangay Binan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="stats-item d-flex align-items-center dept-box" style="background-color: #efefef;">
                                        <img class="dept-logo" src="assets/img/binanlogo.png" width="50" height="150">
                                        <div class="">
                                            <p class="text-center mx-4">Barangay Canlalay</p>
                                        </div>
                                    </div>
                                </div> <!-- End Stats Item -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="stats-item d-flex align-items-center dept-box" style="background-color: #efefef;">
                                        <img class="dept-logo" src="assets/img/binanlogo.png" width="50" height="150">
                                        <div class="">
                                            <p class="text-center mx-4">Barangay Zapote</p>
                                        </div>
                                    </div>
                                </div> <!-- End Stats Item -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="stats-item d-flex align-items-center dept-box" style="background-color: #efefef;">
                                        <img class="dept-logo" src="assets/img/binanlogo.png" width="50" height="150">
                                        <div class="">
                                            <p class="text-center mx-4">Barangay Binan</p>
                                        </div>
                                    </div>
                                </div><div class="col-lg-3 col-md-6">
                                    <div class="stats-item d-flex align-items-center dept-box" style="background-color: #efefef;">
                                        <img class="dept-logo" src="assets/img/binanlogo.png" width="50" height="150">
                                        <div class="">
                                            <p class="text-center mx-4">Barangay Binan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="stats-item d-flex align-items-center dept-box" style="background-color: #efefef;">
                                        <img class="dept-logo" src="assets/img/binanlogo.png" width="50" height="150">
                                        <div class="">
                                            <p class="text-center mx-4">Barangay Canlalay</p>
                                        </div>
                                    </div>
                                </div> <!-- End Stats Item -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="stats-item d-flex align-items-center dept-box" style="background-color: #efefef;">
                                        <img class="dept-logo" src="assets/img/binanlogo.png" width="50" height="150">
                                        <div class="">
                                            <p class="text-center mx-4">Barangay Zapote</p>
                                        </div>
                                    </div>
                                </div> <!-- End Stats Item -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="stats-item d-flex align-items-center dept-box" style="background-color: #efefef;">
                                        <img class="dept-logo" src="assets/img/binanlogo.png" width="50" height="150">
                                        <div class="">
                                            <p class="text-center mx-4">Barangay Binan</p>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Content End -->
</body>

</html>