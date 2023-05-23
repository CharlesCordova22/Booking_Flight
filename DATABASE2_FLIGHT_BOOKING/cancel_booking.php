<?php
    require('local_setting.php');
    
    $CUS_CODE = $_GET['CUS_CODE'];

    // Soft Delete Command for UPDATE Customer Data
    $softDeleteCustomer = "UPDATE customer SET is_deleted = 'Cancelled' WHERE CUS_CODE = {$CUS_CODE}";
    $resultSoftDeleteCustomer = mysqli_query($conn, $softDeleteCustomer);
    
    // Soft Delete Command for UPDATE Charter Data
    $softDeleteTrip = "UPDATE charter SET is_deleted = 'Cancelled' WHERE CUS_CODE = {$CUS_CODE}";
    $resultSoftDeleteTrip = mysqli_query($conn, $softDeleteTrip);

    header('Location:main.php');
?>