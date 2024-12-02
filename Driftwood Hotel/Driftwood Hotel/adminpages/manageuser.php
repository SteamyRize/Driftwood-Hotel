<?php

// Database connection
$conn = new mysqli("localhost", "root", "", "driftwoodhotel");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$users = $result->fetch_all(MYSQLI_ASSOC);


$conn->close();

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
                <a href="../adminpage.php" class="menu-item">Status</a>
                <hr>
                <a href="roombooking.php" class="menu-item">Room Booking</a>
                <hr>
                <a href="manageuser.php" class="menu-item active">Manage user account</a>
                <hr>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="content">
            <div class="content-header">
                <h2>Manage User Account</h2><span class="inactive">Room Booking</span>
            </div>

            <!-- Table Container -->
            <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Created at</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($users)): ?>
                        <?php foreach ($users as $row): ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['created_at']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="9">No bookings available.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        </div>
    </div>
</body>

</html>