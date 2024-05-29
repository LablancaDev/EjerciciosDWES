<!-- Actividad 4. Acceso a los datos en formato CSV. Crear un formulario que permita introducir el origen, 
destino y precio de un vuelo y lo introduzca en un fichero CSV. Mostrar los datos del fichero CSV en una tabla. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <!-- Formulario donde el usuario introduce los datos del vuelo que se enviarán a través del método get a "guardarCSV.php"-->
    <form action="guardarCSV.php" method="post">
        <label for="origen_vuelo">Introduce el origen del vuelo: </label>
        <input type="text" name="origen_vuelo"><br><br>
        <label for="destino_vuelo">Introduce el destino del vuelo: </label>
        <input type="text" name="destino_vuelo"><br><br>
        <label for="precio_vuelo">Introduce el precio del vuelo: </label>
        <input type="text" name="precio_vuelo"><br><br>
        <input type="submit" value="Enviar"><br><br>
    </form>
</body>
</html>