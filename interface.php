<?php
// Interfaces
interface Logger {
    public function log($message);
}

class FileLogger implements Logger {
    public function log($message) {
        echo "Logging message to file: $message<br>";
    }
}

echo "Interfaces:<br>";
$fileLogger = new FileLogger();
$fileLogger->log("Error message");
?>
