<!-- Ejercicio 7.   Mostrar la siguiente información:
    • Nombre del Servidor
    • Puerto
    • Software del Servidor
    • Directorio Raíz
    • Página desde la que se enlazó -->

<?php
   echo $_SERVER["SERVER_NAME"]."<br>"; //Imprime el nombre del servidor en el que se ejecuta el script

   echo $_SERVER["REMOTE_PORT"]."<br>"; //Imprime el puerto usado por el pc del usuario para comunicarse con el servidor web

   echo $_SERVER["SERVER_PORT"]."<br>"; //Imprime el puerto del equipo servidor que usa el servidor web para la comunicación

   echo $_SERVER["SERVER_SOFTWARE"]."<br>"; //Imprime el software que usa el servidor

   echo $_SERVER["DOCUMENT_ROOT"]."<br>"; //Imprime el directorio raíz del documento en el que se encuentra el script actual a ejecutar

   echo $_SERVER["HTTP_REFERER"]."<br>"; //Imprime la dirección de la página que se está visitando.  
?>