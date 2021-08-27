<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add Location</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon/favicon.ico" rel="icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/modal.css" rel="stylesheet">


  <!-- script modal-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Bookmark Location</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="trainers.php">Place</a></li>
          <li><a href="events.php">View</a></li>
          <li class="active"><a href="contact.php">Add</a></li>
          <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Account </a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="contact.html" class="get-started-btn">Get Started</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Add location</h2>
        <p>add the location you want to save. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px; " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32657810.113281835!2d99.40313944049043!3d-2.3196034685629856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c4c07d7496404b7%3A0xe37b4de71badf485!2sIndonesia!5e0!3m2!1sen!2sid!4v1626317823957!5m2!1sen!2sid" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">
        <div class="row mt-5">
          <div class="col-lg-8 mt-5 mt-lg-0">
            <form action="proses_form.php" method="post" role="form" enctype="multipart/form-data" class="php-email-form">
              <div class="form-row" style="position: relative; left: 185px;">
                <div class="col-md-6 form-group">
                  Latitude:<input type="text" name="latitude" class="form-control" placeholder="Latitude" data-msg="Please enter Latitude location" />

                </div>
                <div class="col-md-6 form-group">
                  Longtitude<input type="text" class="form-control" name="longtitude" placeholder="Longtitude" data-msg="Please enter Longtitude location" />

                </div>
              </div>
              <div class="mid" style="position: relative; left: 185px;">
                <div class="form-group">
                  Location:<input type="text" class="form-control" name="lokasi" placeholder="Location" data-msg="Please enter name location" />

                </div>
                <div class="form-group">
                  Date : <input type="date" name="tanggal" class="form-control" data-msg="please add the date">
                </div>
                <div>
                  <div class="form-group">
                    Picture: <input type="file" class="form-control" name="gambar" placeholder="picture">
                  </div>
                  <div class="form-group">
                    Description:<textarea class="form-control" name="deskripsi" rows="5" data-msg="write a description of the location you want to save" placeholder="Deskripsi"></textarea> </div>

                  <div class="mb-3">
                    <div class="loading">Loading</div>

                    <div class="sent-message">Your location has been saved</div>
                  </div>
                  <div class="text-center"><button type="submit" name="submit">Submit</button></div>
                </div>
              </div>
            </form>

          </div>

        </div>

      </div>
      <!-- Modal -->
      <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-sm">

          <!-- Modal content-->

          <div class="modal-content">
            <div class="modal-header1">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Login</h4>
            </div>

            <div class="modal-body">
              <form method="post" action="check-login.php">
                <div class="form-group">
                  <label for="username"><span class="glyphicon glyphicon-user"></span> Username:</label>
                  <input type="text" class="form-control" id="username" placeholder="ketikkan username anda" name="username" autocomplete="off" required>
                </div>
                <div class="form-group">
                  <label for="password"><span class="glyphicon glyphicon-cog"></span> Password:</label>
                  <input type="password" class="form-control" id="password" placeholder="ketikkan password anda" name="password">
                </div>
            </div>

            <div class="modal-footer">
              <button type="submit" name="login" class="btn btn-default btn-success">LOGIN</button>
            </div>
            </form>
            <div class="text-center">
              <a class="small" href="forgot-password.html">Forgot Password?</a>
            </div>
            <div class="text-center">
              <a class="small" href="register.html">Create an Account!</a>
            </div>

          </div>
        </div>
      </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">



  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/js/maps.js"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <script id="map" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDS_vdRwj5tWdwAcFDw-gcZo_vlQgzql2E&callback=initMap&libraries=&v=weekly" async></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>