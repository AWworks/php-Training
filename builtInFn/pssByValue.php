<?php

// function addnumbers($a, $b) {
//     return $a + $b;
// }

// echo addnumbers(15, 10);

function addByRef(&$x, $y) {
    $x = $x + $y;
}
$a = 6; 
echo addByRef($a, 9);
echo $a;