<?php
// Users table query
$usersTable = "CREATE TABLE IF NOT EXISTS users (
id INT(6) AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50),
email VARCHAR(50),
password VARCHAR(50)
)";
// Recipes table query
$recipesTable = "CREATE TABLE IF NOT EXISTS recipes (
id INT(6) AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(15),
date VARCHAR(20),
image LONGBLOB NOT NULL,
author VARCHAR(15)
)";
// call connect and make the query
mysqli_query($connect,$usersTable);
mysqli_query($connect,$recipesTable);
 ?>
