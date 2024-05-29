<?php
session_start(); // Inicia la sesión.

if ($_SESSION['login'] != "SI") { // Verifica si la variable de sesión 'login' no está establecida o tiene un valor diferente a "SI".
    header("Location: acceso.php"); // Redirige a 'acceso.php' si el usuario no ha iniciado sesión ('login' no es "SI").
} else {
    $fechaguardada = $_SESSION['acceso']; // Obtiene el tiempo de inicio de sesión almacenado en 'acceso'.
    $ahora = time(); // Obtiene el tiempo actual.
    $tiempotranscurrido = $ahora - $fechaguardada; // Calcula el tiempo transcurrido desde el inicio de sesión.

    if ($tiempotranscurrido >= 600) { // Verifica si han pasado 600 segundos (10 minutos) desde el inicio de sesión.
        session_destroy(); // Destruye la sesión si ha pasado más de 10 minutos desde el inicio de sesión.
        header("Location: acceso.php"); // Redirige a 'acceso.php' después de destruir la sesión.
    } else {
        $_SESSION['acceso'] = $ahora; // Actualiza el tiempo de acceso almacenado en la sesión con el tiempo actual.
    }
}
?>


<!-- seguridad.php: Este archivo se encarga de controlar la seguridad. 
Verifica si existe una sesión iniciada ($_SESSION['login'] != "SI"). 
Si no existe una sesión iniciada, redirige al usuario de vuelta a 
acceso.php. En caso contrario, comprueba el tiempo transcurrido desde 
la última actividad en la sesión. Si el tiempo supera los 600 segundos 
(10 minutos), destruye la sesión y redirige al usuario a acceso.php. Si 
la sesión está activa y el tiempo es menor a 10 minutos, actualiza el 
tiempo de la sesión ($_SESSION['acceso'] = $ahora). -->