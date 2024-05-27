<?php
// Basic String Declaration
$basicString = "Hello, World!";
echo $basicString . "<br>";

// String Concatenation
$firstName = "John";
$lastName = "Doe";
$fullName = $firstName . " " . $lastName;
echo "Full Name: " . $fullName . "<br>";

// String Length
$stringLength = strlen($basicString);
echo "Length of String: " . $stringLength . "<br>";

// String to Upper Case
$upperCaseString = strtoupper($basicString);
echo "Upper Case: " . $upperCaseString . "<br>";

// String to Lower Case
$lowerCaseString = strtolower($basicString);
echo "Lower Case: " . $lowerCaseString . "<br>";

// String Position
$position = strpos($basicString, "World");
echo "Position of 'World': " . $position . "<br>";

// Substring
$substring = substr($basicString, 7, 5);
echo "Substring (7, 5): " . $substring . "<br>";

// Replace Substring
$replacedString = str_replace("World", "PHP", $basicString);
echo "Replaced String: " . $replacedString . "<br>";
?>
