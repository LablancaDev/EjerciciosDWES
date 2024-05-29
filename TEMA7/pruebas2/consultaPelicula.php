<!-- Actividad 2. Mostrar los datos de una película desde una URL transfiriendo los datos en 
formato XML. Los datos de las películas se almacenan en un array y son: -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consulta Película</title>
</head>
<body>
    <form action="buscaPelicula.php" method="GET">
        <label for="codigo">Introduce el código de la película:</label>
        <input type="text" name="codigo">
        <input type="submit" value="Consultar Película">
    </form>

    <?php 
    //Se verifica si se ha enviado el parámetro codigo a través del método GET
    if(isset($_GET['codigo'])){
        //Se obtiene el valor de codigo enviado a través del formulario
        $codigo = $_GET['codigo'];
        // URL a la que se enviará la solicitud para obtener los datos de la película
        $url = "http://localhost/EjerciciosDWES/TEMA7/pruebas2/buscaPelicula.php?codigo=".$codigo;
         //Se obtiene el contenido XML de la URL utilizando file_get_contents
        $xml = file_get_contents($url);
        // Convierte el XML obtenido en un objeto SimpleXMLElement
        $pelicula = simplexml_load_string($xml);
        // Verifica si la carga del XML y la conversión a SimpleXMLElement fueron exitosas
        if ($pelicula !== false) {
            // Si se cargaron los datos, muestra la información de la película
            echo "<h2>Datos de la película:</h2>";
            echo "<p><strong>Código:</strong> " . $pelicula->codigo . "</p>";
            echo "<p><strong>Título:</strong> " . $pelicula->titulo . "</p>";
            echo "<p><strong>Tema:</strong> " . $pelicula->tema . "</p>";
            echo "<p><strong>Duración:</strong> " . $pelicula->duracion . " minutos</p>";
            echo "<p><strong>Precio:</strong> $" . $pelicula->precio . "</p>";
            echo "<p><strong>Clasificación moral:</strong> " . $pelicula->cmoral . "</p>";
        } else {
            echo "Error al obtener los datos de la película";
        }
    }
    ?>
</body>
</html>