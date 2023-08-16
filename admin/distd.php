<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php");
}
?>
<html>
<style>
    th {
        font-family: "Poppins";
        font-size: 20px;
        border: 2px solid #00fdcf;
        border-collapse: collapse;
        border-spacing: 4;
        color: black;
        text-align: center;
        font-weight: 600;
        background-color: darkgray;
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

    tr:hover td {
        background-color: white;
        cursor: pointer;
        color: black;
    }

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

    .container {
        text-align: center;
    }

    body {
        background: black;
    }

    .wel {
        font-family: "Poppins";
        color: white;
        font-size: 30px;
    }

    .name {
        font-family: "Poppins";
        color: #00fdcf;
        font-size: 30px;
    }

    h1 {
        font-family: "Poppins";
        color: white;
        font-size: 30px;
        margin-top: 20px;
        margin-left: 10px;
    }

    h2 {
        font-family: "Poppins";
        color: white;
        font-size: 20px;
    }

    a {
        font-family: "Poppins";
        color: white;
        font-size: 20px;
        font-weight: 600;
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

    input {
        border: solid 2px #00fdcf;
        font-family: "Poppins";
        font-weight: 600;
        font-size: 20px;
        background: none;
        padding: 3px 10px;
        color: white;
    }

    input:hover {
        background-color: #00fdcf;
        color: black;
    }

    .log:hover {
        background-color: red;
        color: white;
        border: solid 2px red;
    }
        h3 {
        font-family: "Poppins";
        font-size: 30px;
        font-weight: 600;
        color: white;
    }

    .top {
        background-color: black;
        padding: 10px 10px;
        margin-top: -10px;
        margin-left: -10px;
        margin-right: -10px;
        margin-bottom: -20px;
    }
    .entry {
        width: 60%;
    }
    
    [type="submit"]{
        margin-top: 20px;
        background-color: white;
        color: black;
        font-family: "Poppins";
        font-weight: 600;
        font-size: 20px;
        padding: 5px 10px;
    }
    
    [type="submit"]:hover {
        background-color: #00fdcf;
        transition-duration: .5s;
    }
</style>

<body>
    <div class="top">
        <h1>Admin Panel</h1>
        <nav class="menu">
            <ul>
                <a class="naav" href="dhome.php"><button>Home</button></a>
                <a class="naav" href="sales.php"><button>Sales Report</button></a>
                <a class="naav" href="distd.php"><button style="background-color: #00fdcf;color: black;">Distributor Details</button></a>
                <a class="naav" href="stored.php"><button>Store Details</button></a>
                <b id="logout"><a href="../logout.php"><button class="log">Log Out</button></a></b>
            </ul>
        </nav>
    </div>
    <center>
        <div style="margin-right: -10px;
        margin-left: -10px;background-color: #00fdcf">
            <center>
                <h2 style="font-family: Poppins;font-size:30px;color:Black">Distributor Details</h2>
            </center>
        </div>
        <br>
    </center>

    <center>
        <table style="width:90%">
            <tr>
                <th>Distributor ID</th>
                <th>Distributor Name</th>
                <th>Type</th>
                <th>Warehouse Location</th>
            </tr>

            <?php 
      $order59 ="SELECT * FROM dstbr order by DID";
      $food9 = mysqli_query($conn, $order59);
      while($oss55 = mysqli_fetch_assoc($food9))
      {echo '<tr><td>'. $oss55["DID"]."</td><td>". $oss55["DNAME"] . "</td><td>". $oss55["DTYPE"]. "</td><td>".$oss55["DLOC"]."</td></tr>";
      }
?>

        </table>
        <br>
    </center>
</body>
<br><br>
<center>
    <h3><span class="fancy">Register New Distributor</span></h3>
    <div class="signup">
        <form action="custcmp.php" method="POST">
            <table class="entry">
                <tr>
                    <td>Distributor Name</td>
                    <td><input style="width:100%" type="text" name="username" required></td>
                </tr>
                <tr>
                    <td>Distributor Type</td>
                    <td><input style="width:100%" type="text" name="age" required></td>
                </tr>
                <tr>
                    <td>Distributor Location</td>
                    <td><input style="width:100%" type="text" name="gender" required></td>
                </tr>
            </table>
            <input type="submit" value="Register New Distributor ">
        </form>
    </div>
</center>

</html>