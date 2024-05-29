<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <form action="" method="post">
    <h2>Formulario Cines</h2>
    <label for="nombre">Nombre y apellidos</label>
    <input type="text" name="nombre"><br>
    <label for="dni">Dni</label>
    <input type="text" name="dni"><br>
    <label for="pelicula">Pelicula</label>
    <input type="text" name="pelicula"><br>
    <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" required><br><br>
            
            <label for="entradas">Entradas:</label>
            <input type="number" name="entradas" required><br><br>
            
            <label for="numero_tarjeta">Número de Tarjeta:</label>
            <input type="text" name="numero_tarjeta" required><br><br>
            
            <label>Tipo de Tarjeta:</label><br><br>
            <input type="radio" name="tipo_tarjeta" value="4B">
            <label for="4B">4B</label><br>

            <input type="radio" name="tipo_tarjeta" value="American Express">
            <label for="american_express">American Express</label><br>

            <input type="radio" name="tipo_tarjeta" value="Servired">
            <label for="servired">Servired</label><br>

            <input type="radio" name="tipo_tarjeta" value="Red 6000">
            <label for="red_6000">Red 6000</label><br><br>
            
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" value=""><br><br>
            
            <label for="correo">Correo</label>
            <input type="text" name="correo" value=""><br><br>
            
            <input type="checkbox" name="recibir_info" value="">
            <label for="recibir_info">¿Desea recibir información de las salas semanalmente?</label><br><br>

            <input type="submit" value="Enviar">
        </fieldset>
        </form>
    <?php
        echo "<table border=1; cellspacing=0>";
        echo "<tr><th>Nombre y apellidos</th><th>Dni</th></tr>";
        echo "<tr><td>" . $_POST["nombre"] . "</td><td>" . $_POST["dni"] . "</td></tr>";
        echo "</table>";
    ?>
        
</body>
</html>


