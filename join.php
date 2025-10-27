<?php

$fruits = "apple,banana,orange";
$fruit_list = explode(",", $fruits);
echo "The second fruit in the list is $fruit_list[1]";
print_r($fruit_list);

$favourite_list = ['kashmir', 'munnar', 'manali'];
echo "My favourite places are ". implode(",", $favourite_list) ."";
