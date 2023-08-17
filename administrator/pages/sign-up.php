<?php
                include("connect.php");

                if(isset($_POST['signup'])){
                $name =$_POST['name'];
                $city =$_POST['city'];
                $contact =$_POST['contact'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $work1 = $_POST['work1'];
                $work2 = $_POST['work2'];
                $date = $_POST['date'];
                $about = $_POST['about'];
                $temp = $_FILES['image']['tmp_name'];
                $folder = "upload/";
                $target = $folder. basename($_FILES['image']['name']);
                move_uploaded_file($temp, $target);
                $insert = "INSERT INTO administrator(`name`,`city`,`works`,`works2`,`contact`,`email`,`password`,`image`,`date`,`para`) VALUES('$name','$city','$work1','$work2','$contact','$email','$password','$target','$date','$about')";
                mysqli_query($conn, $insert);
                if($insert){
                  header('location:tables.php');
                }
                }

                ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    CARE Group
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="">

<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid ps-2 pe-0">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="../pages/index.php">
              CARE Group
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="../pages/dashboard.php">
                    <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                    Dashboard
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="../pages/tables.php">
                    <i class="fa fa-user opacity-6 text-dark me-1"></i>
                    Tables
                  </a>
                </li>
              </ul>
              <ul class="navbar-nav d-lg-flex d-none">
                <li class="nav-item d-flex align-items-center">
                  <a class="btn btn-outline-primary btn-sm mb-0 me-2" href="sign-in.php">Login as Doctor</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <div class="container random_container" style="margin-top:90px;">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->

      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-info h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('./images/hospital7.jpg'); background-size: cover;">
              </div>
            </div>
            <div class="col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header p-0">
                  <h4 class="font-weight-bolder">Sign Up</h4>
                  <p class="mb-0">Enter your email and password to register</p>
                </div>
                <div class="card-body p-0">




                  <form role="form" method="post" enctype="multipart/form-data">
                    <div class="input-group input-group-outline mb-3">
                      <input type="text" class="form-control" name="name" placeholder="Dr* Name">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="text" class="form-control" name="work1" placeholder="Doctor*">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="text" class="form-control" name="work2" placeholder="Speciality">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="text" class="form-control" name="city" placeholder="City">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="phone" class="form-control" name="contact" placeholder="Contact">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="phone" class="form-control" name="date" placeholder="2022/09/29">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <textarea type="text" class="form-control" name="about" placeholder="tell me about yourself"></textarea>
                    </div>
                    <div class="input-group input-group-outline mb-1">
                      <input type="file" class="form-control" name="image">
                    </div>
                    <div class="text-center">
                      <button type="submit" name="signup" class="btn btn-lg bg-gradient-info btn-lg w-100 mt-4 mb-0" >Sign Up</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>