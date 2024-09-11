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


$name = $_POST['name'];
$emailAddress = $_POST['email_address'];
$topic = $_POST['topic'];
$message = $_POST['message'];


$sql = $connection->prepare("INSERT INTO contactMessages (Name, EmailAddress, Topic, Message) VALUES (?, ?, ?, ?)");
$sql->bind_param("ssss", $name, $emailAddress, $topic, $message);

if ($sql->execute()) {
    $_SESSION['submitted'] = 'Thank you for your tips and suggestions!'; 
    header("Location: Contacts.php"); 
    
}

$sql->close();
$connection->close();

?>
