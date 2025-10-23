<?php
$phoneNumber = [
    "John" => "555-1234",
    "Jane" => "555-5678",
    "Doe" => "555-8765"
];
print_r($phoneNumber);
echo "John's phone number: " . $phoneNumber["John"]. "\n";
echo "Jane's phone number: " . $phoneNumber["Jane"]. "\n";
echo "Doe's phone number: " . $phoneNumber["Doe"]. "\n";

$numbers = [1, 2];
$numbers[2] = 3;
print_r($numbers);

$phoneNumber["Anfal"] = "555-4321"; // Adding a new key-value pair
print_r($phoneNumber);


if (array_key_exists("nadeem", $phoneNumber)) {
    echo "nadeem's phone number is " . $phoneNumber["nadeem"] . "\n";
} else {
    echo "nadeem's phone number is not in the phone book!";
}
?>