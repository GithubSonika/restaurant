<?php
session_start(); 

$username = 'db_admin';        
$password = 'vLPgpnm0DU7I8io'; 
$host = 'localhost';
$database = 'restaurant';


try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hashing the password before storing it in the database
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    
    $sql = $conn->prepare("INSERT INTO employees (email, password_hash) VALUES (?, ?)");

 
    if ($sql->execute([$email, $hashedPassword])) {
        $_SESSION['registered'] = 'You have been registered';
        header("Location: ./register.php");
        exit();
    }

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


$conn = null;
?>
