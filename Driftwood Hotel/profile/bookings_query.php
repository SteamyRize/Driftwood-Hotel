<?php
require '../logged_in.php';  // Assuming this script handles session checking and user login

// Assuming you have a function to get the logged-in user's ID
$user_id = $_SESSION['user_id'];  // Example: session variable holding user ID

// Establish a connection to the database
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query to get pending bookings
    $pendingBookingsQuery = "SELECT * FROM bookings WHERE user_id = :user_id";
    $stmt = $pdo->prepare($pendingBookingsQuery);
    $stmt->execute(['user_id' => $user_id]);
    $pendingBookings = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Query to get approved bookings
    $approvedBookingsQuery = "SELECT * FROM approved_bookings WHERE user_id = :user_id";
    $stmt = $pdo->prepare($approvedBookingsQuery);
    $stmt->execute(['user_id' => $user_id]);
    $approvedBookings = $stmt->fetchAll(PDO::FETCH_ASSOC);

     // Query to get passed bookings
     $passedBookingsQuery = "SELECT * FROM pass_books WHERE user_id = :user_id";
     $stmt = $pdo->prepare($passedBookingsQuery);
     $stmt->execute(['user_id' => $user_id]);
     $passedBookings = $stmt->fetchAll(PDO::FETCH_ASSOC);

      // Query to get denied bookings
      $deniedBookingsQuery = "SELECT * FROM denied_bookings WHERE user_id = :user_id";
      $stmt = $pdo->prepare($deniedBookingsQuery);
      $stmt->execute(['user_id' => $user_id]);
      $deniedBookings = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}



$host = 'localhost'; // e.g., 'localhost'
$db = 'driftwoodhotel';
$user = 'root';
$password = '';

try {
    // Connect to MySQL
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch all usernames from the users table (no host)
    $query = "SELECT username FROM users";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    // Loop through each user and grant privileges
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($users as $user) {
        $username1 = $user['username'];
        $host = '%'; // You can assume '%' for all hosts, or specify if needed

        try {
            // Grant privileges on 'bookings' table
            $grantBookings = "GRANT ALL PRIVILEGES ON driftwoodhotel.bookings TO :username@:host";
            $pdo->prepare($grantBookings)->execute([
                ':username' => $username1,
                ':host' => $host
            ]);

            // Grant privileges on 'approved_bookings' table
            $grantApprovedBookings = "GRANT ALL PRIVILEGES ON driftwoodhotel.approved_bookings TO :username@:host";
            $pdo->prepare($grantApprovedBookings)->execute([
                ':username' => $username1,
                ':host' => $host
            ]);

             // Grant privileges on 'pass_books' table
             $grantpassBookings = "GRANT ALL PRIVILEGES ON driftwoodhotel.pass_books TO :username@:host";
             $pdo->prepare($grantpassBookings)->execute([
                 ':username' => $username1,
                 ':host' => $host
             ]);

             $grantdeniedBookings = "GRANT ALL PRIVILEGES ON driftwoodhotel.denied_bookings TO :username@:host";
             $pdo->prepare($grantdeniedBookings)->execute([
                 ':username' => $username1,
                 ':host' => $host
             ]);

            
        } catch (Exception $e) {
            echo "Failed to grant privileges to $username@$host: " . $e->getMessage() . "\n";
        }
    }

    // Flush privileges
    $pdo->exec("FLUSH PRIVILEGES");
    

} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage() . "\n";
} catch (Exception $e) {
    echo "General error: " . $e->getMessage() . "\n";
}



?>