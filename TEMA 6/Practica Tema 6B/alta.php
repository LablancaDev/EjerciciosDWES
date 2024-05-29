<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de coche</title>
    <style>
        form{
            width: 400px;
        }
        input{
            margin-left: 150px;
            display:flex;
            align-items:center;    
        }
    </style>
</head>
<body>
<h2>Alta de Coche</h2>
    <!-- Formulario -->
    <form action="alta.php" method="post">
        <fieldset>
            <label for="matricula">Matrícula:</label>
            <input type="text" id="matricula" name="matricula" required><br><br>
            
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
            
            <input type="submit" value="Agregar Coche">
        </fieldset>
    </form>
    <!-- Registro -->
    <?php
// Verifica si se ha enviado el formulario por el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "CONCESIONARIO";

   // Se crea una nueva conexión a la base de datos utilizando el método mysqli_connect
   $conexion = mysqli_connect($servername, $username, $password, $dbname) 
   // Verifica si hay errores de conexión con la base de datos
   or die("Conexión fallida: " . mysqli_connect_error());
  

    // Se recuperan los datos del formulario
    $matricula = $_POST['matricula'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $tipo = $_POST['tipo'];
    $motor = $_POST['motor'];
    $color = $_POST['color'];
    $cilindrada = $_POST['cilindrada'];
    $precio = $_POST['precio'];
    $extras = $_POST['extras'];

    // Se prepara y ejecuta la consulta para insertar los datos del coche en la base de datos
    $sql = "INSERT INTO COCHES (matricula, marca, modelo, tipo, motor, color, cilindrada, precio, extras)
            VALUES ('$matricula', '$marca', '$modelo', '$tipo', '$motor', '$color', $cilindrada, $precio, '$extras')";

     // Ejecuta la consulta SQL y verifica si fue exitosa
     if (mysqli_query($conexion, $sql)) {
        echo "<h3>Coche agregado con éxito</h3>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }

    // Cierra la conexión con la base de datos para liberar recursos
    mysqli_close($conexion);
} else {
    echo "Error en el proceso del Formulario";
}
?>
<br><br>
<a href="menu.php">Volver al menú del concesionario</a>
</body>
</html>