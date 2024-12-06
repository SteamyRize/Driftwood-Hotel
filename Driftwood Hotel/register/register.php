

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../Room-desc.css">
    <link rel="icon" href="../icon.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Main Header -->
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
        <div class="auth-btn">
            <a href="../login/login.php">
                <button class="sign-in-btn">Sign In / Register</button>
            </a>
           
        </div>

    </header>

    <?php
        require '../db.php';

        $errorMessage;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $repassword = $_POST['repassword'];

            if ($password !== $repassword) {
                $errorMessage = "Password doesn't match";
            } else {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
                $stmt = $conn->prepare($sql);

                try {
                    $stmt->execute([
                        'username' => $username,
                        'email' => $email,
                        'password' => $hashed_password
                    ]);
                    
                    echo "<script>alert('Account Registered!'); window.location.href='../login/login.php';</script>";


                } catch (PDOException $e) {
                    if ($e->getCode() == 23000) {
                        $errorMessage = "Username or email already exists!";
                    } else {
                        echo "Error: " . $e->getMessage();
                    }
                }
            }
        }
    ?>


    <!-- Login / Register Container -->
    <div class="container">
        <!-- Login Section -->
        <div class="login-box">
            <div class="form-section">
                <h2 class="font-poppins">Register</h2>

                <form method = "POST" action= "register.php">
                <input class="font-montserrat" type="text" name="email" placeholder="Enter Your Email" >
                    <input class="font-montserrat" type="text" name="username" placeholder="Enter Your Username" >
                    <input class="font-montserrat" type="password" name="password" placeholder="Enter Your Password" >
                    <input class="font-montserrat" type="password" name="repassword" placeholder="Re-enter Your Password" >
                    <a href="../login/login.php" class="forgot-password" class="font-poppins">Already have an account? Log-in Now!</a>
                    
                    <?php if (!empty($errorMessage)): ?>
                        <div style="color: red; font-weight: bold;">
                            <?php echo $errorMessage; ?>
                        </div>
                    <?php endif; ?>
                    
                    <button type="submit" class="submit-btn" class="font-poppins">Confirm</button>

                    
                </form>

            </div>
            <div class="image-section">
                <img src="lobby.jpg" alt="Hotel Lobby">
            </div>
        </div>


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
</body>

<style>


    /* Login Box */
.login-box {
    display: flex;
    width: 100%;
    margin: 20px 0;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.form-section {
    flex: 1;
    padding: 100px;
}

.form-section h2 {
    font-size: 28px;
    margin-bottom: 20px;
}

.form-section input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

.form-section .forgot-password {
    display: block;
    margin: 10px 0;
    color: #143230;
    text-decoration: none;
}

.form-section .submit-btn {
    width: 100%;
    background-color: #808080;
    color: white;
    font-size: 16px;
    border: none;
    cursor: pointer;
    border-radius: 2em;
    padding: 1.5em;
}


/* Image Section */
.image-section {
    flex: 1;
}

.image-section img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}


footer {
   position: absolute;
}

input[type=text], input[type=password]{
    border-radius: 2em;
    padding: 1.5em;
}


  </style>

</html>
