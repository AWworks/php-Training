<?php 


function add_five(&$value) {
  $value += 5;
}

$num = 10;
add_five($num);
echo $num;
?>

