<?php

$host = 'localhost'; 
$dbname = 'driftwoodhotel'; 
$username = 'root'; 
$password = ''; 

try {
   
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
    $stmt = $pdo->query("SELECT id, room_name, status FROM rooms");
    $rooms = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Error fetching rooms: " . $e->getMessage();
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
                <a href="room_availability.php" class="menu-item active">Available Rooms</a>
                <hr>
                <a href="manageuser.php" class="menu-item">Manage user account</a>
                <hr>
                <a href="messages.php" class="menu-item">Messages</a>
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
                            <th>Room ID</th>
                            <th>Room Name</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rooms as $room): ?>
                            <tr>
                                <td><?php echo $room['id']; ?></td>
                                <td><?php echo $room['room_name']; ?></td>
                                <td><?php echo $room['status']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
            </table>
        </div>
    </div>
</div>
</body>

</html>
