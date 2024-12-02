<?php
session_start();

$is_logged_in = isset($_SESSION['user_id']);
$username = $is_logged_in ? htmlspecialchars($_SESSION['username']) : null;
$email = $is_logged_in ? htmlspecialchars($_SESSION['email']) : null;
?>

<?php
function SignUser($is_logged_in, $username) {
    if ($is_logged_in): ?>
        <div class="auth-btn">
            <a href="profile/profile.php">
                <p> Welcome, <strong> <?= $username ?> </p> 
            </a>
        </div>
    <?php else: ?>
        <div class="auth-btn">
            <a href="login/login.php">
                <button class="sign-in-btn">Sign In / Register</button>
            </a>
        </div>
    <?php endif; 
}

function SignUserRooms($is_logged_in, $username) {
    if ($is_logged_in): ?>
        <div class="auth-btn">
            <a href="../../profile/profile.php">
                <p> Welcome, <strong> <?= $username ?> </p> 
            </a>
        </div>
    <?php else: ?>
        <div class="auth-btn">
            <a href="../../login/login.php">
                <button class="sign-in-btn">Sign In / Register</button>
            </a>
        </div>
    <?php endif; 
}

function LoginBookBanner($is_logged_in){
    if ($is_logged_in): ?>
            <a href="rooms.php">
                <button class="customizedBtnSecondary">Book Now!</button>
            </a>
    <?php else: ?>
        <a href="login/login.php">
            <button class="customizedBtn">Login</button>
        </a>
        <a href="rooms.php">
            <button class="customizedBtnSecondary">Book Now!</button>
        </a>
    <?php endif;
}

function Profile($username) {
    echo $username;  
}

function Info($username, $email){
    echo "<h2>Username: " . $username . "</h2>";
    echo "<h2>Email: " . $email . "</h2>";

}

?>
