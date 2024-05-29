<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <label for="nombre">nombre</label>
            <input type="text" name="nombre"><br><br>

            <label for="dni">DNI</label>
            <input type="text" name="dni"><br><br>

            <label for="pelicula">pelicula</label>
            <input type="text" name="pelicula"><br><br>

            <label for="tarjeta">tarjeta</label>
            <input type="text" name="tarjeta"><br><br>

            <input type="submit" value="Enviar datos"><br><br>
        </fieldset>
    </form>
    
    <?php
    
        $nombre = $_POST["nombre"];
        $dni = $_POST["dni"];
        $pelicula = $_POST["pelicula"];
        $tarjeta = $_post["tarjeta"];

        echo "<table border=1 cellspacing=0>";
        echo "<tr><th>nombre</th><th>dni</th></tr>";
        echo "<tr><td>$nombre</td><td>$dni</td></tr>";
        echo "</table>";

        echo "<br>";

        echo "<table border=1 cellspacing=0>";
        echo "<tr><th>nombre</th><th>dni</th></th><th>pelicula</th></th><th>tarjeta</th></tr>";
        echo "<tr><td>$nombre</td><td>$dni</td><td>$pelicula</td><td>$tarjeta</td></tr>";
        echo "</table>";

    
    
    
    ?>
</body>
</html>