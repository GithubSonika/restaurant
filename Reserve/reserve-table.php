<?php
session_start();

$username = 'db_admin';       
$password = 'vLPgpnm0DU7I8io';
$host = 'localhost';
$database = 'restaurant';


$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$bookingDate = $_POST['date'];
$bookingTime = $_POST['time'];
$guests = $_POST['guests'];
$name = $_POST['name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];


$sql = $connection->prepare("INSERT INTO reservations (bookingDate, bookingTime, guests, name, email, telephone)
                                 VALUES (?, ?, ?, ?, ?, ?)");
$sql->bind_param("ssisss", $bookingDate, $bookingTime, $guests, $name, $email, $telephone);

if ($sql->execute()) {
    $_SESSION['submitted'] = 'Thank you! Your table has been booked successfully.'; 
    header("Location: reserve.php"); 
    
}

$sql->close();
$connection->close();

?>
