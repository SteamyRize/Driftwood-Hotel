<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/homepage.css">
    <link rel="stylesheet" href="Room-desc.css">
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://kit.fontawesome.com/d1cc49e838.js" crossorigin="anonymous"></script>
</head>

<body>
<header class="main-header">
        <div class="logo"><img src="Drifcombieng.png" id="logopic"></div>
        <nav class="header-nav">
            <a href="index.php">Home</a>
            <a href="rooms.php">Rooms</a>
            <a href="index.php#Gallery">Gallery</a>
            <a href="index.php#Experience">Experiences / Reviews</a>
            <a href="index.php#About">About Us</a>
            <a href="index.php#Contact">Contact Us</a>

        </nav>
        <div class="auth-btn">
            <a href="login/login.php">
                <button class="sign-in-btn">Sign In / Register</button>
            </a>
            <a href="profile/profile.php">
                <div class="user-icon"></div>
            </a>
        </div>

    </header>

    <main>
        <section id="HeroSection">
       
              <div class="banner">
                <p class="heroTitle">Driftwood Hotel</p>
                <p class="heroSubtitle">Your serene beachside escape, where the ocean breeze and sandy shores await just steps away.</p>
                <div class="btnContainer">
                    <a href="login/login.php">
                    <button class="customizedBtn">Login</button>
                    </a>
                    <a href="rooms.php">
                    <button class="customizedBtnSecondary">Book Now!</button>
                    </a>
                </div>
                </div>
         
        </section>

        <section id="Rooms">
            <div class="container">
                <p class="sectionTitle">
                    <a href="roompage2.html"><u>Rooms</u></a>
                </p>
                <div class="imgContainer">
                    <div class="imgWrapper">
                        <a href="Rooms/Room1/Room-desc.php"><img src="Rooms/Room1/bed1.jpg" alt="Sample Room 1"></a>
                    </div>
                    <div class="imgWrapper">
                        <a href="Rooms/Room2/Room-desc.php"><img src="Rooms/Room2/room2.jpg" alt="Sample Room 2"></a>
                    </div>
                </div>
            </div>
        </section>

        <section id="Gallery">
            <div class="container">
                <p class="sectionTitle"><u>Gallery</u></p>
                <div class="gallery-section">
                    <div class="grid-container">
                        <div class="grid-item"> <a href="Rooms/Room1/Room-desc.php"><img src="Rooms/Room1/bed1.jpg" alt="Sample Room 1"></a></div>
                        <div class="grid-item"> <a href="Rooms/Room2/Room-desc.php"><img src="Rooms/Room2/room2.jpg" alt="Sample Room 2"></a></div>
                        <div class="grid-item"> <a href="Rooms/Room3/Room-desc.php"><img src="Rooms/Room3/room3.jpg" alt="Sample Room 3"></a></div>
                        <div class="grid-item"> <a href="Rooms/Room4/Room-desc.php"><img src="Rooms/Room4/room4.jpg" alt="Sample Room 4"></a></div>
                        <div class="grid-item"> <a href="Rooms/Room5/Room-desc.php"><img src="Rooms/Room5/room5.jpg" alt="Sample Room 5"></a></div>
                        <div class="grid-item"> <a href="Rooms/Room6/Room-desc.php"><img src="Rooms/Room6/room6.jpg" alt="Sample Room 6"></a></div>
                        <div class="grid-item"> <a href="Rooms/Room7/Room-desc.php"><img src="Rooms/Room7/room7.jpg" alt="Sample Room 7"></a></div>
                        <div class="grid-item"> <a href="Rooms/Room8/Room-desc.php"><img src="Rooms/Room8/room8.jpg" alt="Sample Room 8"></a></div>
                        <div class="grid-item"> <a href="Rooms/Room9/Room-desc.php"><img src="Rooms/Room9/room9.jpg" alt="Sample Room 9"></a></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="Experience">
            <div class="container">
                <p class="sectionTitle"><u>Testimonial</u></p>
                <div class="testimonial-section">
                    <div class="grid-container">
                        <div class="grid-item">
                            <div class="para">
                                <p style=" font-style: italic;">"Unforgettable Ocean Views – A True Escape"</p> <br>
                                <p style="color: gray;">— Emily & Jake, California</p>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="para">
                                <p style=" font-style: italic;">"Perfect Beachside Retreat"</p> <br>
                                <p style="color: gray;">— Mark & Olivia, New York</p>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="para">
                                <p style=" font-style: italic;">"Romantic Getaway with Ultimate Comfort"</p> <br>
                                <p style="color: gray;">— Jessica & Carlos, Florida</p>
                            </div>

                        </div>
                        <div class="grid-item">
                            <div class="para">
                                <p style=" font-style: italic;">"A Dream Beach Vacation"</p> <br>
                                <p style="color: gray;">— Rachel & Ben, London</p>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="para">
                                <p style=" font-style: italic;">"Luxury Meets Nature in the Seabreeze Suite
                                "</p> <br>
                                <p style="color: gray;">— Sophie & Liam, Sydney</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="About">
            <div class="container">
                <p class="sectionTitle"><u>About us</u></p>
                <div class="aboutWrapper">
                    <div class="aboutusContainer">
                        <div class="aboutUsTextContainer">
                        <p>Welcome to <b>Driftwood Hotel</b>, your ultimate beachfront escape where elegance meets nature in perfect harmony. Nestled along the stunning coastline, our hotel offers an idyllic sanctuary where the soothing sounds of the ocean, pristine sandy beaches, and warm, personalized service come together to create an unforgettable experience.
                            At <b>Driftwood Hotel</b>, we believe in the power of simplicity and the beauty of natural surroundings. Our name reflects our commitment to blending seamlessly with the environment, offering a tranquil atmosphere that invites guests to unwind, explore, and reconnect with nature.
                            Whether you're seeking a romantic getaway, a family vacation, or a place to relax and recharge, <b>Driftwood Hotel</b> provides the perfect setting for every occasion. Our thoughtfully designed rooms and suites offer modern comforts, luxurious amenities, and breathtaking ocean views that make every stay feel like a retreat.
                        </p>

                            <a href="#Contact"><u>Ask Questions</u></a>
                        </div>
                        <button class="customizedBtn">Discover More</button>
                    </div>
                    <div class="aboutusImageContainer">
                        <img src="homepics/staff.jpg">
                    </div>
                </div>
            </div>
        </section>
        <section id="Contact">
            <div class="container">
                <div class="intro">
                    Contact Us
                </div>
                <div class="formContainer">
                    <div class="card">
                        <form action="" method="post">
                            <label for="firstname">First Name</label>
                            <input type="text" id="firstname" placeholder="First Name">
                            <label for="surname">Surname</label>
                            <input type="text" id="surname" placeholder="Surname">
                            <label for="email">Email</label>
                            <input type="text" id="firstname" placeholder="Enter your email">
                            <label for="email">Message</label>
                            <textarea name="" id="" placeholder="Place your Message"></textarea>
                            <button type="submit" class="customizedBtnSecondary">Submit Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

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

</html>