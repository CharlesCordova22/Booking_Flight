<?php 

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- <link rel="stylesheet" href="main_style.css"> -->
        <link href='https://fonts.googleapis.com/css?family=MuseoModerno' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cordova Booking Flight</title>
    </head>
    <style>
        *{
        margin: 0;
        padding: 0;
        font-family: 'MuseoModerno';
        box-sizing: border-box;
        }
        body{
            background-color: white;
            color: white;
        }
        #main{
            width: 100%;
            height: 100vh;
        }
        .container{
            padding: 0px;
        }
        .text-introduce h1{
            color: black;
            position: absolute;
            font-size: 40px;
            margin-top: 200px;
            margin-left: 150px;
        }
        .get_started input{
            position: absolute;
            border-radius: 10px;
            font-size: 20px;
            color: white;
            border: none;
            background: black;
            cursor: pointer;
            padding: 15px;
            padding-left: 30px;
            padding-right: 30px;
            margin-top: 400px;
            margin-left: 150px;
        }
        nav{
            display: flex;
            align-items: center;
            background: black;
            justify-content: space-between;
            flex-wrap: wrap;
            padding-top: 25px;
            padding-left: 110px;
            padding-bottom: 25px;
        }
        .logo{
            width: 250px;
        }
        .logo {
        transition: 1s ease;
        }
        .logo:hover{
        -webkit-transform: scale(1.2);
        -ms-transform: scale(1.2);
        transform: scale(1.2);
        transition: 1s ease;
        }
        .airplane img{
        position: absolute;
        width: 37%;
        margin-left: 770px;
        margin-top: 20px;
        }
        .airplane img {
        transition: 1s ease;
        }
        .airplane img:hover{
        -webkit-transform: scale(1.2);
        -ms-transform: scale(1.2);
        transform: scale(1.2);
        transition: 1s ease;
        }
        nav ul li{
            display: inline-block;
            list-style: none;
            padding-right: 50px;
        }
        nav ul li a{
            color: white;
            text-decoration: none;
            font-size: 20px;
            margin-right: 30px;
            position: relative;
        }
        nav ul li a::after{
            content: '';
            width: 0;
            height: 3px;
            background: white;
            position: absolute;
            left: 0;
            bottom: -6px;
            transition: 0.5s;
        }
        nav ul li a:hover::after{
            width: 100%;
        }
    </style>
<body>
    <div id="main">
        <div class="container">
            <nav>
                <img src="image/akora-high-resolution-logo-white-on-transparent-background.png" class="logo">
                <ul id="sidemenu">
                    <li><a href="login-admin.php">Log-in as Admin</a></li>
                </ul>
            </nav>
            <div class="text-introduce">
                <h1>Ready for takeoff? Let us help you <BR>soar with stress-free <br>flight booking!</h1>
            </div>
            <form class="get_started" action="search_flight.php">
                <input type="submit" value="Get Started!">
            </form>
            <div class="airplane">
                <img src="image/pngegg (1).png">
            </div>
        </div>
    </div>
</body>
</html>