<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Película</title>
    <!-- Estilos formulario y tabla -->
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
    <fieldset> <!-- Formulario -->
        <form action="" method="get">
            <label for="codigo">Introduce el código de la película</label><br><br>
            <input type="text" name="codigo"><br><br>
            <input type="submit" value="Consultar Película">
        </form>
    </fieldset>
    <?php
        if(isset($_GET["codigo"])){ // Se verifica si se ha enviado código a través del método GET
            $codigo = $_GET["codigo"];
             // URL para obtener los datos de la película desde buscaPelicula.php, se envía el código de la película a través del método get
            $url = "http://localhost/EjerciciosDWES/TEMA7/Actividad1/buscaPelicula.php?codigo=" . $codigo;

            // Se obtienen los datos de la película en formato JSON desde buscaPelicula.php
            $json = file_get_contents($url);

            // Decodifica los datos JSON y los almacena en un array
            $array = json_decode($json, true);

           // Se verifica si se han obtenido datos de la película (el array no está vacío)
           if (sizeof($array) > 0) {
            echo "<table class='tabla'>";
            echo "<tr>";
            // Se recorre dos array uno para recorrer las propiedades y otro para los datos, se muestra los datos de la película en una tabla HTML
            foreach ($array as $key => $value) {
                echo "<th class='propiedades'>$key</th>";//Se muestra en una fila las propiedades
            }
            echo "</tr>";

            echo "<tr>";
            foreach ($array as $value) {
                echo "<td class='dato'>$value</td>";//Se muestra en otra fila los valores correspondientes a cada propiedad
            }
            echo "</tr>";

            echo "</table>";
        } else {
            echo "La película no Existe";
        }
        }
    ?>
</body>
</html>