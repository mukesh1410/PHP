<?php
$host = "localhost";
$username = "root";
$password = null;
$dbname = "college"; // Make sure your database name is correct

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password); // Corrected to `dbname`
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<br>";
    echo "Connection done<br>"; // Added <br> for better output formatting
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
