<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/lock.ico">
    <link rel="stylesheet" href="css/sass/login/login.css?v=99">
    <script src="js/jquery-1.11.1.min.js"></script>
    <title> Pioneers | Lockscreen </title>
</head>

<body id="dir">
    <div class="container">
        <form class="login" method="POST" id="frmLogin" action="login.php">
            <img src="img/login/pIONEERS_LOGO.png" alt="" width="35%">
            <div class="inputs">
                <div class="trans">
                    <a class="translatear" id="ar">Ar</a>
                    <a class="translateen" id="en">En</a>
                </div>
                <input type="text" name="username" id="user" placeholder="User Name">
                <input type="password" name="password" id="pass" placeholder="Password">
                <!-- <div>
                    <input type="checkbox" name="remember" id="remember" checked>
                    <label for="remember">Remember me</label>
                </div> -->
                <button type="submit" name="login" id="btn" key='login'>Login</button>
                <span class="error"></span>
            </div>
            <!-- <a href="">Change Password ?</a> -->
            <p class="copyr">Copyright © 2016-2021 <a href="https://www.pioneers.ly/" target="_blank">Pioneers</a>
                All rights
                reserved.</p>
        </form>
        <div class="pic">
            <img src="img/login/doctor.jpg" alt="">
        </div>
    </div>
</body>
<script src="js/translate.js?v=99999"></script>

</html>