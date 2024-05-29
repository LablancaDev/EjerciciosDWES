 <!-- Ejercicio 5. Crear una Cookie que almacene el color seleccionado de un 
    desplegable. Al pulsar en el botón Enviar lo aplique al fondo de la página. 
    Además, la página dispondrá de un enlace a otra página en la que mostrará el 
    color de fondo seleccionado y un enlace de volver a la página inicial. Por 
    último, la página inicial dispone de un botón que permite eliminar la cookie y
    por tanto el color de fondo. -->
<?php
    // si existe un formulario enviado por el método post y una variable llamada color se cumple la condición
    if (isset($_POST['color'])) {
        $color_fondo = $_POST['color']; //se guarda en color_fondo el valor de la variable color 
        setcookie('color_fondo', $color_fondo, time() + 120);//se crea cookie llamada color_fondo con su valor y duración
    }
    // Se elimina la cookie y por tanto el color de fondo
    if (isset($_POST['borrar_color'])) { //comprobación de que existe la var borrar_color en el método post
        setcookie('color_fondo', '', 0); //se elimina cookie, seleccionado su nombre, el valor vacío y tiempo en 0.
    }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario y Selección de color</title>
</head>
<!-- formulario con el método post para recoger los datos del usuario mediante un select con opciones que almacenan el valor de 3 colores  -->
<body style="background-color: <?php echo $color_fondo; ?>"><!-- se establece el color al body con background-color y la variable que almacena el color  -->
    <h2>Seleccione un color de fondo</h2>
    <form action="formulario.php" method="post">
        <label for="color">Color:</label>
        <select name="color" id="color">
            <option value="red">Rojo</option>
            <option value="blue">Azul</option>
            <option value="green">Verde</option>
        </select>
        <input type="submit" value="Enviar"><!-- botón submit para enviar el formulario con los datos -->
    </form>
    <br>
    <!-- Enlace para mostrar el color -->
    <a href="mostrar_color.php">Mostrar el color</a>
    <br><br>
    <!-- form que incluye botón de borrado -->
    <form action="#" method="post">
        <input type="submit" value="Eliminar color de fondo" name="borrar_color"><!-- borrar cookie -->
    </form>
</body>
</html>

