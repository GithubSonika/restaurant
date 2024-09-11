<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Employee Login - Food & Wine</title>
    <link rel="icon" type="image/png" href="../Home/Attachments/favicon.png" sizes="180x180">
    <link rel="stylesheet" href="./login.css">
</head>

<body>
    <header class="header">
        <a href="../Home/Home.php">
            <img width="160px" src="../Home/Attachments/logo.png" alt="Food and wine logo" class="logo">
        </a>
    </header>

    <main class="main-container">
        <div class="login-container">
            <div class="header-container">
                <h1>Welcome to Employee Discount <span class="center-text">Program!</span></h1>
                <p>Your employment perks are one click away.</p>
            </div>
            <form class="log-in-form" action="./log-me-in.php" method="post">
                <label for="email">Email*</label>
                <input type="email" name="email" id="email" required>
                <div id="emailPopup" class="email-popup">
                    <span class="error-icon">&#9888;</span>
                    Invalid email address! Please use an @foodandwine.com email address.
                </div>
                <label for="password">Password*</label>
                <input type="password" name="password" id="password" required>
                <div id="passwordError" class="password-error">
                    <span class="error-icon">&#9888;</span>
                    Password must be at least 8 characters long and include an uppercase letter, a lowercase letter, a number, and a special character.
                </div>

                <button id="login-button" type="submit" disabled>Log In</button>

            </form>
            <?php

            if (isset($_SESSION['error_message'])) {
                $message = $_SESSION['error_message'];
                echo "<div style = 'color:red'>$message</div>";
                unset($_SESSION['error_message']);
            }
            ?>

            <div class="register-section">
                <p>Don't have an account? <a href="./register.php" class="register-link">Create one</a></p>
            </div>

        </div>
    </main>
    <script src="./login.js"></script>
</body>

</html>