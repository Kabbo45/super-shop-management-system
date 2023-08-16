<?php
include("session.php");
$username = $_POST['username'];
$subj = $_POST['email'];
if (!empty($username) || !empty($subj)) {
    $conn = new mysqli("localhost", "root", "", "supershop");
    $conn1 = new mysqli("localhost", "root", "", "supershop_sales");
    if (mysqli_connect_error()) 
    {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
    else {
     $INSERT = "INSERT into sales (SDATE, SCOST, SID) values('$username','$subj','$CustID')";
     mysqli_query($conn, $INSERT);
     mysqli_query($conn1, $INSERT);
      header("location: ssales.php");
     }
    }
?>