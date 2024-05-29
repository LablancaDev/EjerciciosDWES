<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- MOSTRAR DATOS INTRODUCIDOS EN UN FORMULARIO CON 2 TIPOS DE TABLAS DIFERENTES  -->
</head>
<body>
    <form action="" method="post">
        <label for="nombre">nombre</label>
        <input type="text" name="nombre"><br><br>

        <label for="apellidos">apellidos</label>
        <input type="text" name="apellidos"><br><br>

        <label for="pelicula">pelicula</label>
        <input type="text" name="pelicula"><br><br>

        <label for="edad">edad</label>
        <input type="text" name="edad"><br><br>

        <input type="submit" value="Enviar">
    </form>

        <?php
            $nombre = $_POST["nombre"];
            $apellidos = $_POST["apellidos"];
            $pelicula = $_POST["pelicula"];
            $edad = $_POST["edad"];
            
            echo "<table border=1 cellspacing=0>";
            echo "<tr><th>nombre</th><th>apellidos</th><th>pelicula</th><th>edad</th></tr>";
            echo "<tr><td>$nombre</td><td>$apellidos</td><td>$pelicula</td><td>$edad</td></tr>";
            echo "</table>";

            echo "<br>";

            echo "<table border=1 cellspacing=0>";
            echo "<tr><th>nombre</th><td>$nombre</td></tr>";
            echo "<tr><th>apellidos</th><td>$apellidos</td></tr>";
            echo "<tr><th>pelicula</th><td>$pelicula</td></tr>";
            echo "<tr><th>edad</th><td>$edad</td></tr>";
            echo "</table>";
        ?>


</body>
</html>