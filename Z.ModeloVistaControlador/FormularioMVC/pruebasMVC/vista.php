<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="controlador.php" method="post">
        <fieldset>
            <label for="id">id</label>
            <input type="text" name="id"><br><br>

            <label for="nombre">nombre</label>
            <input type="text" name="nombre"><br><br>

            <label for="email">email</label>
            <input type="text" name="email"><br><br>

            <label for="password">password</label>
            <input type="password" name="password"><br><br>

            <input type="submit" value="Enviar Datos"><br><br>
        </fieldset>
    </form>
</body>
</html>