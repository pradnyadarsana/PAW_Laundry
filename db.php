<?php
$dbServer = "localhost";
$username = "root";
$password = "";
$dbName = "PAW_Laundry";
$con = mysqli_connect($dbServer, $username, $password, $dbName);
if(mysqli_connect_error())
{
    echo "Failed to connect to MySQL: ". mysqli_connect_error();
}
?>