<?php
// If-Else
$age = 20;
echo "If-Else:<br>";
if ($age >= 18) {
    echo "You are an adult.<br>";
} else {
    echo "You are a minor.<br>";
}

// Switch
$day = "Monday";
echo "<br>Switch:<br>";
switch ($day) {
    case "Monday":
        echo "Today is Monday.<br>";
        break;
    case "Tuesday":
        echo "Today is Tuesday.<br>";
        break;
    default:
        echo "Today is neither Monday nor Tuesday.<br>";
        break;
}

// For Loop
echo "<br>For Loop:<br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i<br>";
}

// While Loop
echo "<br>While Loop:<br>";
$num = 1;
while ($num <= 5) {
    echo "Number: $num<br>";
    $num++;
}

// Do-While Loop
echo "<br>Do-While Loop:<br>";
$num = 1;
do {
    echo "Number: $num<br>";
    $num++;
} while ($num <= 5);

// Foreach Loop
echo "<br>Foreach Loop:<br>";
$colors = array("Red", "Green", "Blue");
foreach ($colors as $color) {
    echo "Color: $color<br>";
}
?>
