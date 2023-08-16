<?php
$conn = mysqli_connect( "localhost", "root", "", "supershop" );
$conn1 = mysqli_connect( "localhost", "root", "", "supershop_dstbr" );
$conn2 = mysqli_connect( "localhost", "root", "", "supershop_store_orders" );
session_start();
$user_check = $_SESSION['login_user'];
$query = "SELECT DNAME from dstbr where DID = '$user_check'";
$ses_sql = mysqli_query( $conn, $query );
$row = mysqli_fetch_assoc( $ses_sql );
$login_session = $row['DNAME'];
$CustID = $user_check;
?>