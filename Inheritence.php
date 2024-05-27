<?php
// Parent Class
class Vehicle {
    // Properties
    public $brand;
    public $model;

    // Constructor
    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    // Method to display vehicle information
    public function displayInfo() {
        echo "Brand: " . $this->brand . "<br>";
        echo "Model: " . $this->model . "<br>";
    }
}

// Child Class
class Car extends Vehicle {
    // Additional property for Car
    public $color;

    // Constructor
    public function __construct($brand, $model, $color) {
        parent::__construct($brand, $model); // Call parent constructor
        $this->color = $color;
    }

    // Overriding the displayInfo method
    public function displayInfo() {
        parent::displayInfo(); // Call the parent method
        echo "Color: " . $this->color . "<br>";
    }
}

// Creating Objects (Instances)
$vehicle1 = new Vehicle("Toyota", "Camry");
$car1 = new Car("Honda", "Civic", "Red");

// Displaying Information
echo "Vehicle Details:<br>";
$vehicle1->displayInfo();

echo "<br>Car Details:<br>";
$car1->displayInfo();
?>
