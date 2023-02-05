<?php

function calculate($numlists) {
    $sum1= 0;
    $sum2= 0;
    $prod1 = 1;
    $prod2= 1;

    foreach ($numlists as $numlist) {
        
       if ($numlist % 2 == 0) {
            $sum1+= $numlist;
            $prod1 *= $numlist;
        }
    
        else {
            $sum2+= $numlist;
            $prod2*= $numlist;
        }
    }

    // 6. Return the sums and products of even and odd numbers in an associative array
    return [
        'prod1' => $prod1,
        'prod2' => $prod2,
        'sum1' => $sum1,
        'sum2' => $sum2,
      
    ];
}


echo "Enter a list of numbers, separated by Comma: ";


$handle = fopen("php://stdin", "r");
$numlists_string = trim(fgets($handle));
$numlists = explode(",", $numlists_string);
fclose($handle);
$result = calculate($numlists);
echo "The sum of even numbers from the List is: " . $result['sum1'] . "\n";
echo "The product of even numbers from the List is: " . $result['prod1'] . "\n";
echo "The sum of odd numbers from the List is: " . $result['sum2'] . "\n";
echo "The product of odd numbers from the List is: " . $result['prod2'] . "\n";
?>
