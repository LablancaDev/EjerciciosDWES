<?php
include("seguridad.php"); // Incluye el archivo 'seguridad.php', probablemente utilizado para manejar la seguridad y el estado de la sesión.
echo "Este es el menu<br>"; // Muestra un mensaje indicando que esta sección es el menú.

echo "<a href=\"aplicacion.php\">Aplicaci&oacute;n</a><br>"; // Muestra un enlace para dirigir al usuario a la página 'aplicacion.php'.
echo "<a href=\"salir.php\">Cerrar Sesion</a><br>"; // Muestra un enlace para permitir al usuario cerrar la sesión actual y redirigir a 'salir.php'.
?>

<!-- menu.php: Al igual que aplicacion.php, este archivo verifica la 
seguridad mediante la inclusión de seguridad.php. Si la sesión está activa, 
muestra un menú con enlaces a aplicacion.php y salir.php. Si la sesión no 
está activa, se redirige automáticamente a acceso.php. -->