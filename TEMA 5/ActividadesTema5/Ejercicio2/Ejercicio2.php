<!-- Ejercicio 2. Para borrar una cookie se debe llamar a la función setcookie con una fecha anterior a la actual. Crear una web que nos permita 
introducir utilizando un control de tipo text una dirección web y mediante un checkbox indicaremos que queremos que recuerde la dirección o que 
no la recuerde. Al pulsar Enviar accederemos a otra página que nos mostrará la dirección de correo si se marcó la opción recordar. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Formulario de para introducir datos que se enviarán por el método post a la dirección mostrar_direccion.php al pulsar el botón de tipo submit -->
<form action="mostrar_direccion.php" method="post">
        <label for="direccion">Dirección web:</label>
        <input type="text" id="direccion" name="direccion"><br><br>
        <input type="checkbox" id="recordar" name="recordar" value="recordar">
        <label for="recordar">Recordar dirección</label><br><br>
        <input type="submit" value="Enviar">
    </form>
 
</body>
</html>