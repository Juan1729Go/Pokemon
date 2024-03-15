<?php
// Iniciar la sesión si no está iniciada
session_start();

// Destruir todas las variables de sesión
$_SESSION = array();

// Borrar la cookie de sesión
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-42000, '/');
}

// Finalmente, destruir la sesión
session_destroy();

// Redirigir a la página de inicio de sesión u otra página apropiada
header("Location: ../index.php");
exit;
?>
