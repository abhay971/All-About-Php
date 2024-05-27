<?php
// Defining Functions
function greet($name) {
    return "Hello, $name!";
}

// Function Parameters
echo "Defining Functions & Function Parameters:<br>";
echo greet("John") . "<br>";
echo greet("Alice") . "<br>";

// Return Values
function add($a, $b) {
    return $a + $b;
}

echo "<br>Return Values:<br>";
$result = add(5, 3);
echo "Result of addition: $result<br>";

// Variable Scope
$num = 10;

function modifyNum() {
    global $num;
    $num *= 2;
}

modifyNum();
echo "<br>Variable Scope:<br>";
echo "Modified Num: $num<br>";

// Anonymous Functions
echo "<br>Anonymous Functions:<br>";
$addition = function ($x, $y) {
    return $x + $y;
};

echo "Anonymous Function Result: " . $addition(3, 4) . "<br>";

// Arrow Functions (PHP 7.4+)
echo "<br>Arrow Functions:<br>";
$arrowAddition = fn($x, $y) => $x + $y;
echo "Arrow Function Result: " . $arrowAddition(2, 5) . "<br>";
?>
