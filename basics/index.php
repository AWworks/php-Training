<?php

$oddNumbers = [1, 3, 5, 7, 9];
$evenNumbers = [2, 4, 6, 8, 10];

echo $oddNumbers[0] + $evenNumbers[0]. "\n"; // Outputs 3

$oddNumbers[5] = 11; // Adding a new element to the array

// unset($oddNumbers[3]); // Removing the element with value 7

// print_r($oddNumbers);
$oddArrLength = count($oddNumbers); // Outputs the number of elements in the array

echo "Length of oddNumbers array: " . $oddArrLength;

?>