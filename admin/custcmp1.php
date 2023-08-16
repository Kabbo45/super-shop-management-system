<?php
$name = $_POST['name'];
$city = $_POST['city'];
$region = $_POST['region'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$pass = "admin";
if ( !empty( $name ) || !empty( $age ) || !empty( $gender ) ) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "supershop";
    $db = "supershop_store";
    $conn = new mysqli( $host, $dbUsername, $dbPassword, $dbname );
    $conn1 = new mysqli( $host, $dbUsername, $dbPassword, $db );
    if ( mysqli_connect_error() )  {
        die( 'Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error() );
    } else {
        $INSERT = "INSERT into store (SPASS,SBRANCHNAME,SCITY,SREGION,SSTATE,SPCODE) values(?, ?, ?, ?, ?, ?)";

        //Prepare statement
        $stmt = $conn->prepare( $INSERT );
        $stmt->bind_param( "sssssi", $pass, $name, $city, $region, $state, $pincode );
        $stmt->execute();
        $stmt1 = $conn1->prepare( $INSERT );
        $stmt1->bind_param( "sssssi", $pass, $name, $city, $region, $state, $pincode );
        $stmt1->execute();
        header( "location:stored.php" );
    }
    $stmt->close();
    $conn->close();
}
?>