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
            <legend>Formulario cines</legend>
            <label for="nombre">nombre</label>
            <input type="text" name="nombre"><br><br>
            <label for="apellidos">apellidos</label>
            <input type="text" name="apellidos"><br><br>
            <label for="pelicula">pelicula</label>
            <input type="text" name="pelicula"><br><br>
            <label for="numEntradas">numEntradas</label>
            <input type="text" name="numEntradas"><br><br>

            <input type="submit" value="EnviarDatos">
        </fieldset>
    </form>

    <?php

        $Nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $pelicula = $_POST["pelicula"];
        $numEntradas = $_POST["numEntradas"];
        

        echo "<table border=1 cellspacing=0>";
        echo "<tr><th>Nombre</th><th>Apellidos</th></tr>";
        echo "<tr><td>$Nombre</td><td>$apellidos</td></tr>";
        echo "</table>";

        echo "<table border=1 cellspacing=0>";
        echo "<tr><th>Nombre</th><th>Apellidos</th><th>pelicula</th></tr>";
        echo "<tr><td>$Nombre</td><td>$apellidos</td><td>$pelicula</td></tr>";
        echo "</table>";

        echo "<table border=1 cellspacing=0>";
        echo "<tr><th>Nombre</th><th>Apellidos</th><th>pelicula</th><th>numEntradas</th></tr>";
        echo "<tr><td>$Nombre</td><td>$apellidos</td><td>$pelicula</td><td>$numEntradas</td></tr>";
        echo "</table>";
    ?>
</body>
</html>