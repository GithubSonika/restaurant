<?php
session_start();

$username = 'db_admin';
$password = 'vLPgpnm0DU7I8io';
$host = 'localhost';
$database = 'restaurant';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'], $_POST['password'])) {

    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    // Validating if email is in a valid format and ends with the required domain

    if (filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match('/@foodandwine\.com$/', $email)) {

        // Extracting the first name from the email to show it in the employee dashboard
        $namePart = substr($email, 0, strpos($email, '@'));
        $namePart = str_replace(['.', '_'], ' ', $namePart);
        $nameParts = explode(' ', $namePart);
        $firstName = ucfirst(strtolower($nameParts[0]));
        $_SESSION['firstName'] = $firstName;


        $stmt = $conn->prepare("SELECT email, password_hash FROM employees WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();



        
        // Insert log into login table
        $email = $_POST['email'];
        $password = $_POST['password'];

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $sql = $conn->prepare("INSERT INTO login (email, password_hash) VALUES (?, ?)");
        $sql->bind_param("ss", $email, $hashedPassword);

        $sql->execute();
        $sql->close();



        if ($result->num_rows === 1) {

            $user = $result->fetch_assoc();

            // Verifying password so only the password that's in the database employees can have access to it
            if (password_verify($password, $user['password_hash'])) {

                // Validating password with regex for additional security measures
                $passwordPattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\!\@\#\$\%\^\&\*\(\)\_\+\.\,\;\:]).{8,}$/';
                if (preg_match($passwordPattern, $password)) {
                    $_SESSION['email'] = $user['email'];
                    setcookie('authenticated', 'true', time() + (86400 * 30));
                    header("Location: ./employee-dashboard.php");
                }
            } else {
                $_SESSION['error_message'] = 'Password is incorrect!';
                header("Location: ./login.php");
                exit;
            }
        } else {
            $_SESSION['error_message'] = 'Email or password is incorrect!';
            header("Location: ./login.php");
            exit;
        }
        $stmt->close();
    }


    // $connection->close();
    $conn->close();
}
