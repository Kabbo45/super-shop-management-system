<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php");}
$query4 = "SELECT * from dstbr where DID='$user_check'";
              $ses_sq4 = mysqli_query($conn, $query4);
              $row4 = mysqli_fetch_assoc($ses_sq4);
              $para1 = $row4['DID'];
              $para2 = $row4['DNAME'];
              $para3 = $row4['DTYPE'];
              $para4 = $row4['DPASS'];
              if(isset($_POST['submitpa']))
  {$updtname = ($_POST['inputpa']);
    $updatequery1 = "UPDATE dstbr set DPASS='$updtname' where DID='$para1'";mysqli_query($conn, $updatequery1);mysqli_query($conn1, $updatequery1);
    header("Refresh:0");}

    if(isset($_POST['submitn']))
  {$updtname = ($_POST['inputn']);
    $updatequery1 = "UPDATE dstbr set DNAME='$updtname' where DID='$para1'";mysqli_query($conn, $updatequery1);mysqli_query($conn1, $updatequery1);
    header("Refresh:0");}

    if(isset($_POST['submitc']))
  {$updtname = ($_POST['inputc']);
    $updatequery1 = "UPDATE dstbr set DTYPE='$updtname' where DID='$para1'";mysqli_query($conn, $updatequery1);mysqli_query($conn1, $updatequery1);
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
                <a class="naav" href="dhome.php"><button>Home</button></a>
                <a class="naav" href="dprofile.php"><button style="background-color: #00fdcf;color: black;">Profile</button></a>
                <a class="naav" href="dorders.php"><button>Orders</button></a>
                <b id="logout"><a href="../logout.php"><button class="log">Log Out</button></a></b>
            </ul>
        </nav>
    </div>
    <center>
        <div style="margin-right: -10px;
        margin-left: -10px;background-color: #00fdcf">
            <center>
                <h2 style="font-family: Poppins;font-size:30px;color:Black">Distributor Profile Edit</h2>
            </center>
        </div>
        <br>
    </center>

    <center>
            <form method="POST" ; action="">

                <table style="width:70%;color:Black">
                    <br>
                    <tr>
                        <td>Distributor ID</td>
                        <td><?php echo "$para1"?></td>
                        <td>Not Allowed</td>
                    </tr>
                    <tr>
                        <td>Distributor Name</td>
                        <td><input type="text" name="inputn" placeholder="<?php echo "$para2"?>"></td>
                        <td><input type="submit" name="submitn"></td>
                    </tr>
                    <tr>
                        <td>Distribution Product Type</td>
                        <td><input type="text" name="inputc" placeholder="<?php echo "$para3"?>"></td>
                        <td><input type="submit" name="submitc"></td>
                    </tr>
                </table>
            </form>
            <br><br>
    </center>
</body>

</html>
