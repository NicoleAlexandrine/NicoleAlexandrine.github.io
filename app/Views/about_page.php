<?php

include "navbar.php"

  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mission & Vision</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link href="assets/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="../public/stylesheet.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Roboto:wght@900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Dela+Gothic+One">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
		integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
		integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
  <style>
    /* body{
      background-color: #f6f9ff;
    } */
    /*--------------------
-------- ABOUT --------
 --------------------*/
 .about-counter .about-item {
  background: #fff;
  box-shadow: 0px 0 30px rgba(82, 86, 94, 0.05);
  padding: 30px;
}

.about-counter .about-item i {
  font-size: 42px;
  line-height: 0;
  margin-right: 20px;
  color: var(--color-primary);
}

#about .container {
  display: flex;
  flex-wrap: wrap;
}
#about h2{
  color: #388E3C; 
  font-family: 'Roboto'; 
  font-size: 35px
}

.box {
  margin: 0 10px 10px 10px;
  padding: 30px;
  flex: 1 0 50%;
  box-sizing: border-box;
  border-radius: 10px;
  background: #fff;
  transition: all 0.3s ease-in-out;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
}

@media (max-width: 600px) {
  .box {
    flex-basis: 100%;
    max-width: 100%;
  }
}

.breadcrumb {
  display: flex;
  align-items: center;
  list-style-type: none;
  margin: 0;
  padding: 0;
}
.abouthdr{
  font-family: 'Yellowtail'; 
  color: #388E3C; 
  font-size: 64px
}
@media (max-width: 767px) {
.abouthdr {
  font-size: 40px;
  margin-top: 10px;
}
}

#about .box:hover {
  transform: translateY(-5px);
}

#about .box:hover .title a {
    color: #007bff;
}
  </style>
</head>

<body>

  <!-- Header Start -->
  <header>
    <div class="header breadcrumbs d-flex align-items-center">
      <div class="container position-relative d-flex justify-content-between align-items-center" data-aos="fade">
          <h2><b>About<b></h2>
          <ol class="breadcrumb">
            <li><a href="<?= base_url('/home') ?>">Home</a></li>
            <li class="text-warning">About</li>
          </ol>
      </div>
    </div>
  </header>
  <!-- Header End -->

  <!-- Page Content Start-->
  <section id="about" class="my-5">
    <div class="main text-center">
      <h1 class="abouthdr text-center" style="">“Trading and Commerce Center of the South”</h1>
      <!-- <hr class="wp-block-seperator"> -->
    </div>
    <div class="container-fluid px-4">
      <div class="row rounded">
        <div class="row my-5 d-flex">
          <section id="about-counter" class="about-counter section-bg">
            <div class="container" style="padding-bottom: 20px">
              <!-- <header class="section-header">
                <h3 style="color:black"><strong>Mission and Vision</strong></h3>
              </header> -->
              <div class="row gy-4 justify-content-center">
                <div class="col-lg-12 col-md-6">
                  <div class="box border border-3" style="border-color: #004600 !important; ">
                    <h2 class="text-left" ><strong>MISSION</strong></h2>
                    <p class="text-left">
                      The leadership of the City Biñan is committed to exercise its power to: <br>
                      • Promote social order and ensure public safety; <br>
                      • Enhance economic prosperity through job generation, manpower and skills development, encourage
                      and support local industries, and expansion; <br>
                      • Promote social justice by way of ensuring basic services, equal opportunities and full
                      protection and dispensation of law; <br>
                      • Promote and prioritize opportunities for learning experiences to prepare our youth to be
                      globally competitive; and <br>
                      • Provide modern and needed infrastructure facilities.
                    </p>
                  </div>
                </div>
                <!-- End Stats Item -->
                <div class="col-lg-12 col-md-6">
                  <div class="box border border-3" style="border-color: #004600 !important">
                    <h2 class="text-left"><strong>VISION</strong></h2>
                    <p class="text-left" style="color:#0A0A0A"> A modern humanely developed City of Biñan, where it's
                      people enjoy peace and security, economic stability, social justice, a well-preserved education, responsive social
                      services, modernized infrastructure facilities all anchored on good governance.</p>
                  </div>
                </div>
                <!-- End Stats Item -->
              </div>
            </div>
            <div class="container">
              <!-- <header class="section-header">
                <h3 style="color:black"><strong>Quality Policy</strong></h3>
              </header> -->
              <div class="row gy-4 justify-content-center">
                <div class="col-lg-12 col-md-7">
                  <div class="box border border-3" style="border-color: #004600 !important">
                    <h2 class="has-text-align-center has-text-color" id="quality"><strong>QUALITY
                        POLICY</strong></h2>
                    <p class="has-text-align-center" style="color:#0A0A0A">We are committed to implement the Quality
                      Management System and together with the stakeholders are committed to empower the people to
                      develop sustainable and economic enterprises.</p>
                    <p style="color:#0A0A0A">We visualize a modern humanely developed City of Biñan, where its people
                      enjoy peace and security, economic stability, social justice, a well-preserved environment,
                      accessible quality education, responsive social services and modernized infrastructure facilities
                      all anchored on good governance.</P>
                    <p style="color:#0A0A0A">To achieve all these, the management of the City Government of Biñan shall:
                    </p>
                    <ul>
                      <li>Empower our personnel to resolve problems and initiate improvements;</li>
                      <li>Comply with all the applicable legal and other statutory requirements;</li>
                      <li>Initiate dynamic and systematic reponse/s to our internal and external customer's needs;</li>
                      <li>Conduct periodic reviews by the management on the quality objectives and targets to monitor
                        and keep track of the progress of the programs and ensure continued suitability of the
                        established QMS in relation to our quality process performance</li>
                    </ul>
                    <p>The City Government of Biñan shall ensure the effective implementation and maintenance of the
                      Quality Management System and compliance to the requirements of ISO 9001:2015, as well as ensuring
                      its sustainability and availability to all interested parties within the confines of applicable
                      laws.</p>
                  </div>
                </div>
                <!-- End Stats Item -->
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
  <!-- Page Content End -->
  <!-- Footer -->
  <?php

include "footer.php"

    ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>