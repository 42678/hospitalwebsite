
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
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
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
              <div class=" bg-gradient-info h-100 w-100 rounded-5" >
<?php
              include("connect.php");

$id = $_GET['id'];
$sel = "SELECT *FROM patient WHERE id = '$id'";
$result = mysqli_query($conn, $sel);

while($row=mysqli_fetch_array($result)){

    ?>
              <img src="<?= $row['image']?>" class="rounded-5" width="100%" height="100%" alt="user1">

<?php
}
              ?>
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Update Your Account</h4>
                  <p class="mb-0">Change what ever you want!</p>
                </div>
                <div class="card-body">
                <?php
include("connect.php");

if(isset($_POST['updatep'])){



    $name = $_FILES['image']['name'];

    if($name){
    $id = $_GET['id'];
    $name = $_POST['name'];
    $city = $_POST['city'];
    $contact = $_POST['contact'];
    $date = $_POST['date'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $about = $_POST['para'];
    $tmp = $_FILES['image']['tmp_name'];
    $folder = "upload/";
    $target =$folder. basename($_FILES['image']['name']);
    move_uploaded_file($tmp, $target);
    $update = "UPDATE patient set name='$name', city='$city', contact='$contact',date='$date', para='$about', image='$target',email='$email', password = '$password' WHERE id = '$id'";
    mysqli_query($conn, $update);
}


else{
    $id = $_GET['id'];
    $name = $_POST['name'];
    $city = $_POST['city'];
    $contact = $_POST['contact'];
    $date = $_POST['date'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $about = $_POST['para'];
    $update = "UPDATE patient set name='$name', city='$city', contact='$contact',date='$date',para='$about',email='$email', password = '$password' WHERE id = '$id'";
    mysqli_query($conn, $update);
}

if($update){
    header('location:tables.php');
}
    

}
    include("connect.php");

    $id = $_GET['id'];
    $sel = "SELECT *FROM patient WHERE id = '$id'";
    $result = mysqli_query($conn, $sel);

    while($row=mysqli_fetch_array($result)){
    ?>
                  <form role="form" method="post" enctype="multipart/form-data">
                    <div class="input-group input-group-outline mb-3">
                      <input type="text" class="form-control" name="name" value="<?=$row['name']?>" placeholder="name">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="city" class="form-control" name="city" value="<?=$row['city']?>" placeholder="city">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="phone" class="form-control" name="contact"  value="<?=$row['contact']?>" placeholder="contact">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="date" class="form-control" name="date" value="<?=$row['date']?>" placeholder="date">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="email" class="form-control" name="email"  value="<?=$row['email']?>"placeholder="email" >
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="password" class="form-control" name="password" value="<?=$row['password']?>" placeholder="password">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="text" class="form-control" name="para" value="<?=$row['para']?>" placeholder="About"></input>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="file" class="form-control" name="image">
                    </div>
                    <div class="text-center">
                      <button type="submit" name="updatep" class="btn btn-lg bg-gradient-info btn-lg w-100 mt-4 mb-0" >Update Patient</button>
                    </div>


                    <?php


    }
    ?>
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