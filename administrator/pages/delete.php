<?php

include("connect.php");
$id = $_GET['id'];
$del = "DELETE FROM administrator WHERE id='$id'";
mysqli_query($conn, $del);

if($del){
    header('location:tables.php');
}


?>