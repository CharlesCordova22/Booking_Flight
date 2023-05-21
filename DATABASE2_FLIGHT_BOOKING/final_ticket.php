<?php 
    require('fetch.php')
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.0/html2canvas.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>

        <title>Ticket Itinerary</title>
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
            min-height: 460px;
            margin-top: -150px;
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
            margin-top: 200px;
            font-weight: bold;
        }
        .container3{
            width: 1160px;
            min-height: 80px;
            margin-top: -45px;
            margin-left: -15px;
            background: white;
            border-radius: 10px;
        }
        .container3 h1{
            color: black;
            padding-top: 12px;
            padding-left: 20px;
        }
        .container3 h2{
            color: black;
            position: absolute;
            margin-top: -45px;
            margin-left: 930px;
        }
        .fullname{
            margin-top: 20px;
            font-size: 30px;
        }
        .fullname p1{
            position: absolute;
            margin-left: 10px;
        }
        .cus_phone{
            margin-top: -47px;
            margin-left: 455px;
            position: absolute;
            font-size: 30px;
        }
        .cus_phone p2{
            position: absolute;
            margin-left: 10px;
        }
        .cus_areacode{
            margin-top: -47px;
            margin-left: 900px;
            position: absolute;
            font-size: 30px;
        }
        .cus_areacode p3{
            position: absolute;
            margin-left: 10px;
        }
        .container4{
            width: 1160px;
            min-height: 80px;
            margin-top: 20px;
            margin-left: -15px;
            background: white;
            border-radius: 10px;
            color: black;
        }
        .container4 h1{
            font-size: 30px;
            margin-left: 20px;
            padding-top: 15px;
        }
        .container4 h2{
            position: absolute;
            margin-top: -45px;
            margin-left: 960px;
        }
        .flight-no{
            margin-top: 20px;
            font-size: 25px;
            margin-bottom: 20px;
        }
        .departure{
            margin-top: 30px;
            margin-left: 80px;
            position: absolute;
            font-size: 25px;
        }
        .arrival{
            margin-top: 30px;
            position: absolute;
            margin-left: 700px;
            font-size: 25px;
        }
        .departure-date{
            margin-top: 80px;
            margin-left: 80px;
            position: absolute;
            font-size: 25px;
        }
        .arrival-date{
            margin-top: 80px;
            position: absolute;
            margin-left: 700px;
            font-size: 25px;
        }
        .aircraft{
            padding-top: 130px;
            padding-left: 700px;
            font-size: 25px;
        }
        .ss{
            position: absolute;
            margin-left: -300px;
        }
        .ss button{
            width: 110%;
            margin-top: 420px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            padding-top: 16px;
            padding-bottom: 16px;
        }
        .cancel{
            position: absolute;
            margin-left: 300px;
        }
        .cancel button{
            width: 110%;
            margin-top: 420px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            padding-top: 16px;
            padding-bottom: 16px;
        }
        .update{
            position: absolute;
        }
        .update button{
            width: 110%;
            margin-top: 420px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            padding-top: 16px;
            padding-bottom: 16px;
        }
        .edit-info button{
        border-radius: 5px;
        font-size: 13px;
        margin-left: 1095px;
        margin-top: -50px;
        width: 50px;
        height: 50px;
        text-align: center;
        position: absolute;
        background: rgba(255,255,2555,0.7);
        }
        .edit_style i{
            font-size: 20px;
            color: black;
        }
    </style>
