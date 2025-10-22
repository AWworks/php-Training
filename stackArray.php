<?php

$numbers = [1, 2, 3];

array_push($numbers, 4); // Adds 4 to the end of the array
array_push($numbers, 5); // Adds 5 to the end of the array
echo "array push \n";
print_r($numbers); // Outputs: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )

echo "after pop \n";
array_pop($numbers); // Removes the last element (5) from the array
print_r($numbers); // Outputs: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )

echo "arrray unshift \n";
array_unshift($numbers,5); // Adds 0 to the beginning of the array
print_r($numbers); // Outputs: Array ( [0] => 0 [1] => 1 [2] => 2 [3] => 3 [4] => 4 )

echo "array shift \n";
array_shift($numbers); // Removes the first element (0) from the array
print_r($numbers); // Outputs: Array ( [0] => 1 [1]