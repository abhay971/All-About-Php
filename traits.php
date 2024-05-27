<?php
// Traits
trait Greeting {
    public function sayHello() {
        echo "Hello!<br>";
    }
}

class User {
    use Greeting;
}

echo "Traits:<br>";
$user = new User();
$user->sayHello();
?>
