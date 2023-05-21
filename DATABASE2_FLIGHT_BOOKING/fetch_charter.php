<?php 
    require('local_setting.php');

    $fetchQuery="SELECT *
    FROM charter
    INNER JOIN aircraft
        ON charter.AC_NUMBER = aircraft.AC_NUMBER
    INNER JOIN model
        ON aircraft.MOD_CODE = model.MOD_CODE";

    $result = mysqli_query($conn, $fetchQuery);

?>