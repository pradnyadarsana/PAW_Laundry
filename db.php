<?php
$dbServer = "localhost";
$username = "id10873022_localhost";
$password = "123456789";
$dbName = "id10873022_paw_laundry";
$con = mysqli_connect($dbServer, $username, $password, $dbName);
if(mysqli_connect_error())
{
    echo "Failed to connect to MySQL: ". mysqli_connect_error();
}
?>