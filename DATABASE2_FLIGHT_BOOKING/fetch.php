<?php 
    require('local_setting.php');

    $flights = $_GET['FLIGHT_NUM'];

    $fetchQuery="SELECT *
    FROM flights
    INNER JOIN aircraft
        ON flights.AC_NUMBER = aircraft.AC_NUMBER
    INNER JOIN model
        ON aircraft.MOD_CODE = model.MOD_CODE
        
    WHERE flights.FLIGHT_NUM='$flights'";

    $result = mysqli_query($conn, $fetchQuery);

?>