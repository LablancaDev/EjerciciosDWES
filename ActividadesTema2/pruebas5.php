<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="pruebas5.css">
</head>
<body>
    <h2>Formulario Cines</h2>
    <form action="" method="post">
        <fieldset>
            <div class="formulario">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre"><br><br>

                <label for="DNI">Dni</label>
                <input type="text" name="dni"><br><br>

                <label for="pelicula">Pelicula</label>
                <input type="text" name="pelicula"><br><br>

                <label for="fecha">Fecha</label>
                <input type="date" name="fecha" id=""><br><br>

                <label for="nTarjeta">Nº Tarjeta</label>
                <input type="text" name="nTarjeta"><br><br>
                
                <label for="tipoTarjeta">Tipo Tarjeta</label>
                <input type="radio" name="tipoTarjeta1" id="" value="mastercard">
                <input type="radio" name="tipoTarjeta2" id="" value="visa">
                <input type="radio" name="tipoTarjeta3" id="" value="oro">
                <input type="radio" name="tipoTarjeta4" id="" value="platinum"><br><br>
            </div>            

            <input type="checkbox" name="Desea Recibir info" id="">Desea recibir info

            <input type="submit" value="Enviar">
        </fieldset>
    </form>
<?php
    echo "<table border=1 cellspacing=0>";
    echo "<tr><th>Nombre</th><th>Dni</th></tr>";
    echo "<tr><td>" . $_POST["nombre"] . "</td><td>" . $_POST["dni"] . "</td></tr>";
    echo "</table>";

    echo "<br>";

    echo "<table border=1 cellspacing=0>";
    echo "<tr><th>Película</th><th>Fecha</th><th>Num Tarjeta</th><th>tipoTarjeta</th></tr>";
    echo "<tr><td>" . $_POST["pelicula"] . "</td><td>" . $_POST["fecha"] . "</td><td>" . $_POST["nTarjeta"] . "</td><td>" . $_POST["tipoTarjeta"] . "</td></tr>";
    echo "</table>";



?>
</body>
</html>

