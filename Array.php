<?php
// Arrays
$fruits = array("Apple", "Banana", "Orange", "Mango");
echo "Simple Array:<br>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

// Associative Arrays
$person = array("name" => "John", "age" => 30, "city" => "New York");
echo "<br>Associative Array:<br>";
foreach ($person as $key => $value) {
    echo "$key: $value<br>";
}

// Multidimensional Arrays
$employees = array(
    array("name" => "Alice", "age" => 25, "department" => "HR"),
    array("name" => "Bob", "age" => 35, "department" => "Finance"),
    array("name" => "Charlie", "age" => 30, "department" => "IT")
);
echo "<br>Multidimensional Array:<br>";
foreach ($employees as $employee) {
    foreach ($employee as $key => $value) {
        echo "$key: $value | ";
    }
    echo "<br>";
}
?>
