<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Listado de Coches</h2>

<?php
// Conexión a la base de datos utilizando mysqli_connect 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CONCESIONARIO";

$conexion = mysqli_connect($servername, $username, $password, $dbname) or die("Conexión fallida: " . mysqli_connect_error());

// Consulta SQL para obtener todos los coches
$sql = "SELECT * FROM COCHES";
$resultado = mysqli_query($conexion, $sql);

// Se verifica si se han encontrado resultados
if (mysqli_num_rows($resultado) > 0) {
    // Se muestran los datos de los coches en formato tabla HTML
    echo "<table border='1' cellspacing=0>";
    echo "<tr><th>Matrícula</th><th>Marca</th><th>Modelo</th><th>Tipo</th><th>Motor</th><th>Color</th><th>Cilindrada</th><th>Precio</th><th>Extras</th></tr>";
     // Se muestran los datos de los coches, mediante el bucle while se recorren las filas del resultado de la consulta sql, el método mysqli_fetch_assoc() devuelve la fila de resultados como un array asociativo
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $fila['matricula'] . "</td>";
        echo "<td>" . $fila['marca'] . "</td>";
        echo "<td>" . $fila['modelo'] . "</td>";
        echo "<td>" . $fila['tipo'] . "</td>";
        echo "<td>" . $fila['motor'] . "</td>";
        echo "<td>" . $fila['color'] . "</td>";
        echo "<td>" . $fila['cilindrada'] . "</td>";
        echo "<td>" . $fila['precio'] . "</td>";
        echo "<td>" . $fila['extras'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

} else {
    echo "No se encontraron coches en la base de datos";
}

 // Liberar la memoria reservada para almacenar el resultado
mysqli_free_result($resultado);
// Se cierra la conexión con la base de datos
mysqli_close($conexion);
?>
    <br><br>
    <a href="menu.php">Volver al menú del concesionario</a>
</body>
</html>