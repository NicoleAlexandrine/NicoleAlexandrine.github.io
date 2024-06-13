<?php

include "navbar.php"

    ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>Careers</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/stylesheet.css">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

    <style>
        h2 {
            font-family: Raleway;
        }

        .accordion {
            width: 100%;
            
            padding: 2em;
            display: flex;
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
            font-family: 'Raleway';
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

        input {
            border-color: #338e3c;
            border-radius: 5px;
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


    <section class="mt-5">

        <div class="col-lg-12 col-12 ">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item border border-3">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            What is Topic Listing?
                        </button>
                    </h2>

                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Topic Listing is free Bootstrap 5 CSS template. <strong>You are not allowed to redistribute
                                this template</strong> on any other template collection website without our permission.
                            Please contact TemplateMo for more detail. Thank you.
                            <a href="" class="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Apply Now</a>
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


    </section>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row mb-3">
                            <label for="name" class="col-lg-4 col-form-label">Name: </label>
                            <div class="col-lg-8">
                                <input type="name" class="form-control" id="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-lg-4 col-form-label">Email Address:
                            </label>
                            <div class="col-lg-8">
                                <input type="email" class="form-control" id="email" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="contact" class="col-lg-4 col-form-label">Contact Number:
                            </label>
                            <div class="col-lg-8">
                                <input type="number" class="form-control" id="contact" placeholder="Contact Number">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="attachment" class="col-lg-4 col-form-label">Attachments:
                            </label>
                            <div class="col-lg-8">
                                <input type="file" class="form-control" id="contact" placeholder="Resume.pdf/CV.pdf">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>

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