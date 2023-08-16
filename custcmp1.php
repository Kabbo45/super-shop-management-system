<?php
include("session.php");
$selected = $_POST['select2'];
if (!empty($selected)) {
    $conn = new mysqli("localhost", "root", "", "supershop");
    $conn1 = new mysqli("localhost", "root", "", "supershop_store_orders");
    if (mysqli_connect_error()) 
    {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
    else {
     $INSERT = "INSERT into store_orders (DID,SID) values('$selected','$CustID')";
     mysqli_query($conn, $INSERT);
     mysqli_query($conn1, $INSERT);
      header("location: sorders.php");
     }
    }

?>