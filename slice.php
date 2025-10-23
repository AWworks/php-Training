<?php

$numbers = [1, 2, 3, 4, 5, 9, 5];
$sliced_array = array_slice($numbers, 3); // Slices the
print_r($sliced_array); // Outputs: Array ( [0] => 2 [1] => 3 [2] => 4 )


//splice example
$my_array = [1, 2, 3, 4, 5, 6, 7,8,9,10];
echo "my_array before splice \n";
print_r($my_array);
$spliced_elements = array_splice($my_array, 3); // Removes 3 elements starting from index 4 and replaces them with 50, 60, 70

echo "my_array after splice \n";
print_r($my_array); // Outputs: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 50 [4] => 60 [5] => 70 [6] => 8 [7] => 9 [8] => 10 )

echo " splice elements \n";
print_r($spliced_elements); // Outputs: Array ( [0] => 4 [1] => 5 [2] => 6 )
?>