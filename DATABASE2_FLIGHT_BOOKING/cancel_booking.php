<?php
    require('local_setting.php');
    
    $CUS_CODE = $_GET['CUS_CODE'];

    // SQL script
    // (DELETE Data from Database)

    //DELETE Command for DELETE User Data
    $DeleteTrip = "DELETE FROM CHARTER WHERE CUS_CODE = {$CUS_CODE}";
    $resultDeleteTrip = mysqli_query($conn, $DeleteTrip);

    $DeleteCustomer = "DELETE FROM customer WHERE CUS_CODE = {$CUS_CODE}";
    $resultDeleteCustomer = mysqli_query($conn, $DeleteCustomer);

    header('Location:main.php');
?>