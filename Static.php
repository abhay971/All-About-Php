<?php
// Static Methods and Properties
class Math {
    public static $pi = 3.14159;

    public static function square($num) {
        return $num * $num;
    }
}

echo "Static Methods and Properties:<br>";
echo "PI: " . Math::$pi . "<br>";
echo "Square of 4: " . Math::square(4) . "<br>";
?>
