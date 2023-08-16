<?php
$name = $_POST['username'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$pass = "admin";
if (!empty($name) || !empty($age) || !empty($gender)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "supershop";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    $conn1 = new mysqli("localhost", "root", "", "supershop_dstbr");
    if (mysqli_connect_error()) 
    {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
    else {
     $INSERT = "INSERT into dstbr (DNAME,DPASS,DTYPE,DLOC) values(?, ?, ?, ?)";

     //Prepare statement
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssss", $name, $pass, $age, $gender);
      $stmt->execute();
      $stmt1 = $conn1->prepare($INSERT);
      $stmt1->bind_param("ssss", $name, $pass, $age, $gender);
      $stmt1->execute();
      header("location:distd.php");
     }
     $stmt->close();
     $conn->close();
    }

?>