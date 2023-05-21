<?php 
    require('fetch_charter.php');
    
    error_reporting(0);
    if (isset($_POST['search'])) {
        $AC_NUMBER = $_POST['AC_NUMBER'];
        $CHAR_DESTINATION = $_POST['CHAR_DESTINATION'];
        $fetchQuery = "SELECT *
                        FROM charter
                        INNER JOIN aircraft
                            ON charter.AC_NUMBER = aircraft.AC_NUMBER
                        INNER JOIN model
                            ON aircraft.MOD_CODE = model.MOD_CODE
                        WHERE charter.AC_NUMBER = '$AC_NUMBER'";
    } else {
        $fetchQuery = "SELECT *
                        FROM charter
                        INNER JOIN aircraft
                            ON charter.AC_NUMBER = aircraft.AC_NUMBER
                        INNER JOIN model
                            ON aircraft.MOD_CODE = model.MOD_CODE";
    }
    $result = mysqli_query($conn, $fetchQuery);
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href='https://fonts.googleapis.com/css?family=MuseoModerno' rel='stylesheet'>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
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
        table {
            border-collapse: collapse;
            width: 100%;
            font-size: 20px;
            color: white;
            }
            td{
            padding: 18px;
            color: black;
            text-align: center;
            }
            th {
            background-color: black;
            padding: 18px;
            text-align: center;
            }
            tr:nth-child(even) {
            background-color: #f2f2f2;
            }
        .edit_style{
        border-radius: 5px;
        font-size: 13px;
        margin-left: -45px;
        width: 40px;
        height: 35px;
        text-align: center;
        position: absolute;
        background: rgba(255,255,2555,0.7);
        }
        .edit_style i{
            background-color: transparent;
            font-size: 20px;
        }
        .delete_style{
            border-radius: 5px;
            cursor: pointer;
            font-size: 13px;
            margin-right: -45px;
            width: 40px;
            height: 35px;
            text-align: center;
            background: rgba(255,255,2555,0.7);
        }
        .delete_style i{
            background-color: transparent;
            font-size: 30px;
        }
        .list{
            border: 1px solid rgba(34,34,34,0.8);
            border-radius: 0px;
            margin: 50px;
            margin-top: 90px;
        }
        .login-admin a{
                text-decoration: none;
                color: black;
                position: absolute;
                font-size: 23px;
                margin-top: 45px;
                margin-left: -20px;
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
            .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }

            /* Modal Content */
            .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            border-radius: 10px;
            width: 35%;
            margin-top: 40px;
            height: 470px;
            }
            .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            }

            .close:hover,
            .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
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
            .update-content input{
                border-radius: 5px;
                width: 100%;
                font-size: 20px;
                margin-top: 30px;
                height: 50px;
                text-align: center;
            }
            .btn-update{
                border-radius: 5px;
                width: 100%;
                font-size: 20px;
                margin-top: 30px;
                height: 50px;
                cursor: pointer;
                text-align: center;
            }
            .update-tag{
                background: black;
                height: 100px;
                padding-top: 23px;
                border-radius: 10px;
                color: white;
            }
            .update-tag span{
                position: absolute;
                margin-top: -115px;
                margin-left: 245px;
            }
    .search i{
    position: absolute;
    margin-left: 20px;
    color: black;
    margin-top: -26px;

    }
    .search input::placeholder{
        position: absolute;
        margin-top: 4px;
        color: black;
        margin-left: 0px;
    }
    .search input{
        padding-left: 30px;
        
        margin-left: 50px;
        margin-bottom: -10px;
        margin-top: 40px;
        font-size: 17px;
        width: 300px;
        height: 40px;
        position: absolute;
        background: rgba(255,255,2555,0.7);
        box-shadow: rgba(0,0,0,0.3) 0px 19px 38px, rgba(0,0,0,0.22) 0px 15px 12px;
    }
    </style>
<body>
    <div id="main">
        <div class="container">
            <nav>
                <img src="image/akora-high-resolution-logo-white-on-transparent-background.png" class="logo">
                <ul id="sidemenu">
                    <li><a href="main.php">Log-out</a></li>
                </ul>
            </nav>
                <div class="search">
                    <form method="POST" action="admin-dashboard.php">
                        <i class="fa fa-search"></i><input name="AC_NUMBER" type="text" placeholder="SEARCH AIRCRAFT NUMBER">
                        <button type="submit" name="search" style="display: none;"></button>
                    </form>
                </div>
                <div class="list">
                <table>
                        <tr>
                            <th>AC NUMBER</th>
                            <th>MOD CODE</th>
                            <th>CHARTER TRIP</th>
                            <th>CHARTER DATE</th>
                            <th>CHARTER DESTINATION</th>
                            <th>ACTIONS</th>
                        </tr>
                        <?php
                        $i=0;
                            while($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td><a><?php echo $row['AC_NUMBER']; ?></a></td>
                            <td><a><?php echo $row['MOD_CODE']; ?></a></td>
                            <td><a><?php echo $row['CHAR_TRIP']; ?></a></td>
                            <td><a><?php echo $row['CHAR_DATE']; ?></a></td>
                            <td><a><?php echo $row['CHAR_DESTINATION']; ?></a></td>
                            <td>
                                <button class="edit_style myBtn"><i class="fa">&#xf044;</i></button>

                                <div class="myModal modal">
                                    <div class="modal-content">
                                        <div class="update-tag">
                                            <h1>UPDATE FLIGHT</h1>
                                            <span class="close">&times;</span>
                                        </div>
                                        <div class="update-content">
                                            <form action="update_flight_backend.php?CHAR_TRIP=<?php echo $row['CHAR_TRIP']?>" method="POST">
                                            
                                                <input type="text" name="AC_NUMBER" value="<?php echo $row['AC_NUMBER']?>">
                                                <input type="text" name="MOD_CODE"value="<?php echo $row['MOD_CODE']?>">
                                                <input type="date" name="CHAR_DATE" value="<?php echo $row['CHAR_DATE']?>">
                                                <button class="btn-update">UPDATE</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <form action="delete_charter.php">
                                <input name="CHAR_TRIP" type="hidden" value="<?php echo $row['CHAR_TRIP']?>">
                                    <button class="delete_style"><i class="material-icons">&#xe872;</i></button>
                                </form>
                            </td>
                        </tr>
                    <?php
                    $i++;
                    }
                    ?>
                </table>
                </div>
        </div>
    </div>
</body>
<script>
  // Get all the buttons with class "myBtn"
  const buttons = document.querySelectorAll('.myBtn');

  // Loop through each button and attach a click event listener
  buttons.forEach((button) => {
    button.addEventListener('click', function() {
      // Show/hide the corresponding modal
      const modal = this.parentNode.querySelector('.myModal');
      modal.style.display = 'block';

      // Close the modal when the user clicks on the "close" button
      const closeButton = modal.querySelector('.close');
      closeButton.addEventListener('click', function() {
        modal.style.display = 'none';
      });
    });
  });
</script>
</html>