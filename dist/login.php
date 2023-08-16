<?php
session_start();
$error = '';
if ( isset( $_POST['submitq'] ) ) {
    $username = $_POST['lsid'];
    $password = $_POST['lspass'];
    $conn = mysqli_connect( "localhost", "root", "", "supershop" );
    $query = "SELECT DID, DPASS From dstbr Where DID= '$username' and DPASS= '$password' Limit 1";
    $stmt = $conn->prepare( $query );
    $stmt->execute();

    if ( $stmt->fetch() ) {
        $_SESSION['login_user'] = $username;
        header( "location: dhome.php" );
    } else {
        $error = "Username or Password is incorrect!";
    }

    mysqli_close( $conn );
}
?>
