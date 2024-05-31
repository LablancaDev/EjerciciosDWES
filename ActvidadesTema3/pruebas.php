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
            <label for="apellidos">apellidos</label>
            <input type="text" name="apellidos"><br><br>
            <label for="dni">dni</label>
            <input type="text" name="dni"><br><br>
            <label for="telefono">telefono</label>
            <input type="text" name=telefono><br><br>

            <input type="submit" value="Enviar info">
        </fieldset>
    </form>

        <!--  2 FORMAS DE CREAR LA TABLA  -->

    <?php
        // FORMA 1 

        echo "<table border=1 cellspacing=0>";
        echo "<tr><th>Nombre</th><th>Apellidos</th></tr>";
        echo "<tr><td>" . $_POST["nombre"] . "</td><td>" . $_POST["apellidos"] . "</td></tr>";
        echo "</table>";

        echo "<br>";

        echo "<table border=1 cellspacing=0>";
        echo "<tr><th>Dni</th><th>Telefono</th></tr>";
        echo "<tr><td>" . $_POST["dni"] . "</td><td>" . $_POST["telefono"] . "</td></tr>";
        echo "</table>";

        echo "<br>";

        // FORMA 2

        echo "<table border=1 cellspacing=0>";
        echo "<tr><th>Nombre</th><td>" . $_POST["nombre"] . "</td></tr>";
        echo "</tr><th>Apellidos</th><td>" . $_POST["apellidos"] . "</td></tr>";
        echo "</table>";
    
    ?>
</body>
</html>