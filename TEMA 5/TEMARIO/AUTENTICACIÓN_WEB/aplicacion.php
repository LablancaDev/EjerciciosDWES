<?php
include("seguridad.php"); // Incluye el archivo 'seguridad.php', que probablemente contiene lógica para verificar la seguridad y el estado de la sesión.
echo "Esta es la página secreta<br>"; // Muestra un mensaje indicando que esta es la página secreta.

echo "<a href=\"menu.php\">Menu</a><br>"; // Muestra un enlace a 'menu.php', probablemente para dirigir al usuario a la página de menú.
echo "<a href=\"salir.php\">Cerrar Sesion</a><br>"; // Muestra un enlace a 'salir.php', que probablemente permita al usuario cerrar la sesión actual.
?>

<!-- aplicacion.php: Este archivo verifica la seguridad mediante la 
inclusión de seguridad.php. Si la sesión está activa, muestra el contenido
de la aplicación, en este caso, un mensaje de página secreta y enlaces 
a menu.php y salir.php. Si la sesión no está activa, se redirige 
automáticamente a acceso.php. -->