<?php

session_start();
if(empty($_SESSION['dname'])){
  header('location:sign-in.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Index Website</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->



  <style>
    .account-settings .user-profile {
      margin: 0 0 1rem 0;
      padding-bottom: 1rem;
      text-align: center;
    }

    .account-settings .user-profile .user-avatar {
      margin: 0 0 1rem 0;
    }

    .account-settings .user-profile .user-avatar img {
      width: 100%;
      -webkit-border-radius: 100px;
      -moz-border-radius: 100px;
      border-radius: 100px;
    }

    .account-settings .user-profile h5.user-name {
      margin: 0 0 0.5rem 0;
    }

    .account-settings .user-profile h6.user-email {
      margin: 0;
      font-size: 0.8rem;
      font-weight: 400;
      color: #9fa8b9;
    }

    .account-settings .about {
      margin: 2rem 0 0 0;
      text-align: center;
    }

    .account-settings .about h5 {
      margin: 0 0 15px 0;
      color: #007ae1;
    }

    .account-settings .about p {
      font-size: 0.825rem;
    }

    .form-control {
      border: 1px solid #cfd1d8;
      -webkit-border-radius: 2px;
      -moz-border-radius: 2px;
      border-radius: 2px;
      font-size: .825rem;
      background: #ffffff;
      color: #2e323c;
    }

    .card {
      background: #ffffff;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
      border: 0;
      margin-bottom: 1rem;
    }

    .profile_body {
      margin-top: 150px;
      margin-bottom: 140px;
    }

    .portfolio-list .img-card {
      max-width: 100%;
      height: 100%;
      margin: 0;
      padding: 0;
      text-align: center;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 10px;
      cursor: pointer;
      overflow: hidden;
      position: relative;
    }

    .portfolio-list .img-card .info {
      z-index: 777;
      overflow: hidden;
      color: white;
      transform: translateY(20px);
      opacity: 0;
      width: 100%;
      height: 100%;
      transition: all 0.5s ease;
      display: flex;
      justify-content: center;
      flex-direction: column;
      background: rgba(0, 0, 0, .5);
    }

    .portfolio-list .img-card:hover .info {
      transform: translateY(0);
      opacity: 1;
    }

    .portfolio-list .img-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .portfolio-modal {
      position: fixed;
      width: 100%;
      height: 100vh;
      z-index: 999999;
      top: 0;
      left: 0;
      backdrop-filter: blur(20px);
      display: flex;
      align-items: center;
      justify-content: center;
      background: rgba(0, 0, 0, .5);
      visibility: hidden;
      opacity: 0;
      transition: all 0.3s ease;
    }

    .portfolio-modal.active {
      visibility: visible;
      opacity: 1;
    }

    .portfolio-modal-body {
      position: relative;
      background: white;
      max-width: 600px;
      margin: 20px;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 4px 5px 20px grey;
    }

    .portfolio-close-btn {
      position: absolute;
      top: 0;
      font-size: 25px;
      right: 0;
      margin: 20px;
      cursor: pointer;
    }


    .portfolio-modal-body img {
      width: 100%;
      margin: 20px 0;
      border-radius: 10px;
    }
  </style>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css
  ">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

 <!-- ======= Top Bar ======= -->
 <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">chander@gmail.com</a>
        <i class="bi bi-phone"></i> +923646474836
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="#">CARE Group</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="doctor.php">Home</a></li>
          <li><a class="nav-link scrollto" href="doctor.php">Diseases</a></li>
          <li><a class="nav-link scrollto" href="doctor.php">News</a></li>
          <li><a class="nav-link " href="appointmentshow.php">View Appointments</a></li>
          <div class="img-card-container">
                  <div class="img-card">
                      <div class="info">
                          <button class="appointment-btn mx-3 py-2 px-4 text-white border-0">LogOut</button>
                        </div>
                    </div>
                    <div class="portfolio-modal flex-center">
                      <div class="portfolio-modal-body">
                        <i class="fas fa-times portfolio-close-btn"></i>
                        <h3 class="mb-4">Would You Really Want to LogOut?</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos nam, molestiae non recusandae sed, magnam doloribus, pariatur sapiente eveniet aspernatur aliquam incidunt totam ducimus inventore cumque minima! Ea, consequuntur veniam?</p>
                        <div class="d-flex align-items-center justify-content-end">
                        <a href="logout_patient.php" class="btn btn-primary py-2 px-3 text-white">Log Out</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="nav-link scrollto d-inline-block" href="doctor_profile.php"><i class="bi bi-person-circle text-primary fs-4"></i> Profile </a>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      


    </div>
  </header><!-- End Header -->


  <?php
  include("connect.php");
  $id = $_SESSION['did'];
  $sel = "SELECT * FROM appointment WHERE doctor_id =$id";
  $result = mysqli_query($conn, $sel);
  ?>

  <div class="container-fluid py-4" style="margin-top: 100px; margin-bottom:250px;">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header position-relative bg-white">
            <div class=" shadow-info pt-4 pb-3 rounded-4" style="background-color: #17A2B8;">
              <h6 class="text-white text-capitalize ps-3">Appointment table</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">

              <table class="table">
                <tr>
                  <td>#</td>
                  <td>First Name</td>
                  <td>Last Name</td>
                  <td>Contact</td>
                  <td>Date</td>
                  <td>Disease</td>
                </tr>
                <?php
                if ($result->num_rows > 0) {
                  while ($row5 = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                      <td><?= $row5['id']; ?></td>
                      <td><?= $row5['fname']; ?></td>
                      <td><?= $row5['lname']; ?></td>
                      <td><?= $row5['contact']; ?></td>
                      <td><?= $row5['date']; ?></td>
                      <td><?= $row5['aboutself']; ?></td>
                    </tr>
                  <?php
                  }
                } else {
                  ?>
                    <td rowspan="6">No recod found</td>
                <?php
                }


                ?>
              </table>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <footer id="footer">
    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>CARE Group</span></strong>. All Rights Reserved
        </div>
        <div class="credits"> Designed by <a href="https://bootstrapmade.com/">Chander Raja</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    const portfoliomodals = document.querySelectorAll('.portfolio-modal');
const imgcards = document.querySelectorAll('.img-card');
const portfoliobtn = document.querySelectorAll('.portfolio-close-btn');

var portfoliomodal = function (modalClick){
    portfoliomodals[modalClick].classList.add('active');
}

imgcards.forEach((imgcard, i) =>{
    imgcard.addEventListener("click", () => {
        portfoliomodal(i);
    });
});


portfoliobtn.forEach((portbtn) => {
    portbtn.addEventListener("click", () => {
        portfoliomodals.forEach((portfoliomodalview) => {
            portfoliomodalview.classList.remove("active");
        });
    });
});
  </script>
</body>

</html>