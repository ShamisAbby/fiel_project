<?php

  include('db_connect.php');

  $sql = "SELECT * FROM Child_info WHERE status = 0";

  $results = mysqli_query($conn,$sql);

  $all_recodes = mysqli_fetch_all($results, MYSQLI_ASSOC);

  //print_r($all_recodes);

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>new</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <!--  Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <h1 class="text-light"><a href="index.html">BIRTH </a></h1>
        <h1><a href="index.html"><span style="color: #f6b024;">CERTIFICATE</span></a></h1>
        <h1 class="text-light"><a href="index.html">REGISTRATION</a></h1>
        <!-- <img src="assets/img/my_one.jpg" alt="" class="img-fluid rounded-circle"> -->
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#" class="nav-link scrollto active"><i class="bi bi-file-earmark-check"></i> <span>New</span></a></li>
          <li><a href="confirmed.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>confirmed</span></a></li>
          <li><a href="login.php" class="nav-link scrollto"><i class="bi bi-box-arrow-left"></i> <span>Log out</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->


  <main id="main"><!-- Start #main -->

  <div class="tittle m-3">
    <h2 class="h2">New Children</h>
  </div>
  <div class="container-fluid container-height mt-3">
      <div class="row">
        <div class="col-md-8">
          
          <?php foreach($results as $result) {?>
            
            <a href="review.php?id=<?php echo ($result['child_id']);?>">
              <div class="container px-1 "> 
                  <div class="row gx-3">
                    <div class="col">
                      <div class="p-2 border index-record shadow">
                        <h4 class="mt-1">
                          <span class="text-light">Record Of :</span> 
                        <?php echo ($result['child_Fname']);?>
                        <?php echo ($result['child_Mname']);?>
                        <?php echo ($result['child_Lname']);?>
                        </h4>
                      </div>
                    </div>
                </div>
              </div>
            </a>

          <?php } ?>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>



    <footer class="footer mb-0">
      <div class="container-fluid">
          <hr>
          <div class="row">
            <div class="col-lg-12 text-center">
              <p>&copy Copyright <a href="#"><span style="color: #f6b024;"> Group No: 7</span></a>.  All Right Reseved</p>
              <p style="margin-top:-10px;">Designed by<a href="mailto:shamisaziz52@gmail.com"><span style="color: #f6b024;"> Group 7</span></a></p>
            </div>
          </div>
      </div>
  </footer>


  </main><!-- End #main -->

  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>