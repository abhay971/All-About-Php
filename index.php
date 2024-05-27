<?php
echo "Hello, World!<br>"; // This line prints "Hello, World!" to the browser

// Variables
$variable = "This is a variable"; // Declaring a string variable
echo $variable . "<br>"; // Concatenation of strings using the dot operator

// Data Types
$integer = 42;            // Integer
$float = 3.14;            // Float
$string = "Hello, PHP!";  // String
$boolean = true;          // Boolean

// Printing different data types
echo "Integer: $integer<br>";  // Outputs: Integer: 42
echo "Float: $float<br>";      // Outputs: Float: 3.14
echo "String: $string"."<br>";    // Outputs: String: Hello, PHP!
echo "Boolean: " . ($boolean ? 'true' : 'false') . "<br>"; // Outputs: Boolean: true

// Constants
define("SITE_NAME", "My Website"); // Defining a constant
echo "Site Name: " . SITE_NAME . "<br>"; // Outputs: Site Name: My Website

// Demonstrating another constant
const PI = 3.14159;
echo "Value of PI: " . PI . "<br>"; // Outputs: Value of PI: 3.14159
?>