<?php
require 'function.php';
$webdb = query("SELECT * FROM webdb ");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>History Location</title>
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
  <link href="assets/css/Login.css" rel="stylesheet">
  <link href="assets/css/modal.css" rel="stylesheet">


  <!-- script modal-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Booksmark Location</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="trainers.php">Place</a></li>
          <li class="active"><a href="events.php">View</a></li>
          <li><a href="contact.php">Add</a></li>
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
        <h2>View</h2>
        <p>To see location that you have saved </p>
      </div>
    </div><!-- End Breadcrumbs -->


    <div id="History">
      <table style="width: 85%; margin-right:auto; margin-left:auto;" text-align="center">
        <thead>
          <tr>
            <th>No</th>
            <th>Latitude</th>
            <th>Longtitude</th>
            <th>Location</th>
            <th>Date</th>
            <th>Deskripsi</th>
            <th>Gambar</th>
            <th>Action</th>
          </tr>
        </thead>
    </div>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($webdb as $row) : ?>

        <tr>
          <td><?= $i; ?></td>
          <td><?= $row['latitude']; ?></td>
          <td><?= $row['longtitude']; ?></td>
          <td><?= $row['lokasi']; ?></td>
          <td><?= $row['tanggal']; ?></td>
          <td><?= $row['deskripsi']; ?></td>
          <td><img src="img/<?php echo $row["gambar"]; ?> " width="155"></td>
          <td>
            <a href="hapus.php?id=<?= $row["id"]; ?>" class="btn btn-sm btn-success" id="btn" onclick="return confirm('are you sure want Delete this data?');">Delete</a>
          </td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
      <?php

      ?>
    </tbody>

    </table>
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
  </main><!-- End #main -->

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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>