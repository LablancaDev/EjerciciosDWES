<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baja de coche</title>
</head>
<body>
<h2>Baja de Coche</h2>

<!-- Formulario -->
<form action="#" method="post">
    <label for="matricula">Matrícula del coche a eliminar:</label>
    <input type="text" id="matricula" name="matricula" required>
    <input type="submit" value="Eliminar Coche">
</form>

<?php
// Verificar si se ha enviado el formulario por el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Conexión a la base de datos utilizando mysqli_connect 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "CONCESIONARIO";
    // Si la conexión no se puede establecer, la función mysqli_connect_error() devuelve una descripción del error y la función die() finaliza la ejecución del script PHP y muestra el mensaje de error.
    $conexion = mysqli_connect($servername, $username, $password, $dbname) 
    or die("Error en la conexión: " . mysqli_connect_error());

    // Se recuperan los datos del formulario
    $matricula = $_POST['matricula'];

    // Consulta SQL para eliminar el coche según la matrícula proporcionada
    $sql = "DELETE FROM COCHES WHERE matricula='$matricula'";

    // Ejecutar la consulta SQL
    if (mysqli_query($conexion, $sql)) {
        echo "<h3>Coche eliminado con éxito</h3>";
    } else {
        echo "Error al eliminar el coche: " . mysqli_error($conexion);
    }

    // Cerrar la conexión con la base de datos para liberar recursos
    mysqli_close($conexion);
}
?>
    <br><br>
    <a href="menu.php">Volver al menú del concesionario</a>
</body>
</html>
