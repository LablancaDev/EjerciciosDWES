<!-- Ejemplo: Mostrar los datos de un empleado desde una URL transfiriendo los datos en formato JSON -->
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Consulta Empleado</title>
<style>
    .tabla{
    border: 1px solid black; 
    border-collapse: collapse; 
    margin: 30px;
    }
    .cabecera {
    border: 1px solid black; 
    background-color: red; 
    color: white;
    width: 100px;
    }
    .celda {
    border: 1px solid black; 
    width: 150px;
    text-align: right;
    }
</style>
</head>
<body>

<?php
    // Verifica si se ha enviado un código a través del método GET
    if (isset($_GET['codigo'])) {
        $codigo = $_GET['codigo'];

        // URL para obtener los datos del empleado desde busca.php
        $url = "http://localhost/EjerciciosDWES/TEMA7/TEMARIO2/busca.php?codigo=" . $codigo;

        // Obtiene los datos del empleado en formato JSON desde busca.php
        $json = file_get_contents($url);

        // Decodifica los datos JSON y los almacena en un array
        $array = json_decode($json, true);

        // Verifica si se han obtenido datos del empleado
        if (sizeof($array) > 0) {
            echo "<table class='tabla'>";
            // Recorre el array y muestra los datos del empleado en una tabla HTML
            foreach ($array as $key => $valor) {
                echo "<tr><td class='cabecera'>" . $key . "</td><td class='celda'>" . $valor . "</td></tr>";
            }
            echo "</table>";
        } else {
            // Si no se encontró el empleado, muestra un mensaje
            echo "Empleado no Existe";
        }
    }
    ?>
<form action="" method="GET">
    <label for="direccion">Introducir Código:</label>
    <input type="text" name="codigo">
    <button type="submit">Consultar</button>
</form>
</body>
</html>
