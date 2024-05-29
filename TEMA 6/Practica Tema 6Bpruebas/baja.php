<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Baja del coche</h2>
    <form action="#" method="post">
        <label for="matricula">Matrícula del coche a eliminar:</label>
        <input type="text" name="matricula"><br><br>
        <input type="submit" value="Eliminar matrícula">
    </form>
        <?php
        
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $nameserver = "localhost";
                $user = "root";
                $password = "";
                $dbname = "concesionariopruebas";

                $conexion = mysqli_connect($nameserver,$user,$password,$dbname) 
                or die("Error en la conexión: " . mysqli_connect_error());

                $matricula = $_POST["matricula"];

                $sql = "DELETE FROM coches WHERE matricula = '$matricula' ";

                if(mysqli_query($conexion, $sql)){
                    echo "Matrícula eliminada con éxito";
                }else{
                    echo "La matrícula no existe". mysqli_error($conexion);
                };

                mysqli_close($conexion);
            }else{
                "Error en la conexión";
            };
        
        
        ?>
</body>
</html>