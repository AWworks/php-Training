<?php
// inheritance example: Base class Vehicle and derived class Motorcycle
class Vehicle
{
    public $make;
    public $model;
    public $year;

    public function __construct($make, $model, $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function displayInfo()
    {
        echo "Vehicle: " . $this->year . " " . $this->make . " " . $this->model . "\n";
    }
}

class Motorcycle extends Vehicle
{
    public $type;

    public function __construct($make, $model, $year, $type)
    {
        parent::__construct($make, $model, $year);
        $this->type = $type;
    }

    public function displayInfo()
    {
        parent::displayInfo();
        echo "Type: " . $this->type . "\n";
    }
}
// Creating an instance of the Motorcycle class
$myMotorcycle = new Motorcycle("Harley-Davidson", "Street 750", 2019, "Cruiser");
$myMotorcycle->displayInfo();

$myCar = new Vehicle("Ford", "Mustang", 2021);
$myCar->displayInfo();

?>