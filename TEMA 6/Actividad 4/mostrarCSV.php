<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Archivo CSV</title>
</head>                           
<body>
    <h2>Datos del Archivo CSV</h2>
    <table border="1" cellspacing="0">
            <?php
            // Se utiliza el método fopen() para abrir el archivo CSV en modo lectura y fgetcsv() para leer cada línea del archivo y mostrarla en la tabla html.
            // Abrir y mostrar contenido del archivo CSV en una tabla
            $archivo_csv = 'vuelos.csv';
            if (file_exists($archivo_csv)) {
                $csv = fopen($archivo_csv, 'r'); // Se abre el archivo CSV en modo lectura
                // Se utiliza un bucle while para leer línea por línea el archivo CSV mientras la línea sea válida con el formato especificado
                // Lee cada fila del archivo CSV, el primer argumento es el archivo csv, el segundo el tamaño, se leerán líneas de cualquier longitud, el tercero es el delimitador
                while ($fila = fgetcsv($csv, 0, ",")) { 
                    echo "<tr>";// nueva fila en la tabla
                    // Se recorre la variable fila que contiene un array que almacena los valores de cada línea del archivo csv
                    foreach ($fila as $valor) {
                        echo "<td>$valor</td>";
                    }
                    echo "</tr>";
                }
                fclose($csv); // Cierra el archivo después de usarlo  
            }
            ?>
    </table>
</body>
</html>
