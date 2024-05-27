<?php
// Error Handling
function errorHandler($errno, $errstr, $errfile, $errline) {
    echo "Error: [$errno] $errstr<br>";
    echo "Error occurred in $errfile on line $errline<br>";
}

set_error_handler("errorHandler");

echo "Error Handling:<br>";
echo $undefinedVariable; // Generate an undefined variable error
echo "<br>";

// Custom Error Handlers
function customErrorHandler($errno, $errstr) {
    echo "Custom Error: [$errno] $errstr<br>";
}

set_error_handler("customErrorHandler");

echo "<br>Custom Error Handlers:<br>";
echo $undefinedVariable; // Generate an undefined variable error
echo "<br>";

// Exception Handling
echo "<br>Exception Handling:<br>";
try {
    throw new Exception("Custom Exception Message");
} catch (Exception $e) {
    echo "Exception Caught: " . $e->getMessage() . "<br>";
}

// Custom Exceptions
class MyCustomException extends Exception {
    public function errorMessage() {
        return "Custom Exception: " . $this->getMessage() . "<br>";
    }
}

echo "<br>Custom Exceptions:<br>";
try {
    throw new MyCustomException("Custom Exception Message");
} catch (MyCustomException $e) {
    echo $e->errorMessage();
}
?>
