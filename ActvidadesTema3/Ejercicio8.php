<!-- Ejercicio 8.- Mostrar los segundos transcurridos desde el 1 de Enero de 1970 a las 0:00:00 hasta hoy. -->

<?php
    // se utiliza la funcion time() para obtener los segundos transcurridos desde el 1 de Enero de 1970 hasta hoy y se muestra el resultado
    $segundosTranscurridos = time();
    echo "Los segundos transcurridos desde el 1 de enero de 1970 hasta hoy son: " .  $segundosTranscurridos . " segundos";

?>