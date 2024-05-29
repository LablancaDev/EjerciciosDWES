<?php
 // Se inicia la sesión 
session_start();
// Se comprueba que existen las varibales username y password enviadas por el método post en el formulario
if (isset($_POST['username']) && isset($_POST['password'])) { 
    // Se recuperan los valores del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Se crean las variables de sesión y se les asignan los valores del formulario
    $_SESSION['usuario'] = $username; 
    $_SESSION['clave'] = $password; 

    // redirección a la página de recuperación de sesión
    header("Location: pagina_recuperar_sesion.php");
}
?>

