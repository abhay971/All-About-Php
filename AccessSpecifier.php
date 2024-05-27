<?php
// Access Modifiers
class MyClass {
    public $publicVar = "Public";
    private $privateVar = "Private";
    protected $protectedVar = "Protected";

    public function displayVars() {
        echo "Public Var: " . $this->publicVar . "<br>";
        echo "Private Var: " . $this->privateVar . "<br>";
        echo "Protected Var: " . $this->protectedVar . "<br>";
    }
}

$obj = new MyClass();
echo "Access Modifiers:<br>";
$obj->displayVars(); // Accessing public method to display variables
?>
