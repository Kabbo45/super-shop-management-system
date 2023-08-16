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
              $para7 = $row4['SPASS'];

 if(isset($_POST['submitn']))
  {$updtname = ($_POST['inputn']);
    $updatequery1 = "UPDATE store set SBRANCHNAME='$updtname' where SID='$para1'";mysqli_query($conn, $updatequery1);mysqli_query($conn1, $updatequery1);
    header("Refresh:0");}

    if(isset($_POST['submitc']))
  {$updtname = ($_POST['inputc']);
    $updatequery1 = "UPDATE store set SCITY='$updtname' where SID='$para1'";mysqli_query($conn, $updatequery1);mysqli_query($conn1, $updatequery1);
    header("Refresh:0");}
    if(isset($_POST['submitr']))
  {$updtname = ($_POST['inputr']);
    $updatequery1 = "UPDATE store set SREGION='$updtname' where SID='$para1'";mysqli_query($conn, $updatequery1);mysqli_query($conn1, $updatequery1);
    header("Refresh:0");}

    if(isset($_POST['submits']))
  {$updtname = ($_POST['inputs']);
    $updatequery1 = "UPDATE store set SSTATE='$updtname' where SID='$para1'";mysqli_query($conn, $updatequery1);mysqli_query($conn1, $updatequery1);
    header("Refresh:0");}

    if(isset($_POST['submitp']))
  {$updtname = ($_POST['inputp']);
    $updatequery1 = "UPDATE store set SPCODE='$updtname' where SID='$para1'";mysqli_query($conn, $updatequery1);mysqli_query($conn1, $updatequery1);
    header("Refresh:0");}

     if(isset($_POST['submitpa']))
  {$updtname = ($_POST['inputpa']);
    $updatequery1 = "UPDATE store set SPASS='$updtname' where SID='$para1'";mysqli_query($conn, $updatequery1);mysqli_query($conn1, $updatequery1);
    header("Refresh:0");}


              
?>
<html>
<style>
    input{
        font-family: "Poppins";
        font-size: 20px;
        width: 100%;
        background: none;
        color: white;
        font-weight: 600;
        text-align: center;
    }
    
    input:hover{
        cursor: pointer;
    }
    
    [type="submit"] {
        background-color: #00fdcf;
        color: black;
        font-weight: 600;
    }
    
    [type="submit"]:hover{
        background-color: white;
        transition-duration: .5s;
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
        background: black;
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
                <h2 style="font-family: Poppins;font-size:30px;color:Black">Store Profile Edit</h2>
            </center>
        </div>
        <br>
    </center>

    <center>
            <form method="POST" ; action="">

                <table style="width:70%;color:Black">
                    <br>
                    <tr>
                        <td>Store ID</td>
                        <td><?php echo "$para1"?></td>
                        <td>Not Allowed</td>
                    </tr>
                    <tr>
                        <td>Branch Name</td>
                        <td><input type="text" name="inputn" placeholder="<?php echo "$para2"?>"></td>
                        <td><input type="submit" name="submitn"></td>
                    </tr>
                    <tr>
                        <td>Branch City</td>
                        <td><input type="text" name="inputc" placeholder="<?php echo "$para3"?>"></td>
                        <td><input type="submit" name="submitc"></td>
                    </tr>
                    <tr>
                        <td>Branch Region</td>
                        <td><input type="text" name="inputr" placeholder="<?php echo "$para4"?>"></td>
                        <td><input type="submit" name="submitr"></td>
                    </tr>
                    <tr>
                        <td>Branch State</td>
                        <td><input type="text" name="inputs" placeholder="<?php echo "$para5"?>"></td>
                        <td><input type="submit" name="submits"></td>
                    </tr>
                    <tr>
                        <td>PINCODE</td>
                        <td><input type="text" name="inputp" placeholder="<?php echo "$para6"?>"></td>
                        <td><input type="submit" name="submitp"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="text" name="inputpa" placeholder="*******"></td>
                        <td><input type="submit" name="submitpa"></td>
                    </tr>
                </table>
            </form>
            <br><br>
    </center>
</body>

</html>