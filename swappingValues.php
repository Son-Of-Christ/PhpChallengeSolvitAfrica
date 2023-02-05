<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.before
{
    margin-left:300px;
    margin-top:100px;
    font-size:20px;
}
.after
{
      margin-left:300px;
    margin-top:50px;
    font-size:20px;
}
body
{
    background-color:gray;
}
fieldset
{ 
    margin-top:20px;
    background-color:whitesmoke;
    height:500px;
}
b
{
color:red;
}
    </style>
</head>
<body>
<?php
//let X be the first variable to be assigned with a specific number
//let Y be the second variable to be assigned with a specific number


$X= 2022;
$Y=2023;
echo "<fieldset>";
echo "<div class='before'>";
echo "====================================================================================<br />";
echo "<br />";
echo "Variables Values Before Swapping:<br />";
echo "X=<b> $X</b> <br />";
echo "Y=<b>$Y </b><br />";
echo "====================================================================================<br />";
echo "</div>";
//let Z be the third variable to help us in swapping
$Z=$X;
$X=$Y;
$Y=$Z;

echo "<div class='after'>";
echo"======================================================================================<br />";
echo "Variables Values After Swapping:<br />";
echo "X=<b>$X</b> <br />";
echo "Y=<b>$Y</b> <br />";
echo"======================================================================================<br />";
echo "</div>";
echo "</fieldset>";
?>

</body>
</html>
