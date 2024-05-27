<?php
// Abstract Classes and Methods
abstract class Shape {
    protected $name;

    abstract public function area();
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($name, $width, $height) {
        $this->name = $name;
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }
}

echo "Abstract Classes and Methods:<br>";
$rectangle = new Rectangle("Rectangle", 5, 10);
echo "Area of Rectangle: " . $rectangle->area() . "<br>";
?>
