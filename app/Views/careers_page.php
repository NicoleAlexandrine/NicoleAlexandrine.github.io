<?php

include "navbar.php"

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <title>Contact Information of the HR Department</title>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="http://santarosacity.gov.ph/assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/stylesheet.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

    <style>
        .accordion {
            width: 100%;
            height: 100%;
            margin: auto;
            padding: 2em;
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        .accordion__item {
            flex-basis: 10%;
            height: 100%;
            margin: 20px;
            border-radius: 15px !important;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Raleway;
            background-color: #e5ffe6;
            cursor: pointer;
            box-shadow: 2px 2px rgba(0, 0, 0, 0.3);
            transition:
                flex-grow .3s linear,
                background-color 0.2s ease-in
        }

        .accordion__item:hover {
            background-color: #cde9f7;
            flex-grow: 3;
        }

        .accordion__item:active {
            box-shadow: 1px 1px .1em #67adb5;
            background-color: #bde6fc;
            color: white;
        }

        .frequently_taital {
            width: 70%;
            margin: 0 auto;
            font-size: 54px;
            color: #0d0d0c;
            text-align: center;
            font-weight: bold;
        }

        .frequently_text {
            width: 100%;
            float: left;
            font-size: 16px;
            color: #0d0d0c;
            text-align: center;
            margin: 0px;
        }

        .frequently_section_2 {
            width: 100%;
            float: left;
        }

        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }

        .card {
            border: 1px solid #b7b7b7;
            border-left: 0px !important;
            border-right: 0px !important;
            border-radius: 0px;
        }

        .accordion .card:first-of-type {
            border-bottom: 0;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .card-header {
            padding: .75rem 1.25rem;
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, .03);
            border-bottom: 1px solid rgba(0, 0, 0, .125);
        }

        .card-header {
            padding: .75rem 0px;
            margin-bottom: 0;
            background-color: transparent;
            border-bottom: 1px solid #b7b7b7;
        }

    </style>
</head>

<body>
    <!-- Header Start -->
    <header>
        <div class="header breadcrumbs d-flex align-items-center">
            <div class="container position-relative d-flex justify-content-between align-items-center" data-aos="fade">
                <h2>Careers</h2>
                <ol class="breadcrumb">
                    <li><a href="<?= base_url('/home') ?>">Home</a></li>
                    <li class="text-warning">Careers</li>
                </ol>
            </div>
        </div>
    </header>
    <!-- Header End -->
    
    <!-- <section>
        <div class="section-wrapper">

        </div>
    </section> -->


    <!-- <div class="container">
        <div class='accordion'>
            <div class='accordion__item'>1</div>
            <div class='accordion__item'>2</div>
        </div>
    </div>

    <section>

        <div class="col-lg-12 col-12 m-auto">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item border border-3">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            What is Topic Listing?
                        </button>
                    </h2>

                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Topic Listing is free Bootstrap 5 CSS template. <strong>You are not allowed to redistribute
                                this template</strong> on any other template collection website without our permission.
                            Please contact TemplateMo for more detail. Thank you.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            How to find a topic?
                        </button>
                    </h2>

                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            You can search on Google with <strong>keywords</strong> such as templatemo portfolio,
                            templatemo one-page layouts, photography, digital marketing, etc.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Does it need to paid?
                        </button>
                    </h2>

                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            You can modify any of this with custom CSS or overriding our default variables. It's also
                            worth noting that just about any HTML can go within the <code>.accordion-body</code>, though
                            the transition does limit overflow.
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section> -->


    <div id="app">
        <div class="container-xxl service py-5">
            <div class="container justify-content-center">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="tab-content w-100">
                            <div class="tab-pane fade show active">
                                <div class="row g-4 d-flex justify-content-center">
                                    
                                    <div class="col-md-10 ">
                                        <div class="table-responsive">
                                            <table class="table table-hover text-dark">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th scope="col" style="width:40%">Vacancy Dates</th>
                                                        <th scope="col">Preview</th>
                                                        <th scope="col">Download</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>August 10, 2023 - 2</td>
                                                        <td><a href="" class="link-button">Preview</a></td>
                                                        <td><a href="" class="link-button">Download</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>August 10, 2023 - 1</td>
                                                        <td><a href="" class="link-button">Preview</a></td>
                                                        <td><a href="" class="link-button">Download</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>March 1, 2023 - 2</td>
                                                        <td><a href="" class="link-button">Preview</a></td>
                                                        <td><a href="" class="link-button">Download</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>March 1, 2023 - 1</td>
                                                        <td><a href="" class="link-button">Preview</a></td>
                                                        <td><a href="" class="link-button">Download</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>September 23, 2022 - 2</td>
                                                        <td><a href="" class="link-button">Preview</a></td>
                                                        <td><a href="" class="link-button">Download</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>September 23, 2022 - 1</td>
                                                        <td><a href="" class="link-button">Preview</a></td>
                                                        <td><a href="" class="link-button">Download</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>June 13, 2022 - 2</td>
                                                        <td><a href="" class="link-button">Preview</a></td>
                                                        <td><a href="" class="link-button">Download</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>June 13, 2022 - 1</td>
                                                        <td><a href="" class="link-button">Preview</a></td>
                                                        <td><a href="" class="link-button">Download</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>December 20, 2021</td>
                                                        <td><a href="" class="link-button">Preview</a></td>
                                                        <td><a href="" class="link-button">Download</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>November 22, 2021</td>
                                                        <td><a href="" class="link-button">Preview</a></td>
                                                        <td><a href="" class="link-button">Download</a></td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
<?php

include "footer.php"

    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

</html>