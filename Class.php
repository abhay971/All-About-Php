<?php
// Defining a Class
class Car {
    // Properties
    public $brand;
    public $model;
    public $color;

    // Constructor
    public function __construct($brand, $model, $color) {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }

    // Method to display car information
    public function displayInfo() {
        echo "Brand: " . $this->brand . "<br>";
        echo "Model: " . $this->model . "<br>";
        echo "Color: " . $this->color . "<br>";
    }

    // Destructor
    public function __destruct() {
        echo "The car object is being destroyed.<br>";
    }
}

// Creating Objects (Instances)
$car1 = new Car("Toyota", "Corolla", "Blue");
$car2 = new Car("Honda", "Civic", "Red");

// Accessing Properties
echo "Car 1 Details:<br>";
$car1->displayInfo();

echo "<br>Car 2 Details:<br>";
$car2->displayInfo();
?>
