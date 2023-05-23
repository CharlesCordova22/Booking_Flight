<?php
require('local_setting.php');

$AC_TTAF = $_POST['AC_TTAF'];
$AC_TTEL = $_POST['AC_TTEL'];
$AC_TTER = $_POST['AC_TTER'];

// SQL script
// (Inserting Data from Database)
$MOD_MANUFACTURER = $_POST['MOD_MANUFACTURER'];
$MOD_NAME = $_POST['MOD_NAME'];
$MOD_CHG_MILE = $_POST['MOD_CHG_MILE'];

//Insert Command for Inserting User Data
$createModelData = "INSERT INTO model VALUES ('','{$MOD_MANUFACTURER}','{$MOD_NAME}','{$MOD_CHG_MILE}')";
$resultFromModel = mysqli_query($conn, $createModelData);

$lastInsertedMod = mysqli_insert_id($conn);

$createAircraftData = "INSERT INTO aircraft VALUES ('','{$lastInsertedMod}','{$AC_TTAF}','{$AC_TTEL}','{$AC_TTER}')";
$resultFromUser = mysqli_query($conn, $createAircraftData);


header('Location:add_aircraft_page.php');

?>