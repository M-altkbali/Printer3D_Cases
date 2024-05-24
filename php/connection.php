<?php

$dbhost = "";
$dbuser = "root";
$dbpass = "";
$dbname = "print";

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {

    die("failed to connect");
}