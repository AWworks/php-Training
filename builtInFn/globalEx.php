<?php


function showX()
{
    $GLOBALS["x"] = 75;
    // $x = 75;
}
showX();
echo $x;
echo "--------------";
// print_r($_SERVER);

echo $_SERVER['HTTP_HOST'];