<?php

    include "navbar.php"

?>

<!doctype html>
<html lang="en">

<head>
    <title>City Officials</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link href="assets/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="../public/stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Roboto:wght@900&display=swap" rel="stylesheet">
  
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Dela+Gothic+One">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">



  <!-- Bootstrap core CSS
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->

  <style>
   .team .member {
    text-align: center;
    border-radius: 10px;
    padding: 15px;
    overflow: hidden;
    box-shadow: 0px 2px 25px rgba(0, 0, 0, 0.1);
    font-family: 'Roboto';
}
  </style>


</head>
<!-- Header Start -->
<header>
    <div class="header breadcrumbs d-flex align-items-center">
      <div class="container position-relative d-flex justify-content-between align-items-center" data-aos="fade">
          <h2>City Officials</h2>
          <ol class="breadcrumb">
            <li><a href="<?= base_url('/home') ?>">Home</a></li>
            <li class="text-warning">City Officials</li>
          </ol>
      </div>
    </div>
  </header>
  <!-- Header End -->
<section id="team" class="team py-3">
    <div class="container">
        <div class="section-header">

        </div>
        <div class="row gy-4">
            <div class="col-xl-3 col-md-6 d-flex justify-content-center ">
                <div class="member test-color">
                    <img src="assets/img/team/HonMarlyn.jpg" class="img-fluid" alt="">
                    <h4>Walter White</h4>
                    <span>Web Development</span>
                </div>
            </div>
        </div>
    </div>
</section>

<body>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>