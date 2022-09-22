<?php

  include('db_connect.php');

  if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    $sql = "SELECT * FROM Child_info WHERE child_id = $id";

    $results = mysqli_query($conn,$sql);

    $ll  = mysqli_fetch_assoc($results);

    // mysqli_free_result($results);

    // mysqli_close($conn);

    // print_r($result);
  }

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Review</title>
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
          <li><a href="#" class="nav-link scrollto active"><i class="bi bi-file-earmark-check"></i> <span>Regitred</span></a></li>
          <li><a href="reg_new.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Add New</span></a></li>
          <li><a href="login.php" class="nav-link scrollto"><i class="bi bi-box-arrow-left"></i> <span>Log out</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->


  <main id="main"><!-- Start #main -->

    <div class="container-fluid review-container">

    <?php foreach($results as $result) {?>
      <div class="row">
        <div class="heading text-center mt-4">
          <h5 style ="text-transform: uppercase;">
            <span style="color: #149ddd; font-weight: bolder;">
              <?php echo ($result['child_Fname']);?>
              <?php echo ($result['child_Mname']);?>
              <?php echo ($result['child_Lname']);?> 
            </span>  
              informations
          </h5>
        </div>
      </div>

      <div class="review-tittle">
        <h4><span style="color: #040b14;" >Child Informations</span></h4>
      </div>

      <div class="row record-space">
        <div class="col-md-6">Name: 
          <span style="color: #149ddd; font-weight: bolder;">
            <?php echo ($result['child_Fname']);?>
            <?php echo ($result['child_Mname']);?>
            <?php echo ($result['child_Lname']);?>
          </span>
        </div>
        <div class="col-md-6"><p>Birth Date: 
          <span style="color: #149ddd; font-weight: bolder;">
            <?php echo ($result['child_b_date']);?>
          </span>
        </p></div>
      </div>

      <div class="row record-space">
        <div class="col-md-6"><p>Place of Birth: 
          <span style="color: #149ddd; font-weight: bolder;">
            <?php echo ($result['child_p_birth']);?>
          </span>
        </p></div>
        <div class="col-md-6"><p>Hospital: 
          <span style="color: #149ddd; font-weight: bolder;">
            <?php echo ($result['hospit_name']);?>
          </span>
        </p></div>
      </div>
      <div class="row record-space">
          <div class="col-md-6">Birth Time: 
            <span style="color: #149ddd; font-weight: bolder;">
              <?php echo ($result['birth_time']);?>
            </span>
          </div>
        <div class="col-md-6"> 
        </div>
        
      </div>

      <hr>
      <div class="review-tittle">
        <h4><span style="color: #040b14;">Father Informations</span></h4>
      </div>

      <div class="row record-space">
        <div class="col-md-6"><p>Name: 
          <span style="color: #149ddd; font-weight: bolder;">
            <?php echo ($result['father_Fname']);?>
            <?php echo ($result['father_Mname']);?>
            <?php echo ($result['father_Lname']);?>
          </span>
        </p></div>
        <div class="col-md-6">Nationality: 
          <span style="color: #149ddd; font-weight: bolder;">
          <?php echo ($result['father_nation']);?>
          </span>
        </div>
      </div>

      <div class="row record-space">
        <div class="col-md-6">Occupation: 
          <span style="color: #149ddd; font-weight: bolder;">
            <?php echo ($result['father_occup']);?>
          </span>
        </div>
        <div class="col-md-6">Tribe: 
          <span style="color: #149ddd; font-weight: bolder;">
            <?php echo ($result['father_trib']);?>
          </span>
        </div>
      </div>
      <div class="row record-space">
        <div class="col-md-6">Birth Certificate: 
          <span style="color: #149ddd; font-weight: bolder;">
            <?php echo ($result['father_B_cert']);?>
          </span>
        </div>
        <div class="col-md-6">Married Certificate: 
          <span style="color: #149ddd; font-weight: bolder;">
          <?php echo ($result['maried_cert']);?>
          </span>
        </div>
      </div>
      <div class="row record-space">
        <div class="col-md-6">National ID: 
          <span style="color: #149ddd; font-weight: bolder;">
            <?php echo ($result['father_N_id']);?>
          </span>
        </div>
        <div class="col-md-6">Zanzibarian ID: 
          <span style="color: #149ddd; font-weight: bolder;">
            <?php echo ($result['father_Z_id']);?>
          </span>
        </div>
      </div>

<hr>
      <div class="review-tittle">
        <h4><span style="color: #040b14;" >Mother Informations</span></h4>
      </div>      
      <div class="row record-space">
        <div class="col-md-6"><p>Name: 
          <span style="color: #149ddd; font-weight: bolder;">
            <?php echo ($result['mother_Fname']);?>
            <?php echo ($result['mother_Mname']);?>
            <?php echo ($result['mother_Lname']);?>
          </span>
        </p></div>
        <div class="col-md-6">Nationality: 
          <span style="color: #149ddd; font-weight: bolder;">
            <?php echo ($result['mother_nation']);?>
          </span>
        </div>
      </div>

      <div class="row record-space">
        <div class="col-md-6">Occupation: 
          <span style="color: #149ddd; font-weight: bolder;">
            <?php echo ($result['mother_occup']);?>
          </span>
        </div>
        <div class="col-md-6">Tribe: 
          <span style="color: #149ddd; font-weight: bolder;">
            <?php echo ($result['mother_tribe']);?>
          </span>
        </div>
      </div>
      <div class="row record-space">
        <div class="col-md-6">Birth Certificate: 
          <span style="color: #149ddd; font-weight: bolder;">
            <?php echo ($result['mother_B_cert']);?>
          </span>
        </div>
        <div class="col-md-6">Married Certificate: 
          <span style="color: #149ddd; font-weight: bolder;">
            <?php echo ($result['maried_cert']);?>
          </span>
        </div>
      </div>
      <div class="row record-space mb-4">
        <div class="col-md-6">National ID: 
          <span style="color: #149ddd; font-weight: bolder;">
            <?php echo ($result['mother_N_id']);?>
          </span>
        </div>
        <div class="col-md-6">Zanzibarian ID: 
          <span style="color: #149ddd; font-weight: bolder;">
            <?php echo ($result['mother_Z_id']);?>
          </span>
        </div>

      </div>

      <form action="">
            <button type="submit" name="submit" class="btn btn-success">
             <a href="review_hendller.php?id=<?php echo ($result['child_id']);?>" class="text-light">Confirm</a> </button>
      </form>
<?php }?>
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