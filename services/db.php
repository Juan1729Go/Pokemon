<?php
// Configuración de la conexión a la base de datos
$host = 'bkcn6y9qeluyccasgglf-mysql.services.clever-cloud.com';
$database = 'bkcn6y9qeluyccasgglf';
$username = 'uuxx0j6jerhzh5lo';
$password = 'RWpEIga5r1Q0u5q1aHrk';

try {
    // Conexión a la base de datos
    $pdo = new PDO("mysql:host={$host};dbname={$database};port=3306", $username, $password);
    
    // Configurar el modo de error de PDO a excepción
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Establecer el conjunto de caracteres
    $pdo->exec("SET CHARACTER SET utf8");
    
    echo "Conexión exitosa a la base de datos";
} catch(PDOException $e) {
    // Manejo de errores de conexión
    echo "Error de conexión: " . $e->getMessage();
}
?>
