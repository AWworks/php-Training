<?php
// OOP example: Car class with properties and methods
class Car
{
    // Properties
    public $make;
    public $model;
    public $year;
    public $color;
    // Constructor
    public function __construct($make, $model, $year, $color)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
    }
    // Method to display car details
    public function displayDetails()
    {
        echo "Car: " . $this->year . " " . $this->make . " " . $this->model . " " . $this->color . "\n";
    }
}

// Creating an instance of the Car class
$myCar = new Car("Toyota", "Corolla", 2020, "Blue");
$myCar->displayDetails();
$myCar2 = new Car("Honda", "City", 2023, "White");
$myCar2->displayDetails();

?>