<?php
// $str = "Visit W3Schools!";
// $pattern = "/w3schools/";
// if (preg_match($pattern, $str)) {
//     echo "A match was found.";
// } else {
//     echo "A match was not found.";
// }



// $str = "The rain in SPAIN falls mainly on the plains.";
// $pattern = "/ain/i";
// echo preg_match_all($pattern, $str);


$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "FL Academy", $str);
?>