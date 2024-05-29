<?php

// if(isset($_POST["color"])){
//     $colorPagina = $_POST["color"];
//     setcookie("colorCookie", $colorPagina, time() +60);
//     header("Location: mostrar_color.php");
// }
// if(isset($_POST["borrarColor"])){
//     setcookie("colorCookie", "", 0);
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mostrar_color.php" method="post">
        <select name="color" id="color">
            <option value="red">Rojo</option>
            <option value="green">Verde</option>
            <option value="blue">Azul</option>
        </select><br><br>
        <input type="submit" value="Enviar color">
    </form><br>
    
    <form action="#" method="post">
        
        <input type="submit" value="Borrar color" name="borrarColor">
        
    </form><br>
    <a href="mostrar_color.php">ver color seleccionado</a>
</body>
</html>

<!-- EN ESTA PRÁCTICA SE MUESTRA EL COLOR CORRECTAMENTE EN LA PÁGINA 2 COMO DICE EL
ENUNCIADO PERO CUANDO SE VUELVE CON EL ENLACE LA PÁGINA VUELVE A ESTAR EN BLANCO
FALTA INTRODUCIR EL BOTÓN BORRAR..-->