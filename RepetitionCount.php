<?php

$arr=array('a','b','c','c','d','e','f','e','e','f','f','g','h','i','e','j','j','k','l','m','m','m','m','m','n','n','o');
$counts=array_count_values($arr);
foreach($counts as $count=>$value)
{   
    if($value>1)
    {
        echo $count." "."=====>"." " .$value." " ." times <br />" ;
    }
}

?>