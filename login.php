<?php
session_start();

include("php/connection.php");


if (isset($_POST["login"])) {


    $username = $_POST["username"];
    $password = $_POST["password"];

    $user = mysqli_real_escape_string($con, $username);
    $pass = mysqli_real_escape_string($con, $password);

    $query = mysqli_query($con, "select * from users where username = '$user' and password = '$pass'") or die("don't find the table");

    $row = mysqli_fetch_array($query);

    $name = $row['username'];
    $counter = mysqli_num_rows($query);
    $id = $row['id'];

    if ($counter == 0) {
        echo "<script type='text/javascript'>
                    alert('Invalid user name or password !');
                    document.location='index.php'
                </script>";
    } else {
        $_SESSION['id'] = $id;
        $_SESSION['username'] = $username;


        if ($id == 1) {
            echo " <script type='text/javascript'>
            
                document.location='print_tr-admin.php';
            
            </script> ";
        } else {
            echo " <script type='text/javascript'>
            
                document.location='print_tr-user.php';
            
            </script> ";
        }
    }

}