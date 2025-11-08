<?php


function sum($numbers): int {
    // initialize the variable we will return
    $sum = 0;

    // sum up the numbers
    foreach ($numbers as $number) {
        $sum += $number;
    }
    var_dump($sum);
    // return the sum to the user
    return $sum;
    
}
// Example usage of sum
echo sum([3,2,3,4,7,8,9,10]);

$var = 123;
$x = "New DElhi";
$my_array = [1,2,3,4,7,8];
if (is_int($var)) echo " \n $var : is an integer \n";

if (is_string($x)) echo "$x: It's a string \n";

if (is_array($my_array)) echo "my_array It's an array \n";
$var = 12.45;
if (is_float($var)) echo "$var : It's a float \n";

