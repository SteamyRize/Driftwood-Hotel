<?php
require '../logged_in.php';

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
        <?php SignUser1($is_logged_in, $username); ?>


    </header>
    <div class="dashboard">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="admin-title">PROFILE</div>
            <nav class="menu">
                <hr>
                <a href="profile.php" class="menu-item active">Profile</a>
                <hr>
                <a href="pending_books.php" class="menu-item ">Pending Books</a>
                <hr>
                <a href="approved_books.php" class="menu-item">Approved Books</a>
                <hr>
                <a href="passed_books.php" class="menu-item ">Passed Books</a>
                <hr>
                <a href="denied_books.php" class="menu-item">Denied Books</a>
                <hr>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="content">
            <div class="content-header">
               <?php Profile($username); ?>
            </div>

           

            <!-- Table Container -->
            <div class="table-container">
                <?php Info($username, $email); ?>

                
                    <a href="../logout.php">
                    <button type="submit" name="logout" class="customizedBtnSecondary" style="float: right;">Log Out</button>
                    </a>
              
                
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