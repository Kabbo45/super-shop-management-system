<?php
include('login.php');
if(isset($_SESSION['login_user']))
{
header("location: shome.php");
}
?> 
<html>

<head>
    <title>Admin Login</title>
    <style>
        h2 {
            color: white;
            font-size: 4vw;
            text-transform: uppercase;
            text-align: center;
            line-height: 1;
            font-family: "Poppins";
            padding-top: 80px;
            padding-bottom: 20px;
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

        body {
            background-color: black;
        }

        table {
            padding-top: 10px;
            color: white;
            font-family: "Poppins";
            font-family: "Poppins";
            font-weight: 600;
            font-size: 20px;
        }

        .login {
            padding: 40px 20px;
            width: 40%;
            background-color: none;
            border-color: #00fdcf;
            border-style: solid;
            padding-bottom: -10px;
        }

        .button_login {
            border: solid 4px #fff000;
            border-radius: 10px;
            font-family: "Poppins";
            font-weight: 600;
            font-size: 20px;
            color: white;
            background: none;
            margin-right: 5px;
            margin-left: 20px;
            padding: 4px 10px;
        }

        .button_login:hover {
            background: #fff000;
            transition-duration: 0.5s;
            cursor: pointer;
            color: black;
        }

        a {
            border: solid 4px #00fdcf;
            border-radius: 10px;
            font-family: "Poppins";
            font-weight: 600;
            font-size: 20px;
            color: white;
            background: none;
            margin-right: 30px;
            padding: 4px 10px;
            text-decoration: none;
        }

        a:hover {
            background: #00fdcf;
            color: black;
            transition-duration: 0.5s;
            cursor: pointer;
        }

        .gg {
            padding-top: 10px;
            padding-left: 100px;
        }

        .tex {
            border-radius: 20px;
            border-color: #00fdcf;
            font-family: "Poppins";
            font-weight: 600;
            font-size: 20px;
            margin-bottom: 10px;
            background: none;
            color: white;
        }
        
        .error {
            color: red;
            font-family: "Poppins";
        }

        .fon {
            text-align: right;
            padding-right: 10px;
        }
    </style>
</head>

<body>
    <h2><span class="fancy">Store Login</span></h2>
    <center>
        <div class="login">
            <form method="POST">
                <table>
                    <tr>
                        <td class="fon">Store ID</td>
                        <td><input class="tex" type="text" name="lsid" required></td>
                    </tr>
                    <tr>
                        <td class="fon">Password</td>
                        <td><input class="tex" type="password" name="lspass" required></td>
                        <span class="error"><?php echo $error; ?></span>
                    </tr>
                </table>
                <div class="gg">
                    <input class="button_login" name="submitq" type="submit" value="Login">
                    <a href="index.php">Back</a>
                </div>
            </form>
        </div>
    </center>
</body>

</html>