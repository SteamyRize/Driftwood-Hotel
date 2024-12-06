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

    // Retrieve messages
    $stmt = $pdo->query("SELECT * FROM messages ORDER BY created_at DESC");
    $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/admindesign.css">
    <link rel="stylesheet" href="../Room-desc.css">
    <link rel="icon" href="../icon.png">
</head>

<body>
<header class="main-header">
    <div class="logo"><img src="../Drifcombieng.png" id="logopic"></div>
</header>

<div class="dashboard">
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="admin-title">ADMIN</div>
        <nav class="menu">
                <hr>
                <a href="../adminpage.php" class="menu-item">Pending Books</a>
                <hr>
                <a href="roombooking.php" class="menu-item">Booked Rooms</a>
                <hr>
                <a href="pass_books.php" class="menu-item">Passed Books</a>
                <hr>
                <a href="roombooking_denied.php" class="menu-item">Denied Books</a>
                <hr>
                <a href="manageuser.php" class="menu-item">Manage user account</a>
                <hr>
                <a href="messages.php" class="menu-item active">Messages</a>
                <hr>
                
            </nav>
    </aside>

    <!-- Main Content -->
    <div class="content">
        <div class="content-header">
            <h2>Messages</h2><span class="inactive"></span>
        </div>

            <!-- Table Container -->
            <div class="table-container">
                <table border="1">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>First Name</th>
                        <th>Surname</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($messages as $message): ?>
                        <tr>
                            <td><?= htmlspecialchars($message['user_id']) ?></td>
                            <td><?= htmlspecialchars($message['first_name']) ?></td>
                            <td><?= htmlspecialchars($message['surname']) ?></td>
                            <td><?= htmlspecialchars($message['email']) ?></td>
                            <td><?= nl2br(htmlspecialchars($message['message'])) ?></td>
                            <td><?= htmlspecialchars($message['created_at']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>

</html>
