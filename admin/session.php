<?php
$conn = mysqli_connect( "localhost", "root", "", "supershop" );
session_start();
$user_check = $_SESSION['login_user'];
$query = "SELECT admin_id FROM admin WHERE admin_id = '$user_check'";
$ses_sql = mysqli_query( $conn, $query );
$row = mysqli_fetch_assoc( $ses_sql );
$login_session = $row['admin_id'];
$CustID = $user_check;
?>