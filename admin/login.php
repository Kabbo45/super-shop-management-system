<?php
session_start();
$error = '';
if ( isset( $_POST['submitq'] ) ) {
    $username = $_POST['lsid'];
    $password = $_POST['lspass'];
    $conn = mysqli_connect( "localhost", "root", "", "supershop" );
    $query = "SELECT admin_id, admin_pass From admin Where admin_id= '$username' and admin_pass= '$password' Limit 1";
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
