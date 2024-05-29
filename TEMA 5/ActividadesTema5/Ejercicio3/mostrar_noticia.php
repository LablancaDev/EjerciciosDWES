<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Noticia</title>
</head>
<body>
    <?php
// Se comprueba que existe una variable llamada titular enviada mediante el método post, el atributo name almacenará la opción seleccionada dentro del select(identifica la variable)
        if (isset($_POST["titular"])) {
            // Se recupera el valor de la variable y se almacena en $titular_seleccionado 
            $titular_seleccionado = $_POST["titular"];
            // Si se cumple la condición se crea una cookie con nombre 'tipoNoticia', su valor $titular_seleccionado y un tiempo 
            setcookie("tipoNoticia", $titular_seleccionado, time() + 120);
            echo "<h2>Mostrando la Noticia: $titular_seleccionado</h2>";
        } 
   
    ?>
</body>
</html>
