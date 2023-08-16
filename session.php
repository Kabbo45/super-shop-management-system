<?php
$conn = mysqli_connect( "localhost", "root", "", "supershop" );
$conn1 = mysqli_connect( "localhost", "root", "", "supershop_store" );
session_start();
$user_check = $_SESSION['login_user'];
$query = "SELECT SBRANCHNAME from store where SID = '$user_check'";
$ses_sql = mysqli_query( $conn, $query );
$row = mysqli_fetch_assoc( $ses_sql );
$login_session = $row['SBRANCHNAME'];
$CustID = $user_check;
?>

