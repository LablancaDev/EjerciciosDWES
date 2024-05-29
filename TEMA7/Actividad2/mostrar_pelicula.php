<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Película</title>
    <!-- Estilos a la tabla y el form -->
    <style>
         fieldset{
            width: 300px;
        }
        .tabla{
            border: 1.5px solid #CC5366; 
            border-collapse: collapse; 
            margin: 30px;
    
        }
        .propiedades {
            background-color: #CC5366;
            padding: 5px;
        }
        .dato {
            border: 1.5px solid #CC5366; 
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Formulario -->
    <fieldset>
        <form action="" method="get">
            <label for="codigo">Introduce el código de la película</label><br>
            <input type="text" name="codigo">
            <input type="submit" value="Consultar Película">
        </form>
    </fieldset><br>
    <?php
    // Se verifica si se ha enviado código a través del método GET
    if (isset($_GET["codigo"])) {
        $codigo = $_GET["codigo"];//Se recupera el valor de codigo

        // Se define la URL para obtener los datos de todas las películas desde peliculas_xml.php
        $url = "http://localhost/EjerciciosDWES/TEMA7/Actividad2/peliculas_xml.php";

        // Se utiliza simplexml_load_file() para cargar el XML desde la URL
        $xml = simplexml_load_file($url);

        // Verificar si se han obtenido datos del XML
        if ($xml) {
            // Se busca la película correspondiente al código enviado
            $peliculaEncontrada = false;//se inicializa variable $peliculaEncontrada a false
            foreach ($xml->pelicula as $pelicula) {// recorrer cada elemento pelicula en el XML
                if ($pelicula->codigo == $codigo) {// se comprueba que el codigo de la pelicula coincida con el enviado a tavés del método get
                    $peliculaEncontrada = true;//si coincide el codigo se establece $peliculaEncontrada a true, indicando que se encontró la pelicula con el código enviado y se creará la tabla

                    // Se muestran los datos de la película en una tabla HTML
                    echo "<table class= 'tabla'>";
                    echo "<tr>";
                    foreach ($pelicula->children() as $key => $value) {//Se recorre las propiedades de la película elementos hijos del elemento <pelicula> en el XML y crea celdas de encabezado th con los nombres de esas propiedades.
                        echo "<th class='propiedades'>$key</th>";//se imprimen las propiedades
                    }
                    echo "</tr>";//se cierra fila

                    echo "<tr>";//se abre fila
                    foreach ($pelicula->children() as $value) {
                        echo "<td class='dato'>$value</td>";//se imprimen los valores
                    }
                    echo "</tr>";
                    echo "</table>";

                    break; // Salida del bucle una vez que se ha encontrado la película
                }
            }

            if (!$peliculaEncontrada) {//Se muestra mensaje si después de recorrer las peliculas no se encuentra la indicada
                echo "La película no existe";
            }
        } else {
            echo "Error! No se han obtenido datos";
        }
    }
    ?>
</body>
</html>


