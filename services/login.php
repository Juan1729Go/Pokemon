<?php
session_start();

require_once '../services/db.php';

$error = ""; 

// Verify if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $pdo = new PDO("mysql:host=bkcn6y9qeluyccasgglf-mysql.services.clever-cloud.com;dbname=bkcn6y9qeluyccasgglf", 'uuxx0j6jerhzh5lo', 'RWpEIga5r1Q0u5q1aHrk');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Error connecting to the database: " . $e->getMessage());
    }

    $stmt = $pdo->prepare("SELECT * FROM trainers WHERE email = :email AND password = :password");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $_SESSION['loggedin'] = true;
        
        header("Location: ../client/home.php");
        exit();
    } else {
        $error = "Incorrect username or password.";
    }
}

echo "<h1>$error</h1>";
?>
