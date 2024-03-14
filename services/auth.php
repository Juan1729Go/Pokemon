<?php
//llamar base de datos
require_once '../services/db.php';

// Verificar si se recibieron datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar y obtener los datos del formulario
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Preparar la consulta 
    $stmt = $pdo->prepare("INSERT INTO `trainers`(`name`, `email`, `number`, `password`) VALUES (?, ?, ?, ?)");

    // Vincular los parámetros 
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $email);
    $stmt->bindParam(3, $phone);
    $stmt->bindParam(4, $password);
    

    // Ejecutar la consulta
    if ($stmt->execute()) {
        header("Location: ../client/home.php");
            exit();
    } else {
        echo "Error al registrar usuario: " . $stmt->errorInfo()[2];
    }
} else {
    echo "Acceso no permitido";
}

?>
