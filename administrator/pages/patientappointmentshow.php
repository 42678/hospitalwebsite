<?php

session_start();
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

    <!-- ======= Header ======= -->
    <?php

include("connect.php");
// $fname = $_SESSION['fname'];
if(isset($_SESSION['a'])){

    $id = $_SESSION['a'];
}
echo $id;
$sel = "SELECT * FROM appointment where id = $id";
$result = mysqli_query($conn, $sel);
while ($row = mysqli_fetch_array($result)) {

?>
<table style="margin-top: 130px;">
<tr>
  <th>First Name</th>
<th>Address</th>
</tr>
<tr>

<td><?php echo $row['fname']?></td>
<td><?php echo $row['address']?></td>
</tr>

        <div class="container profile_body">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card h-70">
                        <div class="card-body">
                            <div class="account-settings">
                                <div class="user-profile">


                                    <div class="user-avatar">
                                        <img src="<?= $row['image']; ?>" alt="">
                                    </div>
                                    <h5 class="user-name"><?= $row['fname']; ?> <?= $row['lname']; ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="card h-100">
                        <form class="card-body">
                            <div class="row ">
                                <div class=" col-lg-12 col-md-12 col-sm-12 ">
                                    <h5 class="mb-2 text-primary fs-2">Personal Details</h5>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="">Full Name</label>
                                        <p class="fw-light fs-6" name="name"><?= $row['fname']; ?> <?= $row['lname']; ?></p>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="">Contact</label>
                                        <p class="fw-light"><?= $row['contact']; ?></p>
                                    </div>
                                </div>
                               
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                    <div class="form-group">
                                        <label for="">City</label>
                                        <p class="fw-light"><?= $row['address']; ?></p>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                    <div class="form-group">
                                        <label for="">Date</label>
                                        <p class="fw-light"><?= $row['date']; ?></p>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <label for="sTate">About</label>
                                    <p class="fw-light"><?= $row['aboutself']; ?></p>
                                </div>

                                <div class="cold-md-6">
                                    <a href="deleteappointment.php?id=<?=$row['id'];?>" class="btn btn-danger">Delete Appointment</a>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>








        <?php

}
?>











    <!-- ======= Footer ======= -->
    <footer id="footer" style="margin-top:130px;">

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

        var portfoliomodal = function(modalClick) {
            portfoliomodals[modalClick].classList.add('active');
        }

        imgcards.forEach((imgcard, i) => {
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