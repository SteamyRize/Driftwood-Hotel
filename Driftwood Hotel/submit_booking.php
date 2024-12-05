<?php

session_start();

$is_logged_in = isset($_SESSION['user_id']);

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "driftwoodhotel"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!isset($_SESSION['user_id'])) {
    // If not logged in, redirect to login page
    header("location: login/login.php");
    exit();  // Ensure no further code is executed after the redirect
}

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['full_name'], $_POST['email'], $_POST['contact_number'], $_POST['room'], $_POST['check_in'], $_POST['check_out'], $_POST['payment_option'], $_POST['amount'])) {
        
        // Capture form data
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $contact_number = $_POST['contact_number'];
        $room = $_POST['room'];
        $check_in = $_POST['check_in'];
        $check_out = $_POST['check_out'];
        $payment_option = $_POST['payment_option'];
        $amount = $_POST['amount'];

        // Assuming the user is logged in and their user_id is stored in the session
        $user_id = $_SESSION['user_id']; 

        // Prepare SQL statement to insert booking into database
        $stmt = $conn->prepare("INSERT INTO bookings (user_id, full_name, email, contact_number, room, check_in, check_out, payment_option, amount) 
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

        if ($stmt === false) {
            echo "Database prepare error: " . $conn->error;
            exit();
        }

        // Bind parameters
        $stmt->bind_param("issssssss", $user_id, $full_name, $email, $contact_number, $room, $check_in, $check_out, $payment_option, $amount);

        // Execute the query
        if ($stmt->execute()) {
            // Return success message and redirect
            echo "<script>alert('Booking Successful! Waiting for Approval!'); window.location.href='rooms.php';</script>";
        } else {
            echo "Error executing query: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Error: Missing required form data.";
    }

   
}

// Close the connection
$conn->close();
?>
