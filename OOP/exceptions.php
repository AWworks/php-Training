<?php
//Exceptions example: try catch block 

function divide($numerator, $denominator)
{
    if ($denominator == 0) {
        throw new Exception("Division by zero is not allowed.");
    }
    return $numerator / $denominator;
}

try {
    echo divide(10, 2) . "\n"; // Valid division
    echo divide(5, 0) . "\n";  // This will throw an exception
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
