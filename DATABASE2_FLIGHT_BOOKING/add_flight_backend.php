<?php
require('local_setting.php');

$ORIGIN = $_POST['ORIGIN'];
$DESTINATION = $_POST['DESTINATION'];
$AC_NUMBER = $_POST['AC_NUMBER'];
$DATE = $_POST['DATE'];
$PRICE = $_POST['PRICE'];
// SQL script
// (Inserting Data from Database)

//Insert Command for Inserting User Data
$createFlightData = "INSERT INTO flights VALUES ('','{$ORIGIN}','{$DESTINATION}','{$AC_NUMBER}','{$DATE}','{$PRICE}')";
$resultFromUser = mysqli_query($conn, $createFlightData);

/*$createPilotData = "INSERT INTO pilot VALUES ('{$lastInsertedPk}','','','','')";
$resultFromPilot = mysqli_query($conn, $createPilotData);*/

header('Location:add_flight_page.php');

?>