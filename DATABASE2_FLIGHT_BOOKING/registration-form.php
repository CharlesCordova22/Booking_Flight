<?php 
    require('local_setting.php');
    $FLIGHT_NUM = $_GET['FLIGHT_NUM'];
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
            background-color: white;
            color: white;
        }
        #search-flight{
            width: 100%;
            background-color: rgba(0,0,0,0.9);
            height: 58vh;
        }
        .container1{
            padding: 0px;
            display: flex;
            justify-content: center;
            padding-top: 170px;
            align-items: center;

        }
        .container2{
            width: 700px;
            min-height: 500px;
            padding: 20px;
            padding-top: 70px;
            padding-left: 35px;
            /* overflow: hidden; */
            /* border: 8px solid rgba(34,34,34,0.8); */
            border-radius: 15px;
            background: black;
            box-shadow: 0px 0px 20px 20px white;
        }
        .container2 input{
            width: 100%;
            border-radius: 5px;
            margin-right: 5px;
            border: none;
            text-align: center;
            margin-top: 20px;
            padding-top: 15px;
            padding-bottom: 15px;
        }
        .container2 button{
            width: 15%;
            border-radius: 5px;
            border: none;
            margin-top: 20px;
            margin-left: 270px;
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
            color: white;
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
            background: white;
            position: absolute;
            left: 0;
            bottom: -6px;
            transition: 0.5s;
        }
        .login-admin a:hover::after{
            width: 100%;
        }
        .registration-form h1{
            position: absolute;
            font-size: 27px;
            margin-top: 170px;
            margin-left: 620px;
        }
        .home a{
            text-decoration: none;
            position: absolute;
            color: black;
            font-size: 17px;
            margin-left: 240px;
            margin-top: 280px;
            font-weight: bold;
        }
    </style>
<body>
    <div id="search-flight">
        <img src="image/akora-high-resolution-logo-white-on-transparent-background.png" class="akora-logo">
        <div class="login-admin">
            <h1><a href="login-admin.php">Log-in as Admin</a></h1>
        </div>
        <div class="registration-form">
            <h1>REGISTRATION FORM</h1>
        </div>
        <div class="container1">
            <div class="container2">
                <form action="backend_registration.php?FLIGHT_NUM=<?php echo $FLIGHT_NUM?>" method="POST">
                <?php require ('fetch.php');
                while($row = mysqli_fetch_array($result)) {?>
                    <input type="hidden" name="DATE" value="<?php echo $row['DATE']?>">
                    <input type="hidden" name="ORIGIN" value="<?php echo $row['ORIGIN']?>">
                    <input type="hidden" name="DESTINATION" value="<?php echo $row['DESTINATION']?>">
                    <input type="hidden" name="PRICE" value="<?php echo $row['PRICE']?>">
                    <input type="hidden" name="AC_NUMBER" value="<?php echo $row['AC_NUMBER']?>">

                        <input type="text" name="CUS_FNAME" placeholder="FIRSTNAME">
                        <input type="text" name="CUS_INITIAL" placeholder="MIDDLENAME">
                        <input type="text" name="CUS_LNAME" placeholder="LASTNAME">
                        <input type="text" name="CUS_AREACODE" placeholder="AREA CODE">
                        <input type="text" name="CUS_PHONE" placeholder="PHONE NUMBER">
                        <button type="submit">SUBMIT</button>
                <?php }?>
                </form>
            </div>
            <div class="home">
            <a href="main.php">Back to Home <i class="fa-solid fa-arrow-turn-up"></i></a>
            </div>
        </div>
    </div>
</body>
</html>