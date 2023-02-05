<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body
        {
            background-color:gray;
        }
        .numbers
        {
            margin-top:150px;
            margin-left:400px;
            font-size:30px;
            
        }
        .num
        {
            color:red;
            display: inline-block;
            padding-left:5px;
            font-weight:bold;
        }
        fieldset
        {
            margin-top:20px;
            height:500px;
            background-color:whitesmoke;
        }

        
    </style>
</head>
<body>
<?php
//let variable n be the size of input array
//let variable arr be input array
$n=10;
$arr=array(1,2,3,6,7);
 echo "<fieldset>";
 echo "<div class='numbers'> <p>The Missing Numbers from an array of 10 numbers<br> with input 1,2,3,6,7 are: <br />";
 echo "<br />";
for($i=1;$i<=$n;$i++)
{ 
    echo "<div class='num'>";
    if(!in_array($i,$arr))
    {
        echo  $i." ".",";
 
    }
    echo "</div>";
 
}
echo "</div>";
echo "</fieldset>";
?>

</body>
</html>
