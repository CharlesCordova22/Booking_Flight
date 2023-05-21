<?php 
require('local_setting.php');

error_reporting(0);

if(count($_POST)>0){
    $conn = mysqli_connect("localhost","root","","cordova_database2");
    $ORIGIN=$_POST['ORIGIN'];
    $DESTINATION=$_POST['DESTINATION'];
    $AC_NUMBER=$_GET['AC_NUMBER'];
    $result = mysqli_query($conn,"SELECT * FROM flights WHERE ORIGIN='$ORIGIN' AND DESTINATION='$DESTINATION'");
    }
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
            <title>Edit Booking</title>
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
                margin-top: -200px;
                min-height: 200px;
                padding: 20px;
                padding-top: 30px;
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
                height: 3px;m
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
            table {
            border-collapse: collapse;
            width: 100%;
            font-size: 20px;
            color: white;
            }
            td{
            padding: 18px;
            text-align: center;
            }
            th {
            background-color: rgba(34,34,34,0.8);
            padding: 18px;
            text-align: center;
            }
        .book button{
            padding-top: 8px;
            padding-bottom: 8px;
            width: 100px;
        }
        </style>
    <body>
        <div id="search-flight">
            <img src="image/akora-black.png" class="akora-logo">
            <div class="login-admin">
                <h1><a href="login-admin.php">Log-in as Admin</a></h1>
            </div>
            <div class="container1">
                <div class="container2">
                    <table>
                    <tr>
                        <th>ORIGIN</th>
                        <th>DESTINATION</th>
                        <th>DATE</th>
                        <th>PRICE</th>
                        <th> </th>
                    </tr>
                    <?php
                    $i=0;
                        while($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><a><?php echo $row['ORIGIN']; ?></a></td>
                            <td><a><?php echo $row['DESTINATION']; ?></a></td>
                            <td><a><?php echo $row['DATE']; ?></a></td>
                            <td><a><?php echo $row['PRICE']; ?></a></td>
                            <td>
                                <form class="book" action="update_booking.php?CUS_CODE=<?php echo $_GET['CUS_CODE']?>&FLIGHT_NUM=<?php echo $row['FLIGHT_NUM']?>" method="POST">
                                    <input type="hidden" name="ORIGIN"value="<?php echo $row['ORIGIN']?>">    
                                    <input type="hidden" name="DESTINATION"value="<?php echo $row['DESTINATION']?>"> 
                                    <input type="hidden" name="DATE"value="<?php echo $row['DATE']?>"> 
                                    <input type="hidden" name="PRICE"value="<?php echo $row['PRICE']?>"> 
                                    <input type="hidden" name="AC_NUMBER"value="<?php echo $row['AC_NUMBER']?>"> 
                                    <button type="submit">Book Now!</button>
                                </form>
                            </td>
                        </tr>
                    <?php
                    $i++;
                    }
                    ?>
                    </table>
                </div>
                <div class="home">
                    <a href="main.php">Back to Home <i class="fa-solid fa-arrow-turn-up"></i></a>
                </div>
            </div>
        </div>
    </body>
    </html>