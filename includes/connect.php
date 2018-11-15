<?php
/*$connection = mysqli_connect("localhost", "Iris", "0000", "easyforward");

if (mysqli_connect_errno())
{
	echo "Failed to connect to MYSQL: " . mysqli_connect_error();
}*/

$servername = "localhost";
$username = "Iris";
$password = "0000";
$dbname = "projectenverzameling";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}
