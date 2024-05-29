<!-- Crear y Borrar una Cookie (También se puede borrar dando el tiempo de existencia en memoria del navegador que se desee o con un botón y un evento como en este ejemplo)-->
<?php
if(isset($_POST["nombre"])){
    $nombre = $_POST["nombre"];
    setcookie("nombre_visitante","$nombre", time() + 60);
}
if(isset($_COOKIE["nombre_visitante"])){
    $nombre_visitante = $_COOKIE["nombre_visitante"];
    echo "<h2>Ahora el nombre_visitante es " . $nombre_visitante . "</h2>";
}
if (isset($_POST["borrarCookie"])) {
    setcookie('nombre_visitante', '', time() - 3600); // Borra la cookie estableciendo su tiempo en el pasado
    echo 'Cookie borrada!!!<br>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="miNombre"><br><br>
        <input type="submit" value="Enviar info">
        <input type="submit" name="borrarCookie" value="borrarCookie" >
    </form>
</body>
</html>