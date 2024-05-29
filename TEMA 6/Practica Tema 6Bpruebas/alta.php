<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="alta.php" method="post">
        <fieldset>
            <label for="matricula">Matricula:</label>
            <input type="text" name="matricula"><br><br>

            <label for="marca">Marca:</label>
            <input type="text" name="marca"><br><br>

            <label for="modelo">Modelo:</label>
            <input type="text" name="modelo"><br><br>

            <label for="motor">Motor:</label>
            <input type="text" name="motor"><br><br>

            <label for="color">Color:</label>
            <input type="text" name="color"><br><br>

            <label for="cilindrada">Cilindrada:</label>
            <input type="text" name="cilindrada"><br><br>

            <label for="precio">Precio:</label>
            <input type="text" name="precio"><br><br>

            <label for="extras">Extras:</label>
            <input type="text" name="extras"><br><br>

            <input type="submit" value="Agregar Coche">
        </fieldset>
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $servername = "localhost";
            $user = "root";
            $password = "";
            $dbname = "CONCESIONARIOPRUEBAS";

            $conexion = mysqli_connect($servername,$user,$password,$dbname)or die("Conexión fallida: " . mysqli_connect_error());
            
            $matricula = $_POST['matricula'];
            $marca = $_POST['marca'];
            $modelo = $_POST['modelo'];
            $motor = $_POST['motor'];
            $color = $_POST['color'];
            $cilindrada = $_POST['cilindrada'];
            $precio = $_POST['precio'];
            $extras = $_POST['extras'];

            $sql = "INSERT INTO Coches (matricula, marca, modelo, motor, color, cilindrada, precio, extras)
                    VALUES ('$matricula','$marca','$modelo','$motor','$color','$cilindrada','$precio','$extras')";

            if(mysqli_query($conexion,$sql)){
                echo "<h3>Coche agregado con éxito</h3>";
            }else{
                echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
            }

            mysqli_close($conexion);
        }else{
            echo "<h3>Error en el proceso del formulario</h3>";
        }
    
    ?>
</body>
</html>