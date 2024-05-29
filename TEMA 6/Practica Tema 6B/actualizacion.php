<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualización de coche</title>
</head>
<body>
<h2>Actualización de Coche</h2> 

<!-- Formulario -->
<form action="#" method="post">
    <label for="matricula">Matrícula del coche a actualizar:</label>
    <input type="text" id="matricula" name="matricula" required><br><br>
    <fieldset>
        <legend>Nuevos datos del coche:</legend>
        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="marca" required><br><br>
        
        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" required><br><br>
        
        <label for="tipo">Tipo:</label>
        <input type="text" id="tipo" name="tipo" required><br><br>
        
        <label for="motor">Motor:</label>
        <input type="text" id="motor" name="motor" required><br><br>
        
        <label for="color">Color:</label>
        <input type="text" id="color" name="color" required><br><br>
        
        <label for="cilindrada">Cilindrada:</label>
        <input type="number" id="cilindrada" name="cilindrada" required><br><br>
        
        <label for="precio">Precio:</label>
        <input type="number" step="0.01" id="precio" name="precio" required><br><br>
        
        <label for="extras">Extras:</label>
        <input type="text" id="extras" name="extras"><br><br>
    </fieldset>
    <input type="submit" value="Actualizar Coche">
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

    // Recuperar los datos del formulario
    $matricula = $_POST['matricula'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $tipo = $_POST['tipo'];
    $motor = $_POST['motor'];
    $color = $_POST['color'];
    $cilindrada = $_POST['cilindrada'];
    $precio = $_POST['precio'];
    $extras = $_POST['extras'];

    // Consulta SQL para actualizar los datos del coche según la matrícula proporcionada
    $sql = "UPDATE COCHES SET marca='$marca', modelo='$modelo', tipo='$tipo', motor='$motor', color='$color', cilindrada=$cilindrada, precio=$precio, extras='$extras' WHERE matricula='$matricula'";

    // Ejecutar la consulta SQL
    if (mysqli_query($conexion, $sql)) {
        echo "<h3>Datos del coche actualizados con éxito</h3>";
    } else {
        echo "Error al actualizar los datos del coche: " . mysqli_error($conexion);
    }

    // Cerrar la conexión con la base de datos para liberar recursos
    mysqli_close($conexion);
}
?>
    <br><br>
    <a href="menu.php">Volver al menú del concesionario</a>
</body>
</html>