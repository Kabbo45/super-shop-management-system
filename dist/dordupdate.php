<?php
include( 'session.php' );
if ( !isset( $_SESSION['login_user'] ) ) {
    header( "location: ../index.php" );
}
?>

<html>
<style>
    .fancy {
        position: relative;
        white-space: nowrap;

        &:after {
            --deco-height: 0.3125em;
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: calc(var(--deco-height) * -0.625);
            height: var(--deco-height);
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='64' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cg clip-path='url(%23a)'%3E%3Cpath d='M-17 30.5C-1 22 72-4 54 13 37.9 28.2-2.5 57.5 16 55.5s72-29 104-40' stroke='%2300FDCF' stroke-width='10'/%3E%3C/g%3E%3Cdefs%3E%3CclipPath id='a'%3E%3Cpath fill='%23fff' d='M0 0h100v64H0z'/%3E%3C/clipPath%3E%3C/defs%3E%3C/svg%3E%0A");
            background-size: auto 100%;
            background-repeat: round;
            background-position: 0em;
        }
    }

    h3 {
        font-family: "Poppins";
        font-size: 30px;
        font-weight: 600;
        color: white;
    }
    
    .ffd {
        font-family: "Poppins";
        font-size: 20px;
        font-weight: 600;
        background-color: white;
        color: Black;
    }

    .ffd:hover {
        background-color: #00fdcf;
    }

    .fd {
        font-family: "Poppins";
        font-size: 20px;
        font-weight: 600;
        background-color: white;
        color: Black;
        width: 100%;
    }

    .fd:hover {
        background-color: #00fdcf;
    }

    .tabin {
        width: 100%;
        font-family: "Poppins";
        font-size: 20px;
        font-weight: 600;
        background: none;
        color: white;
    }

    table,
    tr,
    td {
        font-family: "Poppins";
        font-size: 20px;
        border: 2px solid #00fdcf;
        border-collapse: collapse;
        border-spacing: 4;
        color: white;
        text-align: center;
        font-weight: 600;
    }

    body {
        background-color: black;
    }

    h1 {
        font-family: "Poppins";
        color: white;
        font-size: 30px;
        margin-top: 20px;
        margin-left: 10px;
    }

    nav {
        font-family: "Poppins";
        text-align: right;
        margin-top: -60px;
        margin-right: 10px;
    }

    .naav {
        margin-right: 10px;
    }

    .edit {
        margin-top: 30px;
        background-color: white;
        color: black;
        font-family: "Poppins";
        font-weight: 600;
        font-size: 20px;
        padding: 5px 10px;
    }

    .edit:hover {
        background-color: #00fdcf;
        transition-duration: .5s;
    }

    button {
        border: solid 2px #00fdcf;
        font-family: "Poppins";
        font-weight: 600;
        font-size: 20px;
        background: none;
        padding: 5px 10px;
        color: white;
    }

    button:hover {
        background-color: #00fdcf;
        color: black;
    }

    .log:hover {
        background-color: red;
        color: white;
        border: solid 2px red;
    }

    .top {
        background-color: black;
        padding: 10px 10px;
        margin-top: -10px;
        margin-left: -10px;
        margin-right: -10px;
        margin-bottom: -20px;
    }
</style>

<body>
    <div class="top">
        <h1>Distributor Dashboard</h1>
        <nav class="menu">
            <ul>
                <a class="naav" href="dhome.php"><button>Home</button></a>
                <a class="naav" href="dprofile.php"><button>Profile</button></a>
                <a class="naav" href="dorders.php"><button style="background-color: #00fdcf;color: black;">Orders</button></a>
                <b id="logout"><a href="../logout.php"><button class="log">Log Out</button></a></b>
            </ul>
        </nav>
    </div>
    <center>
        <div style="margin-right: -10px;
        margin-left: -10px;background-color: #00fdcf">
            <center>
                <h2 style="font-family: Poppins;font-size:30px;color:Black">Distributor Order Edit</h2>
            </center>
        </div>
        <br>
    </center>
    <center>
        <center>
            <h3><span class="fancy">Select</span></h3>
            <p>
        </center>
        <form method="POST">

            <?php
