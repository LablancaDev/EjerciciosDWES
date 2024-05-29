<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Actualización de Coche</h2>

    <form action="" method="post">
        <label for="matricula">Matricula del coche a actualizar: </label>
        <input type="text" name="matricula"><br><br>
        <fieldset>
            <legend>Nuevos datos del coche</legend>
        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="marca" required><br><br>
        
        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" required><br><br>
        
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
        <input type="submit" value="Actualizar coche">
        </fieldset>
    </form>

    <?php
    
        if($_SERVER["REQUEST_METHOD"]==="POST"){
            $servername = "localhost";
            $user = "root";
            $password = "";
            $dbname = "concesionariopruebas";

            $conexion = mysqli_connect($servername,$user,$password,$dbname)or die("Conexión fallida: " . mysqli_connect_error());

            $matricula = $_POST["matricula"];
            $marca = $_POST["marca"];
            $modelo = $_POST["modelo"];
            $motor = $_POST["motor"];
            $color = $_POST["color"];
            $cilindrada = $_POST["cilindrada"];
            $precio = $_POST["precio"];
            $extras = $_POST["extras"];

            $sql = "UPDATE COCHES SET marca='$marca', modelo='$modelo', motor='$motor', color='$color', cilindrada=$cilindrada, precio=$precio, extras='$extras' WHERE matricula='$matricula'";

            if(mysqli_query($conexion,$sql)){
               echo "Actualización correcta del coche";
            }else{
                echo "Error en la actualización del coche";
            }
            
            mysqli_close($conexion);
            
        }
    
    
    ?>
</body>
</html>