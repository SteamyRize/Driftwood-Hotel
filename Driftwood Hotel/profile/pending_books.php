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


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="../css/admindesign.css">
    <link rel="stylesheet" href="../Room-desc.css">
    <link rel="icon" href="../icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
<header class="main-header">
        <div class="logo"><img src="../Drifcombieng.png" id="logopic"></div>
        <nav class="header-nav">
            <a href="../index.php">Home</a>
            <a href="../rooms.php">Rooms</a>
            <a href="../index.php#Gallery">Gallery</a>
            <a href="../index.php#Experience">Experiences / Reviews</a>
            <a href="../index.php#About">About Us</a>
            <a href="../index.php#Contact">Contact Us</a>
        </nav>
        <?php SignUser($is_logged_in, $username); ?>
</header>

    <div class="dashboard">
        <aside class="sidebar">
            <div class="admin-title">PROFILE</div>
            <nav class="menu">
                <hr>
                <a href="profile.php" class="menu-item">Profile</a>
                <hr>
                <a href="pending_books.php" class="menu-item active">Pending Books</a>
                <hr>
            </nav>
        </aside>

        <div class="content">
            <div class="content-header">
               <?php Profile($username); ?>
            </div>

            <!-- Table Container -->
                <div class="table-container">
                        <h2>Your Pending Bookings</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>User ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Contact Number</th>
                                    <th>Room</th>
                                    <th>Check-In</th>
                                    <th>Check-Out</th>
                                    <th>Payment Option</th>
                                    <th>Amount</th>
                                    <th>Booking Date</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($pendingBookings)): ?>
                                    <?php foreach ($pendingBookings as $row): ?>
                                        <tr>
                                            <td><?php echo $row['user_id']; ?></td>
                                            <td><?php echo $row['full_name']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['contact_number']; ?></td>
                                            <td><?php echo $row['room']; ?></td>
                                            <td><?php echo $row['check_in']; ?></td>
                                            <td><?php echo $row['check_out']; ?></td>
                                            <td><?php echo $row['payment_option']; ?></td>
                                            <td><?php echo $row['amount']; ?></td>
                                            <td><?php echo $row['created_at']; ?></td>
                                            <td>

                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="11">No pending bookings.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="table-container">
                        <h2>Your Approved Bookings</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>User ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Contact Number</th>
                                    <th>Room</th>
                                    <th>Check-In</th>
                                    <th>Check-Out</th>
                                    <th>Payment Option</th>
                                    <th>Amount</th>
                                    <th>Booking Date</th>
                                    <th>Approved Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($approvedBookings)): ?>
                                    <?php foreach ($approvedBookings as $row): ?>
                                        <tr>
                                            <td><?php echo $row['user_id']; ?></td>
                                            <td><?php echo $row['full_name']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['contact_number']; ?></td>
                                            <td><?php echo $row['room']; ?></td>
                                            <td><?php echo $row['check_in']; ?></td>
                                            <td><?php echo $row['check_out']; ?></td>
                                            <td><?php echo $row['payment_option']; ?></td>
                                            <td><?php echo $row['amount']; ?></td>
                                            <td><?php echo $row['created_at']; ?></td>
                                            <td><?php echo $row['approved_at']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="11">No approved bookings.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
              
            </div>
        </div>
    </div>
</body>

<footer class="footer">
    <div class="social-icons">
        <!-- Twitter X Logo -->
        <a href="https://x.com/DriftwoodHotel_" class="social-icon" target="_blank" aria-label="Twitter">
            <i class="fa-brands fa-twitter"></i>
        </a>
        <!-- Instagram Icon -->
        <a href="https://instagram.com" class="social-icon" target="_blank" aria-label="Instagram">
            <i class="fab fa-instagram"></i>
        </a>
        <!-- YouTube Icon -->
        <a href="https://www.youtube.com/channel/UCvgEu53gkqXZ369T61gtMEg" class="social-icon" target="_blank" aria-label="YouTube">
            <i class="fab fa-youtube"></i>
        </a>
        <!-- LinkedIn Icon -->
        <a href="https://www.linkedin.com/in/driftwoodhotel-ph-8a8008338/" class="social-icon" target="_blank" aria-label="LinkedIn">
            <i class="fab fa-linkedin"></i>
        </a>
    </div>
</footer>

</html>
