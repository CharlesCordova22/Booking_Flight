<?php
    require('local_setting.php');


    $MOD_CODE = $_POST['MOD_CODE'];
    $AC_NUMBER=$_POST['AC_NUMBER'];
    $CHAR_DATE=$_POST['CHAR_DATE'];
    $CHAR_TRIP=$_GET['CHAR_TRIP'];

    // SQL script
    // (Updating Data from Database)

    //UPDATE Command for UPDATING User Data
    $UpdateCharterData = "UPDATE charter SET AC_NUMBER = '{$AC_NUMBER}',CHAR_DATE = '{$CHAR_DATE}' WHERE CHAR_TRIP = {$CHAR_TRIP}";

    $resultFromCharterData = mysqli_query($conn, $UpdateCharterData);
    
    $UpdateAircraftData=" UPDATE aircraft SET MOD_CODE = '{$MOD_CODE}' WHERE AC_NUMBER={$AC_NUMBER}";
    $resultFromAircraftData=mysqli_query($conn, $UpdateAircraftData);

    header('Location:admin-dashboard.php');