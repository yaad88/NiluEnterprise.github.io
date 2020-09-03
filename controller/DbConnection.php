<?php
//echo "fuck";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "packaging";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
