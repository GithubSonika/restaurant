<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts - Food & Wine</title>
    <link rel="icon" type="image/png" href="../Home/Attachments/favicon.png" sizes="180x180">
    <link rel="stylesheet" href="./Contacts.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <header>
        <?php include '../nav/nav.php'; ?>
        <section id="hero-section">
            <div class="content">
                <h1>Contacts</h1>
            </div>
        </section>
    </header>
    <div class="container">
        <h1>Write to us</h1>
        <p>Got tips or suggestions to share?</p>
        <?php
        if (isset($_SESSION['submitted'])) {
            $message = $_SESSION['submitted'];
            echo "<div class= 'submitted-form'>$message</div>";
            unset($_SESSION['submitted']);
        }
        ?>
        <form action="./contactsForm.php" class="contact-form" method="post">
            <div>
                <label for="name">Name*</label>
                <br>
                <input type="text" name="name" id="name" placeholder="eg.John" required>
            </div>
            <br>
            <div>
                <label for="email_address">Email Address*</label>
                <br>
                <input type="email" name="email_address" id="email" required>
                <div id="emailPopup" class="email-popup">
                    <span class="error-icon">&#9888;</span>
                    Invalid email address!
                </div>

            </div>
            <br>
            <div>
                <label for="topic">Topic*</label>
                <br>
                <input type="text" name="topic" id="topic" required>
            </div>
            <br>
            <div>
                <label for="message">Leave us a message*</label>
                <br>
                <textarea maxlength="200" name="message" id="message" rows="15" cols="48" required></textarea>
            </div>
            <br>
            <div>
                <button class="styled-button">Submit</button>
            </div>

        </form>

    </div>
    <footer class="footer-content">
        <div class="footer-line">
            <div class="footer-section">
                <h1>Find us</h1>
                <ul class="footer-list">
                    <li>Our address: <a href="https://www.google.com/maps/dir//Gedimino+pr.+9,+Vilnius,+01105+Vilniaus+m.+sav./data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x46dd94105d30ce8f:0xe906c27f2519bbaf?sa=X&ved=1t:707&ictx=111&cshid=1723888505041010" target="_blank">Gedimino pr. 9, Vilnius, Lithuania</a></li>
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
                    <img width="20px"
                        src="https://cdn.pixabay.com/photo/2021/06/15/12/51/facebook-6338507_1280.png"
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
    <script src="./contacts.js"></script>
</body>

</html>