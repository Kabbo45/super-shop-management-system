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
    
    .container
    {
        text-align: center;
    }
    
    body
    {
        background: black;
    }

    .wel
    {
        font-family: "Poppins";
        color: white;
        font-size: 30px;
    }

    .name
    {
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
        margin-left: 10px;
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
        <h1>Admin Panel</h1>
        <nav class="menu">
            <ul>
                <a class="naav" href="dhome.php"><button>Home</button></a>
                <a class="naav" href="sales.php"><button style="background-color: #00fdcf;color: black;">Sales Report</button></a>
                <a class="naav" href="distd.php"><button>Distributor Details</button></a>
                <a class="naav" href="stored.php"><button>Store Details</button></a>
                <b id="logout"><a href="../logout.php"><button class="log">Log Out</button></a></b>
            </ul>
        </nav>
    </div>
    <center>
        <div style="margin-right: -10px;
        margin-left: -10px;background-color: #00fdcf">
            <center>
                <h2 style="font-family: Poppins;font-size:30px;color:Black">Sales Report</h2>
            </center>
        </div>
        <br>
    </center>   

<form method="POST">
    <center><h2>Sales by:
      <select name="ssalescat" >
        <option selected="" hidden="" value="None">Category</option>
        <option value="SBRANCHNAME">Branch</option>
        <option value="SCITY">City</option>
        <option value="SREGION">Region</option>
        <option value="SSTATE">State</option>
        <input type="submit" name="submitsales" value="Next">
        </select></h2></center>
    <?php
     if(isset($_POST['submitsales']))
       {$catsv = ($_POST['ssalescat']);
        $pl="Selected Category: ";
        echo '<center><a style="color: #00fdcf">',$pl,'</a><a>',$catsv,'</a></form></center>';
        $query1122 = "INSERT into t(temp) values ('$catsv')";
        mysqli_query($conn, $query1122);
        echo '<form method="POST"><center><h2>Choose: ';
              $query1112 = "SELECT Distinct $catsv FROM store";
              $ses_sq2 = mysqli_query($conn,$query1112);
            $select12= '<select name="select2112">
               <option selected hidden>Select</option>';     
             while($rs12 = mysqli_fetch_assoc($ses_sq2))
              {
              $select12.='<option value="'.$rs12[$catsv].'">'.$rs12[$catsv].'</option>';
              }
              $select12.='</select><input name="submitcs2" type="submit" value="Next"></h2></center></form>';
              echo $select12,'</h2></center>';
}
      if(isset($_POST['submitcs2']))
           {
        $query1112 = "SELECT temp FROM t where tee=(select max(tee) from t)";
              $ses_sq2112 = mysqli_query($conn, $query1112);
        $rs12 = mysqli_fetch_assoc($ses_sq2112);
        $catsv=$rs12['temp'];
        
        $catsv1 = ($_POST['select2112']);
         echo '<center>
        <table style="width:92%">
        <tr>
          <th>Sales ID</th>
          <th>Sales Date</th>
          <th>Sales Cost</th>
          <th>Store ID</th>
          <th>Store Name</th>
          <th>Store City</th>
        </tr>';
        echo '<center><a style="color: #00fdcf">',$catsv,': </a><a>', $catsv1, '</a></form></center><br>';
      $order59 ="select sa.*,st.SBRANCHNAME,st.SCITY from sales sa,store st where sa.sid=st.sid and $catsv = '$catsv1'";
      $food9 = mysqli_query($conn, $order59);
      
      while($oss55 = mysqli_fetch_assoc($food9))
      {echo '<tr><td>'. $oss55["SALESID"]."</td><td>". $oss55["SDATE"] . "</td><td>". $oss55["SCOST"]. "</td><td>".$oss55["SID"]."</td><td>".$oss55["SBRANCHNAME"]."</td><td>". $oss55["SCITY"]."</td></tr></div>";
      }
    } 
?>
    </form>
  </body>
</html>
