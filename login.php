<?php
session_start();
$error = '';
if ( isset( $_POST['submitq'] ) ) {
    $username = $_POST['lsid'];
    $password = $_POST['lspass'];
    $conn = mysqli_connect( "localhost", "root", "", "supershop" );
    $query = "SELECT SID, SPASS From store Where SID= '$username' and SPASS= '$password' Limit 1";
    $stmt = $conn->prepare( $query );
    $stmt->execute();

    if ( $stmt->fetch()) {
        $_SESSION['login_user'] = $username;
        header( "location: shome.php" );
    } else {
        $error = "Username or Password is incorrect!";
    }

    mysqli_close( $conn );
}
?>
