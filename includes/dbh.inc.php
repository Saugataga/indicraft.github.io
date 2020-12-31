<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "accountsystemindicraft";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword , $dbName);

is (!$conn){
    die"("connection failed : . mysqli_connect_error());
}
