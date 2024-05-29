<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Listado de coches</h2>

    <?php
    
        $servername = "localhost";
        $user = "root";
        $password = "";
        $dbname = "concesionariopruebas";

        $conexion = mysqli_connect($servername,$user,$password,$dbname)
        or die("Conexión fallida: " . mysqli_connect_error());

        $sql = "SELECT * FROM coches";
        $resultado = mysqli_query($conexion,$sql);

        if(mysqli_num_rows($resultado) > 0){
            echo "<table border=1 cellspacing=0>";
            echo "<tr><th>Matrícula</th><th>Marca</th><th>Modelo</th><th>Tipo</th><th>Motor</th><th>Color</th><th>Cilindrada</th><th>Precio</th><th>Extras</th></tr>";
            while($fila = mysqli_fetch_assoc($resultado)){
                echo "<tr>";
                    echo "<td>" . $fila["matricula"] . "</td>";
                    echo "<td>" . $fila["marca"] . "</td>";
                    echo "<td>" . $fila["modelo"] . "</td>";
                    echo "<td>" . $fila["motor"] . "</td>";
                    echo "<td>" . $fila["color"] . "</td>";
                    echo "<td>" . $fila["cilindrada"] . "</td>";
                    echo "<td>" . $fila["precio"] . "</td>";
                    echo "<td>" . $fila["extras"] . "</td>";
                echo "</tr>";
            };
            echo "</table>";
        }else{
            "No se encontraron resultados";
        }
        mysqli_free_result($resultado);
        mysqli_close($conexion);

      
    
    
    ?>
</body>
</html>