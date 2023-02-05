<?php 
//Using MySQLi Procedural procedure to establish connection to mysql server from our php script
$servername = "localhost";
$username = "root";
$password = "";

// Creating connection
$conn = mysqli_connect($servername, $username, $password);
//checking connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Creating a database named UserInformations
$sql = "CREATE DATABASE  Informations";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully with the name Informations";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
// closing connection

    

?>