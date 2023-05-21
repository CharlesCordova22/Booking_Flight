<?php
    require('local_setting.php');

    $FLIGHT_NUM=$_GET['FLIGHT_NUM'];
    $CUS_CODE=$_GET['CUS_CODE'];
    $PRICE=$_POST['PRICE'];
    $DATE=$_POST['DATE'];
    $DESTINATION=$_POST['DESTINATION'];
    $AC_NUMBER=$_POST['AC_NUMBER'];


    // SQL script
    // (Updating Data from Database)

    //UPDATE Command for UPDATING charter Data

    $UpdateCharterData = "UPDATE charter SET AC_NUMBER = '{$AC_NUMBER}',CHAR_DATE = '{$DATE}', CHAR_DESTINATION='{$DESTINATION}' WHERE CUS_CODE = {$CUS_CODE}";

    $resultFromCharterData = mysqli_query($conn, $UpdateCharterData);

    $updateCustomerData = "UPDATE CUSTOMER SET CUS_BALANCE='{$PRICE}' WHERE CUS_CODE={$CUS_CODE}";
    $resultfromCustomerData = mysqli_query($conn, $updateCustomerData);

    header('Location:final_ticket.php?CUS_CODE='.$CUS_CODE.'&FLIGHT_NUM='.$FLIGHT_NUM);
    ?>