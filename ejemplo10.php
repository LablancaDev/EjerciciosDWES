<!-- Ejercicio 14. Mostrar la versión del PHP y el Sistema. -->


<?php

 const versionI = PHP_VERSION; //se crea una constante que contiene la constante predefinida PHP_VERSION
 echo "La versión de PHP es: ".versionI."<br>";//se muestra la versión del interprete PHP
 
 const versionOS = PHP_OS; //se crea una constante que contiene la constante predefinida PHP_OS
 echo "La versión del sistema operativo donde se ejecuta el intéprete de PHP es: " . versionOS;
 //se muestra el sistema operativo en el que se está ejecutando el intérprete de PHP  
 
?>
