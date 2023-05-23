<?php 
    require('local_setting.php');

$fetchQuery = "SELECT * FROM aircraft 
            INNER JOIN model on model.MOD_CODE = aircraft.MOD_CODE ";

$result = mysqli_query($conn, $fetchQuery);

if (isset($_POST['search'])) {
$searchTerm = $_POST['search_input'];

// Modify the SQL query to include the search condition
$fetchQuery .= "WHERE MOD_MANUFACTURER LIKE '%$searchTerm%' OR MOD_NAME LIKE '%$searchTerm%'";

// Execute the modified query
$result = mysqli_query($conn, $fetchQuery);
}
    
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
            margin-top: 140px;
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
        padding-left: 20px;
        margin-left: 50px;
        margin-bottom: -10px;
        margin-top: 125px;
        font-size: 17px;
        width: 370px;
        height: 40px;
        position: absolute;
        background: rgba(255,255,2555,0.7);
        box-shadow: rgba(0,0,0,0.3) 0px 19px 38px, rgba(0,0,0,0.22) 0px 15px 12px;
    }
    .addflight {
        color: black;
        font-weight: bold;
        font-size: 17px;
        margin-top: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .addflight input{
        padding-left: 20px;
        font-size: 17px;
        width: 100px;
        height: 40px;
        background: rgba(255,255,2555,0.7);
        box-shadow: rgba(0,0,0,0.3) 0px 19px 38px, rgba(0,0,0,0.22) 0px 15px 12px;
    }
    .addflight select{
        font-size: 17px;
        width: 50px;
        height: 40px;
        background: rgba(255,255,2555,0.7);
        box-shadow: rgba(0,0,0,0.3) 0px 19px 38px, rgba(0,0,0,0.22) 0px 15px 12px;
    }
    .addflight button{
        font-size: 13px;
        padding-top: 3px;
        cursor: pointer;
        width: 100px;
        height: 40px;
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
                    <li><a href="add_flight_page.php">ADD FLIGHTS</a></li>
                    <li><a href="main.php">LOG-OUT</a></li>
                </ul>
            </nav>
                <div class="search">
                    <form method="POST" action="add_aircraft_page.php">
                        <i class="fa fa-search"></i><input name="search_input" type="text" placeholder="SEARCH MANUFACTURER/MODEL NAME">
                        <button type="submit" name="search" style="display: none;"></button>
                    </form>
                </div>
                <div class="addflight">
                <form action="add_aircraft_backend.php" method="POST">
                        <label>MODEL MANUFACTURER:</label>
                        <input type="text" name="MOD_MANUFACTURER">
                        <label>MODEL NAME:</label>
                        <input type="text" name="MOD_NAME">
                        <label>MODEL CHARGE / MILE:</label>
                        <input type="number" name="MOD_CHG_MILE">
                        <label>AC_TTAF:</label>
                        <input type="number" name="AC_TTAF">
                        <label>AC_TTEL:</label>
                        <input type="number" name="AC_TTEL">
                        <label>AC_TTER:</label>
                        <input type="number" name="AC_TTER">
                    <button>ADD AIRCRAFT</button>
                </form>
            </div>
                <div class="list">
                <table>
                        <tr>
                            <th>MOD CODE</th>
                            <th>MOD MANUFACTURER</th>
                            <th>MOD NAME</th>
                            <th>MOD CHARGE/MILE</th>
                            <th>AC NUMBER</th>
                            <th>AC TTAF</th>
                            <th>AC TTEL</th>
                            <th>AC TTER</th>
                        </tr>
                        <?php
                        $i=0;
                            while($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td><a><?php echo $row['MOD_CODE']; ?></a></td>
                            <td><a><?php echo $row['MOD_MANUFACTURER']; ?></a></td>
                            <td><a><?php echo $row['MOD_NAME']; ?></a></td>
                            <td><a><?php echo $row['MOD_CHG_MILE']; ?></a></td>
                            <td><a><?php echo $row['AC_NUMBER']; ?></a></td>
                            <td><a><?php echo $row['AC_TTAF']; ?></a></td>
                            <td><a><?php echo $row['AC_TTEL']; ?></a></td>
                            <td><a><?php echo $row['AC_TTER']; ?></a></td>
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