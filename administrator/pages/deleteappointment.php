<?php

include("connect.php");
$id = $_GET['id'];
$del = "DELETE FROM appointment WHERE id='$id'";
mysqli_query($conn, $del);

if($del){
    header('location:appointmentpage.php');
}


?>