<?php
require 'logged_in.php';
?>

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

    
    <style>
        /* bago yata na css*/
        .bannerer {
            width: 100%;
            margin-top: 10px;
            background-image: url('banner.jpg');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #fff;
            position: relative;
        }

        .bannerer h1 {
            font-size: 36px;
            margin: 0;
        }

        .banner-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .slideshow-container img {
        transition: transform 0.3s ease-in-out;
        }
        .slideshow-container img:hover {
        transform: scale(1.05);
        }

        .mySlides {
            display: none;
            width: 100%;
            position: relative;
        }


        .slideshow-container {
            position: relative;
            max-width: 1000px;
            margin: auto;
            overflow: hidden;
        }

        .mySlides img {
        width: 30%;
        height: 350px;
        margin: 2%;
        transition: transform 0.3s ease-in-out;
        }

        .mySlides img:hover {
        transform: scale(1.05);
        }

        /* Next & previous buttons */
        .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        margin-top: -22px;
        /* not responsice part
        margin-left: -920px;
        margin-right: 320px;
        */
        padding: 16px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 2 3px 3px 0;
        user-select: none;
        z-index: 10;
        background-color: #2C2C2C;
        border-radius: 70%;
        
        }

        /*responsivility*/
        .prev{
            left: 16.2%;
        }
        .next {
        right: 16.2%;
        }

        .prev:hover, .next:hover {
        background-color: rgba(0,0,0,2);
        }
    </style>

    <script>
        // Bago rin na javascriptings
        let slideIndex= 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
            }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
        }
    </script>


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
        
        <?php SignUser($is_logged_in, $username); ?>

    </header>

    <main>
        <section id="HeroSection">
       
              <div class="banner">
                <p class="heroTitle">Driftwood Hotel</p>
                <p class="heroSubtitle">Your serene beachside escape, where the ocean breeze and sandy shores await just steps away.</p>
                <div class="btnContainer">
                    <?php LoginBookBanner($is_logged_in) ?>
                </div>
                </div>
         
        </section>

        <!-- lahat na section na to bago -->
        <section id="Rooms">
            <div class="container" style="padding: 0; padding-top: 1%;">
                <p class="sectionTitle">
                    <a href="roompage2.html"><u style="color: white;">Rooms</u></a>
                </p>
            </div>
            <section class="bannerer" style="background-color: #ACB9B6;">
                
                <div class="mySlides fade" style ="display: block;">
                    <div class="numbertext"></div>
                    <a href="Rooms/Room1/Room-desc.php">
                        <img src="Rooms/Room1/bed1.jpg" loading="lazy">
                    </a>
                    <a href="Rooms/Room2/Room-desc.php">
                        <img src="Rooms/Room2/room2.jpg" loading="lazy">
                    </a>
                    <div class="text"></div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext"></div>
                    <a href="Rooms/Room3/Room-desc.php">
                        <img src="Rooms/Room3/room3.jpg" loading="lazy">
                    </a>
                    <a href="Rooms/Room4/Room-desc.php">
                        <img src="Rooms/Room4/room4.jpg" loading="lazy">
                    </a>
                    <div class="text"></div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext"></div>
                    <a href="Rooms/Room5/Room-desc.php">
                        <img src="Rooms/Room5/room5.jpg" >
                    </a>
                    <a href="Rooms/Room6/Room-desc.php">
                        <img src="Rooms/Room6/room6.jpg" loading="lazy">
                    </a>
                    <div class="text"></div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext"></div>
                    <a href="Rooms/Room7/Room-desc.php">
                        <img src="Rooms/Room7/room7.jpg" >
                    </a>
                    <a href="Rooms/Room8/Room-desc.php">
                        <img src="Rooms/Room8/room8.jpg" loading="lazy" >
                    </a>
                    <div class="text"></div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext"></div>
                    <a href="Rooms/Room9/Room-desc.php">
                        <img src="Rooms/Room9/room9.jpg">
                    </a>
                    <a href="Rooms/Room1/Room-desc.php">
                        <img src="Rooms/Room1/bed1.jpg" loading="lazy" >
                    </a>
                    <div class="text"></div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext"></div>
                    <a href="Rooms/Room3/Room-desc.php">
                        <img src="Rooms/Room3/room3.jpg">
                    </a>
                    <a href="Rooms/Room4/Room-desc.php">
                        <img src="Rooms/Room4/room4.jpg" loading="lazy">
                    </a>
                    <div class="text"></div>
                </div>
            
                <!-- buttonessss -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>
            </section>
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