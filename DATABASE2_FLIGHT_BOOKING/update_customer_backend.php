<?php
    require('local_setting.php');


    $CUS_FNAME = $_POST['CUS_FNAME'];
    $CUS_INITIAL=$_POST['CUS_INITIAL'];
    $CUS_LNAME=$_POST['CUS_LNAME'];
    $CUS_AREACODE=$_POST['CUS_AREACODE'];
    $CUS_PHONE=$_POST['CUS_PHONE'];
    $CUS_CODE=$_GET['CUS_CODE'];

    // SQL script
    // (Updating Data from Database)

    //UPDATE Command for UPDATING User Data
    $UpdateCustomerData = "UPDATE customer SET CUS_LNAME = '{$CUS_LNAME}',CUS_FNAME = '{$CUS_FNAME}', CUS_INITIAL = '{$CUS_INITIAL}', CUS_AREACODE = '{$CUS_AREACODE}', CUS_PHONE = '{$CUS_PHONE}' WHERE CUS_CODE = {$CUS_CODE}";

    $resultFromCustomerData = mysqli_query($conn, $UpdateCustomerData);

    header('Location:final_ticket.php');