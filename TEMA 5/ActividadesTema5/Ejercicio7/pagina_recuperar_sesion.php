<?php
// Se inicia la sesión 
session_start();

// Verificar si existen las variables de sesión
if (isset($_SESSION['usuario']) && isset($_SESSION['clave'])) {
    $username = $_SESSION['usuario'];
    $password = $_SESSION['clave'];

    // Mostrar los valores de las variables de sesión
    echo "<h2>Se recuperan los valores almacenados en las variables de sesión:</h2>";
    echo "Usuario: " . $username . "<br>";
    echo "Clave: " . $password . "<br>";
} else {
    echo "No se han definido las variables de sesión.";
}
?>

