<?php
session_start(); // Start the session

// Replace with your database credentials
$host = "localhost";
$db = "driftwoodhotel";
$user = "root";
$password = "";

try {
    // Connect to the database
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Retrieve form data
        $first_name = htmlspecialchars($_POST['firstname']);
        $surname = htmlspecialchars($_POST['surname']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Get the user_id from the session
        $user_id = $_SESSION['user_id'] ?? null; // Replace with your actual session key

        if (!$user_id) {
            header("location: ../login/login.php");
        }

        // Insert data into the messages table
        $stmt = $pdo->prepare("INSERT INTO messages (user_id, first_name, surname, email, message) VALUES (:user_id, :first_name, :surname, :email, :message)");
        $stmt->execute([
            ':user_id' => $user_id,
            ':first_name' => $first_name,
            ':surname' => $surname,
            ':email' => $email,
            ':message' => $message
        ]);

        echo "<script>alert('Message Submitted!'); window.location.href='../index.php';</script>";

    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
