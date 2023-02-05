<?php 
$servername = "localhost";
$username = "root";
$password = "";
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$tel=$_POST['tel'];

$connss = mysqli_connect($servername, $username, $password,'Informations');
$sqls=" INSERT INTO Students(firstname,lastname,Telephone) VALUES('$fname','$lname',$tel);";
mysqli_query($connss,$sqls);

header("Location:../Question3.php?Register=Success")

?>