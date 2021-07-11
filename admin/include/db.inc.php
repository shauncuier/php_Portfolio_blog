<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_practice";


if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){
    die("Failed to connect Database");
}