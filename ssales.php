<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php");
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

    input {
        width: 100%;
        font-family: "Poppins";
        font-size: 20px;
        font-weight: 600;
        background: none;
        color: white;
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
        <h1>Store Dashboard</h1>
        <nav class="menu">
            <ul>
                <a class="naav" href="shome.php"><button>Home</button></a>
                <a class="naav" href="sprofile.php"><button>Profile</button></a>
                <a class="naav" href="ssales.php"><button style="background-color: #00fdcf;color: black;">Sales Report</button></a>
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
                <h2 style="font-family: Poppins;font-size:30px;color:Black">Store Sales Report</h2>
            </center>
        </div>
    </center>
    <center>
        <h3><span class="fancy">Sales Entries</span></h3>
        <table style="width: 50%">
            <tr>
                <th>Sales ID</th>
                <th>Sales Date</th>
                <th>Sales Cost</th>
            </tr>
            <?php 
        
      $order59 ="SELECT * FROM sales where SID=$CustID";
      $food9 = mysqli_query($conn, $order59);
      while($oss55 = mysqli_fetch_assoc($food9))
      {echo '<tr><td>'. $oss55["SALESID"]."</td><td>". $oss55["SDATE"] . "</td><td>". $oss55["SCOST"]. "</td></tr>";
      }
?>
        </table>
        <br>
    </center>
    <center>
        <h3><span class="fancy">New Sales Entry</span></h3>
        <p>
    </center>
    <div class="signup">
        <center>
            <form action="custcmp.php" method="POST">
                <table class="entry">
                    <tr>
                        <td>Sales Date (dd/mm/yyyy)</td>
                        <td><input type="text" name="username" required></td>
                    </tr>
                    <tr>
                        <td>Sales Cost</td>
                        <td><input type="text" name="email" required></td>
                    </tr>
                </table>
                <input style="width:100px;" type="submit" value="Enter">
            </form>
        </center>
    </div>
</body>

</html>