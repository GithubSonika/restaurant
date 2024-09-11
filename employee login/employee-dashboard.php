<?php

include('./check-auth.php');
session_start();

$firstName = $_SESSION['firstName'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
    <link rel="stylesheet" href="./employee-dashboard.css">
</head>

<body>
    <div class="header">
        <div class="logo">
            <img width="130px" src="./Images/logo.png" alt="Food and wine logo">
        </div>
        <a href="./logout.php" class="logout-button">Logout</a>
    </div>
    <main>
        <div class="discount-container">
            <h1 class="welcome-container">Welcome, <?php echo $firstName; ?>!</h1>
            <h1 class="employee-container">Enjoy up to <span class="big-discount">40% off</span> </h1>
            <h2>Discount code:
                <div id="code-box">
                    <span id="discount-code" onclick="copyToClipboard()">STAFF2359</span>
                </div>
                <span id="copy-alert">Copied!</span>
            </h2>
        </div>
        <section>
            <div class="slider-container">
                <div id="slider" class="slider">
                    <div class="slide">
                        <a href="https://wolt.com/en/ltu/vilnius/venue/assorti-pc-panorama" target="_blank">
                            <img src="./Images/store-image1.png" alt="Store image">
                            <div class="text-overlay">Discounts up to -30%</div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="https://wolt.com/en/ltu/vilnius/venue/wolt-market-pasilaiciai" target="_blank">
                            <img src="./Images/store-image2.png" alt="Store image">
                            <div class="text-overlay">Discounts up to -20%</div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="https://wolt.com/en/discovery/brand/ili-pizza" target="_blank">
                            <img src="./Images/store-image3.png" alt="Store image">
                            <div class="text-overlay">Discounts up to -8%</div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="https://wolt.com/en/ltu/vilnius/restaurant/kfc-mandarinas" target="_blank">
                            <img src="./Images/store-image4.png" alt="Store image">
                            <div class="text-overlay">Discounts up to -40%</div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="https://www.ikea.com/us/en/" target="_blank">
                            <img src="./Images/store-image5.png" alt="Store image">
                            <div class="text-overlay">Discounts up to -40%</div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="https://wolt.com/en/ltu/vilnius/venue/assorti-pc-panorama" target="_blank">
                            <img src="./Images/store-image1.png" alt="Store image">
                            <div class="text-overlay">Discounts up to -30%</div>
                        </a>
                    </div>
                </div>
                <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
                <a class="next" onclick="changeSlide(1)">&#10095;</a>
            </div>
        </section>
    </main>
    <footer class="footer-content">
        <div class="footer-line">
            <div class="footer-section">
                <h1 class="address-container">Find us</h1>
                <ul class="footer-list">
                    <li>Our address: <a
                            href="https://www.google.com/maps/dir//Gedimino+pr.+9,+Vilnius,+01105+Vilniaus+m.+sav./data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x46dd94105d30ce8f:0xe906c27f2519bbaf?sa=X&ved=1t:707&ictx=111&cshid=1723888505041010"
                            target="_blank">Gedimino pr. 9, Vilnius, Lithuania</a></li>
                    <li>Call us: <a href="tel:+370 78563 123">+370 78563 123</a></li>
                    <li>Email us: <a href="mailto:info@foodandwine.com">info@foodandwine.com</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h1 class="working-hours">Working Hours</h1>
                <ul class="footer-list">
                    <li>Monday - Saturday: 12PM - 11PM</li>
                    <li>Sunday: 12PM - 7PM</li>
                </ul>

            </div>
        </div>
        <div class="footer-bottom">
            <div class="logos">
                <a href="https://www.facebook.com/" target="_blank">
                    <img width="20px" src="https://cdn.pixabay.com/photo/2021/06/15/12/51/facebook-6338507_1280.png"
                        alt="Facebook logo">
                </a>
                <a href="https://www.tripadvisor.com/" target="_blank">
                    <img width="20px"
                        src="https://www.edigitalagency.com.au/wp-content/uploads/tripadvisor-logo-icon-black-green-owl-square.jpg"
                        alt="Tripadvisor logo">
                </a>
            </div>
            <div class="footer-text">
                <p>2024 &copy; Food & Wine. All rights reserved</p>
            </div>
        </div>
    </footer>
    <script src="./employee-dashboard.js"></script>
</body>

</html>