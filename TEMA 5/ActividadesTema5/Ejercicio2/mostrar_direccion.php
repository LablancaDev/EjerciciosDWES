<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
       if (isset($_POST['direccion']) && !empty($_POST['direccion'])) {// se verifica si existe una variable llamada direccion enviada mediante el método POST. Además verifica si esta variable no está vacía y tiene contenido.
        $direccion = $_POST['direccion'];// se recupera el valor de direccion
        if (isset($_POST['recordar']) && $_POST['recordar'] === 'recordar') {// se comprueba si hay una variable llamada recordar enviada mediante el método POST y si su valor es exactamente igual a la cadena 'recordar'
            setcookie('direccion_recordada', $direccion, time() + 120); // si se cumple la condición se crea una cookie con nombre 'direccion_recordada', su valor $direccion y un tiempo de duración de la cookie en el navegador
            echo '<h2>Dirección recordada: ' . $direccion . '</h2>';// se muestra la dirección 
        } else {
            echo '<h2>No se recordó la dirección</h2>';
        }
    } else {
        echo '<h2>No se proporcionó ninguna dirección</h2>';
    } 
    if(isset($_POST["borrarCookie"])){// se verifica si hay una variable llamada borrarCookie enviada mediante el método POST en el botón de borrado de la cookie.
        setcookie("direccion_recordada", " ", time() -2000);// se elimina la cookie con el nombre "direccion_recordada", se establece su valor vacío '' y el tiempo en negativo
        echo 'Dirección Eliminada!!!';
    }

    ?>
    <form action="#" method="post">
    <input type="submit" name="borrarCookie" value="Borrar Cookie">
    </form>

</body>
</html>