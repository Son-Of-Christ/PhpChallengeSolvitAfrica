<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 70%;
            margin-top:150px;
            font-family: Arial, Helvetica, sans-serif;
        }
        table, tr, th, td{
            border: 1px solid #d4d4d4;
            border-collapse: collapse;
            padding: 12px;
        }
        th, td{
            text-align: left;
            vertical-align: top;
        }
        tr:nth-child(even){
            background-color: #e7e9eb;
        }
    </style>
</head>
<body>
<h1>Register Solvit Africa Student</h1>
<form action="Register.php" method="POST" name="myForm">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <label for="tele">Telephone:</label>
  <input type="telephone" id="tel" name="tel"><br><br>
  <input type="submit"  name="submit"  value="Send form data!">
</form>

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password,'Informations');
$sql="SELECT * FROM students;";
$result=mysqli_query($conn,$sql);
$resultCheck=mysqli_num_rows($result);
if($resultCheck > 0){
    echo '<table> <tr> <th> Id </th> <th> LastName</th> <th>LastName </th> <th> Telephone </th> </tr>';
    while($row=mysqli_fetch_assoc($result))
    {
        echo '<tr > <td>' . $row["id"] . '</td>
         <td>' . $row["firstname"] . '</td>
        <td> ' . $row["lastname"] . '</td>
        <td>' . $row["telephone"] . '</td> </tr>';
    }
    echo '</table>';
}
?>
</body>
</html>