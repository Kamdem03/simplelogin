<?php
$dbSevername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loggingsystem";

$conn = mysqli_connect($dbSevername,$dbUsername,$dbPassword,$dbName);

if(!$conn){
    echo "Connection fail";

}
