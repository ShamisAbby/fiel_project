<?php

    include('db_connect.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register</title>
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
          <li><a href="index.php" class="nav-link scrollto"><i class="bi bi-file-earmark-check"></i> <span>Regitred</span></a></li>
          <li><a href="#about" class="nav-link scrollto active"><i class="bx bx-user"></i> <span>Add New</span></a></li>
          <li><a href="login.php" class="nav-link scrollto"><i class="bi bi-box-arrow-left"></i> <span>Log out</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->


  <main id="main"><!-- Start #main -->
    <div class="container-fluid">
        <form action="reg_new_hendller.php" method="POST">
            <div class="mb-3 mt-3">
               
<!-- ================================== Start Child Information ================================ -->

                <div class="form-group">
                    <h3><span style="color: #040b14;">Fill Child Informations</span></h3>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="child_Fname" class="form-label">First Name</label>
                            <input type="text" name="child_Fname" class="form-control" id="child_Fname" placeholder="Child First Name" required>
                        </div>
                        <div class="col-md-4">
                            <label for="child_Mname" class="form-label">Middle Name</label>
                            <input type="text" name="child_Mname" class="form-control" id="child_Mname" placeholder="Middle Name" required>
                        </div>
                        <div class="col-md-4">
                            <label for="child_Lname" class="form-label">Last Name</label>
                            <input type="text" name="child_Lname" class="form-control" id="child_Lname" placeholder="Last Name" required>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <label for="child_B_date" class="form-label mt-2">Birth Date</label>
                            <input type="date" name="child_B_date" class="form-control" id="child_B_date" placeholder="Birth Date" required>
                        </div>
                        <div class="col-md-6">
                            <label for="child_P_birth" class="form-label mt-2">Birth Place</label>
                            <input type="text" name="child_P_birth" class="form-control" id="child_P_birth" placeholder="Birth Place" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="hospt_name" class="form-label mt-2">Hospital Name</label>
                            <input type="text" name="hospt_name" class="form-control" id="hospt_name" placeholder="Hospital Name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="birth_time" class="form-label mt-2">Birth Time</label>
                            <input type="time" name="birth_time" class="form-control" id="birth_time" placeholder="Birth Time" required>
                        </div>   
                    </div>

                    <div class="row">
                        <p class="form-label mt-2">Gander</p><br>
                        <div class="col-md-12 d-flex flex-row">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="child_male" id="child_male">
                                <label class="form-check-label" for="child_male">Male</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="child_female" id="child_female">
                                <label class="form-check-label" for="child_female">Female</label>
                            </div>
                        </div>
                    </div>
                    <hr>

                </div>
                <!-- End child Information -->


<!-- ================================== Start Father Information ================================ -->

                <div class="form-group mt-5">
                    <h3><span style="color: #040b14;">Fill Father Informations</span></h3>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="father_Fname" class="form-label">First Name</label>
                            <input type="text" name="father_Fname" class="form-control" id="father_Fname" placeholder="First Name" required>
                        </div>
                        <div class="col-md-4">
                            <label for="father_Mname" class="form-label">Middle Name</label>
                            <input type="text" name="father_Mname" class="form-control" id="father_Mname" placeholder="Middle Name" required>
                        </div>
                        <div class="col-md-4">
                            <label for="father_Lname" class="form-label">Last Name</label>
                            <input type="text" name="father_Lname" class="form-control" id="father_Lname" placeholder="Child Last Name" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="father_nation" class="form-label mt-2">Nationality</label>
                            <input type="text" name="father_nation" class="form-control" id="father_nation" placeholder="Nationality" required>
                        </div>
                        <div class="col-md-6">
                            <label for="father_occup" class="form-label mt-2">Occuption</label>
                            <input type="text" name="father_occup" class="form-control" id="father_occup" placeholder="Occuption" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="father_trib" class="form-label mt-2">Tribe</label>
                            <input type="text" name="father_trib" class="form-control" id="father_trib" placeholder="Tribe" required> 
                        </div>
                        <div class="col-md-6">
                            <label for="father_N_id" class="form-label mt-2">Apload National ID</label>
                            <input type="file" name="father_N_id" class="form-control" id="father_N_id" placeholder="Apload National ID" accept=".pdf" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="father_Z_id" class="form-label mt-2">Apload Zanzibar ID</label>
                            <input type="file" name="father_Z_id" class="form-control" id="father_Z_id" placeholder="Apload Zanzibar ID" accept=".pdf" required>
                        </div>
                        <div class="col-md-6">
                            <label for="father_B_cert" class="form-label mt-2">Appload Birth Certificate</label>
                            <input type="file" name="father_B_cert" class="form-control" id="father_B_cert" placeholder="Appload Birth Certificate" accept=".pdf" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="marid_cert" class="form-label mt-2">Apload Married Certificate</label>
                            <input type="file" name="marid_cert" class="form-control" id="marid_cert" placeholder="Apload Married Certificate" accept=".pdf" required>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>



                </div>
                <!-- End Father Information -->


<!-- ================================== Start Mother Information ================================ -->

                <div class="form-group mt-5">
                    <h3><span style="color: #040b14;">Fill Mother Informations</span></h3>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="mother_Fname" class="form-label">First Name</label>
                            <input type="text" name="mother_Fname" class="form-control" id="mother_Fname" placeholder="First Name" required>
                        </div>
                        <div class="col-md-4">
                            <label for="mother_Mname" class="form-label">Middle Name</label>
                            <input type="text" name="mother_Mname" class="form-control" id="mother_Mname" placeholder="Middle Name" required>
                        </div>
                        <div class="col-md-4">
                            <label for="mother_Lname" class="form-label">Last Name</label>
                            <input type="text" name="mother_Lname" class="form-control" id="mother_Lname" placeholder="Last Name" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="mother_nation" class="form-label mt-2">Nationality</label>
                            <input type="text" name="mother_nation" class="form-control" id="mother_nation" placeholder="Nationality" required>
                        </div>
                        <div class="col-md-6">
                            <label for="mother_occup" class="form-label mt-2">Occuption</label>
                            <input type="text" name="mother_occup" class="form-control" id="mother_occup" placeholder="Occuption" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="mother_trib" class="form-label mt-2">Tribe</label>
                            <input type="text" name="mother_trib" class="form-control" id="mother_trib" placeholder="Tribe" required>
                        </div>
                        <div class="col-md-6">
                            <label for="mother_N_id" class="form-label mt-2">Apload National ID</label>
                            <input type="file" name="mother_N_id" class="form-control" id="mother_N_id" placeholder="Apload National ID" accept=".pdf" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="mother_Z_id" class="form-label mt-2">Apload Zanzibar ID</label>
                            <input type="file" name="mother_Z_id" class="form-control" id="mother_Z_id" placeholder="Apload Zanzibar ID" accept=".pdf" required>
                        </div>
                        <div class="col-md-6">
                            <label for="mother_B_cert" class="form-label mt-2">Appload Birth Certificate</label>
                            <input type="file" name="mother_B_cert" class="form-control" id="mother_B_cert" placeholder="Appload Birth Certificate" accept=".pdf" required>
                        </div>
                    </div>

                </div>
                <!-- End Mother Information -->

            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <button type="clear" class="btn btn-success">Clear</button>
          </form>
      
    </div>




    <footer class="footer">
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