<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar color seleccionado</title>
</head>
<body>
    <?php
    // Si existe la cookie con el nombre color_fondo se cumplirá la condición del if
    if(isset($_COOKIE['color_fondo'])){
        // Se recupera el valor de la cookie
        $cookie_color_fondo = $_COOKIE['color_fondo'];
        echo "<h3>El color de fondo seleccionado es: </h3>" . $cookie_color_fondo . "<br><br>";
    }else{
        "No se seleccionó ningún color";
    }
    ?>
    <!-- Enlace al formulario -->
    <a href="formulario.php">Volver a la página inicial</a>
</body>
</html>
