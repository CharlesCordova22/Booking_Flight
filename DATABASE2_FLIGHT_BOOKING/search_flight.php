<?php 
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- <link rel="stylesheet" href="search_flight_style.css"> -->
        <link href='https://fonts.googleapis.com/css?family=MuseoModerno' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/8c89857bb1.js" crossorigin="anonymous"></script>
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
            background-color: rgba(0,0,0,0.9);;
            color: white;
        }
        #search-flight{
            width: 100%;
            background-color: white;
            height: 58vh;
        }
        .container1{
            padding: 0px;
            display: flex;
            justify-content: center;
            padding-top: 340px;
            align-items: center;

        }
        .container2{
            width: 1200px;
            min-height: 200px;
            padding: 20px;
            padding-top: 70px;
            padding-left: 35px;
            overflow: hidden;
            /* border: 8px solid rgba(34,34,34,0.8); */
            border-radius: 15px;
            background: black;
            box-shadow: 0px 0px 20px 20px white;
        }
        .container2 input{
            width: 27%;
            border-radius: 5px;
            margin-right: 5px;
            border: none;
            text-align: center;
            padding-top: 15px;
            padding-bottom: 15px;
        }
        .container2 button{
            width: 15%;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            padding-top: 16px;
            padding-bottom: 16px;
        }
        .akora-logo{
            position: absolute;
            width: 20%;
            margin-left: 170px;
            margin-top: 30px;
        }
        .akora-logo {
        transition: 1s ease;
        }
        .akora-logo:hover{
        -webkit-transform: scale(1.2);
        -ms-transform: scale(1.2);
        transform: scale(1.2);
        transition: 1s ease;
        }
        .text-introduce h1{
            position: absolute;
            margin-top: 180px;
            margin-left: 170px;
            font-size: 40px;
            color:black;
        }
        .text-introduce p{
            position: absolute;
            margin-top: 240px;
            margin-left: 170px;
            font-size: 25px;
            color:black;
        }
        .login-admin a{
            text-decoration: none;
            color: black;
            position: absolute;
            font-size: 23px;
            margin-top: 45px;
            margin-left: 1180px;
            cursor: pointer;
        }
        .login-admin a::after{
            content: '';
            width: 0;
            height: 3px;
            background: black;
            position: absolute;
            left: 0;
            bottom: -6px;
            transition: 0.5s;
        }
        .login-admin a:hover::after{
            width: 100%;
        }
        .home a{
            text-decoration: none;
            position: absolute;
            color: white;
            font-size: 17px;
            margin-left: 20px;
            margin-top: 260px;
            font-weight: bold;
        }
    </style>
<body>
    <div id="search-flight">
        <img src="image/akora-black.png" class="akora-logo">
        <div class="text-introduce">
            <h1>Start Traveling Now!</h1>
            <p>Get flights worldwide for your trip with the best deals.</p>
        </div>
        <div class="login-admin">
            <h1><a href="login-admin.php">Log-in as Admin</a></h1>
        </div>
        <div class="container1">
            <div class="container2">
                <form action="results_flight.php" method="POST">
                    <input type="text" name="ORIGIN" placeholder="FROM WHERE?" required>
                    <input type="text" name="DESTINATION" placeholder="TO" required>
                    <input type="date" name="DATE" required>
                    <button type="submit">Search Flights</button>
                </form>
            </div>
            <div class="home">
                <a href="main.php">Back to Home <i class="fa-solid fa-arrow-turn-up"></i></a>
            </div>
        </div>
    </div>
</body>
</html>