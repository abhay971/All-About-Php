<?php
// Arithmetic Operators
$num1 = 10;
$num2 = 5;
$sum = $num1 + $num2;
$diff = $num1 - $num2;
$product = $num1 * $num2;
$quotient = $num1 / $num2;
$modulus = $num1 % $num2;

echo "Arithmetic Operations:<br>";
echo "Sum: $sum<br>";
echo "Difference: $diff<br>";
echo "Product: $product<br>";
echo "Quotient: $quotient<br>";
echo "Modulus: $modulus<br>";

// Assignment Operators
$x = 10;
$y = 5;
$x += $y; // Equivalent to: $x = $x + $y;
echo "Assignment Operations:<br>";
echo "x = $x<br>";

// Comparison Operators
$num3 = 10;
$num4 = 5;
echo "Comparison Operations:<br>";
echo "num3 == num4: " . ($num3 == $num4 ? 'true' : 'false') . "<br>"; // Equal
echo "num3 != num4: " . ($num3 != $num4 ? 'true' : 'false') . "<br>"; // Not Equal
echo "num3 > num4: " . ($num3 > $num4 ? 'true' : 'false') . "<br>";   // Greater Than
echo "num3 < num4: " . ($num3 < $num4 ? 'true' : 'false') . "<br>";   // Less Than
echo "num3 >= num4: " . ($num3 >= $num4 ? 'true' : 'false') . "<br>"; // Greater Than or Equal To
echo "num3 <= num4: " . ($num3 <= $num4 ? 'true' : 'false') . "<br>"; // Less Than or Equal To

// Logical Operators
$a = true;
$b = false;
echo "Logical Operations:<br>";
echo "a AND b: " . ($a && $b ? 'true' : 'false') . "<br>"; // AND
echo "a OR b: " . ($a || $b ? 'true' : 'false') . "<br>";  // OR
echo "NOT a: " . (!$a ? 'true' : 'false') . "<br>";        // NOT

// Increment/Decrement Operators
$counter = 5;
echo "Increment/Decrement Operations:<br>";
echo "Counter: $counter<br>";
$counter++;
echo "After Increment: $counter<br>";
$counter--;
echo "After Decrement: $counter<br>";

// Concatenation Operator
$firstName = "John";
$lastName = "Doe";
$fullName = $firstName . " " . $lastName;
echo "Concatenation Operation:<br>";
echo "Full Name: $fullName<br>";
?>
