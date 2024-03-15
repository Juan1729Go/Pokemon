<?php
session_start();

// Destruir todas las variables de sesión
$_SESSION = array();

// Borrar cookie
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-42000, '/');
}

//destruir la sesión
session_destroy();

// Redirigir
header("Location: ../index.php");
exit;
?>
