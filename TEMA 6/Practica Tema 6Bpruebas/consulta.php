<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Consulta de coches por matrícula</h2>
    <form action="" method="POST">
    <label for="matricula">Matrícula del coche a consultar: </label>
    <input type="text" name="matricula"><br><br>
    <input type="submit" value="Consultar coche">
    </form>

    <?php
    
        if($_SERVER["REQUEST_METHOD"]==='POST'){
            $servername = "localhost";
            $user = "root";
            $password = "";
            $bdname = "concesionariopruebas";
            
            $conexion = mysqli_connect($servername,$user,$password,$bdname)
            or die("Conexión fallida: " . mysqli_connect_error());

            $matricula = $_POST["matricula"];

            $sql = "SELECT * FROM coches WHERE matricula = '$matricula'";

            $resultado = mysqli_query($conexion, $sql);

            if(mysqli_num_rows($resultado) > 0){
                echo "<h3>Datos del coche</h3>";
                if($fila = mysqli_fetch_assoc($resultado)){
                    echo "Matrícula: " . $fila["matricula"] . "<br>";
                    echo "Marca: " . $fila["marca"] . "<br>";
                    echo "Modelo: " . $fila["modelo"] . "<br>";
                    echo "Motor: " . $fila["motor"] . "<br>";
                    echo "Color: " . $fila["color"] . "<br>";
                    echo "Cilindrada: " . $fila["cilindrada"] . "<br>";
                    echo "Precio: " . $fila["precio"] . "<br>";
                    echo "Extras: " . $fila["extras"] . "<br>";
                }
            }else{
               echo "No se encontraron resultados";
            }
            
              mysqli_free_result($resultado);
              mysqli_close($conexion);
        };
        
    
    ?>
</body>
</html>