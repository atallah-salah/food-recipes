<?php
// connect information
$server = "localhost";
$username = "root";
$password = "";
$DBname="foodRecipes";
// create connection
$connect = new mysqli($server, $username, $password,$DBname);
// Check connection
if ($connect->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
