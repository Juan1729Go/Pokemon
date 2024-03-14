<?php
require_once '../services/db.php';

$error = ""; // Inicializar la variable de error

// Verificar si el formulario se ha enviado
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Conectar a la base de datos
    try {
        $pdo = new PDO("mysql:host=bkcn6y9qeluyccasgglf-mysql.services.clever-cloud.com;dbname=bkcn6y9qeluyccasgglf", 'uuxx0j6jerhzh5lo', 'RWpEIga5r1Q0u5q1aHrk');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        die("Error al conectar a la base de datos: " . $e->getMessage());
    }

    // Consultar la base de datos y verificar la contraseña en una sola línea
    $stmt = $pdo->prepare("SELECT * FROM trainers WHERE email = :email AND password = :password");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verificar si se encontró un usuario
    if($user) {
        // Iniciar sesión, redireccionar, etc.
        header("Location: ../client/home.php");
        exit();
    } else {
        $error = "Nombre de usuario o contraseña incorrectos.";
    }
}

// Mostrar el mensaje de error
echo "<h1>$error</h1>";
?>
