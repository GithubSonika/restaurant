<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserve a table - Food & Wine</title>
    <link rel="icon" type="image/png" href="../Home/Attachments/favicon.png" sizes="180x180">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="./reserve.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>
    <header>
        <?php include '../nav/nav.php'; ?>

        <section id="hero-section">
            <div class="content">
                <h1>Reservations</h1>
            </div>
        </section>
    </header>
    <main>
        <?php
        if (isset($_SESSION['submitted'])) {
            $message = $_SESSION['submitted'];
            echo "<div class= 'submitted-form'>$message</div>";
            unset($_SESSION['submitted']);
        }
        ?>
        <section class="main-container">

            <p>For <strong>today's bookings</strong>, please give us a call <a href="tel:+37078563123">+370 78563
                    123</a>.
            </p>
            <p>Restaurant kitchen from Monday - Saturday is open <strong>until 11 PM.</strong> The latest reservation
                time is 10:45 PM.</p>
        </section>
        <article class="form-article">
            <h3>Reserve a table</h3>

            <div class="form-container">

                <form id="reservationForm" action="./reserve-table.php" method="post">

                    <div class="form-group">
                        <label for="date">Date:</label>
                        <input type="text" name="date" id="date" required>
                    </div>

                    <div class="form-group">
                        <label for="time">Time:</label>
                        <input type="text" name="time" id="time" required>
                    </div>

                    <div class="form-group">
                        <label for="guests">Number of guests:</label>
                        <div class="input-group">
                            <button type="button" class="btn btn-decrement" onclick="decrement()">-</button>
                            <input type="text" id="guests" name="guests" value="1" min="1" max="30" required>
                            <button type="button" class="btn btn-increment" onclick="increment()">+</button>
                        </div>
                    </div>

                    <p class="contacts-container">Contact details</p>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" name="email" id="email" required>
                        <div id="emailPopup" class="email-popup" style="display: none;">
                            <span class="error-icon">&#9888;</span>
                            Invalid email address!
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="telephone">Phone number:</label>
                        <input type="tel" name="telephone" id="telephone" required>
                        <div id="phonePopup" class="phone-popup" style="display: none;">
                            <span class="error-icon">&#9888;</span>
                            Invalid phone number!
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="submit-button" id="submitBtn">Submit</button>
                    </div>
                </form>

            </div>
        </article>
    </main>

    <footer class="footer-content">
        <div class="footer-line">
            <div class="footer-section">
                <h1>Find us</h1>
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
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="./reserve.js"></script>

</body>

</html>