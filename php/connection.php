<?php

$dbhost = "";
$dbuser = "root";
$dbpass = "admin";
$dbname = "print";

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {

    die("failed to connect");
}