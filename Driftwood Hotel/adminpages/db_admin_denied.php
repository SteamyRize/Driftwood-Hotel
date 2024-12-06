<?php

$host = "localhost";
$dbname = "driftwoodhotel";
$username = "root";
$password = "";

// Database connection
$conn = new mysqli("localhost", "root", "", "driftwoodhotel");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve bookings
$sql = "SELECT * FROM denied_bookings";
$result = $conn->query($sql);
$denied_bookings = $result->fetch_all(MYSQLI_ASSOC);



$conn->close();
?>