<?php
$servername = "localhost";
$username = "root";
$password = "8129818741Aa@";
$dbname = "php_a2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
