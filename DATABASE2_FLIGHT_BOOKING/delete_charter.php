<?php
    require('local_setting.php');
    $CHAR_TRIP=$_GET['CHAR_TRIP'];
    // SQL script
    // (DELETE Data from Database)

    //DELETE Command for DELETE User Data
    $DeleteUserData = "DELETE FROM charter WHERE CHAR_TRIP = $CHAR_TRIP";
    $resultFromDataDelete = mysqli_query($conn, $DeleteUserData);

    header('Location:admin-dashboard.php');
?>