<body>
    <div id="search-flight">
        <img src="image/akora-black.png" class="akora-logo">
        <div class="login-admin">
            <h1><a href="login-admin.php">Log-in as Admin</a></h1>
        </div>
        <div class="container1">
            <div class="container2" id="targetElement">
                <div class="container3">
                    <?php while($row = mysqli_fetch_array($result)) {?>
                    <h1>FLIGHT ITINERARY</h1>
                    <h2><?php echo $row['ORIGIN']?> TO <?php echo $row['DESTINATION']?></h2>
                    <?php }?>
                </div>
                <?php require('fetch_customer.php');
                while($row = mysqli_fetch_array($customerResult)){?>
                    <div class="fullname" >
                        <label>NAME:</label>
                        <p1><?php echo $row['CUS_FNAME'], ' ', $row['CUS_INITIAL'], ', ',$row['CUS_LNAME']?></p1>
                    </div>
                    
                    <div class="cus_phone" >
                        <label>PHONE:</label>
                        <p2><?php echo $row['CUS_PHONE']?></p2>
                    </div>

                    <div class="cus_areacode">
                        <label>AREA CODE:</label>
                        <p3><?php echo $row['CUS_AREACODE']?></p3>
                    </div>
                    <?php }?>

                    <div class="container4">
                        <?php 
                            require('fetch.php');
                            while($row = mysqli_fetch_array($result)) {?>
                        <h1>DEPARTURE INFORMATION</h1>
                        <h2>FLIGHT NO. <?php echo $row['FLIGHT_NUM']?></h2>
                    </div>
                    <div class="depart-info">
                        <div class="departure" >
                            <label>DEPARTURE: <?php echo $row['ORIGIN']?></label>
                        </div>
                        <div class="arrival" >
                            <label>ARRIVAL: <?php echo $row['DESTINATION']?></label>
                        </div>
                        <div class="departure-date" >
                            <label>DEPARTURE DATE: <?php echo $row['DATE']?></label>
                        </div>
                        <div class="arrival-date" >
                            <label>ARRIVAL DATE: <?php echo $row['DATE']?></label>
                        </div>
                        <div class="aircraft" >
                            <label>AIRCRAFT: <?php echo $row['MOD_MANUFACTURER'],' ',$row['MOD_NAME']?></label>
                        </div>
                    </div>
                    <?php }?>
            </div>
            <div class="ss">
                <button onclick="takeScreenshot()">Take Screenshot</button>
            </div>

            <div class="update">
                <form action="edit_booking.php?CUS_CODE=<?php echo $_GET['CUS_CODE']?>" method="POST">
                <?php 
                    require('fetch.php');
                    while($row = mysqli_fetch_array($result)) {
                ?>
                    <input type="hidden" name="DESTINATION" value="<?php echo $row['DESTINATION']?>">
                    <input type="hidden" name="ORIGIN" value="<?php echo $row['ORIGIN']?>">
                    <input type="hidden"name="CUS_CODE" value="<?php echo $_GET['CUS_CODE']?>"> 
                    <button>Update Booking!</button>
                <?php }?>
                </form>
            </div>
            
            <div class="cancel">
                <form action="cancel_booking.php">
                <input type="hidden" name="CUS_CODE" value="<?php echo $_GET['CUS_CODE']?>">
                    <button>Cancel Booking!</button>                
                </form>
            </div>

            <div class="home">
                <a href="main.php">Back to Home <i class="fa-solid fa-arrow-turn-up"></i></a>
            </div>
        </div>
    </div>
</body>
<script>
    function takeScreenshot() {
        html2canvas(document.getElementById("targetElement")).then(function(canvas) {
        // Convert the canvas to a base64-encoded data URL
        var dataURL = canvas.toDataURL("image/jpeg");

        // Convert the data URL to a Blob
        var blob = dataURLToBlob(dataURL);

        // Save the Blob as a JPG file using FileSaver.js
        saveAs(blob, "screenshot.jpg");
        });
    }

    function dataURLToBlob(dataURL) {
        var byteString = atob(dataURL.split(",")[1]);
        var mimeString = dataURL.split(",")[0].split(":")[1].split(";")[0];
        var arrayBuffer = new ArrayBuffer(byteString.length);
        var uintArray = new Uint8Array(arrayBuffer);

        for (var i = 0; i < byteString.length; i++) {
        uintArray[i] = byteString.charCodeAt(i);
        }

        return new Blob([arrayBuffer], { type: mimeString });
    }
</script>

</html>