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
    public function start()
    {
        echo $this->make . " " . $this->model . " has started.\n";
    }
    public function applyBrakes()
    {
        echo $this->make . " " . $this->model . "The brakes have been applied.\n";
    }
    public function stop()
    {
        echo $this->make . " " . $this->model . "The car has stopped.\n";
    }
    public function accelerate($speed)
    {
        echo "The car is accelerating to " . $speed . " km/h.\n";
    }
}

// Creating an instance of the Car class
$myCar = new Car("Toyota", "Corolla", 2020, "Blue");
$myCar->displayDetails();
$myCar2 = new Car("Honda", "City", 2023, "White");
$myCar2->displayDetails();

$myCar->start();
$myCar->accelerate(60);
$myCar->applyBrakes();
$myCar->stop();

?>