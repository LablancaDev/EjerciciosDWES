<!-- Actividad 1. Mostrar los datos de una película desde una URL transfiriendo los datos en 
formato JSON. Los datos de las películas se almacenan en un array y son: -->

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
            border: 1px solid black; 
            border-collapse: collapse; 
            margin: 30px;
        }
        .propiedades {
            border: 1px solid black; 
            background-color: grey;
            width: 100px;
        }
        .celda {
            border: 1px solid black; 
            width: 150px;
            padding-left: 30px;
        }   
    </style>
</head>
<body>
    <!-- Formulario -->
    <fieldset>
        <form action="" method="get">
            <label for="codigo">Introduce el código de la película</label><br><br>
            <input type="text" name="codigo"><br><br>
            <input type="submit" value="Consultar Película">
        </form>
    </fieldset>
    <?php
      // Se verifica si se ha enviado código a través del método GET
        if(isset($_GET["codigo"])){
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
            // Se recorre el array y se muestra los datos de la película en una tabla HTML
            foreach ($array as $key => $valor) {
                echo "<tr><th class='propiedades'>" . $key . "</th><td class='celda'>" . $valor . "</td></tr>";
            }
                echo "</table>";
            } else {
                
                echo "La película no Existe";
            }
            
        }
    ?>
</body>
</html>

<!-- LA DIFERENCIA CON EL EJERCICIO ORIGINAL ES LA FORMA DE MOSTRAR LOS DATOS EN LA TABLA -->