<!-- Ejercicio 1. Crear una cookie que almacene el nombre del visitante en el sitio y cada vez que entremos al sitio nos de la 
bienvenida imprimiendo el nombre. Para introducir el nombre, crear un formulario con un control de tipo text. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Comprobar si se ha enviado el formulario con el método POST y el campo nombre 
        if(isset($_POST["nombre"])){
            $nombre = $_POST["nombre"];//se recupera el valor del campo nombre
            setcookie("nombre_visitante",$nombre,time()+60); //se establece la cookie nombre_visitante, el valor del campo del formulario y el tiempo que permanece almacenada en el navegador
        }
        // Comprobar si el nombre de la cookie es 'nombre_visitante' y existe o se ha borrado ya
        if (isset($_COOKIE['nombre_visitante'])) {
            $nombre_visitante = $_COOKIE['nombre_visitante'];// si la cookie existe se recupera su valor y se asigna a la variable $nombre_visitante
            echo "<h1>Bienvenido, $nombre_visitante</h1>";// se imprime un texto y el valor de la cookie
        }
        
    ?>
    <form action="#" method="post">
        <fieldset>
            <label for="nombre">Introduce tu nombre</label>
            <input type="text" name="nombre" id="nombre"><br><br>
            <input type="submit" value="Acceder">
        </fieldset>
    </form>
</body>
</html>