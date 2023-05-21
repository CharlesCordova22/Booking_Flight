<?php
    require('local_setting.php');

    $username = $_POST['username'];
    $userpassword = $_POST['userpassword'];

    $fetchQuery = "SELECT * FROM user";

    $result = mysqli_query($conn, $fetchQuery);

    if(mysqli_num_rows($result) > 0 ){
        while($userResult = mysqli_fetch_array($result)){
            if($username == $userResult['username'] && $userpassword == $userResult['userpassword']){
                header('location:admin-dashboard.php');
                return 0;
            }
        }
        header('location:login-admin.php?authentication=1');
    }
?>