$query19 = "SELECT ORDID FROM store_orders where DID='$CustID' ";
$ses_sq29 = mysqli_query( $conn, $query19 );
$select1 = '<select style="color:Black" name="select2"><option selected hidden value="">  Order_ID  </option>';
while( $rs1 = mysqli_fetch_assoc( $ses_sq29 ) ) {
    $select1 .= '<option value="'.$rs1['ORDID'].'">'.$rs1['ORDID'].'</option>';
}
$select1 .= '</select>';
echo $select1;
echo' <input class="ffd" style="color:Black" name="submitqp" type="submit" value="Submit"></h4>';

$paraa2 = "";
$paraa3 = "";
$paraa4 = "";
$paraa5 = "";
if ( isset( $_POST['submitqp'] ) ) {
    $oidv = ( $_POST['select2'] );
    $queryod = "SELECT ORDID,PMYSTAT,SHPMODE,SHPSTAT from store_orders where ORDID='$oidv' ";
    $ses_sq44 = mysqli_query( $conn, $queryod );
    $row90 = mysqli_fetch_assoc( $ses_sq44 );
    $paraa2 = $row90['ORDID'];
    $paraa3 = $row90['PMYSTAT'];
    $paraa4 = $row90['SHPMODE'];
    $paraa5 = $row90['SHPSTAT'];
    $quer5 = "insert into t(temp) values('$paraa2')";
    mysqli_query( $conn, $quer5 );
    mysqli_query( $conn2, $quer5 );
}
$a = ",";

echo '</form>';
if ( isset( $_POST['submitn'] ) ) {
    $updtname = ( $_POST['inputn'] );
    $qqq = "select temp from t where tee=(select max(tee) from t)";
    $ses_sq44 = mysqli_query( $conn, $qqq );
    $row90 = mysqli_fetch_assoc( $ses_sq44 );
    $oidv8 = $row90['temp'];
    $updatequery1 = "UPDATE store_orders set PMYSTAT='$updtname' where ORDID=$oidv8";
    mysqli_query( $conn, $updatequery1 );
    mysqli_query( $conn2, $updatequery1 );
    header( "location: dorders.php" );
}
if ( isset( $_POST['submitpt'] ) ) {
    $updtname = ( $_POST['inputpt'] );
    $qqq = "select temp from t where tee=(select max(tee) from t)";
    $ses_sq44 = mysqli_query( $conn, $qqq );
    $row90 = mysqli_fetch_assoc( $ses_sq44 );
    $oidv8 = $row90['temp'];
    $updatequery1 = "UPDATE store_orders set SHPMODE='$updtname' where ORDID=$oidv8";
    mysqli_query( $conn, $updatequery1 );
    mysqli_query( $conn2, $updatequery1 );
    header( "location: dorders.php" );
}
if ( isset( $_POST['submitprt'] ) ) {
    $updtname = ( $_POST['inputprt'] );
    $qqq = "select temp from t where tee=(select max(tee) from t)";
    $ses_sq44 = mysqli_query( $conn, $qqq );
    $row90 = mysqli_fetch_assoc( $ses_sq44 );
    $oidv8 = $row90['temp'];
    $updatequery1 = "UPDATE store_orders set SHPSTAT='$updtname' where ORDID=$oidv8";
    mysqli_query( $conn, $updatequery1 );
    mysqli_query( $conn2, $updatequery1 );
    header( "location: dorders.php" );
}
?>
            <form method="POST" ; action="">

                <table style="width:70%">
                    <tr>
                        <td>Order ID</td>
                        <td style="color: white"><?php echo "$paraa2"?></td>
                        <td>Not Allowed</td>
                    </tr>
                    <tr>
                        <td>Payment Status</td>
                        <td><input class="tabin" type="text" name="inputn" placeholder="<?php echo "$paraa3"?>"></td>
                        <td><input class="fd" type="submit" name="submitn"></td>
                    </tr>
                    <tr>
                        <td>Shipment Mode</td>
                        <td><input class="tabin" type="text" name="inputpt" placeholder="<?php echo "$paraa4"?>"></td>
                        <td><input class="fd" type="submit" name="submitpt"></td>
                    </tr>
                    <tr>
                        <td>Shipment Status</td>
                        <td><input class="tabin" type="text" name="inputprt" placeholder="<?php echo "$paraa5"?>"></td>
                        <td><input class="fd" type="submit" name="submitprt"></td>
                    </tr>
                </table>
            </form>
        </form>
    </center>
</body>

</html>