<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Coches</title>
</head>
<body>
<h2>Consulta de Coches</h2>

<!-- Formulario -->
<form action="#" method="post">
    <label for="matricula_consulta">Matrícula del coche a consultar:</label>
    <input type="text" id="matricula_consulta" name="matricula_consulta" required><br><br>
    <input type="submit" value="Consultar Coche">
</form>

<?php
// Se verifica si se ha enviado el formulario por el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Conexión a la base de datos utilizando mysqli_connect 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "CONCESIONARIO";

    $conexion = mysqli_connect($servername, $username, $password, $dbname) or die("Conexión fallida: " . mysqli_connect_error());

    // Se recupera la matrícula del coche a consultar
    $matricula_consulta = $_POST['matricula_consulta'];

    // Consulta SQL para obtener la información del coche según la matrícula proporcionada
    $sql = "SELECT * FROM COCHES WHERE matricula='$matricula_consulta'";

    // Ejecutar la consulta SQL
    $resultado = mysqli_query($conexion, $sql);

    // Verificar si se encontraron resultados
    if (mysqli_num_rows($resultado) > 0) {//devuelve el número de filas enla consulta si se cumple la condición
        // Se muestran los datos del coche, mediante el bucle while se recorren las filas del resultado de la consulta,devuelve la fila de resultados como un array asociativo
        echo "<h3>Datos del coche:</h3>";             
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "Matrícula: " . $fila['matricula'] . "<br>";
            echo "Marca: " . $fila['marca'] . "<br>";
            echo "Modelo: " . $fila['modelo'] . "<br>";
            echo "Tipo: " . $fila['tipo'] . "<br>";
            echo "Motor: " . $fila['motor'] . "<br>";
            echo "Color: " . $fila['color'] . "<br>";
            echo "Cilindrada: " . $fila['cilindrada'] . "<br>";
            echo "Precio: " . $fila['precio'] . "<br>";
            echo "Extras: " . $fila['extras'] . "<br>";
        }
    } else {
        echo "No se encontraron resultados para la matrícula: " . $matricula_consulta;
    }

    // Liberar la memoria reservada para almacenar el resultado
    mysqli_free_result($resultado);
    // Cerrar la conexión con la base de datos
    mysqli_close($conexion);
}
?>
<br><br>
<a href="menu.php">Volver al menú del concesionario</a>
</body>
</html>