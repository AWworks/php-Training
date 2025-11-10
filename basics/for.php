<?php

$numbers = [11, 3, 7, 21, 13, 15, 59, 1, 5];

 $min = $numbers[0]; $max= $numbers[0];
 for ($i=0; $i < count($numbers); $i++) { 
 
     if ($numbers[$i] <= $min) $min = $numbers[$i];
     if ($numbers[$i] > $max) $max = $numbers[$i];
    
}

echo "Mininmum : $min" ."\n";
echo "Maximum :  $max";
