<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food & Wine</title>
    <link rel="icon" type="image/png" href="./Attachments/favicon.png" sizes="180x180">
    <link rel="stylesheet" href="./Home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="background-container">
        <header>
            <p class="header-address">
                <a href="https://www.google.com/maps/dir//Gedimino+pr.+9,+Vilnius,+01105+Vilniaus+m.+sav./data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x46dd94105d30ce8f:0xe906c27f2519bbaf?sa=X&ved=1t:707&ictx=111&cshid=1723888505041010" target="_blank">Gedimino pr. 9, Vilnius</a>
            </p>
            <a href="./Home.php"><img width="160px" src="./Attachments/logo.png" alt="Food and wine logo" class="logo"></a>
            <div class="buttons">
                <a href="../Reserve/reserve.php" class="button">Book Now</a>
                <a href="tel:+37000000000" class="button">Call</a>
            </div>
            <?php include '../nav/nav.php'; ?>
        </header>
    </div>

    <video class="bg-video" autoplay muted loop>
        <source src="./Attachments/home-video2.mp4" type="video/mp4">

    </video>

    <section class="hero-section">
        <div class="content">
            <p>Come with family & feel the joy of food with wine</p>
            <a href="../Reserve/reserve.php" class="reserve-button">Reserve a table</a>
        </div>
    </section>

    <main class="main-container">

        <article>
            <h1><strong>Food & Wine - A Taste of Elegance in Vilnius!</strong></h1>
            <p>
                Welcome to Food & Wine, your go-to spot for a memorable dining experience in the heart of Vilnius.
                Located on Vilniaus Street, our restaurant offers a perfect blend of delicious European cuisine and an
                extensive wine list that's sure to impress. Whether you're here for a relaxed meal, some tasty tapas, or
                just
                to enjoy a glass of wine, you'll find something to love.
            <div class="indent">Our stylish and cozy interior is great for any
                occasion—be it a date night, a business lunch, or a special celebration. Plus, our large terrace is the
                ideal
                place to enjoy the warm weather with good food and great company.
            </div>
            </p>
            <div class="read-more-container">
                <a href="../Our story/ourstory.php" class="read-more-button">Read More</a>
            </div>
        </article>
        <aside>
            <div class="image">
                <img width=100% height="100%"
                    src="https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt="Interior restaurant">
            </div>
        </aside>
    </main>
    <section class="background-image">
        <div>
            <img src="./Attachments/logo.png" alt="Food and wine logo" class="logo-container">
        </div>
    </section>
    <section class="menu-container">
        <h1>OUR MENU</h1>
        <div class="menu-buttons">
            <a href="https://meatingroom.lt/wp-content/uploads/2024/06/Meniu_MR-EN-2024-06-18-bukletas.pdf" class="food-button">
                <span>FOOD MENU</span>
            </a>
            <a href="https://meatingroom.lt/wp-content/uploads/2024/05/Menu-ALKO-2024-05-14.pdf" class="drinks-button">
                <span>DRINK MENU</span>
            </a>
        </div>
    </section>
    <section class="second-background-image">
        <div>
            <a href="../Reserve/reserve.php" class="second-reserve-button">RESERVE A TABLE</a>
        </div>
    </section>

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

</body>

</html>