<!-- Actividad 3. Acceso a datos en formato XML. Mostrar los datos del siguiente fichero XML en formato tabla (coches.xml). -->
<?php
    // Con la función  simplexml_load_file() se accede a los ficheros xml de coches.xml
    $xml = simplexml_load_file("coches.xml"); 
    // Con el primer bucle se itera sobre los dos elementos del archivo xml (coche) y con el segundo sobre las propiedades y valores de cada elemento 
   foreach ($xml as $elemento) {
    echo "<table border=1 cellspacing=0>";// se crea la tabla con borde y se elimina el espaciado entre celdas
    foreach ($elemento as $propiedad => $valor) {
        echo "<tr><th>$propiedad</th><td>$valor</td></tr>";// se imprime cada fila con sus propiedades y valores
    }
    echo "</table>";//cierre de la tabla
    echo "<br>";
   }
?>

