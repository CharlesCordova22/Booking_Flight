<?php 
if(isset($_GET['authentication'])) {
    $authStatus = $_GET['authentication'];
} else {
    $authStatus = '';
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=MuseoModerno' rel='stylesheet'>
        <script src="https://kit.fontawesome.com/8c89857bb1.js" crossorigin="anonymous"></script>
        <title>AKORA Admin-Login</title>
    </head>
    <style>
        *{
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'MuseoModerno';
}
.container1{
background: white;
display: flex;
justify-content: center;
align-items: center;
min-height: 100vh;
}
.container-pic img{
    position: absolute;
    width: 404px;
    margin-left: 480px;
    margin-top: -288px;
}
.container-pic1 img{
    position: absolute;
    width: 404px;
    margin-left: -385px;
    margin-top: -288px;
}
.herpes-logo img{
    position: absolute;
    width: 60px;
    margin-top: 300px;
    margin-left: 930px;
    transition: 1s ease;
}
.herpes-logo img:hover{
-webkit-transform: scale(1.2);
-ms-transform: scale(1.2);
transform: scale(1.2);
transition: 1s ease;
}
.login{
width: 500px;
padding: 20px;
overflow: hidden;
border: none;
border-radius: 15px;
background: rgb(0,0,0,0.9);
box-shadow: black 0px 0px 10px, black 0px 0px 10px;
}
.login-form{
flex-basis: 50%;
background:transparent;
padding: 25px;
margin: auto;
}
.login-form img{
width: 90%;
margin-left: 20px;
margin-bottom: -20px;
}
.login-form img {
    transition: 1s ease;
}
.login-form img:hover{
-webkit-transform: scale(1.2);
-ms-transform: scale(1.2);
transform: scale(1.2);
transition: 1s ease;
}
.user_input{
margin: 35px 0;  
}
.user_input input{
border-radius: 10px;
margin-bottom: -20px;
font-size: 15px;
border: none;
width: 100%;
height: 50px;
padding-left: 30px;
background: white;
box-shadow: white 0px 0px 10px, white 0px 0px 10px;
}
.user_input input::placeholder{
font-size: 18px;
padding-left: 0px;
}
.user_input i{
color: black;
position: relative;
font-size: 35px;
top: 43px;
left: 360px;
background: transparent;
}
.pass_input{
margin: 35px 0;  
}
.pass_input input{
border-radius: 10px;
margin-bottom: -20px;
font-size: 15px;
border: none;
width: 100%;
height: 50px;
padding-left: 30px;
background: white;
box-shadow: white 0px 0px 10px, white 0px 0px 10px;
}
.pass_input input::placeholder{
font-size: 18px;
padding-left: 0px;
}
.pass_input i{
color: black;
position: relative;
font-size: 35px;
top: 43px;
left: 360px;
background: transparent;

}
.login_btn{
margin-top: 30px;
border: none;
width: 30%;
margin-left: 145px;
border-radius: 10px;
padding: 12px;
font-size: 18px;
outline: none;
background: white;
cursor: pointer;
transition: .3s;
box-shadow: white 0px 0px 10px, white 0px 0px 10px;
}
span{
color: white;
}
.user_signup {
padding: 5px;
margin-top: 10px;
text-align: center;
font-size: 18px;
text-decoration: none;
}
.user_signup a{
text-decoration: none;
font-weight: bold;
background-image: linear-gradient(
to right,
white,
white 50%,
white 50%
);
background-size: 200% 100%;
background-position: -100%;
display: inline-block;
padding: 5px 0;
position: relative;
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
transition: all 0.3s ease-in-out;
}
.user_signup a:before{
content: '';
background: white;
display: block;
position: absolute;
bottom: -3px;
left: 0;
width: 0;
height: 3px;
transition: all 0.3s ease-in-out;
}
.user_signup a:hover{
background-position: 0;
}
.user_signup a:hover::before{
width: 100%;
}
    </style>
    <body>
        <!-------------------------LOGIN------------------------->
        <div class="container1">
            <div class="login">
                <div class="login-form">
                    <form action="authentication.php" method="POST">
                        <img src="image/akora-high-resolution-logo-white-on-transparent-background.png">
                        <div class="user_input">
                            <i class='far'>&#xf2bd;</i><input name="username" placeholder="USERNAME" type="text" required>
                        </div>
    
                        <div class="pass_input">
                            <i class='fas'>&#xf023;</i><input name="userpassword" placeholder="PASSWORD" type="password" required>
                        </div>
                        
                        <button class="login_btn">Login&nbsp;&nbsp;&#x276F;</button>
                        <br><br>
    
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>