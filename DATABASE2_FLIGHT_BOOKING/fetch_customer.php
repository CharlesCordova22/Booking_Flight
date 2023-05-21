<?php 
    require('local_setting.php');

    $CUS_CODE=$_GET['CUS_CODE'];

    $fetchQuery="SELECT * FROM customer WHERE CUS_CODE='$CUS_CODE'";

    $customerResult = mysqli_query($conn, $fetchQuery);

?>