<?php

include "navbar.php"

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Invest</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/stylesheet.css">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Roboto:wght@900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

    <style>
        h2 {
            font-family: Roboto;
        }
        h5{
            font-family: Roboto;
            font-weight: 800;
        }
        .fas{
            font-size: 125%;
            color: #388E3C
        }

        .file-block {
            border-radius: 20px;
            position: relative;
            overflow: hidden;
            padding: 20px;
            height: 100%;
            border-color: #388E3C !important;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        /* .rounded-circle{
        width: 40px; 
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%; 
        background-color: #388E3C;
   
        } */
    </style>


</head>

<body>
    <!-- Header Start -->
    <header>
        <div class="header breadcrumbs d-flex align-items-center">
            <div class="container position-relative d-flex justify-content-between align-items-center" data-aos="fade">
                <h2>Invest</h2>
                <ol class="breadcrumb">
                    <li><a href="<?= base_url('/home') ?>">Home</a></li>
                    <li class="text-warning">Invest</li>
                </ol>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Content Start -->
    <div class="container">
        <!-- <div class="row my-5 text-center">
            <h2>Title Text</h2>
        </div> -->
        <div class="row py-3 mb-5">
            <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0 my-3">
                <div class="file-block bg-white border border-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-2">Local Revenue Code</h5>
                        <a href="" class="d-flex text-success" onclick="openFile('assets/2016-Revenue-Code.pdf')">
                        <i class="fas fa-external-link-alt"></i>
                    </a>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0 my-3">
                <div class="file-block bg-white border border-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-2">Local Investment and Incentive Code</h5>
                        <a href="" class="d-flex text-success" onclick="openFile('assets/Local-Investment-and-Incentive-Code.pdf')">
                        <i class="fas fa-external-link-alt"></i>
                    </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0 my-3">
                <div class="file-block bg-white border border-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-2">Market Value</h5>
                        <a href="" class="d-flex text-success" onclick="openFile('assets/Market-Value.pdf')">
                        <i class="fas fa-external-link-alt"></i>
                    </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0 my-3">
                <div class="file-block bg-white border border-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-2">Cost of Doing Business</h5>
                        <a href="" class="d-flex text-success">
                        <i class="fas fa-external-link-alt"></i>
                    </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0 my-3">
                <div class="file-block bg-white border border-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-2">Investment Opportunities and Priorities</h5>
                        <a class="d-flex text-success" href="<?= base_url('/investmentopp') ?>">
                        <i class="fas fa-external-link-alt"></i>
                    </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0 my-3">
                <div class="file-block bg-white border border-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-2">Business Directory</h5>
                        <a href="" class="d-flex text-success" onclick="openFile('assets/Active-Businesses-2017.pdf')">
                        <i class="fas fa-external-link-alt"></i>
                    </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0 my-3">
                <div class="file-block bg-white border border-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-2">Safety Seal Certification</h5>
                        <a class="d-flex text-success" href="<?= base_url('/safetyseal') ?>">
                        <i class="fas fa-external-link-alt"></i>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content End -->
    <?php

include "footer.php"

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
        <script>
    function openFile(fileUrl) {
        // Redirect the user to the specified file URL
        window.open(fileUrl, '_blank');
    }
</script>
</body>

</html>