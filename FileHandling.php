<?php
// File Handling: Opening and Closing Files
$filename = "testing.txt";
$file = fopen($filename, "a+"); // Open file for reading and writing, create if not exists
if ($file) {
    echo "File '$filename' opened successfully.<br>";
    fclose($file); // Close the file
} else {
    echo "Error opening file '$filename'.<br>";
}

// File Handling: Reading and Writing Files
$file = fopen($filename, "a+"); // Open file for reading and writing, create if not exists
if ($file) {
    // Writing to file
    fwrite($file, "This is a test message.\n");
    echo "Data written to file '$filename'.<br>";

    // Reading from file
    rewind($file); // Reset file pointer to the beginning
    $content = fread($file, filesize($filename));
    echo "Content of file '$filename':<br>$content<br>";

    fclose($file); // Close the file
} else {
    echo "Error opening file '$filename'.<br>";
}

// File Uploads
echo "<br>File Uploads:<br>";
echo "<form action='' method='post' enctype='multipart/form-data'>";
echo "<input type='file' name='file'><br>";
echo "<input type='submit' name='submit' value='Upload'></form>";

if (isset($_FILES['file'])) {
    $uploadDir = "./uploads/"; // Directory to upload files
    $uploadedFile = $uploadDir . basename($_FILES['file']['name']);

    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadedFile)) {
        echo "File uploaded successfully.<br>";
        chmod($uploadedFile, 0644); // Set file permissions (rw-r--r--)
    } else {
        echo "Error uploading file.<br>";
    }
}

// File Permissions
echo "<br>File Permissions:<br>";
$filePermissions = fileperms($filename);
echo "Permissions for file '$filename': " . decoct($filePermissions) . "<br>";
?>
