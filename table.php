
<?php
$servername = "localhost";
$username = "root";
$password = "";
$conns = mysqli_connect($servername, $username, $password,'Informations');
if (!$conns) {
    die("Connection failed: " . mysqli_error());
  }
  else{
      echo 'Connected Successfuly';
  }
  
  
$sql =" CREATE TABLE Students (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    telephone VARCHAR(50)
  
    )";
    
    mysqli_query($conns,$sql) or die ("Bad Create:$sql");

?>

