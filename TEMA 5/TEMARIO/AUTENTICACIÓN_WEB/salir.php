<?php
session_start(); // Inicia la sesión.
session_destroy(); // Destruye todos los datos asociados con la sesión actual.

echo "La sesión ha sido cerrada<br>"; // Muestra un mensaje indicando que la sesión ha sido cerrada.

echo "<a href= \"acceso.php\">Pulse para acceder al formulario</a><br>"; // Muestra un enlace que redirige al usuario a 'acceso.php' para acceder al formulario de inicio de sesión nuevamente.
?>

<!-- salir.php: Este archivo se encarga de destruir la sesión actual cuando 
un usuario decide cerrar sesión. Luego muestra un mensaje indicando que la 
sesión ha sido cerrada y proporciona un enlace para volver al formulario de 
inicio de sesión en acceso.php.

Este flujo de ejecución asegura que los usuarios puedan iniciar sesión, 
acceder a áreas protegidas solo si tienen una sesión válida y cerrar sesión 
cuando lo deseen. Además, controla el tiempo de inactividad para mantener 
la seguridad de la aplicación.
 -->