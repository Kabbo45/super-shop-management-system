<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php");
}
$query4 = "SELECT * from store where SID='$user_check'";
              $ses_sq4 = mysqli_query($conn, $query4);
              $row4 = mysqli_fetch_assoc($ses_sq4);
              $para1 = $row4['SID'];
              $para2 = $row4['SBRANCHNAME'];
              $para3 = $row4['SCITY'];
              $para4 = $row4['SREGION'];
              $para5 = $row4['SSTATE'];
              $para6 = $row4['SPCODE'];
              
?>

<html>
<style>
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

    tr:hover td{
        background-color: white;
        cursor: pointer;
        color: black;
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

    .edit{
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
        <h1>Store Dashboard</h1>
        <nav class="menu">
            <ul>
                <a class="naav" href="shome.php"><button>Home</button></a>
                <a class="naav" href="sprofile.php"><button style="background-color: #00fdcf;color: black;">Profile</button></a>
                <a class="naav" href="ssales.php"><button>Sales Report</button></a>
                <a class="naav" href="sorders.php"><button>Store Orders</button></a>
                <a class="naav" href="sstock.php"><button>Stock</button></a>
                <b id="logout"><a href="logout.php"><button class="log">Log Out</button></a></b>
            </ul>
        </nav>
    </div>
    <center>
        <div style="margin-right: -10px;
        margin-left: -10px;background-color: #00fdcf">
            <center>
                <h2 style="font-family: Poppins;font-size:30px;color:Black">Store Profile</h2>
            </center>
        </div>
        <br>
    </center>
    <br>
    <center>
        <center>
            <table style="width: 50%">
                <tr>
                    <td>Store ID</td>
                    <td><?php echo "$para1"?></td>
                </tr>
                <tr>
                    <td>Branch Name</td>
                    <td><?php echo "$para2"?></td>
                </tr>
                <tr>
                <tr>
                    <td>City</td>
                    <td><?php echo "$para3"?></td>
                </tr>
                <tr>
                    <td>Region</td>
                    <td><?php echo "$para4"?></td>
                </tr>
                <tr>
                <tr>
                    <td>State</td>
                    <td><?php echo "$para5"?></td>
                </tr>
                <tr>
                    <td>Pincode</td>
                    <td><?php echo "$para6"?></td>
                </tr>

            </table>
            <a href="sprofileedit.php"><button class="edit">Edit Profile</button></a>
            <br><br>
        </center>
    </center>
    <br>
</body>

</html>