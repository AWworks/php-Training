<?php

$course = "php - hypertext preprocessor";
$hello = "I am learning ";
// echo $hello." \n";

echo $hello . "" . $course ."\n";
echo "string length : " . strlen($course);
echo "\n";

$filename = "image.jpg";
$extension = substr($filename, strlen($filename) - 3);
echo $extension ;
?>
