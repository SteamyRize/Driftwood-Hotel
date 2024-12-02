<?php
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

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['full_name'], $_POST['email'], $_POST['contact_number'], $_POST['check_in'], $_POST['check_out'], $_POST['payment_option'], $_POST['amount'])) {
        
        // Capture form data
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $contact_number = $_POST['contact_number'];
        $check_in = $_POST['check_in'];
        $check_out = $_POST['check_out'];
        $payment_option = $_POST['payment_option'];
        $amount = $_POST['amount'];
      

        // Prepare SQL statement to insert booking into database
        $stmt = $conn->prepare("INSERT INTO bookings (full_name, email, contact_number, check_in, check_out, payment_option, amount) VALUES (?, ?, ?, ?, ?, ?, ?)");
        
        if ($stmt === false) {
            echo "Database prepare error: " . $conn->error;
            exit();
        }

        // Bind parameters
        $stmt->bind_param("sssssss", $full_name, $email, $contact_number, $check_in, $check_out, $payment_option, $amount);

        // Execute the query
        if ($stmt->execute()) {
            // Send email to admin (Ensure mail() works or use an SMTP library)
         /*   $to = "admin@example.com"; 
            $subject = "New Booking for $full_name";
            $message = "A new booking has been made.\n\nFull Name: $full_name\nEmail: $email\nContact: $contact_number\nCheck-in: $check_in\nCheck-out: $check_out\nAmount: $amount\nPayment Option: $payment_option";
            mail($to, $subject, $message); */

            // Return success message and redirect
            echo "<script>alert('Booking Successful! Waiting for Approval!'); window.location.href='rooms.php';</script>";
        } else {
            echo "Error executing query: " . $stmt->error;
        }
    } else {
        echo "Error: Missing required form data.";
    }
}
?>


