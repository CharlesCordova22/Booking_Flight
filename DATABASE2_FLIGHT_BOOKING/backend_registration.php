<?php
    require('local_setting.php');

    $FLIGHT_NUM = $_GET['FLIGHT_NUM'];
    $CUS_LNAME = $_POST['CUS_LNAME'];
    $CUS_FNAME = $_POST['CUS_FNAME'];
    $CUS_INITIAL = $_POST['CUS_INITIAL'];
    $CUS_AREACODE = $_POST['CUS_AREACODE'];
    $CUS_PHONE = $_POST['CUS_PHONE'];
    $is_deleted = 'Booked';
    // FOR THE CHARTER
    $PRICE = $_POST['PRICE'];
    $DATE = $_POST['DATE'];
    $DESTINATION = $_POST['DESTINATION'];
    $AC_NUMBER = $_POST['AC_NUMBER'];
    // $CHAR_HOURS_FLOWN=$_POST['CHAR_HOURS_FLOWN'];
    // $CHAR_OIL_QTS=$_POST['CHAR_OIL_QTS'];

    // SQL script
    // (Inserting Data from Database)

    //Insert Command for Inserting User Data
    $createCustomerData = "INSERT INTO customer VALUES ('','{$CUS_LNAME}', '{$CUS_FNAME}','{$CUS_INITIAL}','{$CUS_AREACODE}','{$CUS_PHONE}','{$PRICE}','{$is_deleted}')";
    $resultFromCustomer = mysqli_query($conn, $createCustomerData);

    //Last Inserted User data (Used for getting the last PK of the newly inserted user)
    $lastInsertedCusCode = mysqli_insert_id($conn);

    //Insert Command for Inserting User Profile Data
    $createCharterData = "INSERT INTO charter VALUES ('','{$DATE}','$AC_NUMBER','{$DESTINATION}','','','','','','$lastInsertedCusCode','{$is_deleted}')";
    $resultFromCharter = mysqli_query($conn, $createCharterData);

    header('Location:final_ticket.php?CUS_CODE='.$lastInsertedCusCode.'&FLIGHT_NUM='.$FLIGHT_NUM);
?>